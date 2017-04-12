<?php
if(isset($_POST['submit'])){

    // include db connect class
	require_once('db_config.php');

    $mailto = "vivekpatil00@gmail.com";
    $subject = "New Appointment";
    $from="dr.sachin@spandanclinicairoli.com";
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $time_slot = $_POST['time'];
    $prev = $_POST['haveyou'];

    if(isset($_POST['gyneccheck']))
        $gynec_check = $_POST['gyneccheck'];
    else
        $gynec_check = "NULL";

	$sql = "INSERT into deepti (name,gender,date,time_slot,previous,gynec_check) values('$name','$gender','$date','$time_slot','$prev','$gynec_check')";

	mysqli_query($con, $sql);

    $message_body = "New Appointment Registered by ".$name." on ".$date." at ".$time_slot;

   mail($mailto,$subject,$message_body,"From:".$from);

// echo
    echo "Appointmet Confirmed";
}
//ini_set('display_errors', 1);

?>
