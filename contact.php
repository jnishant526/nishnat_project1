<?php
//definr the post variable
$name= $_REQUEST['name'];
$email= $_REQUEST['email'];
$phone= $_REQUEST['phone'];
$message= $_REQUEST['msg'];
$mailBody="Name: $name \nPhone: $phone\nEmail: $email\n\nMessage: $message";

//all the fields are completed
if(empty($name)|| empty($email)|| empty($phone)|| empty($message)){
    echo "<script type='text/javascript'>alert('Please fill all the fields');
    window.history.go(-1);
    </script>";
}
else{
    mail("jnishant526@gmail.com", "Email Form TechSite", $mailBody,"Form:$name <$email>");
    echo "<script type='text/javascript'>alert('Please fill all the fields');
    window.history.go(-1);
    </script>";
}
?>
