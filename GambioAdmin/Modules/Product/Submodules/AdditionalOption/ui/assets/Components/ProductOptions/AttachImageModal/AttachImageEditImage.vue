<template>
  <ul class="nav nav-tabs mb-3" id="attachImageTab" role="tablist">
    <li v-for="language in languages" :key="language" class="nav-item" role="presentation">
      <button
        :id="`${language.code}-tab`"
        :class="{ active: currentTabLanguage === language.code }"
        :data-bs-target="`#${language.code}`"
        data-bs-toggle="tab"
        :aria-controls="language.code"
        @click="changeLanguageTab(language.code)"
        class="nav-link"
        type="button"
        role="tab"
        v-html="language.icon"
      ></button>
    </li>
  </ul>

  <div class="tab-content row" id="attachImageContent">
    <div class="col-4 d-flex align-items-center justify-content-center">
      <img class="image" :src="image.url" :alt="altTitle.text" />
    </div>
    <div
      v-for="language in languages"
      :key="language.code"
      :class="currentTabLanguage === language.code ? 'show active' : ''"
      class="tab-pane fade col-8"
      :id="language.code"
      role="tabpanel"
      :aria-labelledby="`${language.code}-tab`"
    >
      <div class="mb-3">
        <label :for="`${language.code}-labelInput`" class="form-label">
          {{ translations.value_modal_label }}
        </label>
        <input
          type="text"
          class="form-control"
          :id="`${language.code}-labelInput`"
          v-model="title.text"
        />
        <div class="form-text" v-text="translations.value_modal_label_description" />
      </div>
      <div class="mb-3">
        <label :for="`${language.code}-description`" class="form-label">
          {{ translations.value_modal_description }}
        </label>
        <input
          type="text"
          class="form-control"
          :id="`${language.code}-description`"
          v-model="altTitle.text"
        />
        <div class="form-text" v-text="translations.value_modal_description_description" />
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import {computed, onMounted, PropType, ref} from "vue";
import { Image, ImageTitle, Language, PageTranslations } from "../../../scripts/productOptions/types";

export default {
  name: "AttachImageEditImage",

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
    image: {
      required: true,
      type: Object as PropType<Image>,
    },
  },

  setup(props: any) {
    const currentTabLanguage = ref<string>(props.activeLanguage);
    const changeLanguageTab = (code: string) => {
      currentTabLanguage.value = code;
      setTimeout(labelFocus);
    };

    const title = computed<ImageTitle>(() => {
      return props.image.titles.find((item: ImageTitle) => item.languageCode === currentTabLanguage.value) ?? null;
    });

    const altTitle = computed<ImageTitle>(() => {
      return props.image.altTitles.find((item: ImageTitle) => item.languageCode === currentTabLanguage.value) ?? null;
    });

    function labelFocus(): void {
      const labelInput = document.getElementById(`${currentTabLanguage.value}-labelInput`);

      if (labelInput) {
        labelInput.focus();
      }
    }

    onMounted(() => {
      labelFocus();
    });

    return { title, altTitle, currentTabLanguage, changeLanguageTab };
  },
};
</script>

<style lang="scss" scoped>
#attachImageContent {
  img {
    max-width: 140px;
  }
}
</style>
