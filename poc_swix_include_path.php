<?php
declare(strict_types=1);

/**
 * SAFE PoC (localhost): shows how a user-controlled value would build an include path.
 * It does NOT include/require anything and does NOT read files.
 */

header('Content-Type: application/json; charset=utf-8');

$paymentClass = $_GET['payment_class'] ?? 'example_payment';

// Симулируем DIR_FS_CATALOG для XAMPP
$DIR_FS_CATALOG = 'C:/xampp/htdocs/';

$target = $DIR_FS_CATALOG . 'includes/modules/payment/' . $paymentClass . '.php';

echo json_encode([
  'poc' => 'SAFE_VERIFICATION',
  'DIR_FS_CATALOG' => $DIR_FS_CATALOG,
  'input_payment_class' => $paymentClass,
  'constructed_include_target' => $target,
  'note' => 'No include executed. This demonstrates path construction risk only.'
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
