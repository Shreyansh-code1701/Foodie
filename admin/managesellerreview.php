<?php
require_once 'connection.php';

require_once 'adminsecure.php';

?>

<!DOCTYPE html>
<html lang="en">

<?php
require_once 'head.php';
?>

    <body class="sticky-header" onload="display('sreview','display','1','10');recycle('sreview','display','1','10');">

        <section>

<?php
require_once 'menu.php';
?>

            <div class="main-content" >


<?php
require_once 'toppati.php';
    
 require_once 'adminpati.php';
?>


                <div class="row" style="margin: 0;">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <section class="panel state">
                            <header class="panel-heading custom-tab tab-right ">
                                SELLER REVIEW
                                <ul class="nav nav-tabs pull-right">
                                    <li class="active">
                                        <a href="#home-3" data-toggle="tab">
                                            <i class="fas fa-laptop" ondblclick="fdel('sreview','delete','<?php echo $p; ?>','<?php echo $pp; ?>','<?php echo $row[0]; ?>');recycle('sreview','display','1','10');"></i>
                                            DISPLAY
                                        </a>
                                    </li>
                                    

                                </ul>
                            </header>
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="home-3">
                                        <form action="" method="post" name="searchreview">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <select style="border: none; background: none; outline: none;" onchange="display('sreview','display','1',this.value);">
                                                            
                                                            <option>10</option>
                                                            <option>15</option>
                                                            <option>20</option>
                                                        </select>
                                                    </div>
                                                    <input type="text" name="search" placeholder="Search User Name" id="find" class="form-control" onkeyup="display('sreview','display','1','10');"/>
                                                    <div class="input-group-addon">
                                                        <i  class="fas fa-search"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div id="sreview" >

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>

                    </div>
                </div>

<?php
require_once 'footer.php';
?>

            </div>

        </section>

<?php
require_once 'javascript.php';
?>

    </body>


</html>
