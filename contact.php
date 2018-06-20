<?php
/**
 * Created by PhpStorm.
 * User: kirigo karanja
 * Date: 04/05/2018
 * Time: 14:01
 */
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Pentagon Interior | Contact Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">


        <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->


        <!-- CSS Files
    ================================================== -->
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="css/jpreloader.css" type="text/css">
        <link rel="stylesheet" href="css/animate.css" type="text/css">
        <link rel="stylesheet" href="css/plugin.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
        <link rel="stylesheet" href="css/owl.theme.css" type="text/css">
        <link rel="stylesheet" href="css/owl.transitions.css" type="text/css">
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="css/newstyle.css" type="text/css">
        <link rel="stylesheet" href="css/index.css" type="text/css">
        <link rel="stylesheet" href="css/logoimage_grid.css" type="text/css">
        <link rel="stylesheet" href="css/social_media.css" type="text/css">

        <!-- custom background -->
        <link rel="stylesheet" href="css/bg.css" type="text/css">

        <!-- color scheme -->
        <link rel="stylesheet" href="css/color.css" type="text/css" id="colors">

        <!-- load fonts -->
        <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.css" type="text/css">
        <link rel="stylesheet" href="fonts/elegant_font/HTML_CSS/style.css" type="text/css">
        <link rel="stylesheet" href="fonts/et-line-font/style.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="contact.css">



        <body id="homepage">

            <div id="wrapper">

                <!-- header begin -->
                <header>


                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="index.php">
                            <img class="logo" src="images/icon.PNG" alt="">
                        </a>
                                </div>
                                <!-- logo close -->

                                <!-- small button begin -->
                                <span id="menu-btn"></span>
                                <!-- small button close -->

                                <!-- mainmenu begin -->
                                <nav>
                                    <ul id="mainmenu">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About Us</a>
                                            <ul>
                                                <li><a href="history.php" class="active">Our History</a></li>
                                                <li><a href="services.php">Our Services</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="clientele.php">Clientele</a></li>
                                        <li><a href="gallery.php">Gallery</a></li>
                                        <li><a href="portfolio.php">Portfolio</a></li>
                                        <li><a href="contact.php">Contact</a></li>

                                    </ul>
                                </nav>

                            </div>
                            <!-- mainmenu close -->

                        </div>
                    </div>
                </header>
                <!-- header close -->





                <!-- content begin -->
                <div id="content" class="no-bottom no-top">
                    <br>
                    <section id="section-about">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                                    <h1>Contact Page</h1>
                                    <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                                    <div class="spacer-single"></div>
                                </div>
                            </div>
                            <center>
                                <div class="newcontainer">
                                    <div class="row header">
                                        <h3>Please fill out the form</h3>
                                    </div>
                                    <div class="row body">
                                        <form method="post">
                                            <ul>


                                                <p class="old">
                                                    <br>
                                                    <label for="first_name">first name:</label>
                                                    <input class="texts" type="text" name="first_name" placeholder="" required/><br>
                                                </p>
                                                <p class="new">
                                                    <label for="last_name">last name:  </label>
                                                    <input class="texts" type="text" name="last_name" placeholder="" required/><br>
                                                </p>

                                                <p>
                                                    <label for="email">emailaddress:</label>
                                                    <input class="texts" type="email" name="email" placeholder="" required/>
                                                </p>
                                                <p>
                                                    <label>Service:</label>
                                                    <select class="forms6" name="service">
                <option value="Residential Design">Residential Design</option>
                <option value="Office Design">Office Design</option>
                <option value="Commercial Design">Commercial Design</option>
                <option value="Wall hanging design">Wall hanging design</option>
                <option value="Room layout Design">Room layout Design</option>
                <option value="Living room Design">Living room Design</option>
            </select>
                                                </p>
                                                <p class="right">
                                                    <label for="comments">Specify Service info</label><br>
                                                    <textarea class="texts" cols="46" rows="3" name="comments" required></textarea>
                                                </p>

                                                <li>
                                                    <input class="btn btn-submit" type="submit" name="send" value="Submit" />
                                                </li>
                                                <?php
                                                if(isset($_POST['send'])){
$Fname=$_POST['first_name'];
$Lname=$_POST['last_name'];
$Email=$_POST['email'];
$Message=$_POST['comments'];
$fullnames= $Fname." ".$Lname;
$service=$_POST['service'];

$sql="INSERT INTO `messages`(`Names`, `Email`, `Message`,`service`) VALUES ('$fullnames','$Email','$Message','$service')";
include('connection.php');
mysqli_query($conn,$sql);
                                                    
require_once('admin/PHPMailer-master/PHPMailerAutoload.php');
$mailer= new PHPMailer();
$mailer->isSMTP();
$mailer->SMTPAuth=true;
$mailer->SMTPSecure='ssl';
$mailer->Host='smtp.gmail.com';
$mailer->Port='465';
$mailer->isHTML();
$mailer->Username='csprojecttest2017@gmail.com';
$mailer->Password='Shitanda1997';
$mailer->SetFrom('no-reply@howcode.org');
$mailer->Subject='PENTAGON INTERIOR ORDER';
$mailer->Body='Your request has been sent successful. Kindly await for response as you will be alerted once your application has been responded to. Warm regards.';
$mailer->AddAddress($Email);
$mailer->Send(); 
                                                }
                                                ?>

                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </center>
                        </div>

                    </section>
                </div>
                <style>
                    label {
                        font-size: 16px;
                    }

                    .texts {
                        margin-bottom: 20px;
                        background: none;
                        border: none;
                        line-height: 1em;
                        font-weight: 300;
                        padding: 0.125em 0.25em;
                        width: 320px;
                        border-bottom: 1px solid black;
                    }

                    .about-details {
                        /*                    margin-left: 280px;*/
                        margin-top: 40px;
                        border-top: 2px solid #fff;
                        transition: all .7s ease 0s;
                        -webkit-transition: all .7s ease 0s;
                        -moz-transition: all .7s ease 0s;
                        -o-transition: all .7s ease 0s;
                        -ms-transition: all .7s ease 0s;
                        transition: all, 0.3s;
                        box-shadow: 5px 4px 5px grey;
                        vertical-align: middle;
                        -webkit-transform: perspective(1px) translateZ(0);
                        transform: perspective(1px) translateZ(0);
                        -webkit-transition-duration: 0.3s;
                        transition-duration: 0.3s;
                        -webkit-transition-property: transform;
                        transition-property: transform;

                    }

                </style>


                <!--content end -->
                <!-- footer begin -->
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div style="width: 100%; height: 300px;" id="map"></div>
                                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgWjyq3396nSbiVANvEddd38Nt07SW8qU&callback=initMap">


                                </script>
                                <br>
                            </div>

                            <div class="col-md-4">
                                <div class="widget widget_recent_post">
                                    <h3>Quick Links</h3>
                                    <ul>
                                        <li><a href="history.php">Company History</a></li>
                                        <li><a href="services.php">Our services</a></li>
                                        <li><a href="admin/login.php">Dashboard</a></li>
                                        <li><a href="clientele.php">Clientele</a></li>
                                        <li><a href="gallery.php">Gallery</a></li>
                                        <li><a href="portfolio.php">Portfolio</a></li>
                                    </ul>
                                    <a href="https://www.facebook.com/pages/Pentagon-Interior-LTD/662952133861650" class="fa fa-facebook"></a>
                                    <a href="https://www.google.com/search?q=pentagoninterior&oq=pentagoninterior&aqs=chrome..69i57j69i60l4j0.4294j0j7&sourceid=chrome&ie=UTF-8" class="fa fa-google"></a>
                                    <a href="mailto:esales@pentagoninterior.com" class="fa fa-envelope"></a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <h3>Contact Us</h3>
                                <div class="widget widget-address">
                                    <address>
                                <span><strong>Address:</strong>Road 1, Nationwide Godowns, Godown 7, Baba Dogo Rd, Nairobi</span>
                                <span><strong>Phone:</strong>+254 737 525209</span>
                                <span><strong>Email:</strong><a href="mailto:contact@archi-interior.com">contact@pentagoninterior.com</a></span>
                                <span><strong>Web:</strong><a href="#">http://pentagoninterior.com</a></span>
                            </address>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#" id="back-to-top"></a>
                </footer>
                <!-- footer close -->
            </div>


            <!-- Javascript Files
    ================================================== -->
            <script src="js/jquery.min.js"></script>
            <script src="js/map.js"></script>
            <script src="js/jpreLoader.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery.isotope.min.js"></script>
            <script src="js/easing.js"></script>
            <script src="js/jquery.flexslider-min.js"></script>
            <script src="js/jquery.scrollto.js"></script>
            <script src="js/owl.carousel.js"></script>
            <script src="js/jquery.countTo.js"></script>
            <script src="js/classie.js"></script>
            <script src="js/video.resize.js"></script>
            <script src="js/validation.js"></script>
            <script src="js/wow.min.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script>
            <script src="js/enquire.min.js"></script>
            <script src="js/designesia.js"></script>

        </body>

    </html>
