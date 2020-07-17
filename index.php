<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/loader.css"> -->
    <link rel="icon" type="image/png" href="http://example.com/myicon.png">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"> -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"> -->
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <!-- <link rel="stylesheet" href="css/normalize.min.css"> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <script src="js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>AVA -</title>
</head>

<body>
    <div class="wrapper">

        <!-- Preloader here -->
        <div class="boy" id="loader-wrapper">

            <div class="preloader" id="loader">
                <div class="preloader__square"></div>
                <div class="preloader__square"></div>
                <div class="preloader__square"></div>
                <div class="preloader__square"></div>

            </div>


            <!-- <div class="status">Loading<span class="status__dot">.</span><span class="status__dot">.</span><span class="status__dot">.</span></div> -->

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>
        <div class="wrapper preload" id="content">
            <!-- header starts here -->
            <section class="hero" id="home">
                <header>

                    <section class="container nav__header">
                        <nav class="navbar navbar-expand-lg  navbar-light">
                            <a class="navbar-brand a-text flex" href="index.html">
                                <img src="./Assets/general/LOGO.png">
                            </a>
                            </button>

                        </nav>
                    </section>
                </header>

                <!-- Hero here -->

                <div class="container">
                    <div class="row palm-view-hero ">
                        <div class="col-md-5 col-lg-5 " data-aos="fade-up" data-aos-duration="2000" data-aos-delay="700" data-aos-anchor-placement="center-bottom">
                            <h1> Tired of forgetting schedules?</h1>
                            <p class="mt-3">Say Goodbye to attention difficulty, limited attention and <br> impulsiveness. An app made specially for you. <br> Be the first to know when we launch
                            </p>
                            <div>
                                <form method="POST" action="./process.php">
                                    <div class="input-group mt-4">
                                        <input type="email" class="form-control" placeholder="Enter email address" aria-describedby="basic-addon2" name='email'>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline" value="submit" type="submit">NOTIFY
                                                ME</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <section class="phone">
                            <div>
                                <div class="col-md-6 phone col-lg-6" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="1400" data-aos-anchor-placement="center-bottom">
                                    <img id='test__1' src="./Assets/general/Hero Image (3).png" alt="">
                                </div>

                                <div class="col-md-6 small__phone col-lg-6" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="1400" data-aos-anchor-placement="center-bottom">
                                    <img src="./Assets/general/Hero Image (3).png" alt="">
                                </div>
                            </div>
                        </section>
                    </div>
            </section>

            <!-- App features mobile section here -->
            <!-- <section class="container app__features__mobile">
                <div class="app__features">
                    <div class="caption">
                        <h4>App Features </h4>
                        <p>Awesome features of ADHD Virtual Assistant</p>
                    </div>
                </div>

                <section class="scroll">
                    <main>
                        <div class="row">
                            <div class="contents__slide col-md-5 col-lg-5">
                                <article>
                                    <section>
                                        <div id="trigger__1" class="mt-5 slide__caption" data-aos="fade-down" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                                            <h4>INCREASE your <br> Productivity</h4>
                                            <p>With ADHD Virtual Assistant, you can take charge of your whole day, maximizing your already known schedules and routines with our artificial intelligence to help you take charge of your day. </p>
                                        </div>
                                    </section>
                                    <section>
                                        <div id="trigger__1" class="mt-5 slide__caption" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300" data-aos-anchor-placement="center-bottom">
                                            <h4>INCREASE your <br> Productivity</h4>
                                            <p>With ADHD Virtual Assistant, you can take charge of your whole day, maximizing your already known schedules and routines with our artificial intelligence to help you take charge of your day. </p>
                                        </div>
                                    </section>
                                    <section>
                                        <div id="trigger__1" class="mt-5 slide__caption" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="500" data-aos-anchor-placement="center-bottom">
                                            <h4>GET NOTIFIED WHEN YOU GET <br> DISTRACTED FROM AN ONGOING TASK</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rutrum eleifend arcu sit amet hendrerit. Etiam tempor ante ac ipsum finibus, at consectetur urna tristique. Nulla nec lacinia velit.</p>
                                        </div>
                                    </section>
                                    <section>
                                        <div id="trigger__1" class="mt-5 slide__caption" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="700" data-aos-anchor-placement="center-bottom">
                                            <h4> Keep Record of your <br>Productivity </h4>
                                            <p>ADHD Assistant helps you keep record of yourproductivity and in turn helps suggest ways to improve and milestones you’ve achieved</p>
                                        </div>
                                    </section>
                                    <section>
                                        <div id="trigger__1" class="mt-5 slide__caption" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="900" data-aos-anchor-placement="center-bottom">
                                            <h4>HELPS IN Managing your <br> uniqueness </h4>
                                            <p>Deriving from your activities and behaviours each day, AVA suggests articles that can help improve a few areas and behaviours that need to be worked on to become a better version of you!</p>
                                        </div>
                                    </section>

                                    <section>
                                        <div id="trigger__2" class="mt-5 slide__caption" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="1100" data-aos-anchor-placement="center-bottom">
                                            <h4>GET NOTIFIED WHEN YOU <br> PERFORM IMPULSIVE TASKS</h4>
                                            <p>With our Artificial Inteligence, ADHD Virtual Assitant would alert you when you tend to make impulsive behaviours like buying repetitive things.</p>
                                        </div>
                                    </section>

                                </article>
                            </div>

                    </main>
                </section>
            </section> -->



            <!-- App features desktop here -->

            <!-- <section class="container app__features__desktop">
                <div class="app__features">
                    <div class="caption">
                        <h4>App Features </h4>
                        <p>Awesome features of ADHD Virtual Assistant</p>
                    </div>
                </div>

                <section class="scroll">
                    <main>
                        <div class="row">
                            <div class="contents__slide col-md-5 col-lg-5">
                                <article>
                                    <section>
                                        <div id="trigger__1" class="mt-5 slide_caption">
                                            <h4>INCREASE your <br> Productivity</h4>
                                            <p>With ADHD Virtual Assistant, you can take charge of your whole day, maximizing your already known schedules and routines with our artificial intelligence to help you take charge of your day. </p>
                                        </div>
                                    </section>
                                    <section>
                                        <div id="trigger__1" class="mt-5 slide__caption">
                                            <h4>INCREASE your <br> Productivity</h4>
                                            <p>With ADHD Virtual Assistant, you can take charge of your whole day, maximizing your already known schedules and routines with our artificial intelligence to help you take charge of your day. </p>
                                        </div>
                                    </section>
                                    <section>
                                        <div id="trigger__1" class="mt-5 slide__caption">
                                            <h4>GET NOTIFIED WHEN YOU GET <br> DISTRACTED FROM AN ONGOING TASK</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rutrum eleifend arcu sit amet hendrerit. Etiam tempor ante ac ipsum finibus, at consectetur urna tristique. Nulla nec lacinia velit.</p>
                                        </div>
                                    </section>
                                    <section>
                                        <div id="trigger__1" class="mt-5 slide__caption">
                                            <h4> Keep Record of your <br>Productivity </h4>
                                            <p>ADHD Assistant helps you keep record of yourproductivity and in turn helps suggest ways to improve and milestones you’ve achieved</p>
                                        </div>
                                    </section>
                                    <section>
                                        <div id="trigger__1" class="mt-5 slide__caption">
                                            <h4>HELPS IN Managing your <br> uniqueness </h4>
                                            <p>Deriving from your activities and behaviours each day, AVA suggests articles that can help improve a few areas and behaviours that need to be worked on to become a better version of you!</p>
                                        </div>
                                    </section>

                                    <section>
                                        <div id="trigger__2" class="mt-5 slide__caption">
                                            <h4>GET NOTIFIED WHEN YOU <br> PERFORM IMPULSIVE TASKS</h4>
                                            <p>With our Artificial Inteligence, ADHD Virtual Assitant would alert you when you tend to make impulsive behaviours like buying repetitive things.</p>
                                        </div>
                                    </section>

                                </article>
                            </div>
                            <div class="col-md-3 col-lg-3"></div>

                            <div class="images__content col-md-4 col-lg-4">
                                <aside>
                                    <div class=" ">
                                        <img id='img' class="fixed" src="./Assets/screenshot/1.png" alt="">
                                    </div>

                                    <div class="itm animated fadeOut" id="img__2">
                              
                                    </div>

                                    <div class="itm animated fadeOut" id="img__3">
                                 
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </main>
                </section>
            </section> -->



            <!-- App screens here  mobile only-->
            <section class="app__screens">
                <div class="container">
                    <div class="app__features">
                        <div class="caption">
                            <h4>App Features </h4>
                            <p>Awesome features of ADHD Virtual Assistant</p>
                        </div>
                    </div>
                    <!-- screen 1 -->
                    <div class="row" >
                        <div class="col-md-7" >
                            <img src="./Assets/screenshot/1.png" alt="">
                        </div>
                        <div class="col-md-5 headers">
                            <h4>INCREASE YOUR PRODUCTIVITY</h4>
                            <p>With ADHD Virtual Assistant, you can take charge of your whole day, maximizing your already known schedules and routines with our artificial intelligence to help you take charge of your day.</p>
                        </div>
                    </div>

                    <!-- screen 2 -->
                    <div class="row">
                        <div class="col-md-5 headers">

                            <h4>INCREASE YOUR PRODUCTIVITY</h4>
                            <p>With ADHD Virtual Assistant, you can take charge of your whole day, maximizing your already known schedules and routines with our artificial intelligence to help you take charge of your day.</p>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-4">
                            <img src="./Assets/screenshot/2.png" alt="">
                        </div>
                    </div>

                    <!-- screen 3 -->



                    <div class="row">
                        <div class="col-md-7">
                            <img src="./Assets/screenshot/3.png" alt="">
                        </div>
                        <div class="col-md-5 headers">
                            <h4>KEEP RECORS OF YOUR PRODUCTIVITY</h4>
                            <p>ADHD Assistant helps you keep record of yourproductivity and in turn helps suggest ways to improve and milestones you’ve achieved</p>
                        </div>
                    </div>

                    <!-- screen 4  -->


                    <div class="row">
                        <div class="col-md-5 headers">

                            <h4>HELPS IN MANAGING YOUR UNIQUENESS</h4>
                            <p>Deriving from your activities and behaviours each day, AVA suggests articles that can help improve a few areas and behaviours that need to be worked on to become a better version of you!</p>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-4">
                            <img src="./Assets/screenshot/4.png" alt="">
                        </div>
                    </div>

                    <!-- screen 5 -->


                    <div class="row">
                        <div class="col-md-7">
                            <img src="./Assets/screenshot/5.png" alt="">
                        </div>
                        <div class="col-md-5 headers">
                            <h4>GET NOTIFIED WHEN YOU PERFORM IMPULSIVE TASKS</h4>
                            <p> With our Artificial Inteligence, ADHD Virtual Assitant would alert you when you tend to make impulsive behaviours like buying repetitive things.</p>
                        </div>
                    </div>


                    <!-- screen 6 -->


                    <div class="row">
                        <div class="col-md-5 headers">

                            <h4>GET NOTIFIED WHEN YOU GET DISTRACTED FROM AN ONGOING TASK</h4>
                            <p>After sensing youv’ve been distracted from an ongoing task by our amazing Artificial intelligence, AVA notifies you to stay on Track.</p>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-4">
                            <img src="./Assets/screenshot/6.png" alt="">
                        </div>
                    </div>
                </div>
            </section>



            <!-- Why use section here     -->
            <section class="adhd">
                <div class="container">

                    <div class="app__features">
                        <div class="caption pt-5">
                            <h4>Why Use ADHD Assistant? </h4>
                            <div class="p">
                                <p>Fermentum duis egestas non natoque gravida faucibus leo tempor egestas. Eu leo lectus ligula nec malesuada id leo proin pretium. Justo vulputate nunc, ut dictum in bibendum <br> volutpat massa rutrum.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5 ">
                        <div class="col-md-6 col-lg-6">
                            <div class="row">
                                <div class="col-2 count" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                                    <h5 class="pt-1">01</h5>
                                </div>
                                <div class="col-8 why__use__header">
                                    <p class="why__header">See how customers connect</p>
                                    <p class="why__description"> Clicks, calls, bookings, follows – see how your customers engage with your Business Profile.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="row">
                                <div class="col-2 count" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                                    <h5 class="pt-1">02</h5>
                                </div>
                                <div class="col-8 why__use__header">
                                    <p class="why__header">See how customers connect</p>
                                    <p class="why__description"> Clicks, calls, bookings, follows – see how your customers engage with your Business Profile.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="row">
                                <div class="col-2 count" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000" data-aos-delay="500">
                                    <h5 class="pt-1">03</h5>
                                </div>
                                <div class="col-8 why__use__header">
                                    <p class="why__header">See how customers connect</p>
                                    <p class="why__description"> Clicks, calls, bookings, follows – see how your customers engage with your Business Profile.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="row">
                                <div class="col-2 count" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="1000" data-aos-delay="500">
                                    <h5 class="pt-1">04</h5>
                                </div>
                                <div class="col-8  why__use__header">
                                    <p class="why__header">See how customers connect</p>
                                    <p class="why__description"> Clicks, calls, bookings, follows – see how your customers engage with your Business Profile.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- screenshots here -->
            <sectio class="screenshots">
                <div class="container">
                    <!-- <div class="row"> -->
                    <div class="center">
                        <div><img src="./Assets/carousel/1.png" alt=""></div>
                        <div><img src="./Assets/carousel/1.png" alt=""></div>
                        <div><img src="./Assets/carousel/2.png" alt=""></div>
                        <div><img src="./Assets/carousel/1.png" alt=""></div>
                        <div><img src="./Assets/carousel/1.png" alt=""></div>
                    </div>
                    <!-- </div> -->
                </div>
            </sectio>
            <!-- HEADER logo-->


            <!-- Notification section here -->
            <section class="notify">
                <div class="container">

                    <div class="notification">
                        <h2 id='test2'>Be the first to get notified when ADHD Virtual Assistant is launched online.
                        </h2>
                        <div class="col-md-6 col-lg-6 f">
                            <form class="needs-validation" method="POST" action="./process.php">
                                <div class="input-group mt-4">

                                    <input type="email" class="form-control" name='email' placeholder="Enter email address" aria-describedby="basic-addon2">

                                    <div class="input-group-append">
                                        <button class="btn btn-outline" onclick='change()' value="submit" type="submit">NOTIFY ME</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </section>

            <!-- footer section here -->
            <section class="foot">
                <div>
                    <footer>
                        <div class="container">
                            <div class="row foot__row">
                                <div class="col-md-2">
                                    <img src="./Assets/general/Logo (3).png" alt="">

                                </div>
                                <div class="col-md-4"></div>

                                <div class="col-md-6 footer__credit">
                                    <p> Designed by <span><a href='https://dribbble.com/ojotule'>@Anibe</a> </span>, Coded by <span><a
                                                href="https://github.com/Alphajeez96">@Alphajeez</a> </span> </p>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </section>
            </div>
        </div>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.11.1.min.js "></script>

        <script src="./js/main.js"></script>

        <script>
            $(document).ready(function() {
                setTimeout(function() {
                    $('.wrapper').addClass('loaded');

                }, 3000);
            });



            jQuery(function() {

                $(window).load(function() {

                    $('.wrapper').removeClass('preload');

                });

            });
        </script>
        <script>
            AOS.init();
        </script>

        <script>
            $(document).ready(function() {

                $('.center').slick({
                    centerMode: true,
                    centerPadding: '60px',
                    slidesToShow: 3,
                    autoplay: true,
                    autoplaySpeed: 1000,
                    responsive: [{
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3
                        }
                    }, {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }]
                });

            });
        </script>
        <script src="./js/main.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript " src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js "></script>
</body>



</html>