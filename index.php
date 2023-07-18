<?php  
require_once("./email.php");
//
require_once("./method_search.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <!-- Rest of your head section -->

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/queries.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!---date picker--->
    <link rel="stylesheet" href="./css/jquery.datetimepicker.css">
    <script src="./js/jquery-3.6.4.js"></script>
    <script src="./js/jquery.datetimepicker.full.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Dreams Travel</title>
</head>

<body>
    <div class="main-container">
        <div class="container-header">
            <div class="nav-header">
                <div class="nav-header-top">
                    <div class="header-social-icon">
                        <a href="#"><i class="fa fa-facebook-square"></i></a>
                        <a href="#"><i class="fa fa-youtube-square"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter-square"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <div class="location-head">
                        <p><span><i class="fa fa-map-marker"></i></span> 1835 73rd Ave NE, Medina, Washington, USA.</p>
                    </div>
                    <div class="login-regis">
                        <a href="#">LOGIN</a>
                        <a href="#">REGISTER</a>
                    </div>
                </div>
                <div class="nav-header-bot" id="menu">
                    <div class="logo-header">4
                        <span>reams</span>
                        <span id="logo-8192">D</span>
                    </div>
                    <div class="nav-bot">
                        <span class="nav-toggle close-nav"><i class="fa fa-times"></i></span>
                        <span class="nav-toggle open-nav"><i class="fa fa-bars"></i></span>
                        <nav id="navBar">
                            <a href="#" id="active">HOME</a>
                            <a href="#">TOURS</a>
                            <a href="#">PACKAGE</a>
                            <a href="#">BLOG</a>
                            <a href="#">CONTACT</a>
                        </nav>

                    </div>
                </div>
            </div>
            <div class="header-title">
                <div class="phone-header">
                    <p>+91 254 587 485</p>
                </div>
                <h1>Book a Ticket & Just Leave!</h1>
                <p>Travel is the movement of people between relatively distant geographical locations,<br> and can
                    involve
                    travel by foot,bicycle, automobile, train, boat, bus.</p>
                <div class="button-get-ticker">
                    <button type="submit"><i class="fa fa-long-arrow-right"></i> GET TICKER</button>
                </div>
            </div>
        </div>
        <div class="container-form-book">
            <div class="form-book-layer">
            <?php require_once("./method_search.php"); ?>             
                <form method="post" action="">
                    <div>
                        <label for="where">WHERE?</label><br>
                        <input name="loca" type="text" placeholder="Choose location">
                    </div>
                    <div>
                        <label for="which">WHICH?</label><br>
                        <input name="city" type="text" placeholder="Choose City">
                    </div>
                    <div class="form-book">
                        <label for="check-in">CHECK IN</label><br>
                        <input name="chi" class="check-in" type="text" id="date_timepicker_start" placeholder="DD/MM/YYYY">
                    </div>
                    <div class="form-book">
                        <label for="check-out">CHECK OUT</label><br>
                        <input name="cho" class="check-out" id="date_timepicker_end" type="text" placeholder="DD/MM/YYYY">
                    </div>
                    <div class="btn-search">
                        <button name="search" id="search" type="submit">SEARCH</button>
                    </div>
                </form>
            </div>
            <div class="populer-place">
                <p>Popular Tour Packages</p>
                <h3>populer place</h3>
                <div class="populer-tabs-layer">
                    <div class="image-with-text">
                        <img src="./img/populer-tabs-1.png" alt="populer-tabs-1.png">
                        <div class="title-tabs">
                            <span>Mancity, England</span>
                        </div>
                    </div>
                    <div class="image-with-text">
                        <img src="./img/populer-tabs-2.png" alt="populer-tabs-2.png">
                        <div class="title-tabs">
                            <span>Mancity, England</span>
                        </div>
                    </div>
                    <div class="image-with-text">
                        <img src="./img/populer-tabs-3.png" alt="populer-tabs-3.png">
                        <div class="title-tabs">
                            <span>Mancity, England</span>
                        </div>
                    </div>
                </div>
                <div class="most-populer">
                    <div class="h4-layer">
                        <h4>Most Popular Travel Destinations</h4>
                    </div>
                    <p>Love travel? Plan and book your perfect trip with expert advice, travel tips, destination <br>
                        information
                        and inspiration from Lonely Planet</p>

                </div>
            </div>
        </div>
        <div class="slide">
            <img id="show" src="./img/slider-01.jpg" alt="random">
            <div class="btn-slide">
                <i class="fa fa-chevron-left btn-left" onclick="prev()"></i>
                <i class="fa fa-chevron-right btn-right" onclick="next()"></i>
            </div>
            <div class="title-slide">
                <span>Grand Switzerland</span>
                <div class="nav-slider">
                    <a href="#"><i class="fa fa-eye"></i></a>
                    <a href="#"><i class="fa fa-heart"></i></a>
                    <a href="#"><i class="fa fa-comment"></i></a>
                    <a href="#"><i class="fa fa-share-alt"></i></a>
                    <a href="#"><i class="fa fa-video-camera"></i></a>
                </div>
            </div>
        </div>
        <div class="destination">
            <div class="destination-title">
                <h2>Destinations for Honeymoon</h2>
                <p>Love travel? Plan and book your perfect trip with expert advice, travel tips, destination <br>
                    information and
                    inspiration from Lonely Planet</p>
            </div>
            <div class="destination-slide">
                <div class="tabs-slide-1">
                    <div class="img-layer">
                        <img src="./img/destination-1.jpg" alt="">
                    </div>
                    <div class="tabs-title">
                        <div class="tabs-layer">
                            <h4>Switzerland</h4>
                            <span>$560</span>
                            <p><i class="fa fa-clock-o"></i> 2 day - 2 night</p>
                            <p>There are a few very, very fine strands of PLA</p>
                            <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star-o"></i></p>
                            <a href="#">More Details</a>
                        </div>

                    </div>
                </div>
                <div class="tabs-slide-1">
                    <div class="img-layer">
                        <img src="./img/destination-2.jpg" alt="">
                    </div>
                    <div class="tabs-title">
                        <div class="tabs-layer">
                            <h4>Switzerland</h4>
                            <span>$560</span>
                            <p><i class="fa fa-clock-o"></i> 2 day - 2 night</p>
                            <p>There are a few very, very fine strands of PLA</p>
                            <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star-o"></i></p>
                            <a href="#">More Details</a>
                        </div>

                    </div>
                </div>
                <div class="tabs-slide-1">
                    <div class="img-layer">
                        <img src="./img/destination-3.jpg" alt="">
                    </div>
                    <div class="tabs-title">
                        <div class="tabs-layer">
                            <h4>Switzerland</h4>
                            <span>$560</span>
                            <p><i class="fa fa-clock-o"></i> 2 day - 2 night</p>
                            <p>There are a few very, very fine strands of PLA</p>
                            <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star-o"></i></p>
                            <a href="#">More Details</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="holiday-container">
            <div class="holiday-layer">
                <div class="holiday-left">
                    <h5><span>50<sup>%</sub></span>OFF Discount 10-30% Off</h5>
                    <h2>Best Holiday Packages</h2>
                    <p>Find your ideal holiday package whether you're travelling in Australia or around the World. Book
                        Flights
                        & Accommodation packages in one place with Escape Travel.</p>
                    <a href="#">READ MORE</a>
                </div>
                <div class="holiday-right">
                    <div id="carouselId" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselId" data-slide-to="0"></li>
                            <li data-target="#carouselId" data-slide-to="1"></li>
                            <li data-target="#carouselId" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img src="./img/image-holiday.jpg" alt="First slide">

                            </div>
                            <div class="carousel-item">
                                <img src="./img/activities2.jpg" alt="Second slide">

                            </div>
                            <div class="carousel-item">
                                <img src="./img/activities3.jpg" alt="Third slide">

                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="discount-section">
            <div class="discount-layer">
                <h1>30% Discount, stock limited fs30</h1>
                <p>The world's largest student and youth travel agency. Find cheap flights, tours, Spring Break packages
                    and
                    exclusive <br> travel deals for studentsTake full advantage of privileged discount rates.</p>
                <div class="btn-geticker-2">
                    <a href="#"><button><i class="fa fa-long-arrow-right"></i> GET TICKET</button></a>
                </div>
                <div class="tabs-discount">
                    <div class="tab-1">
                        <span>364</span><br>
                        <span>DAYS</span>
                    </div>
                    <div class="tab-2">
                        <span>23</span><br>
                        <span>HOURS</span>
                    </div>
                    <div class="tab-3">
                        <span>59</span><br>
                        <span>Minutes</span>
                    </div>
                    <div class="tab-4">
                        <span>59</span><br>
                        <span>Second</span>
                    </div>
                </div>
                <div class="slider-discount">
                    <button class="pre-btn btn"><i class="fa fa-chevron-left"></i></button>
                    <button class="nxt-btn btn"><i class="fa fa-chevron-right"></i></button>
                    <div class="product-container">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="./img/img-slider-discount.jpg" alt="">
                            </div>
                            <div class="product-info">
                                <div class="info-left">
                                    <h4>Italy (Rome)</h4>
                                    <h6><i class="fa fa-check-circle"></i> 3 Days 2 Night</h6>
                                    <h6><i class="fa fa-check-circle"></i> Visit most 4 popular place</h6>
                                    <span>$ 1500</span>
                                </div>
                                <div class="info-right">
                                    <div class="btn-get-ticket">
                                        <button id="get-ticket" type="submit"><i class="fa fa-long-arrow-right"></i> get
                                            ticket</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="./img/img-slider-discount.jpg" alt="">
                            </div>
                            <div class="product-info">
                                <div class="info-left">
                                    <h4>Italy (Rome)</h4>
                                    <h6><i class="fa fa-check-circle"></i> 3 Days 2 Night</h6>
                                    <h6><i class="fa fa-check-circle"></i> Visit most 4 popular place</h6>
                                    <span>$ 1500</span>
                                </div>
                                <div class="info-right">
                                    <div class="btn-get-ticket">
                                        <button id="get-ticket" type="submit"><i class="fa fa-long-arrow-right"></i> get
                                            ticket</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="./img/img-slider-discount.jpg" alt="">
                            </div>
                            <div class="product-info">
                                <div class="info-left">
                                    <h4>Italy (Rome)</h4>
                                    <h6><i class="fa fa-check-circle"></i> 3 Days 2 Night</h6>
                                    <h6><i class="fa fa-check-circle"></i> Visit most 4 popular place</h6>
                                    <span>$ 1500</span>
                                </div>
                                <div class="info-right">
                                    <div class="btn-get-ticket">
                                        <button id="get-ticket" type="submit"><i class="fa fa-long-arrow-right"></i> get
                                            ticket</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="./img/img-slider-discount.jpg" alt="">
                            </div>
                            <div class="product-info">
                                <div class="info-left">
                                    <h4>Italy (Rome)</h4>
                                    <h6><i class="fa fa-check-circle"></i> 3 Days 2 Night</h6>
                                    <h6><i class="fa fa-check-circle"></i> Visit most 4 popular place</h6>
                                    <span>$ 1500</span>
                                </div>
                                <div class="info-right">
                                    <div class="btn-get-ticket">
                                        <button id="get-ticket" type="submit"><i class="fa fa-long-arrow-right"></i> get
                                            ticket</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="./img/img-slider-discount.jpg" alt="">
                            </div>
                            <div class="product-info">
                                <div class="info-left">
                                    <h4>Italy (Rome)</h4>
                                    <h6><i class="fa fa-check-circle"></i> 3 Days 2 Night</h6>
                                    <h6><i class="fa fa-check-circle"></i> Visit most 4 popular place</h6>
                                    <span>$ 1500</span>
                                </div>
                                <div class="info-right">
                                    <div class="btn-get-ticket">
                                        <button id="get-ticket" type="submit"><i class="fa fa-long-arrow-right"></i> get
                                            ticket</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="./img/img-slider-discount.jpg" alt="">
                            </div>
                            <div class="product-info">
                                <div class="info-left">
                                    <h4>Italy (Rome)</h4>
                                    <h6><i class="fa fa-check-circle"></i> 3 Days 2 Night</h6>
                                    <h6><i class="fa fa-check-circle"></i> Visit most 4 popular place</h6>
                                    <span>$ 1500</span>
                                </div>
                                <div class="info-right">
                                    <div class="btn-get-ticket">
                                        <button id="get-ticket" type="submit"><i class="fa fa-long-arrow-right"></i> get
                                            ticket</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="./img/img-slider-discount.jpg" alt="">
                            </div>
                            <div class="product-info">
                                <div class="info-left">
                                    <h4>Italy (Rome)</h4>
                                    <h6><i class="fa fa-check-circle"></i> 3 Days 2 Night</h6>
                                    <h6><i class="fa fa-check-circle"></i> Visit most 4 popular place</h6>
                                    <span>$ 1500</span>
                                </div>
                                <div class="info-right">
                                    <div class="btn-get-ticket">
                                        <button id="get-ticket" type="submit"><i class="fa fa-long-arrow-right"></i> get
                                            ticket</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-big-deal">
                    <h2>it's a big deal!</h2>
                    <h5>subscribe our news letter</h5>
                    <form method="post" action="" class="form-big-deal">
                        <input name="eml" id="eml" type="email" placeholder="Enter your email">
                        <button name="send" type="submit">SUBMIT</button>
                    </form>
                    <div class="video-big-deal">
                        <div class="img-big-deal">
                            <img src="./img/background-video-big-deal.jpg" alt="">
                            <a id="over-play" href="#"><i class="fa fa-play-circle"></i> watching video</a>
                        </div>
                    </div>

                </div>
                <div class="content-big-dael">
                    <div class="content-1">
                        <div class="img-content-layer">
                            <img src="./img/content-1.jpg" alt="">
                        </div>

                        <div class="date-content">
                            <span>29 february</span>
                            <span>by admin</span>
                        </div>
                        <h4>Why Travel is Important If you've
                            grown up with all the comforts ?</h4>
                        <p>Travel is the movement of people between relatively distant geographical locations, and can
                            involve travel by foot.</p>
                        <div class="icon-content">
                            <a class="icon-coment" href="#"><i class="fa fa-comment"></i></a>
                            <a class="icon-heart" href="#"><i class="fa fa-heart"></i></a>
                            <a class="icon-share" href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                    <div class="content-1">
                        <div class="img-content-layer">
                            <img src="./img/content-2.jpg" alt="">
                        </div>

                        <div class="date-content">
                            <span>29 february</span>
                            <span>by admin</span>
                        </div>
                        <h4>Travelling, for me, is same as
                            reading books.</h4>
                        <p>Travel is the movement of people between relatively distant geographical locations, and can
                            involve travel by foot.</p>
                        <div class="icon-content">
                            <a class="icon-coment" href="#"><i class="fa fa-comment"></i></a>
                            <a class="icon-heart" href="#"><i class="fa fa-heart"></i></a>
                            <a class="icon-share" href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                    <div class="content-1">
                        <div class="img-content-layer">
                            <img src="./img/content-3.jpg" alt="">
                        </div>

                        <div class="date-content">
                            <span>29 february</span>
                            <span>by admin</span>
                        </div>
                        <h4>Here's how to get the most out
                            of a Liverpool city!</h4>
                        <p>Travel is the movement of people between relatively distant geographical locations, and can
                            involve travel by foot.</p>
                        <div class="icon-content">
                            <a class="icon-coment" href="#"><i class="fa fa-comment"></i></a>
                            <a class="icon-heart" href="#"><i class="fa fa-heart"></i></a>
                            <a class="icon-share" href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-section">
            <div class="contact-layer">
                <div class="phone">
                    <div class="logo-header-2">
                        <span>reams</span>
                        <span id="logo-8192-2">D</span>
                    </div>
                    <p>Phone: +91 254 541 254</p>
                    <p>Fax : +44 161 999 8888</p>
                    <p>Email: dreamland@dream.com</p>
                    <div class="contact-social-icon">
                        <a href="#"><i class="fa fa-facebook-square"></i></a>
                        <a href="#"><i class="fa fa-youtube-square"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter-square"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
                <div class="support">
                    <h5>support</h5>
                    <a href="#">Email</a>
                    <a href="#">Help Center</a>
                    <a href="#">Live chat</a>
                    <a href="#">Our Community</a>
                    <a href="#">Services Status</a>
                </div>
                <div class="location support">
                    <h5>location</h5>
                    <a href="#">Lodon</a>
                    <a href="#">Canada</a>
                    <a href="#">America</a>
                    <a href="#">India</a>
                    <a href="#">Australia</a>
                </div>
                <div class="menu support">
                    <h5>menu</h5>
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Tours</a>
                    <a href="#">Packages</a>
                    <a href="#">Blog</a>
                </div>
            </div>
            <footer id="footer">
                <span>&copy; 2018 Roy Design</span>
                <span>All Right Reserved</span>
                <div class="nav-footer">
                    <a href="#">About Hoststar</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Help Center</a>
                    <a href="#">Terms</a>
                    <a href="#">Site</a>
                </div>
            </footer>
        </div>
    </div>
    <!--jQuery ò scroll menu header-->
    <script type='text/javascript'>
        //<![CDATA[
        // Sticky Menu
        $(function () {
            var top = $('#menu').offset().top - parseFloat($('#menu').css('marginTop').replace(/auto/, 0));
            var footTop = $('#footer').offset().top - parseFloat($('#footer').css('marginTop').replace(/auto/, 0));

            var maxY = footTop - $('#menu').outerHeight();

            $(window).scroll(function (evt) {
                var y = $(this).scrollTop();
                if (y > top) {
                    if (y < maxY) {
                        $('#menu').addClass('fixed').removeAttr('style');
                    } else {
                        $('#menu').removeClass('fixed').css({
                            position: 'absolute',
                            top: (maxY - top) + 'px'
                        });
                    }
                } else {
                    $('#menu').removeClass('fixed');
                }
            });
        });
        //]]>
    </script>
    <!--Validate by JavaScript-->
    <!--
    <script type="text/javascript">
        var email = querySelectorAll('#eml');
        function ValidateEmail(inputText)
            {
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if(inputText.value.match(mailformat))
            {
            alert("Valid email address!");
            document.form1.text1.focus();
            return true;
            }
            else
            {
            alert("You have entered an invalid email address!");
            document.form1.text1.focus();
            return false;
            }
        }
        ValidateEmail(email);
    -->
    </script>
    <!-- <script src="./js/cdnjs.cloudflare.com_ajax_libs_jquery_2.1.3_jquery.min.js"></script> -->
    <script src="./js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
</body>

</html>