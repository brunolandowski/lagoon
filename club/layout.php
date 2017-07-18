<?php 
    $BASEURL = '';
?>
<!doctype html>
<!--[if lt IE 9]>      <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9" lang=""> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?= $pageName ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="static/css/normalize.min.css">

    <?php
    if( isset( $pageCSS ) && !empty( $pageCSS ) ){
        if( is_array( $pageCSS ) ){
                foreach ( $pageCSS as $key => $css) { ?>
    <link rel="stylesheet" href="<?= $BASEURL ?>static/css/<?= $css ?>"/>    
                <?php }
            } else { ?>
    <link rel="stylesheet" href="<?= $BASEURL ?>static/css/<?= $pageCSS ?>"/>    
            <?php }
        }
    ?>

    <script src="<?= $BASEURL ?>static/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body class="<?= $className?>">
