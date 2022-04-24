<?php
require_once 'connection.php';

$_SESSION[page] = "services";
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<?php
require_once 'head.php';
?>

<body class="smooth-scroll">

    <div class="ht-page-wrapper">
        <?php
        require_once 'toppati.php';
        ?>

        <?php
        require_once 'menu.php';
        ?>
        <div class="ht-page-header" style="background-image: url('images/parallax/2.jpg');">
            <div class="overlay" style="background: rgba(0,0,0,.5)"></div>
            <div class="container">
                <div class="inner">
                    <div class="col-md-12 col-sm-12 col-xs- text-center ">
                        <font style="font-size:30px;">Who we serve?</font>
                    </div>

                </div>
            </div>
        </div>
        <div class="myline"></div>

        <div class="container " style="border-bottom:1px dotted #f8a631; padding-bottom: 10px;">

            <BR></br>
            <div class="col-md-6" <font><strong style="font-size:25px;">Customers</strong></font><br><br>
            <p>
                With thousands of restaurants,<br>
                convenience stores, pet stores,<br>
                grocery stores, and more at your fingertips,<br>
                FoodLocker delivers the best of your neighborhood on-demand.<br>
            </p>
            </div>
            <div class="col-md-offset-2 col-md-4">
                <img src="images/download.jfif" class="img img-responcive" />
            </div>

        </div>

        <div class="container " style="border-bottom:1px dotted #f8a631; padding-bottom: 10px;">

            <BR></br>
            <div class="col-md-6">
                <font><strong style="font-size:25px;">Sellers</strong></font><br><br>
                <p>

                    Reach new customers, market your store, and<br>
                    grow your business by offering delivery, <br>
                    pickup, and direct online ordering with FoodLocker.<br>
                </p>
            </div>
            <div class="col-md-offset-2 col-md-4">
                <img src="images/sellers.jpg" class="img img-responcive" />
            </div>

        </div>

        <?php
        require_once 'footer.php';
        ?>

    </div>


</body>


</html>