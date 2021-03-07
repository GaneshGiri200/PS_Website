<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PS International InfoServices</title>
        <link rel="apple-touch-icon" sizes="180x180" href="/Resources/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/Resources/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/Resources/favicon/favicon-16x16.png">
        <link rel="manifest" href="/Resources/favicon/site.webmanifest">
        <link rel="mask-icon" href="/Resources/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/Resources/favicon/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="/Resources/favicon/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="Vendors/CSS/normalize.css">
        <link rel="stylesheet" href="Vendors/CSS/grid.css">
        <link rel="stylesheet" href="Resources/CSS/Contact.css">
        <link rel="stylesheet" href="Resources/CSS/Queries.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header>
            <nav>
                <div class="row">
                    <img src="Resources/Img/PS logo.png" alt="PS International InfoServices Logo" class="logo">
                    <p class="logo-text">PS International InfoServices</p>
                    <p class="logo-text toggle-text">PS International <br>InfoServices</p>

                    <div class="toggle contact-color"></div>
                    <ul class="main-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="About.html">About Us</a></li>
                        <li><a href="Service.html">Services</a></li>
                        <!-- <li><a href="#">Career</a></li> -->
                        <li><a href="Contact.php" class="page">Contact</a></li>
                    </ul>
                </div>  
            </nav>     
        </header>

        <section class="contact">
            <div class="row">
                <div class="col span-1-of-2 form-box">
                        <div class="map-box">
                            <!-- <img src="Resources/Img/contact-us2.jpg" alt="home page info image" class=""> -->
                            <iframe class="map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.50061169717!2d73.93649631439818!3d18.55145607307185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c1603cbeb831%3A0xb7893328aacf3621!2sPS%20International%20InfoServices!5e0!3m2!1sen!2sin!4v1614588658095!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                </div>
                <div class="col span-1-of-2 form-box" id="form">
                   <form method="POST" action="mailer.php">
                    <label for="name">First Name :</label>
                    <input  required type="text" name="name" id="name" placeholder="Enter your first name"><br>
                    <label for="surname">Surname :</label>
                    <input required type="text" name="surname" id="surname" placeholder="Enter your Surname"><br>
                    <label for="email">Email :</label>
                    <input required type="email" name="email" id="email" placeholder="Enter your Email"> <br>
                    <label for="phone">Phone :</label>
                    <input required type="number" name="phone" id="phone" placeholder="Enter your Phone No."><br><br>
                    <label for="message">Message :</label> <br>
                    <textarea required name="message" placeholder="Your Message" id="message"></textarea>
                    <?php
                            if($_GET['success'] == 1) {
                                echo "<div class=\"form-message success\">
                                Your message has been submitted successfully. We will get in touch with you soon.
                                </div>";
                            }

                            if($_GET['success'] == -1) {
                                echo "<div class=\"form-message error\">
                                Something went wrong. please try again !
                                </div>";
                            }
                    ?>
                    <center> <button class="message-btn">Send Message</button></center>
                   </form>
                </div>
            </div>
            <div class="row">
                <div class="address">
                    <h3>Address:</h3>
                    <p>Mahada Colony, Matoshri No. 5, Sahakari Graharachna Sanstha, Near Samta Housing Society, Survey No. 38/1 A, Chandan Nagar, Kharadi road, Pune, Maharashtra 411014.</p>
                    <p><svg xmlns='http://www.w3.org/2000/svg' class='contact-icon' viewBox='0 0 512 512'><title>Call</title><path d='M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0128.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 01-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 01391 480z'/></svg>+91 976 537 0777 </p>
                    <p class="abc"><svg xmlns='http://www.w3.org/2000/svg' class='contact-icon' viewBox='0 0 512 512'><title>Mail</title><path d='M424 80H88a56.06 56.06 0 00-56 56v240a56.06 56.06 0 0056 56h336a56.06 56.06 0 0056-56V136a56.06 56.06 0 00-56-56zm-14.18 92.63l-144 112a16 16 0 01-19.64 0l-144-112a16 16 0 1119.64-25.26L256 251.73l134.18-104.36a16 16 0 0119.64 25.26z'/></svg>enquiry@psinfoline.com </p>
                </div>
            </div>
        </section>

        <footer>
            <div class="row">
                <ul class="footer-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="About.html">About Us</a></li>
                    <li><a href="Service.html">Services</a></li>
                    <!-- <li><a href="#">Career</a></li> -->
                    <li><a href="Contact.php" class="foot">Contact</a></li>
                </ul>
                <ul class="social-icon">
                    <li><a href="https://www.linkedin.com/showcase/ps-international-infoservices/" target="_blank"><svg xmlns='http://www.w3.org/2000/svg' class='linked-in-icon' viewBox='0 0 512 512'><path d='M444.17 32H70.28C49.85 32 32 46.7 32 66.89v374.72C32 461.91 49.85 480 70.28 480h373.78c20.54 0 35.94-18.21 35.94-38.39V66.89C480.12 46.7 464.6 32 444.17 32zm-273.3 373.43h-64.18V205.88h64.18zM141 175.54h-.46c-20.54 0-33.84-15.29-33.84-34.43 0-19.49 13.65-34.42 34.65-34.42s33.85 14.82 34.31 34.42c-.01 19.14-13.31 34.43-34.66 34.43zm264.43 229.89h-64.18V296.32c0-26.14-9.34-44-32.56-44-17.74 0-28.24 12-32.91 23.69-1.75 4.2-2.22 9.92-2.22 15.76v113.66h-64.18V205.88h64.18v27.77c9.34-13.3 23.93-32.44 57.88-32.44 42.13 0 74 27.77 74 87.64z'/></svg></a></li>
                    <li><a href="https://www.facebook.com/psinternationalinfoservices/" target="_blank"><svg xmlns='http://www.w3.org/2000/svg' class='facebook-icon' viewBox='0 0 512 512'><path d='M480 257.35c0-123.7-100.3-224-224-224s-224 100.3-224 224c0 111.8 81.9 204.47 189 221.29V322.12h-56.89v-64.77H221V208c0-56.13 33.45-87.16 84.61-87.16 24.51 0 50.15 4.38 50.15 4.38v55.13H327.5c-27.81 0-36.51 17.26-36.51 35v42h62.12l-9.92 64.77H291v156.54c107.1-16.81 189-109.48 189-221.31z' fill-rule='evenodd'/></svg></a></li>
                </ul>
            </div>
            <div class="row">
                <div class="row footer-message">
                    <p>We are fastest growing HR Counsulting and Techology Company.</p>
                </div>
                <div class="row copyright">
                    <p>Copyrights &copy; 2021. PS International Infoservices Pvt Ltd.</p>
                    <a href="Disclaimer.html">Disclaimer</a>
                </div>
                <div class="row design-text">
                    <p>Designed and dveloped by PS International InfoServices</p>
                </div>
            </div>
        </footer>

        <script type="text/javascript" src="Vendors/Jquery/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="Resources/JavaScript/script.js"></script>
    </body>
</html>