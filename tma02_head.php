<?php
// TT284 CRUD APP (TMA02)
// "HEAD" OF PAGE
// "require" this file to output the start of the page

// For security, required PHP files should "die" if SAFE_TO_RUN is not defined
if (!defined('SAFE_TO_RUN')) {
    // Prevent direct execution - show a warning instead
    die(basename(__FILE__)  . ' cannot be executed directly!');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php _e($app_title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="<?php _e($js_file) ?>"></script>
    <link rel="stylesheet" href="<?php _e($css_file) ?>" />
</head>

<body>

<header>
    Ask questions about TMA02 (but do not share your work) in the <em>TMA02 forum</em>
</header>