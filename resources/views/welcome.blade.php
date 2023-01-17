<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>licence management system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/asset/css/style.css')}}">


</head>

<body class="position-relative">
    <nav class="navbar navbar-expand-lg navbar-light position-absolute w-100 nav_main">
        <div class="container">
            <a class="navbar-brand" href="#"><img class="img-fluid" src="{{asset('assets/asset/img/logo.png')}}" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <div class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 gap-md-1 gap-2 mb-lg-0">
                        <li class="nav-item btn-2">
                            <a class="nav-link py-md-2 py-1 text-white px-0 " aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item btn-2">
                            <a class="nav-link py-md-2 py-1 text-white px-0" href="#about-us">About us</a>
                        </li>
                        <li class="nav-item btn-2">
                            <a class="nav-link py-md-2 py-1 text-white px-0" href="#contact">Contact Us</a>
                        </li>
                        <li class="nav-item btn-2 btn_hover_0">
                            <a class="nav-link  py-md-2 py-1  px-0" href="#">
                                <div class="btn-group">
                                    <button type="button" class="btn btn_hover_0 text-white p-0 dropdown-toggle"
                                        data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                        <i class="fas fa-globe"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                        <li>
                                            <button class="dropdown-item" type="button">English</button>
                                        </li>
                                        
                                        <li>
                                            <button class="dropdown-item" type="button">French </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" type="button">Italian</button>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </li>

                    </ul>

                </div>
                <div class="ms-lg-5 nav-item btn-2 login_btn"><a
                        class="nav-link text-white py-md-2 px-0 py-1 bg_light rounded-pill" href="#">Login</a></div>
            </div>

        </div>
    </nav>

    <header class="header_section header position-relative  ">
        <div class="overflow-hidden">
            <canvas id="nokey" width="1200" height="500">
            </canvas>
        </div>



        <div class="text-box  text-white">
            <h1 class="heading-primary heading_header mb-md-5  mb-3">
                Licence Management <span class="d-block">System</span>
            </h1>
            <p class="mb-md-5 mb-3 fs-4">
                We’re working respectfully and sincerely alongside clients on Licence Management System</p>
            <a href="#" class="btn  btn-animated fw-bold">Get Licence</a>
        </div>
    </header>
    <!-- how it work -->
    <section class="how-it-works py-md-5 py-3 overflow-hidden">
        <div class="container" data-aos="fade-left">
            <h2 class="section_heading text-center position-relative mb-5 fw-bold">How It Work</h2>

            <div class="row align-items-center">
                <div class="col-md-6 mt-2 mt-md-0    d-flex flex-column gap-4">
                    <div class="box p-md-3 p-2">
                        <h3 class="">Choose Your Flight</h3>
                        <p class="mb-0">Depart conveniently from Orlando, Houston, or Los Angeles</p>
                    </div>
                    <div class="box p-md-3 p-2">
                        <h3 class="">Choose Your Flight</h3>
                        <p class="mb-0">Depart conveniently from Orlando, Houston, or Los Angeles</p>
                    </div>
                    <div class="box p-md-3 p-2">
                        <h3 class="">Choose Your Flight</h3>
                        <p class="mb-0">Depart conveniently from Orlando, Houston, or Los Angeles</p>
                    </div>

                </div>

                <div class="col-md-6 mt-2 mt-md-0">

                    <div class="work_video">
                        <video controls>
                            <source src="{{asset('assets/asset/img/work_vidio.mp4')}}" type="video/mp4">
                            <!-- <source src="movie.ogg" type="video/ogg"> -->
                            Your browser does not support the video tag.
                        </video>
                    </div>

                </div>


            </div>
        </div>
    </section>
    <!-- custmor logos -->
    <section id="product-slider" class="py-md-5 py-3">
        <h2 class="section_heading text-center position-relative mb-5 fw-bold">Custmor Logs</h2>
        <div class="slider">
            <div class="slide-track">
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250"
                        alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250"
                        alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250"
                        alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250"
                        alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250"
                        alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250"
                        alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250"
                        alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250"
                        alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250"
                        alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250"
                        alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250"
                        alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250"
                        alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250"
                        alt="" />
                </div>
                <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250"
                        alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- about us -->
    <section id="about-us" class="about py-md-5 py-4 ">
        <div class="container aos-init aos-animate" data-aos="fade-right">
            <h2 class="section_heading text-center position-relative mb-5 fw-bold">About Us</h2>
            <div class="row gy-4">
                <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
                    <img src="./asset/img/header_main.jpg" class="img-fluid" alt=""></a>
                </div>
                <div class="col-lg-6 content order-last order-lg-first">
                    <p> Dolor iure expedita id fuga asperiores qui sunt consequatur minima. Quidem voluptas deleniti.
                        Sit quia molestiae quia quas qui magnam itaque veritatis dolores. Corrupti totam ut eius
                        incidunt reiciendis veritatis asperiores placeat.</p>
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate"> <i
                                class="bi bi-diagram-3"></i>
                            <div>
                                <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                                <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate"> <i
                                class="bi bi-fullscreen-exit"></i>
                            <div>
                                <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                                <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata
                                    redi</p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate"> <i
                                class="bi bi-broadcast"></i>
                            <div>
                                <h5>Voluptatem et qui exercitationem</h5>
                                <p>Et velit et eos maiores est tempora et quos dolorem autem tempora incidunt maxime
                                    veniam</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonial-area " class="testimonial_section  overflow-hidden text-white py-md-5 py-4">
        <div class="container" data-aos="fade-left">
            <div class="row pb-md-4">

                <div class="col-md-8 offset-md-2 text-center">
                    <h2 class="section_heading  position-relative mb-5 fw-bold">A Word From Our Customers</h2>
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam. </p>

                </div>

            </div>
            <div class="testi-wrap">

                <div class="client-single active position-1" data-position="position-1">
                    <div class="client-img">
                        <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299"
                            alt="">
                    </div>
                    <div class="client-comment ">
                        <h3 class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                        <span><i class="fa fa-quote-left"></i></span>
                    </div>
                    <div class="client-info ">
                        <h3 class="text-white">Brown Tech Int</h3>
                        <p><a class="text-white" href="#" href="https://brown.com">BTI</a></p>
                    </div>
                </div>

                <div class="client-single inactive position-2" data-position="position-2">
                    <div class="client-img">
                        <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299"
                            alt="">
                    </div>
                    <div class="client-comment">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                        <span><i class="fa fa-quote-left"></i></span>
                    </div>
                    <div class="client-info">
                        <h3>BTI</h3>
                        <p><a href="#">Lahore</a></p>
                    </div>
                </div>

                <div class="client-single inactive position-3" data-position="position-3">
                    <div class="client-img">
                        <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299"
                            alt="">
                    </div>
                    <div class="client-comment">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                        <span><i class="fa fa-quote-left"></i></span>
                    </div>
                    <div class="client-info">
                        <h3>Johin</h3>
                        <p><a href="#">New York</a></p>
                    </div>
                </div>

                <div class="client-single inactive position-4" data-position="position-4">
                    <div class="client-img">
                        <img src="https://media.licdn.com/dms/image/C4E03AQFbvYtvSeyw-g/profile-displayphoto-shrink_100_100/0?e=1574294400&v=beta&t=49_VH9HRvqymP-VLETlFhFt4idmunZPhIQfALwaTrmA"
                            alt="">
                    </div>
                    <div class="client-comment">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                        <span><i class="fa fa-quote-left"></i></span>
                    </div>
                    <div class="client-info">
                        <h3>Messi</h3>
                        <p><a href="#">Softwate</a></p>
                    </div>
                </div>

                <div class="client-single inactive position-5" data-position="position-5">
                    <div class="client-img">
                        <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299"
                            alt="">
                    </div>
                    <div class="client-comment">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                        <span><i class="fa fa-quote-left"></i></span>
                    </div>
                    <div class="client-info">
                        <h3>smith</h3>
                        <p><a href="#">IT department</a></p>
                    </div>
                </div>

                <div class="client-single inactive position-6" data-position="position-6">
                    <div class="client-img">
                        <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299"
                            alt="">
                    </div>
                    <div class="client-comment">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                        <span><i class="fa fa-quote-left"></i></span>
                    </div>
                    <div class="client-info">
                        <h3>gold</h3>
                        <p><a href="#">Business man</a></p>
                    </div>
                </div>

                <div class="client-single inactive position-7" data-position="position-7">
                    <div class="client-img">
                        <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299"
                            width="40px" alt="">
                    </div>
                    <div class="client-comment">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                        <span><i class="fa fa-quote-left"></i></span>
                    </div>
                    <div class="client-info">
                        <h3>gold smith</h3>
                        <p><a href="#">gold smith</a></p>
                    </div>
                </div>

            </div>
        </div>
    </section>
  <!-- custmor logos -->
  <section id="product-slider" class="py-md-5 py-3">
    <h2 class="section_heading text-center position-relative mb-5 fw-bold">Partner logs</h2>
    <div class="slider">
        <div class="slide-track">
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250"
                    alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250"
                    alt="" />
            </div>
        </div>
    </div>
</section>

    <section id="contact" class="contact section_contact py-md-5 py-4">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-title text-center">
                <h2 class="section_heading text-center  position-relative mb-5 fw-bold">Contact Us</h2>

            </div>
            <div class="row">
                <div class="col-md-5 d-flex ">
                    <div class="info w-100">
                        <div class="address"> <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                        <div class="email"> <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>
                        <div class="phone"> <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div> <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="col-md-7  d-flex ">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6"> <label for="name">Your Name</label> <input type="text"
                                    name="name" class="form-control" id="name" required=""></div>
                            <div class="form-group col-md-6"> <label for="name">Your Email</label> <input type="email"
                                    class="form-control" name="email" id="email" required=""></div>
                        </div>
                        <div class="form-group"> <label for="name">Subject</label> <input type="text"
                                class="form-control" name="subject" id="subject" required=""></div>
                        <div class="form-group"> <label for="name">Message</label><textarea class="form-control"
                                name="message" rows="10" required="" data-gramm="false"
                                wt-ignore-input="true"></textarea></div>

                        <div class="text-center mt-4"><button type="submit" class="btn">Send Message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->

    <footer class="text-center py-md-5 py-3 text-lg-start text-white">

        <div class="container p-4 pb-0">
            <section class="">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                       <div class="footer_logo">

                           <img src="{{asset('assets/asset/img/logo.png')}}" alt="" srcset="">
                       </div>
                        
                        <!-- <div class="mb-2">
                            Here you can use rows and columns to organize your footer
                            content. Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit.
                        </div> -->
                    </div>
                    <hr class="w-100 clearfix d-md-none" />

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                        <div class="mb-2">
                            <a class="text-white" href="#">Licence</a>
                        </div>
                        <div class="mb-2">
                            <a class="text-white" href="#">Licence Management System</a>
                        </div>
                        <div class="mb-2">
                            <a class="text-white" href="#">BrandFlow</a>
                        </div>
                        <div class="mb-2">
                            <a class="text-white" href="#">Angular</a>
                        </div>
                    </div>

                    <hr class="w-100 clearfix d-md-none" />

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Useful links
                        </h6>
                        <div class="mb-2">
                            <a class="text-white" href="#">Your Account</a>
                        </div>
                        <div class="mb-2">
                            <a class="text-white" href="#">Become an Affiliate</a>
                        </div>
                        <div class="mb-2">
                            <a class="text-white" href="#">Shipping Rates</a>
                        </div>
                        <div class="mb-2">
                            <a class="text-white" href="#">Help</a>
                        </div>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <div class="mb-2"><i class="fas fa-home mr-3"></i> New York, NY 10012, US</div>
                        <div class="mb-2"><i class="fas fa-envelope mr-3"></i> info@gmail.com</div>
                        <div class="mb-2"><i class="fas fa-phone mr-3"></i> + 01 234 567 88</div>
                        <div class="mb-2"><i class="fas fa-print mr-3"></i> + 01 234 567 89</div>
                    </div>
                </div>
            </section>

            <hr class="my-3">

            <section class="p-3 pt-0 footer_bottom">
                <div class="row d-flex align-items-center">
                    <div class="col-md-7 col-lg-8 text-center text-md-start">

                        <div class="p-3">
                            © 2023 Copyright:
                            <a class="text-white" href="#" href="https://browntech.com/">browntech.com</a>
                        </div>
                    </div>

                    <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">

                        <a class="btn btn-outline-light btn-floating m-1" href="#" class="text-white" role="button"><i
                                class="fab fa-facebook-f"></i></a>

                        <a class="btn btn-outline-light btn-floating m-1" href="#" class="text-white" role="button"><i
                                class="fab fa-twitter"></i></a>

                        <a class="btn btn-outline-light btn-floating m-1" href="#" class="text-white" role="button"><i
                                class="fab fa-google"></i></a>

                        <a class="btn btn-outline-light btn-floating m-1" href="#" class="text-white" role="button"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </section>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/asset/js/ani-particals.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</html>
<script>
    $(document).ready(function () {

        $('.client-single').on('click', function (event) {
            event.preventDefault();

            var active = $(this).hasClass('active');

            var parent = $(this).parents('.testi-wrap');

            if (!active) {
                var activeBlock = parent.find('.client-single.active');

                var currentPos = $(this).attr('data-position');

                var newPos = activeBlock.attr('data-position');

                activeBlock.removeClass('active').removeClass(newPos).addClass('inactive').addClass(currentPos);
                activeBlock.attr('data-position', currentPos);

                $(this).addClass('active').removeClass('inactive').removeClass(currentPos).addClass(newPos);
                $(this).attr('data-position', newPos);

            }
        });

    }(jQuery));
</script>

<!-- aos animation -->
<script>
    AOS.init();
</script>