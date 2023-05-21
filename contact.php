<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php' ?>
</head>

<body>

    <!-- Main content Start -->
    <div class="main-content">

        <?php include 'header.php' ?>


        <!-- Banner Section Start -->
        <div class="rs-banner main-home">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content-wrap">
                            <div class="content-txt text-center wow fadeinup">

                                <h1 class="title">
                                    Contact Us</h1>
                                <div class="description">

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Banner Section End -->

        <!-- Contact Section Start -->
        <div class="rs-contact contact-style5 pt-130 md-pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 md-mb-60">
                        <div class="contact-box">
                            <div class="sec-title mb-45">

                                <h2 class="title">Get In Touch</h2>
                            </div>
                            <div class="address-box mb-25">
                                <div class="address-icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">Email:</span>
                                    <a href="mailto:info@antisoftware.store">info@antisoftware.store</a>
                                </div>
                            </div>
                            <div class="address-box mb-25">
                                <div class="address-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">Phone:</span>
                                    <a href="tel: +1 (888) 908-9882">+1 (888) 908-9882</a>
                                </div>
                            </div>
                            <div class="address-box">
                                <div class="address-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">Address:</span>
                                    <div class="desc">516 Elmwood Ave, Buffalo, NY 14222, United States</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 pl-70 md-pl-15">
                        <div class="contact-widget">
                            <div id="form-messages"></div>
                            <form method="post" action="mail.php">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-lg-12 mb-20">
                                            <div class="single-form">
                                                <input class="from-control" type="text" id="name" name="name" placeholder="Full Name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-20">
                                            <div class="single-form">
                                                <input class="from-control" type="email" id="email" name="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-20">
                                            <div class="single-form">
                                                <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-22">
                                            <div class="single-form">
                                                <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">

                                        <button class="readon download submit-faq  submit-btn" id="summit" type="submit" style="color:#fff">Submit</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-canvas pt-130 md-pt-80">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d715.0439173096992!2d-78.87822138862526!3d42.911068148083494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d313a2ff619d8b%3A0xb91511fa75a0670b!2sStreet%20Asian%20Food!5e0!3m2!1sen!2sin!4v1663913886264!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!-- Contact Section Start -->

    </div>
    <!-- Main content End -->

    <?php include 'footer.php' ?>
</body>

</html>