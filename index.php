<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="images/logo.png">
    <!-- Our Team related links -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&family=Girassol&display=swap"
        rel="stylesheet">

    <!-- Google Font for class="MemberName" -->
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">

    <!--AOS-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />  

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@200;300;500&display=swap" rel="stylesheet">
    <!-- El Messiri  -->
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri&family=Handlee&display=swap" rel="stylesheet">

    <!-- College Space CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width:902px)" href="css/mobile.css">
    <script src="show-on-scroll.js"></script>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <!-- About Us Section Animation  -->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="images/cybertronix_logo.jpg" type="image/x-icon">


    <title>TIH College Space</title>
</head>

<body onload="loaderFun()">
    <!--Pre:loader-->
    <div id="loader_bg">
        <div class="loader">
        </div>
        <!--
        <div id="pencil">

        </div>
        -->
    </div>
    <!--NavBar-->
    <nav id="navbar">
        <!--This is Navigation Bar-->
        <input type="checkbox" id="nav-toggle">
        <div id="logo" data-aos="fade-right">
            <img src="images/logo.png" alt="tihcollegespace.in">
            <h3><a href="./admin/index.php"> TIH College Space</a></h3>
        </div>
        <ul>
            <li class="a"><a class="Home active" href="#Home">Home</a></li>
            <li><a class="AboutUs" href="#AboutUs">About Us</a></li>
            <li><a class="Activity" href="#Activity">Clubs</a></li>
            <li><a class="Team" href="#Team">Team</a>
                <!-- <ul>
                    <li><a href="#Team">Current Members</a></li>
                    <li><a href="#">Previous Members</a></li>

                </ul> -->
            </li>
            <li><a class="ContactUs" href="#ContactUs">Contact Us</a></li>
            
            <li><a class="Sign-Up" href="#Sign-Up" data-bs-toggle="modal"
                data-bs-target="#SignUpnModal"><i class="fas fa-user-circle fa-lg"></i></a></li>
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>

    <!--Home-->
    <div class="home" data-aos="fade-down">
        <section id="Home">
            
            <div class="topdesign" data-aos="fade-up">
                
                <div class="welcome overlay " data-aos="fade-down" >
                    
                    <p id="p1">WELCOME TO</p>
                    <p data-text="College&nbsp;Space" id="p2">
                        College&nbsp;Space
                    </p>
                    <div class="underline"></div>
                    <p id="p3">POWERED BY</p>
                    <p id="p4">TECHNO INDIA HOOGHLY</p>
                </div>

            </div>
            <div class="homeimage">
                <img src="images/img1.png" alt="">
            </div>
        </section>
    </div>
    
    <!-- About Us Section  -->
    <section class="about_section" id="AboutUs" data-aos="fade-up">
        <h1 class="Heading">
            <span>A</span><span>b</span><span>o</span><span>u</span><span>t</span>
            <span>U</span><span>s</span>
        </h1>
        <div class="custom_container">
            <div class="custom_row about_flex">
                <div class="left_about" data-aos="fade-right">
                    <p>We are a team of young and energetic folks,pursing Balchelor's of Computer Application from
                        Techno India Hooghly College.Since, we have partially shifted to online education system due to this current 
                        pandemic situation,we are facing lots problems like scheduling classes,uploading notes,attendance,etc.,which we taught should be overcomed.This took us to a conclusion 
                        for devoloping a Web Application named <strong>"TIH COLLEGE SPACE"</strong>which can connect our teachers with students virtually under the same roof.
                    </p>
                    
                    <span>
                        <h3>“Education is the key that unlocks the golden door to freedom.”</h3>
                    </span>
                </div>
                <div class="right_about" data-aos="fade-left">
                    <img src="images/main.svg" width="400" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>
    <!--/About-Section-->

    <!--Activity-->
    <div class="clubs" >
        <section id="Activity" style="height: auto;" data-aos="zoom-in">
            <h1 class="Heading">
                <span>C</span><span>L</span><span>U</span><span>B</span><span>S</span>
            </h1>
            <div class="club-container" data-aos="zoom-in">
                <div class="club-card-box" data-aos="zoom-in">
                    <div class="club-card-main">
                        <div class="club-card-front">
                            <img src="images/codechef_logo.jpeg" alt="">
                        </div> 
                        <!-- club-card-front -->
                        <div class="club-card-back">
                            <div class="club-name">
                                <h2>CodeChef TCH Chapter</h2>
                            </div> 
                            <!-- club-name -->
                            <div class="club-social-link">
                                <a href="https://www.facebook.com/CodechefTCHChapter" class="fa fa-facebook"></a>
                                <a href="https://www.linkedin.com/in/codechef-tch-chapter-8909961bb" class="fa fa-linkedin"></a>
                                <a href="https://www.youtube.com/channel/UCLDY6sPzUCAnBEWL9CIPyuw" class="fa fa-youtube"></a>
                                <a href="https://www.instagram.com/codechef.tch.chapter/" class="fa fa-instagram"></a>
                            </div>
                            <div class="club-details">
                                <p>It is a competitive programming community under <a href="www.codechef.com">CodeChef</a>. The club is formed under Techno College Hooghly.</p>
                            </div> 
                            <!-- club-detail -->
                        </div> 
                        <!-- club-card-back -->
                    </div> 
                    <!-- club-card-main -->
                </div> 
                <!-- club-card-box -->
            
                <div class="club-card-box" data-aos="zoom-in">
                    <div class="club-card-main">
                        <div class="club-card-front">
                            <img src="images/cybertronix_logo.jpeg" alt="">
                        </div> 
                        <!-- club-card-front -->
                        <div class="club-card-back">
                            <div class="club-name">
                                <h2>Cybertronix</h2>
                            </div> 
                            <!-- club-name -->
                            <div class="club-social-link">
                                <a href="https://www.facebook.com/cybertronix.tih" class="fa fa-facebook"></a>
                                <a href="https://www.youtube.com/channel/UClJ4szYBnE4aU099U6vUeLw" class="fa fa-youtube"></a>
                                <a href="https://www.instagram.com/clubcybertronix/" class="fa fa-instagram"></a>
                                <a href="https://rajendrakrshaw.github.io/Cybertronix/" class="fa fa-chrome"></a>
                            </div>
                            <div class="club-details">
                                <p>It is a technical club of Techno College Hooghly. You can enhance your technical skills here.</p>
                            </div>
                            <!-- club-detail -->
                        </div> 
                        <!-- club-card-back -->
                    </div> 
                    <!-- club-card-main -->
                </div> 
                <!-- club-card-box -->

                <div class="club-card-box" data-aos="zoom-in">
                    <div class="club-card-main">
                        <div class="club-card-front">
                            <img src="images/sparkquest_logo.jpeg" alt="">
                        </div> 
                        <!-- club-card-front -->
                        <div class="club-card-back">
                            <div class="club-name">
                                <h2>Spark Quest</h2>
                            </div> 
                            <!-- club-name -->
                            <div class="club-social-link">
                                <a href="https://www.facebook.com/TIHSparkQuest" class="fa fa-facebook"></a>
                                <a href="https://twitter.com/TIHSparkquest" class="fa fa-twitter"></a>
                                <a href="https://www.youtube.com/channel/UCpID3vBWRrpgq2wzFEqZhwg" class="fa fa-youtube"></a>
                                <a href="https://www.instagram.com/sparkquest._/" class="fa fa-instagram"></a>
                                <a href="https://www.sparkquest.in/" class="fa fa-chrome"></a>
                            </div>
                            <div class="club-details">
                                <p>It is a Technical & Management fest of our college. Students can show their Spark and Talent <a href="https://www.sparkquest.in/">here</a>.</p>
                            </div> 
                            <!-- club-detail -->
                        </div> 
                        <!-- club-card-back -->
                    </div> 
                    <!-- club-card-main -->
                </div> 
                <!-- club-card-box -->

                <div class="club-card-box" data-aos="zoom-in">
                    <div class="club-card-main">
                        <div class="club-card-front">
                            <img src="images/verbana_logo.jpeg" alt="">
                        </div> 
                        <!-- club-card-front -->
                        <div class="club-card-back">
                            <div class="club-name">
                                <h2>Verbena</h2>
                                <h3>TIH Cultural Committee</h3>
                            </div> 
                            <!-- club-name -->
                            <div class="club-social-link">
                                <a href="https://www.facebook.com/TIHVerbenaCommittee" class="fa fa-facebook"></a>
                                <a href="https://www.youtube.com/c/VERBENACULTURALCOMMITTEE" class="fa fa-youtube"></a>
                                <a href="https://www.instagram.com/tihverbenacommittee/" class="fa fa-instagram"></a>
                                <a href="info@tihverbena.in" class="fa fa-envelope"></a>
                            </div>
                            <div class="club-details">
                                <p>It is the Cultural Committee of our College which organises various events in the college.</p>
                            </div>
                            <!-- club-detail -->
                        </div> 
                        <!-- club-card-back -->
                    </div> 
                    <!-- club-card-main -->
                </div> 
                <!-- club-card-box -->


            </div> 
            <!-- club-container -->



        </section>
    </div>
    <!--Team-->
    <div class="team" data-aos="fade-up">
        <section id="Team">
            <div class="OurTeam" data-aos="zoom-in">
                <h1 class="Heading">
                    <span>O</span><span>u</span><span>r</span>
                    <span>T</span><span>e</span><span>a</span><span>m</span>
                </h1>
            </div>
            <div class="team_content" data-aos="zoom-in">
                <div class="team_card" data-aos="zoom-in">
                    <div class="team_box">
                        <img src="images/AtulKumarGiri.jpg" alt="">
                    </div>
                    <div class="team_info">
                        <div class="team_name">Atul Kumar <br> Giri</div>
                        <div class="team_details">BCA 3rd Year</div>
                        <div class="team_social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
    
                        </div>
                    </div>
                </div>

                <div class="team_card" data-aos="zoom-in">
                    <div class="team_box">
                        <img src="images/DEBOJYOTI_DAS_40.jpg" alt="">
                    </div>
                    <div class="team_info">
                        <div class="team_name">Debojyoti Das</div>
                        <div class="team_details">BCA 3rd Year</div>
                        <div class="team_social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            
                        </div>
                    </div>
                </div>
                <div class="team_card" data-aos="zoom-in">
                    <div class="team_box">
                        <img src="images/afshan1.jpg" alt="">
                    </div>
                    <div class="team_info">
                        <div class="team_name">Gulafshan Parween</div>
                        <div class="team_details">BCA 3rd Year</div>
                        <div class="team_social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
    
                        </div>
                    </div>
                </div>
                <div class="team_card" data-aos="zoom-in">
                    <div class="team_box">
                        <img src="images/manish.jpeg" alt="">
                    </div>
                    <div class="team_info">
                        <div class="team_name">Manish <br> Kumar Yadav</div>
                        <div class="team_details">BCA 3rd Year</div>
                        <div class="team_social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
    
                        </div>
                    </div>
                </div>
                <div class="team_card" data-aos="zoom-in">
                    <div class="team_box">
                        <img src="images/RajendraKumarShaw.jpg" alt="">
                    </div>
                    <div class="team_info">
                        <div class="team_name">Rajendra Kumar Shaw</div>
                        <div class="team_details">BCA 3rd Year</div>
                        <div class="team_social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
    
                        </div>
                    </div>
                </div>
                <div class="team_card" data-aos="zoom-in">
                    <div class="team_box">
                        <img src="images/RonitSingh.jpg" alt="">
                    </div>
                    <div class="team_info">
                        <div class="team_name">Ronit Singh</div>
                        <div class="team_details">BCA 3rd Year</div>
                        <div class="team_social-links">
                            <a href="https://www.facebook.com/ronitsinghrajput.11/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/ronitsinghrajput7/"><i class="fab fa-instagram"></i></a>
    
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <!--Contact Us-->
    <div class="contactus" data-aos="fade-up">
        <section id="ContactUs">
            <h1 class="Heading">
                <span>C</span><span>o</span><span>n</span><span>t</span><span>a</span><span>c</span><span>t</span>
                <span>U</span><span>s</span>
            </h1>
            <div class="container mt-5" data-aos="zoom-in">

                <div class="row g-2">
                    <div class="col-md-4">
                        <div class="card-3"> 
                            <div class="cdd">
                            <img src="images/address.png" width="40">
                            <h5>Address</h5>
                            <p>Dharampur G. T. Road
                                (Near Khadina More)
                                Chinsurah - 712101
                                West Bengal, India</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-3"> 
                            <div class="cdd">
                            <img src="images/email.png" width="40">
                            <h5>Email</h5>
                            <p><a href="info@technoindiahooghly.org">info@technoindiahooghly.org</a></p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-3">
                            <div class="cdd">
                            <img src="images/phone.png" width="40">
                            <h5>Phone</h5>
                            <p>+91 33 2680 2389</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <!-- TOP BUTTON -->
    <button onclick="topFunction()" id="myBtn" title="Go to top" class="animated2 fadeInRight"><i
            class="fas fa-fighter-jet fa-rotate-270"></i></button>
    <!-- FOOTER -->
    <div class="bg-red py-6">
        <div class="row px-3">
            <h4 style="font-family: Bai Jamjuree; margin-top:1%; margin-bottom: 1%;"> TIH College Space | <img
                    src="images/logo.png" height="50px" width="50px" style="margin:auto;border-radius:2px;">
                <div class="footer-follow"><span style="font-size:small; margin-left: auto; ">Follow Us:</span><a
                        href="https://www.facebook.com/CodechefTCHChapter " class="fab fa-facebook-square text-sm "
                        style="margin-right: 4%; margin-left: 5%; color:white; text-decoration: none; ">
                    </a> <a href="https://www.youtube.com/channel/UCLDY6sPzUCAnBEWL9CIPyuw"
                        class="fab fa-youtube mr-4 text-sm" style="color:white; text-decoration: none; "></a><a
                        href="https://www.linkedin.com/in/codechef-tch-chapter-8909961bb"
                        class="fab fa-linkedin mr-4 text-sm"
                        style="margin-left:4%; color:white; text-decoration: none; "></a></div>
            </h4>

        </div>
        <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2 " style="font-family: Bai Jamjuree;">Copyright &copy;
                2021 | Terms of use | Privacy Policy</small>
        </div>
        <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2 " style="font-family: Bai Jamjuree;"> &copy; Techno India
                Hooghly</small>
        </div>

    </div>















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>


    <!-- SIGNUP MODAL -->
    <div class="modal fade" id="SignUpnModal" tabindex="-1" aria-labelledby="SignupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="SignupModalLabel">TIH SIGNUP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- SIGN-UP FORM -->
                    <div class="container-fluid d-flex justify-content-center align-items-center h-100">
                        <div class="card-2 p-3 text-center py-4">
                            <h4>Create account</h4>
                            <div> <span>Already have an account?</span> 
                                <a href="#LoginModal" class="text-decoration-none" data-bs-toggle="modal"
                                data-bs-target="#LoginModal">Signin</a> 
                            </div>
                            <div class="mt-3 px-3"> <input class="form-control" placeholder="Username"> </div>
                            <div class="input-group px-3 mt-3"> <input type="text" class="form-control"
                                    placeholder="First Name" aria-label="Username"> <span></span> <input type="text"
                                    class="form-control" placeholder="Last Name" aria-label="Server"> </div>
                            <div class="mt-3 px-3"> <input class="form-control" placeholder="E-mail"> </div>
                            <div class="mt-3 d-grid px-3"> <button
                                    class="btn btn-primary btn-block btn-signup text-uppercase"> <span>Signup</span>
                                </button> </div>
                            <div class="px-3">
                                <div class="mt-2 form-check d-flex flex-row"> <input class="form-check-input"
                                        type="checkbox" value="" id="services"> <label class="form-check-label ms-2"
                                        for="services"> I have read and agree to the terms. </label> </div>
                            </div>
                        </div>
                    </div>

                </div>
              
            </div>
        </div>
    </div>




    <!-- LOGIN Modal -->
    <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="LoginModalLabel">TIH LOGIN </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- LOGIN FORM -->
                    <main class="form-signin">
                        <form action="signin">
                            <img class="mb-4 picshift image-fluid" src="images/logo.png" alt="logo" width="60"
                                height="60">

                            <div class="form-floating fspace">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating fspace">
                                <input type="password" class="form-control" id="floatingPassword"
                                    placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>

                            <div class="checkbox mb-3">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
                            <button class=" btn btn-sm btn-success d-grid gap-2 col-4 mx-auto" type="submit">Sign
                                in</button>
                            <p class="mt-5 mb-3 text-muted">© 2021 TIH College Space.</p>
                        </form>
                </div>
            </div>
        </div>
    </div>
</main>





    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    <script src="main.js"></script>
    </div>
    </section>
    <!--Pre-Loader Script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        /*  setTimeout(function(){
              $('.loader_bg').fadeToggle();
          }, 1500);*/
        var preloader = document.getElementById('loader_bg');
        setTimeout(function loaderFun() {
            preloader.style.display = 'none';
        }, 2000);

    </script>
    <!--AOS-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
           offset: 200,
           delay: 100,
           duration: 1000,
         });
      </script>
      <script src="app.js"></script>
</body>

</html>