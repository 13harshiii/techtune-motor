<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="Garage/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="Garage/css/slider.css" type="text/css" media="screen" />
    <script type="text/javascript" src="Garage/js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="Garage/js/jquery.nivo.slider.js"></script>
    <!-- Scroll top -->
    <script type="text/javascript" src="Garage/js/move-top.js"></script>
    <script type="text/javascript" src="Garage/js/easing.js"></script>
    <script type="text/javascript">
        $(window).load(function () {
            $('#slider').nivoSlider();
        });
    </script>
</head>
<body>
    <div>
        <p style="list-style-type: none; margin: 5px; padding: 25px;"></p>

        <a href='loginform.php'><input type='button' name='login' value='Login' style='position: absolute; top: 5%; left: 87%; background-color: gray; color: black; width: 100px; height: 30px; border-radius: 45px; border-style: none;'></a>;

    </div>
    <div class="wrap">
        <div class="header">
            <div class="header_image">
                <img src="Garage/images/images_1/9.jpg" alt="" />
                <div class="header_desc">
                    <div class="logo">
                        <a href="index.html"><img src="Garage/images/logo2.png" alt="" /></a>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="menu">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="Garage/about.html">About</a></li>
                        <!-- <li><a href="Garage/services.html">Services</a></li> -->
                        <!-- <li><a href="blog.html">Blog</a></li> -->
                        <li><a href="Garage/contact.html">Contact</a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="social-icons">
                    <ul>
                        <li><a class="facebook" href="#" target="_blank"> </a></li>
                        <li><a class="twitter" href="#" target="_blank"></a></li>
                        <li><a class="googleplus" href="#" target="_blank"></a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div>
        <p style="font-size: 2em; color: #E5B840; padding: 1px 20px; font-family: 'bebas_neueregular'; position: absolute; top: 80%; left: 34%">SIGN UP</p>
    </div>
    <div style="font-size: 2em; color: #E5B840; padding: 255px 20px; font-family: 'bebas_neueregular'; ">
        <form method="post" action="" style="padding-bottom: 100px;">
            <table style="margin: 0 auto;">
                <tr>
                    <td><input type="text" name="email" placeholder="Email" style="height: 30px; border-radius: 45px; border: none; font-size: 15px;"></td>
                </tr>
                <tr>
                    <td><input type="password" name="password" placeholder="Password" style="height: 30px; border-radius: 45px; border: none; font-size: 15px;"></td>
                </tr>
                <tr>
                    <td><input type="password" name="repassword" placeholder="Re-enter Password" style="height: 30px; border-radius: 45px; border: none; font-size: 15px;"></td>
                </tr>
                <tr>
                    <td><input type="text" name="name" placeholder="Name" style="height: 30px; border-radius: 45px; border: none; font-size: 15px;"></td>
                </tr>
                <tr>
                    <td><input type="text" name="phone" placeholder="Contact Number" style="height: 30px; border-radius: 45px; border: none; font-size: 15px;"></td>
                </tr>
                <tr>
                    <td><input type="text" name="address" placeholder="Address" style="height: 30px; border-radius: 45px; border: none; font-size: 15px;"></td>
                </tr>
                <tr>
                    <td><input type="text" name="plateno" placeholder="Plate Number" style="height: 30px; border-radius: 45px; border: none; font-size: 15px;"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="signupbutton" value="Sign Up" style="background-color: gray; color: black; width: 100px; height: 30px; border-radius: 45px; border: none;"></td>
                </tr>
            </table>
        </form>
    </div>

    <div class="wrap">
        <div class="footer">
            <div class="footer_grides">
                <div class="section group">
                    <div class="col_1_of_4 span_1_of_4">
                        <h3>Connect With Us</h3>
                        <div class="social_icons">
                            <ul>
                                <li><a href="#" class="facebook">
                                        <span class="icon"> &nbsp;</span> <span class="inner"><strong>Facebook</strong></span>
                                    </a></li>
                                <li><a href="#" class="twitter">
                                        <span class="icon"> &nbsp;</span> <span class="inner"><strong>Twitter</strong></span>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col_1_of_4 span_1_of_4 timmings">
                        <h3>Business Timings</h3>
                        <ul>
                            <li>Monday: <span>9am - 1:30pm<br>2:30pm - 7:30pm</span></li>
                            <li>Tuesday: <span>9am - 1:30pm<br>2:30pm - 7:30pm</span></li>
                            <li>Wednesday: <span>9am - 1:30pm<br>2:30pm - 7:30pm</span></li>
                            <li>Thursday: <span>9am - 1:30pm<br>2:30pm - 7:30pm</span></li>
                            <li>Friday: <span>9am - 1:30pm<br>2:30pm - 7:30pm</span></li>
                            <li>Saturday: <span>9am - 1:30pm<br>2:30pm - 7:30pm</span></li>
                            <li>Sunday: <span>9am - 2:00pm</span></li>
                        </ul>
                    </div>
                    <div class="col_1_of_4 span_1_of_4">
                        <h3>Location</h3>
                        <ul>
                            <li>#161,</li>
                            <li>5th phase, Sachidananda Nagar</li>
                            <li>RR Nagar</li>
                            <li>Bangalore, Karnataka</li>
                            <li><span>Telephone :</span> 099802 21122</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- scroll Top -->
    <script type="text/javascript">
        $(document).ready(function () {
            $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
    <!-- End scroll Top -->
</body>
</html>

<?php
include('signupformPhp.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['signupbutton'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $repassword = md5($_POST['repassword']);
        $name = $_POST['name'];
        $address = $_POST['address'];
        $plate = $_POST['plateno'];
        $phn = $_POST['phone'];

        if (empty($email) || empty($password) || empty($repassword) || empty($name) || empty($address) || empty($plate) || empty($phn)) {
            echo "<script>alert('One or more fields are empty')</script>";
        } else if (!preg_match("/^[a-zA-Z]{3}[0-9]{4}$/", $plate) && !preg_match("/^[a-zA-Z]{2}[0-9]{4}$/", $plate) && !preg_match("/^[0-9]{2}-[0-9]{4}$/", $plate) && !preg_match("/^[0-9]{3}-[0-9]{4}$/", $plate)) {
            echo "<script>alert('Invalid Plate Number')</script>";
        } else {
            $sform = new Signup();
            $sform->create($email, $password, $repassword, $name, $address, $plate, $phn);
        }
    }
}
?>
