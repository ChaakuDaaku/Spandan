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

    if(isset($_POST['diabcheck']))
        $diabcheck = $_POST['diabcheck'];
    else
        $diabcheck = "NULL";
    if(isset($_POST['rheumocheck']))
        $rheumocheck = $_POST['rheumocheck'];
    else
        $rheumocheck = "NULL";

	$sql = "INSERT into sachin (name,gender,date,time_slot,previous,diab_check, rheumo_check) values('$name','$gender','$date','$time_slot','$prev','$diabcheck','$rheumocheck')";

	mysqli_query($con, $sql);

    $message_body = "New Appointment Registered by ".$name." on ".$date." at ".$time_slot;

   mail($mailto,$subject,$message_body,"From:".$from);

// echo
    echo "Appointmet Confirmed";
}
//ini_set('display_errors', 1);

?>
