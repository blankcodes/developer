<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?=$siteSetting['website_name']?></title>
        <meta name="viewport" content="width=device-width,user-scalable=no">
        <meta name="description" content="<?=$siteSetting['description']?>"/>
        <meta name="theme-color" content="#000" />
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta name="apple-mobile-web-app-title" content="<?=$siteSetting['website_name']?>">

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.webp">
        <!-- App css -->
        <link href="<?=base_url()?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
        <link href="<?=base_url()?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="<?=base_url()?>assets/css/default.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/css/aos.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/images/favicon.webp" rel="apple-touch-icon" crossorigin="anonymous">
        <link rel="manifest" href="/manifest.json">

        <!-- Open Graph data -->
        <meta property="fb:app_id" content="" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?=$siteSetting['website_name']?>" />
        <meta property="og:description" content="<?=$siteSetting['description']?>" />
        <meta property="og:url" content="<?=base_url();?>" />
        <meta property="og:site_name" content="<?=$siteSetting['website_name']?>" />
        <meta property="og:image" content="<?=base_url('assets/images/favicon.png')?>" />
        <meta property="og:image:width" content="500" />
        <meta property="og:image:height" content="500" />
        <meta property="og:image:alt" content="<?=$siteSetting['description']?>" />

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@bykenkarlo>">
        <meta name="twitter:creator" content="@bykenkarlo">
        <meta name="twitter:title" content="<?=$siteSetting['description']?>">
        <meta name="twitter:image" content="<?=base_url('assets/images/favicon.png')?>">
        <!-- Scripts -->
        <script async src="https://cdn.ampproject.org/v0.js"></script>
    </head>

    <body class="loading" >
    <!-- Begin page -->