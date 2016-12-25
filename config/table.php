<?php
header('Content-type: text/html; charset=utf-8');
require_once ("config.php");
$data = $_POST['grad'];
if ($data == t1){
    $query = "SELECT `suname` , `weight` , `club` FROM `table` WHERE weight < 60;";
    $link = mysqli_query($link, $query);
}else if ($data == t2) {
    $query = "SELECT `suname` , `weight` , `club` FROM `table` WHERE weight > 60 OR weight <= 65;";
    $send = mysqli_query($link,$query);
}else if ($data == t3) {
    $query = "SELECT `suname` , `weight` , `club` FROM `table` WHERE weight > 65 OR weight <= 70;";
    $send = mysqli_query($link,$query);
}else if ($data == t4) {
    $query = "SELECT `suname` , `weight` , `club` FROM `table` WHERE weight > 70 OR weight <= 75;";
    $send = mysqli_query($link,$query);
}else if ($data == t5){
    $query = "SELECT `suname` , `weight` , `club` FROM `table` WHERE weight > 75 OR weight <= 80;";
    $send = mysqli_query($link,$query);
}else if ($data == t6) {
    $query = "SELECT `suname` , `weight` , `club` FROM `table` WHERE weight > 80 OR weight <= 85;";
    $send = mysqli_query($link,$query);
}else if ($data == t7) {
    $query = "SELECT `suname` , `weight` , `club` FROM `table` WHERE weight > 85 OR weight <= 90;";
    $send = mysqli_query($link,$query);
}else if ($data == t8) {
    $query = "SELECT `suname` , `weight` , `club` FROM `table` WHERE weight > 90;";
    $send = mysqli_query($link,$query);
    while ($data = mysqli_fetch_array($send)){
        echo $data['suname'], "<br>";
        echo $data['weight'],"<br>";
        echo $data['club'],"<br>";
    }
}
?>

