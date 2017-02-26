<?php
if(isset($_POST['submit'])){
      $mailto="sachinkatarkar.sk@gmail.com";  //recipient email address here

       $subject = "Form Submission";

       $from="dr.sachin@spandanclinicairoli.com";          //server email address here

       $message_body = $_POST['name'] . " ". "email id:".$_POST['email']." wrote the following:" . "\n\n" . $_POST['message'];

       mail($mailto,$subject,$message_body,"From:".$from);

       echo "Your email has been sent successfully";
}
?>
