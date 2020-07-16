<?php 
include('./includes/header.php')
?>

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

                    <section class="container ">
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
                        <div class="col-md-5 col-lg-5 " data-aos="fade-up" data-aos-duration="2000" data-aos-delay="700" data-aos-anchor-placement="center-bottom" >
                            <h1> Tired of forgetting schedules?</h1>
                            <p class="mt-3">Say Goodbye to attention difficulty, limited attention and <br> impulsiveness. An app made specially for you. <br> Be the first to know when we launch</p>
                            <div>
                                <form method="POST" action="./process.php">
                                    <div class="input-group mt-4">
                                        <input type="email" class="form-control"  placeholder="Enter email address" aria-describedby="basic-addon2" name='email'>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline" value="submit" type="submit">NOTIFY ME</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <section class="phone">
                            <div>
                                <div class="col-md-6 phone col-lg-6" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="1400" data-aos-anchor-placement="center-bottom">
                                    <img src="./Assets/general/Hero Image (3).png" alt="">
                                </div>
                            </div>
                        </section>
                    </div>
            </section>

            <!-- App features section here -->
            <!-- <section class="container">

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
                                <div id="trigger__1" class="mt-5 slide__caption">
                                    <h4>Lorem ipsum <br> dolor sit amet 1</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rutrum eleifend arcu sit amet hendrerit. Etiam tempor ante ac ipsum finibus, at consectetur urna tristique. Nulla nec lacinia velit.</p>
                                </div>
                            </section>

                            <section>
                                <div id="trigger__2" class="mt-5 slide__caption">
                                    <h4>Lorem ipsum <br> dolor sit amet 2</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rutrum eleifend arcu sit amet hendrerit. Etiam tempor ante ac ipsum finibus, at consectetur urna tristique. Nulla nec lacinia velit.</p>
                                </div>
                            </section>

                        </article>
                    </div>
                    <div class="col-md-3 col-lg-3"></div>

                    <div class="images__content col-md-4 col-lg-4">
                        <aside>
                            <div class="itm " id="img__1">
                                <img src="./Assets/general/Hero Image (3).png" alt="">
                            </div>

                            <div class="itm animated fadeOut" id="img__2">
                                <img src="./Assets/general/main (1).png " alt="">
                                <img src="./Assets/general/Hero Image (3).png" alt="">
                            </div>

                            <div class="itm animated fadeOut" id="img__3">
                                <img src="./Group 315.png" alt="">
                            </div>
                        </aside>
                    </div>
                </div>
            </main>
        </section>
    </section> -->

            <!-- Why use ssection here     -->
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
                        <div class="col-md-6 my-5">
                            <div class="row">
                                <div class="col-2 count" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="1000">
                                    <h5 class="pt-1">01</h5>
                                </div>
                                <div class="col-6">
                                    <p class="why__header">See how customers connect</p>
                                    <p class="why__description"> Clicks, calls, bookings, follows – see how your customers engage with your Business Profile.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 my-5">
                            <div class="row">
                                <div class="col-2 count" data-aos="flip-right"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="1000" data-aos-delay="500">
                                    <h5 class="pt-1">02</h5>
                                </div>
                                <div class="col-6">
                                    <p class="why__header">See how customers connect</p>
                                    <p class="why__description"> Clicks, calls, bookings, follows – see how your customers engage with your Business Profile.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6  my-5">
                            <div class="row">
                                <div class="col-2 count"  data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="1000" data-aos-delay="700">
                                    <h5 class="pt-1">03</h5>
                                </div>
                                <div class="col-6">
                                    <p class="why__header">See how customers connect</p>
                                    <p class="why__description"> Clicks, calls, bookings, follows – see how your customers engage with your Business Profile.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 my-5">
                            <div class="row">
                                <div class="col-2 count"  data-aos="flip-right"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="1000" data-aos-delay="900">
                                    <h5 class="pt-1">04</h5>
                                </div>
                                <div class="col-6">
                                    <p class="why__header">See how customers connect</p>
                                    <p class="why__description"> Clicks, calls, bookings, follows – see how your customers engage with your Business Profile.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- screenshots here -->
            <section class="screenshots">
                <div class="container">
                
                    <!-- <div class="app__features">
                        <div class="caption pt-5">
                            <h4>Screenshots </h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <img src="./Assets/screenshot/screen 1.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-4">
                            <img src="./Assets/screenshot/screen2.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-4">
                            <img src="./Assets/screenshot/screen3.png" class="img-fluid" alt="">
                        </div>
                    </div> -->
                </div>
            </section>
            <!-- HEADER logo-->
    

            <!-- Notification section here -->
            <section class="notify">
                <div class="container">

                    <div class="notification">
                        <h2>Be the first to get notified when ADHD Virtual Assistant is launched <br> online.</h2>
                        <div class="col-md-6 col-lg-6 f">
                            <form  class="needs-validation" method="POST" action="./process.php">
                                <div class="input-group mt-4" >
                                   
                                    <input type="email" class="form-control"  name='email' placeholder="Enter email address" aria-describedby="basic-addon2">
    
                                    <div class="input-group-append">
                                        <button class="btn btn-outline" value="submit" type="submit">NOTIFY ME</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </section>

            <!-- footer section here -->
            <section class="foot" >
                <div >
                <footer >
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="./Assets/general/Logo (3).png" alt="">

                            </div>
                            <div class="col-md-4"></div>

                            <div class="col-md-6 footer__credit">
                                <p> Designed by <span><a href=#>@Anibe</a> </span>, Coded by <span><a href="#">@Alphajeez</a> </span> </p>
                            </div>
                        </div>
                    </div>
                </footer>
</div>
            </section>
            </div>
        </div>
<?php
include('./includes/scripts.php')
?>
</body>

</html>