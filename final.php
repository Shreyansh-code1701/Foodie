<?php
    require_once 'connection.php';
     
    $d=date('Y-m-d');
    $bl=mysql_query("insert into bill values('$_SESSION[user]',0,'$d',100,$_SESSION[dis],'$_SESSION[add]',' $_SESSION[payment]',$_SESSION[chupay],$_SESSION[pincode],'$_SESSION[contact]')");
    
    $mbil=mysql_query("select max(billid) from bill where userid like '$_SESSION[user]' ");
    $mmbil=mysql_fetch_array($mbil);
    
    $getcart=mysql_query("select * from cart where  userid like '$_SESSION[user]' ");
    while($gt=  mysql_fetch_array($getcart))
    {
        $tin=mysql_query("insert into transaction values($mmbil[0],'$_SESSION[user]',$gt[1],0,$gt[3],$gt[4],$gt[5],$gt[6],$gt[7])");
    }
    $dlcart=mysql_query("delete from cart where userid like '$_SESSION[user]' ");
  
    unset($_SESSION[name]);
        unset($_SESSION[cityid]);
        unset($_SESSION[areaid]);
            unset($_SESSION[add]);
            unset($_SESSION[contact]);
            unset($_SESSION[pincode]);
                unset($_SESSION[payment]);
                unset($_SESSION[chupay]);
                unset($_SESSION[alr]);
                unset($_SESSION[confirm]);
                unset($_SESSION[cartche]);
                unset($_SESSION[offrate]);
                unset($_SESSION[coupon]);
                unset($_SESSION[offname]);
                unset($_SESSION[malshe]);
                unset ($_SESSION[dis]);
                unset ($_SESSION[offdis]);
  
   header("location:http://localhost/food/userprofile.php");
?>

<?php
require_once 'head.php';
?>

<?php
require_once 'toppati.php';
?>

<?php
require_once 'menu.php';
?>

<?php
require_once 'footer.php';
?>