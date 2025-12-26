# PHASE 1: ENTRYPOINT MAPPING
## Security Audit of Gambio/Zen Cart CMS Installation

**Audit Date:** 2025-12-26  
**Target:** Deuth Zen Cart CMS (Gambio GX3 variant)  
**Methodology:** White-box security audit  
**Scope:** All externally reachable entrypoints

---

## EXECUTIVE SUMMARY

This document catalogs all externally accessible entrypoints discovered in the Gambio GX3 e-commerce platform. The system is a Zen Cart derivative with extensive modifications.

**Total Entrypoints Identified:**
- Root-level PHP scripts: 82
- Admin PHP scripts: 100+
- Callback handlers: 10+
- API endpoints: Multiple (v2, v3)

---

## A) NETWORK / TRANSPORT LAYER ENTRYPOINTS

### A.1 - PRIMARY HTTP ENTRYPOINTS (Root Directory)

#### FRONTEND CONTROLLERS

**Entrypoint:** `index.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/index.php`
- **Handler/Function:** ProductListingContentControl, LayoutContentControl
- **Transport:** HTTP/HTTPS (GET, POST)
- **Methods:** GET, POST
- **Parameters:**
  - `gm_boosted_category` - Category navigation
  - `cPath` - Category path
  - `cID` - Category ID
  - `cat` - Category filter
  - `filter_fv_id` - Feature value ID (array or int)
  - `filter_id` - Filter ID (int)
  - `filter_price_min` - Minimum price filter
  - `filter_price_max` - Maximum price filter
  - `feature_categories_id` - Feature category ID (int)
  - `listing_count` - Listing count (int)
  - `listing_sort` - Sorting parameter
  - `manufacturers_id` - Manufacturer filter (int)
  - `page` - Page number (int)
  - `sort` - Sort parameter
  - `value_conjunction` - Value conjunction (array)
  - `view_mode` - View mode (string)
  - `customer_country_id` - Customer country
  - `customer_zone_id` - Customer zone
- **Authentication:** Session-based, varies by endpoint
- **Trust Assumption:** User-supplied data via GET/POST

---

**Entrypoint:** `shop.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/shop.php`
- **Handler/Function:** Similar to index.php (shop frontend)
- **Transport:** HTTP/HTTPS
- **Methods:** GET, POST
- **Parameters:** Similar to index.php
- **Authentication:** Session-based
- **Trust Assumption:** User-supplied data

---

#### ACCOUNT MANAGEMENT ENTRYPOINTS

**Entrypoint:** `account.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/account.php`
- **Handler/Function:** Account management controller
- **Transport:** HTTP/HTTPS
- **Methods:** GET, POST
- **Parameters:** Requires session authentication
- **Authentication:** Required (customer login)
- **Trust Assumption:** Authenticated user data

---

**Entrypoint:** `account_edit.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/account_edit.php`
- **Handler/Function:** Account information editing
- **Transport:** HTTP/HTTPS
- **Methods:** GET, POST
- **Parameters:** Customer profile fields
- **Authentication:** Required
- **Trust Assumption:** Authenticated user input

---

**Entrypoint:** `account_password.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/account_password.php`
- **Handler/Function:** Password change
- **Transport:** HTTP/HTTPS
- **Methods:** GET, POST
- **Parameters:** old_password, new_password, confirm_password
- **Authentication:** Required
- **Trust Assumption:** Authenticated user

---

**Entrypoint:** `address_book.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/address_book.php`
- **Handler/Function:** Address book management
- **Transport:** HTTP/HTTPS
- **Methods:** GET, POST
- **Parameters:** Address fields (name, street, city, zip, country, etc.)
- **Authentication:** Required
- **Trust Assumption:** Authenticated user

---

**Entrypoint:** `address_book_process.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/address_book_process.php`
- **Handler/Function:** Address processing (add/edit/delete)
- **Transport:** HTTP/HTTPS
- **Methods:** POST
- **Parameters:** Address data, action parameter
- **Authentication:** Required
- **Trust Assumption:** Authenticated user

---

**Entrypoint:** `create_account.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/create_account.php`
- **Handler/Function:** New account registration
- **Transport:** HTTP/HTTPS
- **Methods:** GET, POST
- **Parameters:** Registration form fields
- **Authentication:** None (public)
- **Trust Assumption:** Anonymous user input

---

**Entrypoint:** `create_guest_account.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/create_guest_account.php`
- **Handler/Function:** Guest account creation
- **Transport:** HTTP/HTTPS
- **Methods:** POST
- **Parameters:** Guest registration fields
- **Authentication:** None (public)
- **Trust Assumption:** Anonymous user input

---

**Entrypoint:** `login.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/login.php`
- **Handler/Function:** Customer login
- **Transport:** HTTP/HTTPS
- **Methods:** POST
- **Parameters:** email, password
- **Authentication:** None (public entrypoint)
- **Trust Assumption:** Anonymous user credentials

---

**Entrypoint:** `login_admin.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/login_admin.php`
- **Handler/Function:** Admin login (outside admin directory)
- **Transport:** HTTP/HTTPS
- **Methods:** POST
- **Parameters:** admin credentials
- **Authentication:** None (public entrypoint)
- **Trust Assumption:** Anonymous admin credentials

---

**Entrypoint:** `logoff.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/logoff.php`
- **Handler/Function:** Session termination
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** None
- **Authentication:** Session-based
- **Trust Assumption:** Authenticated session

---

**Entrypoint:** `password_double_opt.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/password_double_opt.php`
- **Handler/Function:** Password reset confirmation
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** Token parameter
- **Authentication:** None (token-based)
- **Trust Assumption:** URL token

---

**Entrypoint:** `gm_account_delete.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/gm_account_delete.php`
- **Handler/Function:** Account deletion
- **Transport:** HTTP/HTTPS
- **Methods:** POST
- **Parameters:** Confirmation data
- **Authentication:** Required
- **Trust Assumption:** Authenticated user

---

#### CHECKOUT / SHOPPING ENTRYPOINTS

**Entrypoint:** `shopping_cart.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/shopping_cart.php`
- **Handler/Function:** Shopping cart display/management
- **Transport:** HTTP/HTTPS
- **Methods:** GET, POST
- **Parameters:** Cart actions, product IDs, quantities
- **Authentication:** Session-based
- **Trust Assumption:** Session/user input

---

**Entrypoint:** `checkout_shipping.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/checkout_shipping.php`
- **Handler/Function:** Shipping selection
- **Transport:** HTTP/HTTPS
- **Methods:** GET, POST
- **Parameters:** Shipping method selection
- **Authentication:** Required
- **Trust Assumption:** Authenticated user

---

**Entrypoint:** `checkout_shipping_address.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/checkout_shipping_address.php`
- **Handler/Function:** Shipping address selection
- **Transport:** HTTP/HTTPS
- **Methods:** GET, POST
- **Parameters:** Address selection/entry
- **Authentication:** Required
- **Trust Assumption:** Authenticated user

---

**Entrypoint:** `checkout_payment.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/checkout_payment.php`
- **Handler/Function:** Payment method selection
- **Transport:** HTTP/HTTPS
- **Methods:** GET, POST
- **Parameters:** Payment method selection
- **Authentication:** Required
- **Trust Assumption:** Authenticated user

---

**Entrypoint:** `checkout_payment_address.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/checkout_payment_address.php`
- **Handler/Function:** Payment address selection
- **Transport:** HTTP/HTTPS
- **Methods:** GET, POST
- **Parameters:** Address data
- **Authentication:** Required
- **Trust Assumption:** Authenticated user

---

**Entrypoint:** `checkout_confirmation.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/checkout_confirmation.php`
- **Handler/Function:** Order confirmation display
- **Transport:** HTTP/HTTPS
- **Methods:** GET, POST
- **Parameters:** Order review data
- **Authentication:** Required
- **Trust Assumption:** Authenticated user

---

**Entrypoint:** `checkout_process.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/checkout_process.php`
- **Handler/Function:** Final order processing
- **Transport:** HTTP/HTTPS
- **Methods:** POST
- **Parameters:** Order finalization
- **Authentication:** Required
- **Trust Assumption:** Authenticated user with active cart

---

**Entrypoint:** `checkout_success.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/checkout_success.php`
- **Handler/Function:** Order success page
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** Order confirmation display
- **Authentication:** Required
- **Trust Assumption:** Recent order completion

---

#### PRODUCT / CONTENT DISPLAY ENTRYPOINTS

**Entrypoint:** `product_info.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/product_info.php`
- **Handler/Function:** Product detail display
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** products_id (int), product information parameters
- **Authentication:** None (public)
- **Trust Assumption:** User-supplied product ID

---

**Entrypoint:** `product_reviews.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/product_reviews.php`
- **Handler/Function:** Product reviews display
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** products_id
- **Authentication:** None (public)
- **Trust Assumption:** User-supplied product ID

---

**Entrypoint:** `product_reviews_write.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/product_reviews_write.php`
- **Handler/Function:** Review submission
- **Transport:** HTTP/HTTPS
- **Methods:** GET, POST
- **Parameters:** products_id, review text, rating
- **Authentication:** Required
- **Trust Assumption:** Authenticated user input

---

**Entrypoint:** `products_new.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/products_new.php`
- **Handler/Function:** New products listing
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** Pagination, sorting
- **Authentication:** None (public)
- **Trust Assumption:** User navigation parameters

---

**Entrypoint:** `specials.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/specials.php`
- **Handler/Function:** Special offers listing
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** Pagination, sorting
- **Authentication:** None (public)
- **Trust Assumption:** User navigation parameters

---

**Entrypoint:** `advanced_search.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/advanced_search.php`
- **Handler/Function:** Advanced search form
- **Transport:** HTTP/HTTPS
- **Methods:** GET, POST
- **Parameters:** Search criteria
- **Authentication:** None (public)
- **Trust Assumption:** User search input

---

**Entrypoint:** `advanced_search_result.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/advanced_search_result.php`
- **Handler/Function:** Search results display
- **Transport:** HTTP/HTTPS
- **Methods:** GET, POST
- **Parameters:** 
  - Search keywords, categories, manufacturers
  - Price ranges, date ranges
  - **DIRECT $_GET/$_POST ACCESS**
- **Authentication:** None (public)
- **Trust Assumption:** User search parameters

---

**Entrypoint:** `shop_content.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/shop_content.php`
- **Handler/Function:** CMS content display
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** coID (content ID)
- **Authentication:** None (public)
- **Trust Assumption:** User-supplied content ID

---

#### UTILITY / AJAX ENTRYPOINTS

**Entrypoint:** `autocomplete.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/autocomplete.php`
- **Handler/Function:** Search autocomplete
- **Transport:** HTTP/HTTPS (AJAX)
- **Methods:** GET
- **Parameters:** Search term
- **Authentication:** None (public)
- **Trust Assumption:** User search input

---

**Entrypoint:** `popup_image.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/popup_image.php`
- **Handler/Function:** Image popup display
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** Image ID/path
- **Authentication:** None (public)
- **Trust Assumption:** User-supplied image reference

---

**Entrypoint:** `popup_content.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/popup_content.php`
- **Handler/Function:** Content popup display
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** Content ID
- **Authentication:** None (public)
- **Trust Assumption:** User-supplied content ID

---

**Entrypoint:** `popup_coupon_help.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/popup_coupon_help.php`
- **Handler/Function:** Coupon help popup
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** Coupon ID
- **Authentication:** None (public)
- **Trust Assumption:** User navigation

---

**Entrypoint:** `popup_search_help.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/popup_search_help.php`
- **Handler/Function:** Search help popup
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** None
- **Authentication:** None (public)
- **Trust Assumption:** Static content

---

**Entrypoint:** `print_order.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/print_order.php`
- **Handler/Function:** Order printing
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** Order ID
- **Authentication:** Required
- **Trust Assumption:** Authenticated user, order ownership check required

---

**Entrypoint:** `print_product_info.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/print_product_info.php`
- **Handler/Function:** Product info printing
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** Product ID
- **Authentication:** None (public)
- **Trust Assumption:** User-supplied product ID

---

**Entrypoint:** `download.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/download.php`
- **Handler/Function:** Digital download handling
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** Download ID/token
- **Authentication:** Token-based
- **Trust Assumption:** Download authorization token

---

**Entrypoint:** `redirect.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/redirect.php`
- **Handler/Function:** URL redirection
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** Target URL parameter
- **Authentication:** None (public)
- **Trust Assumption:** User-supplied URL (HIGH RISK - Open Redirect)

---

#### DYNAMIC CONTENT GENERATION

**Entrypoint:** `dynamic_theme_style.css.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/dynamic_theme_style.css.php`
- **Handler/Function:** Dynamic CSS generation
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** Theme parameters
- **Authentication:** None (public)
- **Trust Assumption:** Theme configuration

---

**Entrypoint:** `gm_javascript.js.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/gm_javascript.js.php`
- **Handler/Function:** Dynamic JavaScript generation
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** JavaScript configuration
- **Authentication:** None (public)
- **Trust Assumption:** Configuration data

---

**Entrypoint:** `customThemeJavaScriptCacheControl.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/customThemeJavaScriptCacheControl.php`
- **Handler/Function:** JavaScript cache control
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** Cache parameters
- **Authentication:** None (public)
- **Trust Assumption:** Cache configuration

---

## B) API ENDPOINTS

### B.1 - REST API v2

**Entrypoint:** `api.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/api.php`
- **Handler/Function:** Slim Framework-based REST API
- **Transport:** HTTP/HTTPS
- **Methods:** GET, POST, PUT, PATCH, DELETE, OPTIONS, HEAD
- **Base Path:** `/api.php/v2/`
- **Parameters:**
  - URI-based resource routing: `/v2/{resource}/{id}...`
  - Dynamic controller loading based on resource name
  - Example: `/v2/customers/123` → CustomersApiV2Controller
- **Authentication:** HTTP Basic Authentication (required)
  - Credentials: API username/password
  - WWW-Authenticate header for 401 responses
- **Trust Assumption:** Basic auth credentials over wire (REQUIRES HTTPS)
- **Rate Limiting:** 
  - Default limit tracked via cache files
  - Session-based rate limiting (identifier: MD5 of Authorization header)
  - Cache file: `cache/gxapi_v2_sessions_{token}`
- **Error Handling:** JSON error responses with HTTP status codes
- **Version Header:** X-API-Version in responses

**Notable Features:**
- Dynamic controller instantiation from URI
- Serialized session data in filesystem cache
- File-based rate limiting (potential race conditions)

---

### B.2 - REST API v3

**Entrypoint:** `api_v3.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/api_v3.php`
- **Handler/Function:** Gambio API Bootstrapper
- **Transport:** HTTP/HTTPS
- **Methods:** All HTTP methods
- **Base Path:** `/api.php/v3/` (routed through api.php)
- **Parameters:** Modern API structure using Gambio Core
- **Authentication:** To be determined (uses Gambio\Api\Application)
- **Trust Assumption:** API authentication mechanism

---

### B.3 - IT-Recht-Kanzlei API

**Entrypoint:** `api-it-recht-kanzlei.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/api-it-recht-kanzlei.php`
- **Handler/Function:** ITRechtReceiver class
- **Transport:** HTTP/HTTPS (POST)
- **Methods:** POST
- **Parameters:**
  - `$_POST_unfiltered` - Raw POST data (bypasses application_top filtering)
  - Action: 'push', optionally 'getaccountlist'
  - Supported types: agb, impressum, datenschutz, widerruf
  - Supported languages: de, be, fr, nl, es, en, sv, da, it, pl
  - PDF URL downloads
- **Authentication:** API token/credentials (to be analyzed)
- **Trust Assumption:** External API credentials
- **PDF Storage:** `/media/content/` directory
- **Security Concerns:**
  - Downloads PDFs from external URLs
  - Host verification: `$local_limit_download_from_host` (empty by default)
  - XML processing
  - File writes to media/content/

---

## C) PAYMENT / CALLBACK HANDLERS (Server-to-Server)

### C.1 - PayOne Transaction Status

**Entrypoint:** `payone_txstatus.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/payone_txstatus.php`
- **Handler/Function:** GMPayOne::saveTransactionStatus()
- **Transport:** HTTP POST (server callback)
- **Methods:** POST (enforced)
- **Parameters:**
  - `$realPost` - Direct $_POST capture before application_top
  - Transaction status data from PayOne gateway
- **Authentication:** None (payment gateway callback)
- **Trust Assumption:** 
  - Remote IP check (logged only)
  - Data from payment gateway
- **Logging:** FileLog 'payment-payone-txlog'
- **Response:** "TSOK" or "NACK"
- **Security Concerns:**
  - No signature verification visible
  - Trusts POST data from any source
  - Only logs remote address, no validation

---

### C.2 - iPayment Hidden Trigger

**Entrypoint:** `ipayment_htrigger.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/ipayment_htrigger.php`
- **Handler/Function:** GMIPayment::processHiddenTrigger()
- **Transport:** HTTP POST (server callback)
- **Methods:** POST (enforced)
- **Parameters:**
  - `trx_paymenttyp` - Payment type (required)
  - Additional iPayment transaction data
- **Authentication:** IP verification
  - Checks reverse DNS ends with `.ipayment.de`
  - Uses `gethostbyaddr($_SERVER["REMOTE_ADDR"])`
- **Trust Assumption:** IP address can be trusted (DNS-based verification)
- **Security Concerns:**
  - DNS-based authentication can be spoofed
  - Regex check: `preg_match('/\.ipayment\.de$/', gethostbyaddr($_SERVER["REMOTE_ADDR"]))`
  - Dies if validation fails

---

### C.3 - PayOne Address Check / Credit Rating

**Entrypoint:** `checkout_payone_addresscheck.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/checkout_payone_addresscheck.php`
- **Handler/Function:** PayOne address validation
- **Transport:** HTTP/HTTPS
- **Methods:** GET, POST
- **Parameters:** Address data for validation
- **Authentication:** Customer session
- **Trust Assumption:** Checkout process context

---

**Entrypoint:** `checkout_payone_cr.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/checkout_payone_cr.php`
- **Handler/Function:** PayOne credit rating check
- **Transport:** HTTP/HTTPS
- **Methods:** POST
- **Parameters:** Customer data for credit check
- **Authentication:** Customer session
- **Trust Assumption:** Checkout process context

---

**Entrypoint:** `checkout_ipayment.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/checkout_ipayment.php`
- **Handler/Function:** iPayment integration
- **Transport:** HTTP/HTTPS
- **Methods:** GET, POST
- **Parameters:** Payment processing data
- **Authentication:** Customer session
- **Trust Assumption:** Active checkout session

---

### C.4 - Gambio Hub Callback

**Entrypoint:** `gambio_hub_callback.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/gambio_hub_callback.php`
- **Handler/Function:** HubCallback::proceed()
- **Transport:** HTTP/HTTPS (server callback)
- **Methods:** Likely POST
- **Parameters:** Hub callback data structure
- **Authentication:** HubClientKey (to be analyzed)
- **Trust Assumption:** Gambio Hub service authentication
- **Dependencies:**
  - vendor/gambio-hub/hubpublic/src/
  - GXModules/Gambio/Hub/Shop/Classes/Extensions/HubCallback.inc.php
- **Security Concerns:**
  - External service callback
  - Custom autoloader for HubPublic namespace
  - Authentication mechanism needs analysis

---

### C.5 - MagnaLister Callback

**Entrypoint:** `magnaCallback.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/magnaCallback.php`
- **Handler/Function:** magnaExecute(), magnaCallbackRun()
- **Transport:** HTTP/HTTPS (server callback)
- **Methods:** GET, POST
- **Parameters:**
  - **STANDALONE MODE** (direct access):
    - `function` - Function name to execute
    - `passphrase` - Authentication passphrase
    - `arguments` - Serialized arguments
    - `includes` - Serialized include files
    - **DIRECT $_GET/$_POST ACCESS in multiple places**
  - **UTILITY MODE** (included from other scripts)
- **Authentication:** 
  - Passphrase comparison: `$_POST['passphrase'] == getDBConfigValue('general.passphrase', 0)`
  - DB-based activation check
  - MaranonCacheConfig authentication
- **Trust Assumption:** Passphrase-protected API
- **Security Concerns:**
  - **UNSERIALIZE of $_POST['arguments']** (line 859)
  - **UNSERIALIZE of $_POST['includes']** (line 862)
  - Dynamic function execution via `magnaExecute()`
  - Callable function check: `if (function_exists($functionName))`
  - Include external files from callback directory
  - File operations: file_get_contents, curl operations
  - Session manipulation
  - Magic quotes handling
  - Requires passphrase but unserialization happens BEFORE validation
  - **CRITICAL: PHP Object Injection via unserialize()**

---

### C.6 - Ekomi Integration

**Entrypoint:** `ekomi_send_mails.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/ekomi_send_mails.php`
- **Handler/Function:** Ekomi review system integration
- **Transport:** HTTP/HTTPS (likely cron/callback)
- **Methods:** GET/POST
- **Parameters:** Review data
- **Authentication:** To be analyzed
- **Trust Assumption:** Automated process

---

### C.7 - Trusted Shops Cron

**Entrypoint:** `trusted_shops_cron.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/trusted_shops_cron.php`
- **Handler/Function:** Trusted Shops integration cron
- **Transport:** HTTP/HTTPS (cron endpoint)
- **Methods:** GET
- **Parameters:** Cron parameters
- **Authentication:** To be analyzed
- **Trust Assumption:** Scheduled task

---

### C.8 - Other Marketplace Callbacks

**Entrypoint:** `yatego.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/yatego.php`
- **Handler/Function:** Yatego marketplace integration
- **Transport:** HTTP/HTTPS
- **Methods:** Unknown
- **Parameters:** Marketplace data
- **Authentication:** To be analyzed
- **Trust Assumption:** Marketplace callback

---

**Entrypoint:** `iloxx_track.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/iloxx_track.php`
- **Handler/Function:** iLoxx tracking integration
- **Transport:** HTTP/HTTPS
- **Methods:** Unknown
- **Parameters:** Tracking data
- **Authentication:** To be analyzed
- **Trust Assumption:** Shipping provider callback

---

**Entrypoint:** `refhny.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/refhny.php`
- **Handler/Function:** Unknown service integration
- **Transport:** HTTP/HTTPS
- **Methods:** Unknown
- **Parameters:** Unknown
- **Authentication:** To be analyzed
- **Trust Assumption:** External service

---

## D) EXPORTS / DATA FEEDS

**Entrypoint:** `findologic_export.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/findologic_export.php`
- **Handler/Function:** Findologic search export
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** Export parameters
- **Authentication:** To be analyzed (likely API key)
- **Trust Assumption:** External service authentication

---

**Entrypoint:** `gambio_store.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/gambio_store.php`
- **Handler/Function:** Gambio Store integration
- **Transport:** HTTP/HTTPS
- **Methods:** Unknown
- **Parameters:** Store data
- **Authentication:** To be analyzed
- **Trust Assumption:** Gambio service

---

## E) ADMIN PANEL ENTRYPOINTS

**Admin Directory:** `/home/runner/work/cmstest/cmstest/admin/`
**Total Admin Scripts:** 100+

### Key Admin Entrypoints (Sample):

**Entrypoint:** `admin/start.php`
- **Handler/Function:** Admin dashboard
- **Authentication:** Admin session required
- **Trust Assumption:** Admin credentials

**Entrypoint:** `admin/categories.php`
- **Handler/Function:** Category management
- **Authentication:** Admin session required
- **Trust Assumption:** Admin user input

**Entrypoint:** `admin/phpminiadmin.php`
- **Handler/Function:** Database administration (PHPMiniAdmin)
- **Authentication:** Admin session required
- **Trust Assumption:** Admin database access
- **Security Concerns:** Direct database access interface

**Entrypoint:** `admin/clear_cache.php`
- **Handler/Function:** Cache clearing
- **Authentication:** Admin session required
- **Trust Assumption:** Admin operation

**Note:** Full admin entrypoint enumeration requires separate analysis due to volume (100+ files)

---

## F) INSTALLER / UPDATER ENDPOINTS

**Directory:** `/home/runner/work/cmstest/cmstest/gambio_installer/`
**Security Status:** Should be removed in production

**Directory:** `/home/runner/work/cmstest/cmstest/gambio_updater/`
**Security Status:** Should be restricted in production

---

## G) MAIL / EMAIL PROCESSING

**Entrypoint:** `mailhive.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/mailhive.php`
- **Handler/Function:** MailBeez/MailHive integration
- **Transport:** HTTP/HTTPS
- **Methods:** GET, POST
- **Parameters:** MailHive commands
- **Authentication:** To be analyzed
- **Trust Assumption:** MailHive service
- **Security Concerns:**
  - Database modifications (adds mailbeez column to admin_access)
  - Direct SQL execution
  - `ALTER TABLE` operations

---

## H) MISCELLANEOUS ENTRYPOINTS

**Entrypoint:** `newsletter.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/newsletter.php`
- **Handler/Function:** Newsletter subscription
- **Transport:** HTTP/HTTPS
- **Methods:** GET, POST
- **Parameters:** Email address, subscription preferences
- **Authentication:** None (public)
- **Trust Assumption:** User email input

---

**Entrypoint:** `wish_list.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/wish_list.php`
- **Handler/Function:** Wishlist management
- **Transport:** HTTP/HTTPS
- **Methods:** GET, POST
- **Parameters:** Product IDs, wishlist operations
- **Authentication:** Customer session
- **Trust Assumption:** Authenticated user

---

**Entrypoint:** `gv_redeem.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/gv_redeem.php`
- **Handler/Function:** Gift voucher redemption
- **Transport:** HTTP/HTTPS
- **Methods:** POST
- **Parameters:** Voucher code
- **Authentication:** Customer session
- **Trust Assumption:** Authenticated user, voucher validation

---

**Entrypoint:** `gv_send.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/gv_send.php`
- **Handler/Function:** Gift voucher sending
- **Transport:** HTTP/HTTPS
- **Methods:** POST
- **Parameters:** Voucher details, recipient
- **Authentication:** Customer session
- **Trust Assumption:** Authenticated user

---

**Entrypoint:** `gm_price_offer.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/gm_price_offer.php`
- **Handler/Function:** Price offer request
- **Transport:** HTTP/HTTPS
- **Methods:** POST
- **Parameters:** Product ID, offer details
- **Authentication:** May be public or authenticated
- **Trust Assumption:** User input

---

**Entrypoint:** `withdrawal.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/withdrawal.php`
- **Handler/Function:** Right of withdrawal information
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** None
- **Authentication:** None (public)
- **Trust Assumption:** Static content

---

**Entrypoint:** `shop-bewertungen.php` / `shop-reviews.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/shop-bewertungen.php`
- **Handler/Function:** Shop reviews display (German/English versions)
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** Review parameters
- **Authentication:** None (public)
- **Trust Assumption:** User navigation

---

**Entrypoint:** `shop-bewertungen-schreiben.php` / `shop-reviews-write.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/shop-bewertungen-schreiben.php`
- **Handler/Function:** Shop review submission
- **Transport:** HTTP/HTTPS
- **Methods:** POST
- **Parameters:** Review text, rating
- **Authentication:** May be public or authenticated
- **Trust Assumption:** User review input

---

**Entrypoint:** `display_vvcodes.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/display_vvcodes.php`
- **Handler/Function:** Display voucher codes
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** Code display parameters
- **Authentication:** Customer session
- **Trust Assumption:** Authenticated user

---

**Entrypoint:** `request_port.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/request_port.php`
- **Handler/Function:** Port request (purpose unclear)
- **Transport:** HTTP/HTTPS
- **Methods:** Unknown
- **Parameters:** Unknown
- **Authentication:** To be analyzed
- **Trust Assumption:** Unknown

---

**Entrypoint:** `release_info.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/release_info.php`
- **Handler/Function:** Release information display
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** None
- **Authentication:** Unknown
- **Trust Assumption:** Information disclosure

---

**Entrypoint:** `version_info.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/version_info.php`
- **Handler/Function:** Version information display
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** None
- **Authentication:** Unknown
- **Trust Assumption:** Information disclosure (security risk)

---

**Entrypoint:** `error.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/error.php`
- **Handler/Function:** Error display page
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** Error parameters
- **Authentication:** None
- **Trust Assumption:** Error context

---

**Entrypoint:** `ec_proxy.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/ec_proxy.php`
- **Handler/Function:** E-Commerce proxy (purpose unclear)
- **Transport:** HTTP/HTTPS
- **Methods:** Unknown
- **Parameters:** Unknown
- **Authentication:** To be analyzed
- **Trust Assumption:** Unknown

---

**Entrypoint:** `poc_swix_include_path.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/poc_swix_include_path.php`
- **Handler/Function:** POC/test file (should not be in production)
- **Transport:** HTTP/HTTPS
- **Methods:** Unknown
- **Parameters:** Unknown
- **Authentication:** Unknown
- **Trust Assumption:** Development/test file (SECURITY RISK)

---

**Entrypoint:** `magnalister_compatibility_check.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/magnalister_compatibility_check.php`
- **Handler/Function:** MagnaLister compatibility check
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** None
- **Authentication:** Unknown
- **Trust Assumption:** System check

---

## I) CLIENT-SIDE / STORED INJECTION VECTORS

### Account History

**Entrypoint:** `account_history.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/account_history.php`
- **Handler/Function:** Order history display
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** Pagination, filtering
- **Authentication:** Required
- **Trust Assumption:** Authenticated user
- **Potential Vectors:** Stored order data display (XSS if not sanitized)

---

**Entrypoint:** `account_history_info.php`
- **File Path:** `/home/runner/work/cmstest/cmstest/account_history_info.php`
- **Handler/Function:** Detailed order information
- **Transport:** HTTP/HTTPS
- **Methods:** GET
- **Parameters:** Order ID
- **Authentication:** Required
- **Trust Assumption:** Authenticated user with order ownership check
- **Potential Vectors:** Stored order details display

---

## SUMMARY OF HIGH-PRIORITY ENTRYPOINTS FOR PHASE 2

### CRITICAL (Immediate Analysis Required):

1. **magnaCallback.php** - Unserialize of user input, dynamic function execution
2. **payone_txstatus.php** - No signature verification on payment callbacks
3. **ipayment_htrigger.php** - DNS-based authentication only
4. **api-it-recht-kanzlei.php** - External URL downloads, XML processing
5. **redirect.php** - Potential open redirect
6. **advanced_search_result.php** - Direct $_GET/$_POST access
7. **api.php** - File-based rate limiting, Basic auth over HTTP
8. **mailhive.php** - Direct SQL execution, ALTER TABLE
9. **admin/phpminiadmin.php** - Direct database interface
10. **poc_swix_include_path.php** - Test/POC file in production
11. **version_info.php** - Information disclosure

### HIGH (Important Analysis):

12. All file upload handlers (to be identified in includes/)
13. Session management in application_top.php
14. Admin authentication mechanisms
15. Download token validation in download.php
16. Password reset token validation
17. Gift voucher code validation

---

## PHASE 1 COMPLETE

**Next Steps:**
- **PHASE 2:** Full data flow trace for critical entrypoints
- **PHASE 3:** Control elimination filter
- **PHASE 4:** Exploitability assessment
- **PHASE 5:** Chaining analysis (if applicable)

---

**End of Phase 1 Report**
