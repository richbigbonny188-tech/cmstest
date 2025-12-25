# Repeater Option

The repeater option allows you to create Tabs, Accordions, Image gallery (Carousel), or any other widget that needs more than one group of the same options, as the Tabs widget for example, which needs a `TextboxOption` and a `TextEditorOption`.

It can be used as any other option to create new widgets, as long as it follows the requirements of each option.

---

The repeater option consists of the following properties:
- `id: string`: Unique ID of the repeater option.
- `type: string`: **Must** be `repeater`, this field defines the class that will be instantiated.
- `label: string`: Label that would be displayed in SE4.
- `attributes: object`: The `attributes` allows the following properties.
  - `min: int`: defines the minimum number of components that would be displayed. If this property is not defined, the `1` will be the default.
  - `max: int`: defines the maximum number of components that would be displayed.
  - `itemLabel: string`: Label that would be displayed in SE4, on the Modal header.
  - `addMoreButtonLabel: string`: defines the label of the _Add more_ button for adding more items, which is displayed in SE4.
  - `canSetDefaultActiveIndex: bool`: defines whether the `defaultActiveIndex` can be set or not. If the property does not exist, `false` is the default value.
  - `defaultActiveIndex: int`: defines the index of the item that will be active by default
- `fields: array`: Array of `Option`. The option here could be any option implemented in SE4, for example: `RadioOption`, `ColorPickerOption`, and so on. Note that the options need to follow its own JSON structure.
- `default: array`: Array of `Option`. Default values of each item. Note that the options need to follow its own JSON structure.
- `value: array`: Array of `Option` which defines the values of each item. Note that the options need to follow its own JSON structure.

---
**ATTENTION!!**

The field `repeaterField` property needs to be appended to each option JSON (inside the `default` or `value` option JSON). It links the `fields[].id` with the `value`.

Note in the example of the JSON structure below we have, in the `default` object -> for each defined option, a `repeaterField` property with the value of the related `fields -> fields[0].id`, so the class knows which option belongs to which field.

---

## Methods

Here are the available specific methods for the `RepeaterOption`:
- `+fieldsCollection()`: Returns an `OptionCollection` with the given fields.

---

### Repeater JSON structure example:
```json
{
  "id": "repeater",
  "type": "repeater",
  "label": "Tabs",
  "attributes": {
    "min": 1,
    "max": 4,
    "itemLabel": "Tab",
    "addMoreButtonLabel": "Add Tab",
    "caSetDefaultActiveIndex": true,
    "defaultActiveIndex": 0
  },
  "fields": [
    {
      "id": "title",
      "type": "textbox",
      "label": "Title",
      "translatable": true,
      "default": {
        "en": "",
        "de": ""
      }
    },
    {
      "id": "content",
      "type": "longtextbox",
      "label": "tabsWidget.options.text.label",
      "translatable": true,
      "attributes": {
        "placeholder": "tabsWidget.options.text.placeholder"
      },
      "default": {
        "en": {
          "value": ""
        },
        "de": {
          "value": ""
        }
      }
    }
  ],
  "default": [
    [
      {
        "id": "my-title-id",
        "type": "textbox",
        "label": "Title",
        "translatable": true,
        "repeaterField": "title",
        "default": {
          "en": "",
          "de": ""
        }
      },
      {
        "id": "my-title-content",
        "type": "longtextbox",
        "label": "tabsWidget.options.text.label",
        "translatable": true,
        "repeaterField": "content",
        "attributes": {
          "placeholder": "tabsWidget.options.text.placeholder"
        },
        "default": {
          "en": "",
          "de": ""
        }
      }
    ]
  ]
}
```