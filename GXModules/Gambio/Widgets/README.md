# Widgets


---
The Widgets in _StyleEdit_ 4 are a really powerful tool, and they allow the shop owners to easily build their own shops
without much knowledge in programming and effort.

Here you will find the information about the Widgets, as well as how they work.

**Attention:**
<br>
There are some _requirements_ that are needed in order to create a new widget, so it is shown automatically inside
_StyleEdit4_.


### Folder structure

 ```
 - MyWidget
 |- Classes
 |--- MyWidget.php
 |- StyleEdit
 |--- Overloads
 |----- WidgetRegistrar
 |------- MyWidgetRegistrar.php
 |- TextPhrases
 |--- english
 |------ myWidget.lang.inc.php
 |---- german
 |------- myWidget.lang.inc.php
 |- myWidget.svg
 |- widget.json
 ```

_*** That is the minimum structure the widgets need to work, below we will break through each folder/file and explain
what each part does._

---


#### Classes


The _Classes_ folder contains your widget class, which is responsible for rendering your widget HTML content.
It **must extend** the `Gambio\StyleEdit\Core\Widgets\Abstractions\AbstractWidget` class.

```php
<?php

use Gambio\StyleEdit\Core\Language\Entities\Language;
use Gambio\StyleEdit\Core\Widgets\Abstractions\AbstractWidget;

/**
 * Class MyWidget
 */
class MyWidget extends AbstractWidget
{
    /**
     * Produces the widget HTML output
     * 
     * @param Language|null $currentLanguage
     * @return string
     */
    public function htmlContent(?Language $currentLanguage): string
    {
        return <<<HTML
            <div id="{$this->static_id}">
                <p>MyWidget Static text</p>
            </div>
        HTML;
    }


    /**
     * Specify data which should be serialized to JSON
     * @link  https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $result = $this->jsonObject;
        $result->type = 'my-widget';
        $result->id = $this->static_id;
        $result->fieldsets = $this->fieldsets;

        return $result;
    }

}
```
#### Information:
* In the `htmlContent()` method you can pass the `Gambio\StyleEdit\Core\Language\Entities\Language` class as a parameter, in order to get
a translatable value.
* `protected` properties can be added to the class in order to easily get specific values from the `widget.json`. Note that the property name **needs** to match the `id` field from your `widget.json`.
  * If you have defined an `id` as _kebab case_, the `id` will be converted to _camel case_:
    * For example, if you have an `"id": "my-widget-field-id`, when defining a property in the widget class, it should be defined as `protected $myWidgetFieldId;` 

Example:
```php
<?php

use Gambio\StyleEdit\Core\Components\TextBox\Entities\TextBox;
use Gambio\StyleEdit\Core\Language\Entities\Language;
use Gambio\StyleEdit\Core\Widgets\Abstractions\AbstractWidget;

class MyWidget extends AbstractWidget
{
    
    /**
     * This variable is an OptionInterface class.
     * The name of the property needs to match the id of the option added to your 'widget.json' file. 
     * 
     * @var TextBox 
     */
    protected TextBox $myWidgetText;
    
    /**
     * Produces the widget HTML output
     *
     * @param Language|null $currentLanguage
     * @return string
     */
    public function htmlContent(?Language $currentLanguage): string
    {
        $myTitle = $this->myWidgetText->value($currentLanguage);

        return <<<HTML
            <div id="{$this->static_id}">
                <p>{$myTitle}</p>
            </div>
        HTML;
    }
    
    // ... the rest of the class code come here
}
```

---


#### StyleEdit -> Overloads ->WidgetRegistrar


The _Registrar_ class is responsible for registering your `widget.json` file to the widgets list.

```php
<?php

/**
 * Class MyWidgetRegistrar
 */
class MyWidgetRegistrar extends MyWidgetRegistrar_parent
{
    public function proceed(): void
    {
        parent::proceed();

        $this->addWidget(dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . 'widget.json');
    }
}
```

---


#### TextPhrases -> languages


The _TextPhrases_ folder has all your translations that are used for the widget somehow. If you have more than one
language in your shop, you would need to create one folder for each installed language.
It is an `array` with `key => value` of the translations.

We recommend using some patterns of the indexes, so the translations become easier to understand by other developer/shop
owner. For example, let's say we want to create a translation for one `TextboxOption`'s
label: `"options.text.label" => "Your input text label"`

```php
$t_language_text_section_content_array = [
    'title'                 => 'MyWiget',
    'description'           => 'With this widget you can easily add a special text to your shop.',
    'options.general.title' => 'General',

    'options.text.label'       => 'Your input text label',
    'options.text.placeholder' => 'Your input text placeholder',

    'options.id.label'       => 'ID of your widget',
    'options.id.placeholder' => 'Insert your "id" HTML attribute',

    'options.css.label'       => 'CSS class of your widget',
    'options.css.placeholder' => 'Insert your "class" HTML attribute',
];
```

---


#### myWidget.svg


The svg file is the icon of your widget, that will be displayed in the left panel of the _StyleEdit4_'s widgets. The
path/location of the `svg` file can vary, depends on what path we have defined in the `widget.json` file.


#### widget.json


The JSON file contains all the information/structure needed for using the widget inside _StyleEdit4_.

```json
{
    "id": "myWidget",
    "title": "myWidget.title",
    "icon": {
        "name": "Image",
        "file": "myWidget.svg"
    },
    "author": {
        "name": "Gambio GmbH",
        "email": "info@gambio.de",
        "url": "https://www.gambio.de"
    },
    "helpUrl": "https://www.gambio.de/help",
    "description": "myWidget.description",
    "cache": 0,
    "version": "1.0.0",
    "displayConfig": "sidebar",
    "fieldsets": [
        {
            "title": "headlineWidget.options.general.title",
            "options": [
                {
                    "id": "my-widget-text",
                    "label": "myWidget.options.text.label",
                    "translatable": true,
                    "type": "textbox",
                    "attributes": {
                        "placeholder": "myWidget.options.text.placeholder"
                    },
                    "default": {
                        "en": "Headline EN",
                        "de": "Headline DE"
                    },
                    "from": "contentZoneWidget"
                },
                {
                    "id": "id",
                    "label": "myWidget.options.id.label",
                    "type": "textbox",
                    "placeholder": "myWidget.options.id.placeholder",
                    "default": ""
                },
                {
                    "id": "css",
                    "label": "myWidget.options.css.label",
                    "type": "textbox",
                    "placeholder": "myWidget.options.css.placeholder",
                    "default": ""
                }
            ]
        }
    ]
}
```

* `id: string` - The unique identifier of the Widget.
* `title: string` - Text which will be displayed as your Widget name.
* `icon: object` - Object that contains `name` and `file`
    * `name: string` - Name of the image
    * `file: string` - Path of where your widget icon will be stored.
* `author: object` - Object that contains `name`, `email` and `url`
    * `name: string` - Name of the author of the widget
    * `email: string` - Contact email from the widget creator
    * `url: string` - Website of the author's company
* `helpUrl: string` - An URL of..... ??
* `description: string` - A short description of the widget
* `cache: int` - Whether the widget is cached or not. `0` for not caching and `1` for caching.
* `version: string` - Version number of the widget.
* `displayConfig: string` - Whether the widget configurations will be displayed in a modal or sidebar. `sidebar` for
  displaying in the _StyleEdit4_ sidebar or `modal` for opening in a modal.
* `fieldsets: array` - An array of `Fieldsets`. See the `Fieldsets` documentation for more information.

---


### Translations


The translations must follow a simple pattern, just so the correct translation is loaded for your widget. It should
start with the name of your translation file.
<br>
Let's say we named our translation file as `TextPhrases\english\myWidget.lang.inc.php`, so our translation in
the `widget.json` file should start with the `myWidget`.
<br>

For example, the description property in our `widget.json` file would be:
<br>
`"description": "myWidget.description"`

