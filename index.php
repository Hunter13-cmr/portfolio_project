<!DOCTYPE html>
<html lang="en">

	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <title>Personal Website</title>
    <link rel="shortcut icon" href="images/portfolio.webp" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png"-->
    <link rel="shortcut icon" href="images/portfolio.webp" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/own-style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link id="changeable-colors" rel="stylesheet" href="css/colors/vivid-yellow.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="js/modernizer.js"></script>
</head>

<body>
     <!-- chargement de la page -->
     <div id="loader">
        <div id="status"></div>
    </div>
     <!-- Fin du chargement de la page -->

      <!-- En-t�te-->
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar pour le responsive du c�t� mobile -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img src="images/FE-LOCK DEV.svg" alt="Logo de l'application">
                                    </a>
                                </div>
                            </div>
                            <!-- debut nav-collapse -->
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="#banner">Home</a></li>
                                    <li><a href="#menu">Projects</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#footer" >Contact</a></li>
                                </ul>
                            </div>
                            <!-- fin nav-collapse -->
                        </nav>
                        <!-- fin navbar -->
                    </div>
                </div>
                <!-- fin row -->
            </div>
            <!-- fin container-fluid -->
        </header>
        <!-- fin En-t�te -->
    </div>
	<!-- fin site-En-t�te -->
    
                <!-- debut image première -->
                <div id="banner" class="banner full-screen-mode parallax">
                    <!-- debut container -->
                   <div class="container pr">
                        <!-- debut colonne -->
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!-- debut banner-statique -->
                           <div class="banner-static">
                                <!-- debut banner description -->
                               <div class="banner-text">
                                    <!-- debut banner cellule -->
                                   <div class="banner-cell" style="margin-left: 200px";>
                                       <h1>TURNING CHALLENGES INTO<br><span class="typer" id="some-id" data-delay="100" data-delim=":" data-words="CREATIVE:INNOVATIVE: AND TECH-DRIVEN SOLUTION" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                                       <div class="book-btn">
                                           <a href="#menu" class="table-btn hvr-underline-from-center">DISCOVER</a> &nbsp;&nbsp;&nbsp;
                                       </div>
                                   </div>
                                   <!-- end banner cellule -->
                               </div>
                               <!-- end banner description -->
                           </div>
                           <!-- end banner-statique -->
                       </div>
                       <!-- end col -->
                   </div>
                   <!-- end container -->
               </div>
               <!-- fin image première -->
     <!-- debut Menu -->
     <div id="menu" class="menu-main pad-top-100 pad-bottom-100"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                    <style>
                        .section {
                            display: flex;
                            align-items: center;
                            background-color: white;
                            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                            overflow: hidden;
                            max-width: 1500px;
                            margin: 20px;
                            border-radius: 20px;
                        }

                        .section img {
                            width: 30%;
                            height: auto;
                            display: block;
                            border-radius: 50%;
                        }

                        .text {
                            padding: 10px;
                            width: 50%;
                            text-align: justify;
                            margin-left: 20%;
                        }

                        .text h1 {
                            margin: 0;
                            font-size: 5em;
                            color: #fbff00;
                        }

                        .text p {
                            margin-top: 10px;
                            color: #666;
                            font-size: 1.3em;
                        }

                        /* Media query for phone screens */
                        @media (max-width: 768px) {
                            .section {
                                flex-direction: column; /* Stack items vertically */
                                text-align: center;
                            }

                            .section img {
                                width: 80%; /* Image takes up more space */
                                margin: 0 auto; /* Center the image */
                            }

                            .text {
                                width: 90%;
                                margin: 10px auto; /* Center the text */
                                text-align: justify;
                            }

                            .text h1 {
                                font-size: 2em; /* Adjust font size for smaller screens */
                            }

                            .text p {
                                font-size: 1em; /* Adjust paragraph font size */
                            }
                        }
                    </style>
                    <!-- Section that adjusts for responsiveness -->
                    <a href="#special-menu">
                        <div class="section" id="navbar">
                            <img src="images/fidel.jpg" alt="Image de présentation">
                            <div class="text">
                                <h1>MY WORKS</h1>
                                <p>This section showcases a curated selection of my recent projects, demonstrating my expertise in web development, graphic design, and problem-solving. Each project reflects my ability to turn ideas into impactful, innovative solutions, tailored to meet the unique needs of clients. Explore the projects to see how I leverage modern technologies and best practices to deliver exceptional results.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

    <div id="special-menu" class="special-menu pad-top-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- debut slider -->
                    <div class="special-box">
                        <div id="owl-demo">
                            <div class="item item-type-zoom">
                                <a class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                       <p style="background-color: black;"> Online Users Interface</p>
                                            <div class="line"></div>
                                            <div class="dit-line text-center"><p style="background-color: #000000;">It features user-friendly layouts, clear visuals, and responsive design.</p></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/p1.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            <p style="background-color: black;"> Chat Interface </p>
                                            <div class="line"></div>
                                            <div class="dit-line"><p style="background-color: black;">Welcome to the Direct Message Interface! Exchange messages simple and secure.</p></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img  src="images/p2.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            <p style="background-color: rgb(0, 0, 0);">Traffic Light System</p>
                                            <div class="line"></div>
                                            <div class="dit-line"><p style="background-color: black;"> This project simulates a traffic light system using Arduino.</p></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/p3.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            <p style="background-color: rgb(0, 0, 0);">LED Control with Arduino</p>
                                            <div class="line"></div>
                                            <div class="dit-line"><p style="background-color: black;">This project involves controlling an LED using an Arduino.</p></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/p4.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            <p style="background-color: rgb(0, 0, 0);">Drone Piloting</p>
                                            <div class="line"></div>
                                            <div class="dit-line"><p style="background-color: black;">Skilled in drone piloting for aerial surveillance, mapping, and inspections.</p></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/p5.jpg" alt="sp-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin slider -->
                </div>
                <!-- fin colonne -->
            </div>
            <!-- fin row -->
        </div>
        <!-- fin container -->
    </div>
    <!-- fin Special menu -->

     <!-- debut About -->
     <div id="about" class="about-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                        <h2 class="block-title">ABOUT FE-LOCK DEV</h2>
                        <h3>It's Common, Simple, Just like that...</h2>
                        <p style="text-align: justify;">At <strong style="background-color: #fbff00;">FE-LOCK DEV </strong>, we specialize in innovative technological solutions tailored to meet the unique needs of our clients. Our team is dedicated to delivering high-quality results through a combination of technical expertise and a passion for excellence.</p>
                
                        <p style="text-align: justify;">We excel in web development, graphic design, and problem-solving, ensuring that each project we undertake is executed with precision and attention to detail. Our collaborative approach ensures that we understand your vision and bring it to life effectively and efficiently.</p>
                
                        <p style="text-align: justify;">Whether you're looking for custom software development, digital marketing solutions, or IT consulting,<strong style="background-color: #fbff00;">FE-LOCK DEV</strong> is your trusted partner. We are committed to helping you achieve your goals through innovative strategies and cutting-edge technologies. Let's work together to turn your ideas into reality.</p>
                    </div>
                </div>
                <!-- fin colonne -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="2s">
                        <div class="about-images">
                            <img class="about-main" src="images/2.jpg" alt="About Main Image">
                            <img class="about-inset" src="images/4.jpg" alt="About Inset Image">
                            <img class="about-inset about-inset-2" src="images/1.jpg" alt="About Inset Image">
                            <img class="about-inset about-inset-3" src="images/3.jpg" alt="About Inset Image">
                        </div>
                    </div>
                </div>
                
                
                <!-- fin colonne -->
            </div>
            <!-- fin row -->
        </div>
        <!-- fin container -->
    </div>

    <div id="footer" class="footer-main">
        <div class="footer-news pad-top-100 pad-bottom-70 parallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="ft-title color-white text-center">Newsletter</h2>
                            <p>Enter your mail address to receive our news!</p>
                        </div>
                        <form action="subscribe.php" method="post">
                            <input 
                                type="email" 
                                name="email" 
                                placeholder="Enter your mail here" 
                                required
                                style="padding: 10px; width: 70%; margin-right: 10px;"
                            >
                            <button 
                                type="submit" 
                                style="padding: 10px 20px; background-color: #ffe600; color: white; border: none; cursor: pointer;"
                            >
                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Subscribe
                            </button>
                        </form>
                    </div>
                    
                    <!-- end col -->
                </div>
                <!-- end row -->
            <!-- end container -->
        </div>
        </div>
        <!-- end footer-news -->
        <div class="footer-box pad-top-70">
            <div class="container">
                <div class="row">
                    <div class="footer-in-main">
                        <div class="footer-logo">
                            <div class="text-center">
                                <img src="FE-LOCK DEV.SVG" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-2 col-sm-4 col-xs-12">
                            <div class="footer-box-a">
                                <h3>About </h3>
                                <p>We excel in web development, graphic design, and problem-solving, ensuring that each project we undertake is executed with precision and attention to detail. Our collaborative approach ensures that we understand your vision and bring it to life effectively and efficiently.</p>
                                <ul class="socials-box footer-socials pull-left">
                                    <li>
                                        <a href="https://web.facebook.com/fidele.elocksadrack.9?locale=fr_FR">
                                            <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://github.com/hunter13-cmr">
                                            <div class="social-circle-border"><i class="fa fa-github"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/in/esf1305/">
                                            <div class="social-circle-border"><i class="fa fa-linkedin"></i></div>
                                        </a>
                                    </li>
                                </ul>

                            <!-- end footer-box-a -->
                        </div>
                        <!-- end col -->
                       
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-c">
                                <h3>Contact</h3>
                                <p>
                                    <i class="fa fa-map-signs" aria-hidden="true"></i>
                                    <span> <a href="https://www.google.com/maps?4.058562412071993, 9.782182905823825" target="_blank">Douala-Cameroon</a></span>
                                </p>
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span><a href="tel:+237657642984">+237 657 642 984</a></span>
                                </p>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                 <span> <a href="mailto:felocksadrack@gmail.com">Contact Us</a></span>
                                </p>
                            </div>
                            <!-- end footer-box-c -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-d">
                                <h3>Disponibility</h3>

                                <ul>
                                    <li>
                                        <p>Monday -  Friday</p>
                                        <span> 08H - 18H</span>
                                    </li>
                                    <li>
                                        <p>Saturday</p>
                                        <span>  08H - 16H</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- end footer-box-d -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end footer-in-main -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <div id="copyright" class="copyright-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h6 class="copy-title"> Copyright &copy; 2025 <a href="#" target="_blank"></a> </h6>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    </div>
    <!-- end footer-main -->

    <div class="chat-icon" id="chatIcon">
        <img src="images/chat-icon.png" alt="Chat Icon">
    </div>

    <script>
    const chatIcon = document.getElementById('chatIcon');
        chatIcon.addEventListener('click', () => {
            window.location.href = 'ChatApp/index.php';
        });

        const images = document.querySelectorAll('.about-images img');
        let currentIndex = 0;

        </script>
    <!-- end footer-main -->
                <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- ALL PLUGINS -->
</html>
