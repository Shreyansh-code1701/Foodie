<?php
    require_once 'connection.php';

    $u = mysql_query("select * from user where userid like '$_SESSION[user]'");
    $uu = mysql_fetch_array($u);
    
    $c = mysql_query("select count(cartid) from cart where userid like '$_SESSION[user]'");
    $cc = mysql_fetch_array($c);
    
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
</script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<form>
    <input type="button" name="button" value="<?php echo $uu[0]; ?>">
    <input type="button" name="button" value="<?php echo $_SESSION[chupay]-$_SESSION[dis]; ?>">
    <input type="button" name="button" value="Click to Pay" onclick="MakePayment()">
</form>
<script>
    function MakePayment(){
        var name = "<?php echo $uu[0]; ?>";
        var amount = "<?php echo $_SESSION[chupay]-$_SESSION[dis]; ?>";
        var options = {
            "key": "rzp_test_yZQlx0R7mTLW10",
            "amount": amount*100,
            "currency": "INR",
            "name": name,
            "description": "Test Transaction",
            "image": "http://localhost/foodie-main/images/foodlocker.png",
            "callback_url": "http://localhost/foodie-main/mybill.php",
            "redirect": true,
            "handler": function (response){
                console.log(response)
            }
        };
    var rzp1 = new Razorpay(options);
    rzp1.open();
    }
</script>