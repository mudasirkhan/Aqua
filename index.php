<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="scss/index.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','Aqua Group','auto');ga('send','pageview');
        </script>

        <header>
            <div class="img-wrapper">
            <div class="wrapper">

                <div class="content">
                    <div class="logo">Aqua Group</div>
                    <nav class="menu">


                                    <ul>
                                        <li><a href="#"> Branches</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                        <li><a href="#">Login</a></li>
                                    </ul>

                    </nav>
                </div>

                <div class="slider">
                    <div class="slide">
                            <h3>
                                Aqua Pharma
                            </h3>
                            <span>
                                Having its office location at Karan Nagar, Main Chowk, Sgr J&K
                            </span>
                            <div class="button">
                                Learn more
                            </div>
                    </div>
                    <div class="image"></div>
                </div>


        <div class="main-content">
            <div class="wrapper">
                <div class="services-container">
                   <div class="text"> What we Serve</div>
                    <div class="services">
                            <div class="items">
                                <img src="img/medicines.png" width="80" height="80" />
                                <h4>Medicine</h4>
                                <span>
                                    Lorem IpsumLorem Ipsum
                                    Lorem IpsumLorem Ipsum
                                    Lorem IpsumLorem Ipsum
                                    </span>

                            </div>
                            <div class="items">
                                <img src="img/engine.png" width="80" height="80" />
                                <h4>Motor</h4>
                                    <span>
                                    Lorem IpsumLorem Ipsum
                                    Lorem IpsumLorem Ipsum
                                    Lorem IpsumLorem Ipsum
                                    </span>
                            </div>
                            <div class="items">
                                <img src="img/crane.png" width="80" height="80" />
                                <h4>Construction</h4>
                                <span>
                                    Lorem IpsumLorem Ipsum
                                    Lorem IpsumLorem Ipsum
                                    Lorem IpsumLorem Ipsum
                                    </span>

                            </div>
                            <div class="items">
                                <img src="img/welder.png" width="80" height="80" />
                                <h4> Fabricator</h4>
                                <span>
                                    Lorem IpsumLorem Ipsum
                                    Lorem IpsumLorem Ipsum
                                    Lorem IpsumLorem Ipsum
                                    </span>

                            </div>
                    </div>
                </div>
            </div>

        </div>
            </div>
        </div>
        </header>
        <div class="contact" id="contact">
            <div class="wrapper">
                    <div class="contact-form">
                        <form id="contact_form" action="" method="POST" >

                        <select placeholder="Select an option" >
                            <option>Option</option>
                            <option>Option</option>
                            <option>Option</option>
                            <option>Option</option>
                        </select>
                        <input type="text" name="name" id="name" placeholder="What would you like to know?"/>
                        <textarea name="email" id="email" placeholder="A bit more in detail... Would you?"></textarea>
                        <input type="submit" value="Here you go" class="button" />
                        </form>
                    </div>
            </div>
        </div>
        <div class="footer">
            <div class="wrapper">
                <div class="footer-links">
                    <div class="footer-link1">
                        <h3>Subscribe Us</h3>
                        <span>
                            Receive updates from all our departments.
                            <br/>Plus we don't spam.
                        </span>
                    <div class="button">
                    you@example.com
                    </div>
                    </div>

                    <div class="footer-link2">
                        <h3>Sitemap</h3>
                        <span>
                            <ul>
                                <li><a href="#">Traders</a></li>
                                <li><a href="#">Pharma</a></li>
                                <li><a href="#">Motors</a></li>
                                <li><a href="#">Fabricators</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">e - Login</a></li>
                            </ul>
                        </span>
                    </div>

                <div class="footer-link3">
                    <h3>Aqua Group</h3>
                    <span>
                        Almighty created 'Aqua' to create and sustain life. We at 'Aqua' started in 1999
                        under the visionary personality of Mr. Sajad Ahmed Pathan. "Aqua" went on adding
                        drops to quench the thirst by giving birth to Aqua Traders , Aqua Pharma, Aqua Motors ,
                        Aqua Engineers and Fabricators.
                        </span>
                </div>
            </div>
            <div class="foot-note">
                with <span class="red">&hearts;</span> by Neptues
            </div>
            </div>



        </div>

        <?php
         $name=$_POST['name'];
         $email=$_POST['email'];

     //       $message=$_POST['message'];
	        $from="From: $name<$email>\r\nReturn-path: $email";

            mail("info@aquagroup.me", $name, $message, $from);


        //echo "Email sent!";


        ?>


    </body>
</html>
