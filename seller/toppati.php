<?php
require_once 'connection.php';
require_once 'sellersecure.php';
?>
<script>
    noti('inquiryid');
    noti('reviewstoreid');
</script>

<div class="header-section">

    <a class="toggle-btn"><i class="fa fa-bars"></i></a>

    <form class="searchform" action="http://adminex.themebucket.net/index.html" method="post">
        <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
    </form>

    <div class="menu-right">
        <ul class="notification-menu">
            <?php
            $in =  mysql_query("select count(*) from inquiry where notification=0");
            $i =  mysql_fetch_array($in);
            // $rs =  mysql_query("select count(*) from reviewstore where  storeid like $_SESSION[id] ");
            // $r =  mysql_fetch_array($rs);
            ?>

            <li>
                <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                <i class="fas fa-question-circle"></i>
                    <span class="badge" title="Inquiry" id="inquiryin"><?php echo $i[0]; ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-head pull-right" id="inquiryid">

                </div>
            </li>
            <!-- <li>
                <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                    <i class="fa fa-star "></i>
                    <span class="badge" id="reviews"><?php echo $r[0]; ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-head pull-right" id="reviews">

                </div>
            </li> -->

            <li>
                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <?php
                    $in = mysql_query("select * from user where userid like '$_SESSION[user]' ");
                    $inn = mysql_fetch_array($in);
                    ?>
                    <img src="../<?php echo $inn[12]; ?>" />

                    <?php echo $_SESSION[user]; ?>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                    <li><a href="seller.php"><i class="fas fa-user-alt"></i> Profile</a></li>
                    <!-- <li><a href="editprofile.php"><i class="fa fa-cog"></i>  Settings</a></li> -->
                    <li><a href="../logout.php"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
                </ul>
            </li>

        </ul>
    </div>

</div>