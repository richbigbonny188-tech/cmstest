<template>
  <custom-modal @close-modal="handleClose">
    <template v-slot:header>
      {{ editingImage ? translations.edit_image : translations.edit_image_collection }}
    </template>

    <template v-slot:body>
      <attach-image-edit-collection-name
        @update-valid-state="updateCollectionValidation"
        v-if="!editingImage"
        :name="collectionName"
        @value-changed="updateValue"
      />

      <attach-image-edit-image
        :active-language="activeLanguage"
        :translations="translations"
        :languages="languages"
        :image="image"
        v-if="editingImage"
      />
    </template>

    <template v-slot:footer>
      <button type="button" class="btn" @click="handleClose">
        {{ translations.cancel }}
      </button>
      <button type="button" class="btn btn-primary" @click="handleSave" :disabled="!isValidComputed">
        {{ translations.save }}
      </button>
    </template>
  </custom-modal>
</template>

<script lang="ts">
import {computed, PropType, ref} from "vue";
import AttachImageEditCollectionName from "./AttachImageEditCollectionName.vue";
import AttachImageEditImage from "./AttachImageEditImage.vue";
import { AttachImageCollectionEvents, AttachImageModal } from "../../../../scripts/downloads/event";
import CustomModal from "../../../Shared/Modal.vue";
import { Language, PageTranslations, Image, ImageCollection } from "../../../../scripts/downloads/types";

export default {
  name: "AttachImageModal",

  components: { AttachImageEditImage, AttachImageEditCollectionName, CustomModal },

  emits: [
    AttachImageModal.Close,
    AttachImageCollectionEvents.Cancel,
    AttachImageCollectionEvents.SaveCollectionName,
    AttachImageCollectionEvents.SaveCollectionImages,
  ],

  props: {
    translations: {
      required: true,
      type: Object as PropType<PageTranslations>,
    },
    languages: {
      required: true,
      type: Array as PropType<Language[]>,
    },
    activeLanguage: {
      required: true,
      type: String,
    },
    editingImage: {
      required: true,
      type: Boolean,
    },
    image: {
      required: true,
      type: Object as PropType<Image>,
    },
    collection: {
      required: true,
      type: Object as PropType<ImageCollection>,
    },
  },

  setup(props: any, { emit }: any) {
    const collectionName = computed({
      get: () => props.collection.name ?? false,
      set: (value) => (name.value = value),
    });

    const startedEditing = ref(false);
    const name = ref("");
    const isImageValid = ref(false);
    const isCollectionValid = ref(false);

    const editing = computed<boolean>(() => {
      return props.editingImage;
    });

    function updateCollectionValidation(isValid: boolean): void {
      startedEditing.value = true;
      isCollectionValid.value = isValid;
    }

    function updateImageValidation(isValid: boolean): void {
      startedEditing.value = true;
      isImageValid.value = isValid;
    }

    const isValidComputed = computed<boolean>(() => {
      if (!editing.value) {
        return isCollectionValid.value;
      }

      return true;
    });

    const handleSave = (): void => {
      if (props.editingImage) {
        emit(AttachImageCollectionEvents.SaveCollectionImages, [props.image], props.collection.id);
      } else {
        const collection: ImageCollection = {
          id: props.collection.id,
          name: name.value,
          images: [],
        };
        emit(AttachImageCollectionEvents.SaveCollectionName, collection);
      }

      emit(AttachImageModal.Close);
    };

    function updateValue(value: string): void {
      if (!startedEditing.value) {
        startedEditing.value = true;
      }

      name.value = value;
    }

    const handleClose = (): void => {
      emit(AttachImageCollectionEvents.Cancel);
    };

    return {
      collectionName,
      handleSave,
      handleClose,
      updateValue,
      isValidComputed,
      updateImageValidation,
      isImageValid,
      updateCollectionValidation,
      isCollectionValid,
      AttachImageModal,
    };
  },
};
</script>

<style lang="scss" scoped>
#attachImageModal {
  background: rgba(#000, 0.5);
}
</style>
