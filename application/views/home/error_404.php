<!DOCTYPE html>
<html lang="en">
<head>
<title>404 Page Not Found - <?=$siteSetting['website_name']?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="ERROR 404.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#000" />

<link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.png">
<link href="<?=base_url()?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url()?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
<link href="<?=base_url()?>assets/css/default.css" rel="stylesheet" type="text/css" id="light-style" />
<link href="<?=base_url()?>assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

<!-- Script  -->
<script src="<?=base_url()?>/assets/js/jquery-3.2.1.min.js"></script>

<style type="text/css">
* {
  font-family: 'Poppins', sans-serif;
}
p {
  font-family: 'Poppins', sans-serif;
  font-size: 16px;
  line-height: 1.8;
  font-weight: 400;
  color: #383838;
  -webkit-font-smoothing: antialiased;
  -webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
  text-shadow: rgba(0,0,0,.01) 0 0 1px;
}
h1, h2 , h3 {
  font-family: 'Poppins', sans-serif;
}
.footer-below{
    bottom: 0;
    right: 0;
}
.content {
    font-size: 16px;
    color: #383838;
}
.image_404{
    display: block;
    width: 330px;
    height: 330px;
    -moz-border-radius: 100%;
    -webkit-border-radius: 100%;
    object-fit: cover;
    background-repeat:no-repeat; 
    margin-left: auto;
    margin-right: auto;
}   
</style>
</head>
<body class="body-bg-error" style="background-image:url();">
    <div class="super_container">
        <div class="container margin-bottom-100 margin-top-50 text-center">
            <div class="margin-top-120">
                <h2 style="font-size: 30px;">Sometimes when you close your eyes... you can't see.</h2>
            </div>
            <div class="margin-top-20">
                <img src="<?=base_url()?>assets/images/cannot-see.jpg" alt="404 page" class="image_404">
            </div>

            <div class="margin-top-20">
                <h2 style="font-size: 30px;">This is a 404 page.</h2>

                <p>It seems like the content you're looking isn't available here.</p>
            </div>

            <div class="margin-top-20 font-black">
                <button onclick="window.location.href='<?=base_url()?>' " class="btn btn-md btn-dark">Go Home bud!</button>
            </div>
        </div>



        <footer class="footer footer-alt mb-3 mt-3">
            <?=date('Y')?> &copy; <?=$siteSetting['website_name']?>
        </footer>

        <!-- bundle -->
        <script src="<?=base_url()?>assets/js/vendor.min.js"></script>
        <script src="<?=base_url()?>assets/js/app.min.js"></script>
</body>
</html>