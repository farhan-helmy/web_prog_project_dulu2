<?php

    if(@$_POST['register'])
    {
        echo "Hi " . $_POST['name']  . " your phone number is " . $_POST['phoneno'];
    }
    else{
        echo "no post yet";
    }

?>


<form action="test.php" method="post">
    <input type="text" name="name" placeholder="Name" value="<?php echo  ($_POST['name']   ?   $_POST['name'] :  '');  ?>" />
    <br />
    <input type="text" name="phoneno" placeholder="Phone Number (eg. 0123456789)" />
    <input type="submit" name="register" value="Register" />

</form>