<!DOCTYPE html>
<html lang="en">
<head>
    <title>Thank You</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/style.css">


    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>

    <script src='js/device.min.js'></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php
                $cookie_name = 'purchase';
                $to = 'perfectholidaylights@gmail.com';

                if(isset($_COOKIE[$cookie_name]))
                    $message = $_COOKIE[$cookie_name];
                else die("You cannot Access the Thank You page Directly");
                $headers = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
                $headers .= "From: Clients of Perfect Holiday Light <webmaster@perfectholidaylights.com>\r\n";
                $headers .= 'X-Mailer: PHP/' . phpversion();
                $subject = 'Email From Clients';

                mail($to, $subject, $message, $headers);
            ?>

            <div class="col-xs-12 text-center">
                <h1>Thank​ ​you ​​for​ ​your​ ​inquiry</h1>
                <h5>One of our agents will contact you shortly.</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a class="home-link" href="../index.html">Home</a>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h3 style="font-size:250%">Contact Us</h3>
                            <hr>
                        </div>
                    </div>
                    <div class="row" style="margin:0">
                        <div class="col-sm-7 col-xs-12">
                            <p class="footer-phone">
                                <i class="fa fa-phone"></i> <a
                                    href="tel:+951-377-2800">951-377-2800</a>
                                <br>or toll free at 855-862-4746
                            </p>
                        </div>
                        <div class="col-sm-5 col-xs-12 text-right">
                            <p class="privacy-footer"><br />Perfect Holiday Lights | 2017 | All Rights
                                Reserved</p>
                        </div>
                    </div>
                </div>
            </section>
            <p>&nbsp;</p>
    </footer>

    <script>
        function confirmSubmit(){
            window.location.replace("../index.html");
        }
    </script>
</body>
</html>