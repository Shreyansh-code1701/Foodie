<?php
require_once 'connection.php';

$_SESSION[page] = "feedback";

if (isset($_REQUEST[send])) {
    $insert = mysql_query("insert into feedback values(0,'$_REQUEST[name]','$_REQUEST[email]','$_REQUEST[subject]','$_REQUEST[sms]',0)");
}
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
        <div class="ht-page-header" style="background-image: url('images/parallax/2.jpg')">
            <div class="overlay" style="background: rgba(0,0,0,.5)"></div>
            <div class="container">
                <div class="inner">
                    <div class="col-md-12 col-sm-12 col-xs-12 " style="margin-bottom: 3%;">
                        <font style="font-size:30px;">Feed Back</font>
                    </div>

                </div>
            </div>
        </div>

        <div class="container "><BR></br>

            <div class="row">
                <div class="col-md-4">
                    <img src="images/feed.png" style="max-width:80%; margin-top:20%;" class="img img-responsive animated  bounceInLeft" />
                </div>
                <div class="col-md-4">
                    <div class="row ht-widget hw-popular-categories">
                        <h3 class="widget-title" style="font-size: 15px;">SEND YOUR FEEDBACK</h3>
                    </div>
                    <p style="font-size: 15px;"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;If you are satisfy a experience? Give us Feedback. </p><br><br>
                    <div class="row">
                        <form action="" method="post" name="contact" class="form-group maru">
                            <div class="col-md-12 input-group" style="margin-bottom: 3%;">
                                <div class="input-group-addon"></div>
                                <input type="text" name="name" placeholder="Name" style="padding: 20px;" required="" pattern='^[a-zA-Z ]+$' class="form-control " />

                            </div>
                            <div class="col-md-12 input-group" style="margin-bottom: 3%;">
                                <div class="input-group-addon "></div>
                                <input type="email" name="email" style="padding: 20px;" placeholder="Email" class="form-control" />

                            </div>
                            <div class="col-md-12 input-group" style="margin-bottom: 3%;">
                                <div class="input-group-addon "></div>
                                <input type="text" name="subject" style="padding: 20px;" placeholder="Subject" required="" pattern='^[a-zA-Z ]+$' class="form-control" />

                            </div>
                            <div class="col-md-12 input-group" style="margin-bottom: 3%;">
                                <div class="input-group-addon"></div>
                                <textarea class="form-control" rows="5" name="sms" placeholder="Your Message" required=""></textarea>

                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" name="send" class="btn sendbtn">Submit</button>
                                <button type="reset" class="btn sendbtn">Reset</button>

                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-md-4">
                    <li class="contactstore"style="font-size:30px;list-style: none;"><a href="feedbackstore.php">
                            <p style="text-align:center;">Feedback To Store ?</p>
                        </a></li>
                </div>
            </div>


        </div>
    </div>





    <?php
    require_once 'footer.php';
    ?>

    </div>


</body>


</html>