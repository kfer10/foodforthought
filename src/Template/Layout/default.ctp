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
    <header class="page-head undefined">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap bg-transparent rd-navbar-wrap-mod-1">
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
                            <li class="active"><a href="<?php echo $this->Url->build(["controller"=>"pages", "action" => "index"]); ?>">Home</a></li>
                            <li><a href="#howitworks">How It Works</a></li>
                            <li><a href="#aboutus">About Us</a></li>
                            <li><a href="<?php echo $this->Url->build(["controller"=>"contacts", "action" => "index"]); ?>">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <section>
            <div class="swiper-container">
                <div class="jumbotron-mod-1 text-center">
                    <div>
                        <br><br><br><br><br><br>
                        <div class='btn-group-variant'> <a class='btn btn-primary btn-sm' href='<?php echo $this->Url->build(["controller"=>"contacts", "action" => "index"]); ?>'>Order Now</a></div>
                    </div>
                </div>
                <div class="swiper-wrapper">
                </div>
            </div>
        </section>
    </header>
    <!-- Page Content-->
    <main class="page-content">

        <!-- START OUR MISSION -->
        <section class="section bg-white">
            <div class="container">
                <h2>Our Mission</h2>
                <hr>
                <p>With your help, we aim to give kids the food they need to focus and stay in school.<br><br>
                    The idea is that quality food produces quality results, this is important for adults as well as for kids.
                    However too often kids are sent to school with substandard, unhealthy or even no lunch. This affects their
                    ability to study, learn and develop. The same occurs in our busy professional lives with many of us skipping
                    meals or opting for quick unhealthy takeaways.<br><br>
                    We hope to create a social movement that changes the way we make our food choices. Just by choosing to
                    order your lunch from Food for Thought, you can make a BIG difference to a child’s future every day. Our
                    mission is to make sure no Aussie child goes to school without a nutritious lunch, supporting education
                    and breaking the cycle of poverty.
                </p>
            </div>
        </section>
        <!-- END OUR MISSION -->


        <!-- START HOW IT WORKS -->
        <section class="bg-light bg-subscribe">
            <div class="container section section-inset-1 z-index">
                <a name="howitworks"><h2 class="text-center">How It Works</h2></a>
                <hr>
                    <p> Food for Thought is a new social enterprise. It is a buy one donate many food start-up where we
                        deliver healthy lunchboxes to<br> office workers at lunch time, for each person that purchases one
                        of our delicious lunchboxes we get to feed up to 10 Aussie kids in need!<br><br>
                        Our lunches are nutritionist developed and lovingly made by Charcoal Lane in Fitzroy.
                        Your handcrafted lunchbox includes a sandwhich and a salad which comes in vegan and non-vegan options.

                    </p>
                <div class='btn-group-variant'> <a class='btn btn-primary btn-sm' href='<?php echo $this->Url->build(["controller"=>"contacts", "action" => "index"]); ?>'>Order Now</a></div>
            </div>
        </section>
        <!-- END HOW IT WORKS -->



        <!-- START ABOUT US -->
        <section class="section bg-white">
            <div class="container">
                <a name="aboutus"><h2>About Us</h2></a>
                <hr>
                <p>Melbourne born founders and siblings Kishen and Sonia started Food for Thought
                    with the desire to bridge the poverty gap and make it easier for you to make a direct difference to
                    Aussie kids in need.<br><br>
                    Sonia has a degree in both Nutrition and Psychology and has worked in the health and education sectors.
                    As a nutritionist, she understands just how important it is for children to have a nutritious meal to
                    support their physical and mental development.<br><br>
                    Kishen worked as a lawyer and management consultant for several years and understands how easy it is
                    to end up opting for unhealthy takeaways when working in a corporate environment.<br><br>
                    They both saw the incredible power of education and healthy food in their own lives and wanted to
                    give back to the kids that aren’t so fortunate. We want Aussie kids to be healthy, happy and educated.<br><br>
                </p>
            </div>
        </section>
        <!-- END ABOUT US -->


        <!-- START CONTACT US -->
        <section class="section section-inset-1 bg-light">
            <div class="container">
                <h2 class="text-center">Contact Us</h2>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <blockquote class="quote quote-1">
                            <div class="quote__content text-left">
                                <div class="heading-6"><div class="font-honeyscript">Kishen</div></div>
                                <i class="fa-envelope-o"></i> &nbsp kishen@foodforthought.net.au<br>
                                <i class="fa-phone"></i>&nbsp&nbsp&nbsp 0401 705 255
                            </div>
                            <img src="img/profile1.jpg" class="round" width="100" height="100" alt="">
                        </blockquote>
                    </div>
                    <div class="col-md-4">
                        <blockquote class="quote quote-1">
                            <div class="quote__content text-left">
                                <div class="heading-6"><div class="font-honeyscript">Sonia</div></div>
                                <i class="fa-envelope-o"></i>&nbsp sonia@foodforthought.net.au<br>
                                <i class="fa-phone"></i>&nbsp&nbsp 0481 726 755
                            </div>
                            <img src="img/profile2.jpg" class="round" width="100" height="100" alt="">
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CONTACT US -->

    </main>



    <!-- Page Footer-->
    <footer class="page-foot section-inset-4 bg-dark">
        <a href="<?php echo $this->Url->build(["action" => "index"]); ?>" class="rd-navbar-brand brand text-xs-left">
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

<script>
    $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 600);
                    return false;
                }
            }
        });
    });
</script>