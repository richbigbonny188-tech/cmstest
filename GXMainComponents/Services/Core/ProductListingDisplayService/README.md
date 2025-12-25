### ProductListingDisplayService

An adapter service that is supposed to work as a mediator between the frontend and backend
for `Gambio\Shop\Modules\ProductListing`.

---

##### `ProductListingDisplayServiceInterface`

An interface for `ProductListingDisplayService`.

---

##### `ProductListingDisplayService`

A service that delegates listing query & legacy mapping for frontend and communicate between different services to be
used in the shop legacy layer and `ThemeContentView`specifically.

---

##### `ProductListingDisplayServiceFactory`

A factory class responsible for assigning essential parameters for `ProductListingDisplayService` to be created &
perform correctly.

**Required Shop Parameters:**

- `int $languageId`: queried from `$_SESSION['languages_id']`
- `?int $customerId`: queried from `$_SESSION['customer_id']` or `NULL` as default value
- `string $currencyCode`: queried from `$_SESSION['currency']`

---

##### Usage

Each method requires parameters that are essential for it to operate which are different in each method.

**But,** <u>all methods require</u> the parameter `array $original` which is the originally queried dataset in a child
of `ThemeContentView`.

Each `ThemeContentView` needs to provide the original/legacy dataset queried on runtime so it would be matched and
verified against the newly product listing queried by the new module.

<u>**IF**</u> both array product collections didn't match, then the original/legacy collection will be returned and the
mismatch would be logged.

*Example Usage*

```php
$service = StaticGXCoreLoader::getService('ProductListingDisplayService');
```

---

##### API

`ProductListingDisplayServiceInterface` exposes a series of product listings for frontend
display `GXMainComponents/View/ThemeContentViews/listing/...`

| Method name               | Relative ThemeContentView          | Required parameters     |
|---------------------------|------------------------------------|-------------------------|
| `getAlsoPurchased`        | `\AlsoPurchasedThemeContentView`   | int $productId          |
| `getLastViewed`           | `\LastViewedBoxThemeContentView`   | int $productId          |
| `getNewProducts`          | `\NewProductsMainThemeContentView` |                         |
| `getSpecialsBox`          | `\SpecialsBoxThemeContentView`     |                         |
| `getSpecials`             | `\SpecialsMainThemeContentView`    |                         |
| `getStartpageSpecials`    | `\SpecialsPageThemeContentView`    |                         |
| `getTopProducts`          | `\TopProductsMainThemeContentView` |                         |
| `getUpcomingProducts`     | `\UpcomingProductsFilter`          |                         |
| `getWhatIsNewBoxFilter`   | `\WhatsNewBoxThemeContentView`     | ?int $excludedProductId |
| `getCrossSellingProducts` | `\WhatsNewBoxThemeContentView`     | int $baseProductId      |