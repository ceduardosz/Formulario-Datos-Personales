<?php
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
  $uri = 'https://';
} else {
  $uri = 'http://';
}

$uri .= $_SERVER['HTTP_HOST'];
$uri .= '/dashboard/';
header('Location: ' . $uri);
exit;
?>
Something is wrong with the XAMPP installation :-(
