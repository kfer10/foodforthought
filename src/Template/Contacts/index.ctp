<!DOCTYPE html>
<html lang="en" class="wide wow-animation">

<head>
    <!-- Site Title-->
    <title>Food For Thought</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Merriweather:400,500,700%7CLato:400,300%7CPlayball">
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="img/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Page-->
<div class="page text-center">
    <!-- Page Header-->
    <header class="page-head bg-about">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap bg-transparent">
            <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fullwidth" data-md-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-static">
                <div class="rd-navbar-top-panel bg-dark">
                    <div class="rd-navbar-inner">
                        <button data-rd-navbar-toggle=".list-inline" type="submit" class="rd-navbar-collapse-toggle"><span></span></button><a href="mailto:#" class="fa-envelope-o">info@demolink.org</a><a href="callto:#" class="fa-mobile-phone preffix-2">1-800-1234-567</a>
                        <ul class="list-inline pull-right">
                            <li><a href="#" class="fa-facebook"></a></li>
                            <li><a href="#" class="fa-twitter"></a></li>
                            <li><a href="#" class="fa-pinterest-p"></a></li>
                            <li><a href="#" class="fa-vimeo"></a></li>
                            <li><a href="#" class="fa-google-plus"></a></li>
                            <li><a href="#" class="fa-rss"></a></li>
                            <li class="text-left"><a href="mailto:#" class="fa-envelope-o"></a></li>
                            <li class="text-left"><a href="callto:#" class="fa-mobile-phone"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="rd-navbar-inner">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" type="submit" class="rd-navbar-toggle"><span></span></button>
                    </div>
                    <div class="rd-navbar-nav-wrap">
                        <!-- RD Navbar Search-->
                        <!--<span class="fa-user"></span> Register | Login-->
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li><a href="<?php echo $this->Url->build(["controller"=>"pages", "action" => "index"]); ?>">Home</a></li>
                            <li><a href="<?php echo $this->Url->build(["controller"=>"pages", "action" => "index","#" => "howitworks"]); ?>">How It Works</a></li>
                            <li><a href="<?php echo $this->Url->build(["controller"=>"pages", "action" => "index","#" => "aboutus"]); ?>">About Us</a></li>
                            <li class="active"><a href="<?php echo $this->Url->build(["controller"=>"contacts", "action" => "index"]); ?>">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <section class="text-center">
            <div class="container">
                <div class="jumbotron text-center">
                    <h1><small><span class='text-bold'>Contact us to make an order</span></small></h1>
                </div>
            </div>
        </section>
    </header>
    <!-- Page Content-->


    <main class="page-content">
        <section class="section section-inset-1 bg-light">
            <div class="container">
                <h2>Contact us</h2>
                <hr>
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                        <!-- RD Mailform-->
                        <form data-result-class="rd-mailform-validate" data-form-type="contact" method="post" action="rd-mailform.php" class="rd-mailform row">
                            <div class="col-xs-12 col-sm-6">
                                <input type="text" name="name" data-constraints="@NotEmpty" placeholder="* Your name...">
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <input type="text" name="name" data-constraints="@NotEmpty" placeholder="* Your company...">
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <input type="text" name="email" data-constraints="@NotEmpty @Email" placeholder="* Your e-mail...">
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <input type="text" data-constraints="@Phone" name="phone" placeholder="Your phone..." class="form-input">
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <textarea name="message" data-constraints="@NotEmpty" placeholder="* Message:"></textarea>
                            </div>
                            <!-- RD SelectMenu-->
                            <button class="btn btn-primary btn-sm btn-min-width">send message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-inset-3 bg-light">
            <div class="container">
                <div class="row text-sm-left">
                    <div class="col-xs-12 col-sm-6 col-lg-3 col-lg-offset-1">
                        <address>
                            <div class="media">
                                <div class="media-left"><span class="icon icon-primary icon-sm fa-phone"></span></div>
                                <div class="media-body">
                                    <p class="h6">Phones</p>
                                    <dl class="dl-horizontal">
                                        Sonia: 0481 726 755<br>
                                        Kishen: 0401 705 255
                                    </dl>
                                </div>
                            </div>
                        </address>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-3 col-lg-offset-1">
                        <address>
                            <div class="media">
                                <div class="media-left"><span class="icon icon-primary icon-sm fa-envelope"></span></div>
                                <div class="media-body">
                                    <p class="h6">Email</p><a href="mailto:#">hello@foodforthought.net.au</a>
                                </div>
                            </div>
                        </address>
                    </div>
                </div>
            </div>
        </section>
    </main>



    <!-- Page Footer-->
    <footer class="page-foot section-inset-4 bg-dark">
        <a href="<?php echo $this->Url->build(["controller"=>"pages", "action" => "index"]); ?>" class="rd-navbar-brand brand text-xs-left">
            <img src="img/logo.png" alt="" width="110px">
        </a>

        <br><br><br><br>
        <div class="inline-list--mod-1">
            <div class="font-honeyscript">Our Partners</div><br>
            <div>
                <a href="http://www.charcoallane.com.au/"><img src="img/logo_charcoal_lane.jpg" width="170px" alt=""></a>
            </div>
            <div>
                <a href="http://www.eatup.org.au/"><img src="img/logo_eat_up.png" width="170px"  alt=""></a>
            </div>
        </div>
        <br>
        <font size="2pt" color="#fff">Copyright © 2016. All Rights Reserved.</font>
        <br><br>

        <!--
        <section class="copyright bg-darkest well5">
            <div class="container">
                <p class="pull-sm-left">&#169; <span id="copyright-year"></span> All Rights Reserved <a href="terms.html">Terms of Use and Privacy Policy</a></p>
                <ul class="list-inline pull-sm-right offset-3">
                    <li><a href="#" class="fa-facebook"></a></li>
                    <li><a href="#" class="fa-twitter"></a></li>
                    <li><a href="#" class="fa-pinterest-p"></a></li>
                    <li><a href="#" class="fa-vimeo"></a></li>
                    <li><a href="#" class="fa-google"></a></li>
                    <li><a href="#" class="fa-rss"></a></li>
                </ul>
            </div>
        </section>-->
    </footer>
    <!-- Rd Mailform result field-->
    <div class="rd-mailform-validate"></div>
</div>
<!-- Java script-->
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>

<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-7078796-5']);
    _gaq.push(['_trackPageview']);
    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();</script>
</body>


</html>