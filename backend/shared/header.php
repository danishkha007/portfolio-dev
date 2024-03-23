<?php
    if(!isset($pageTitle)){
       $pageTitle="Danish Khan";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    
    <link rel="stylesheet" href="<?php echo url_for('frontend/assets/css/master.css'); ?>">
    <link rel="stylesheet" href="<?php echo url_for('frontend/assets/css/fontawesome.css'); ?>">
    <script src="<?php echo url_for('frontend/assets/js/header.js'); ?>"></script>
</head>
<body>
    <section>
        <header class="header" id="header">
            <div class="header-ctn" id="header-ctn">
                <div class="logo-ctn">
                    <a href="<?php echo url_for('index'); ?>" class="logo">Danish Khan</a>
                </div>
                <div class="hamburger" onclick="<?php is_post_request() ?>">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                <div class="menu-ctn">
                    <a href="<?php echo url_for('index'); ?>">About</a>
                    <a href="<?php echo url_for('index'); ?>">Projects</a>
                    <a href="<?php echo url_for('index'); ?>">Contact</a>
                    <button class="btn social" href="<?php echo url_for('index'); ?>">Instagram</button>
                </div>
            </div>
        </header>
    </section>