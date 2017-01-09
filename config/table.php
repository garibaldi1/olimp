<?php
header('Content-type: text/html; charset=utf-8');
require_once ("config.php");
$data = $_POST['grad'];
if ($data == t1){
    echo "<h3>Весовая категория меньше 60 кг</h3>";
    echo "<hr>";
    $query = "SELECT `suname` , `weight` , `club` FROM `table` WHERE weight < 60;";
    $send = mysqli_query($link, $query);
        while ($data = mysqli_fetch_array($send)){
        $suname =  $data['suname'];
        $weight =  $data['weight'];
        $club =  $data['club'];
        echo "<table border = 1px><thead><th>Фамилия</th><th>Клуб</th></thead><tbody><tr><td>$suname</td><td>$club</td></tr></tbody></table>";
        echo "<form style = 'text-align: left;'><input type = 'checkbox' value = '1'><input type = 'checkbox' value = '1'><input type = 'checkbox' value = '1'></form>";
        $count++;
        if ($count == 2){
            echo "<br>";
            $count = 0;
        }
    }
}else if ($data == t2) {
    echo "<h3>Весовая категория 60 - 65 кг</h3>";
    echo "<hr>";
    $query = "SELECT `suname` , `weight` , `club` FROM `table` WHERE weight > 60 AND weight <= 65;";
    $send = mysqli_query($link,$query);
        while ($data = mysqli_fetch_array($send)){
        $suname =  $data['suname'];
        $weight =  $data['weight'];
        $club =  $data['club'];
        echo "<table border = 1px><thead><th>Фамилия</th><th>Клуб</th></thead><tbody><tr><td>$suname</td><td>$club</td></tr></tbody></table>";
        echo "<form style = 'text-align: left;'><input type = 'checkbox' value = '1'><input type = 'checkbox' value = '1'><input type = 'checkbox' value = '1'></form>";
        $count++;
        if ($count == 2){
            echo "<br>";
            $count = 0;
        }
    }
}else if ($data == t3) {
    echo "<h3>Весовая категория 65 - 70 кг</h3>";
    echo "<hr>";
    $query = "SELECT `suname` , `weight` , `club` FROM `table` WHERE weight > 65 AND weight <= 70;";
    $send = mysqli_query($link,$query);
        while ($data = mysqli_fetch_array($send)){
        $suname =  $data['suname'];
        $weight =  $data['weight'];
        $club =  $data['club'];
        echo "<table border = 1px><thead><th>Фамилия</th><th>Клуб</th></thead><tbody><tr><td>$suname</td><td>$club</td></tr></tbody></table>";
        echo "<form style = 'text-align: left;'><input type = 'checkbox' value = '1'><input type = 'checkbox' value = '1'><input type = 'checkbox' value = '1'></form>";
        $count++;
        if ($count == 2){
            echo "<br>";
            $count = 0;
        }
    }
}else if ($data == t4) {
    echo "<h3>Весовая категория 70 - 75 кг</h3>";
    echo "<hr>";
    $query = "SELECT `suname` , `weight` , `club` FROM `table` WHERE weight > 70 AND weight <= 75;";
    $send = mysqli_query($link,$query);
        while ($data = mysqli_fetch_array($send)){
        $suname =  $data['suname'];
        $weight =  $data['weight'];
        $club =  $data['club'];
        echo "<table border = 1px><thead><th>Фамилия</th><th>Клуб</th></thead><tbody><tr><td>$suname</td><td>$club</td></tr></tbody></table>";
        echo "<form style = 'text-align: left;'><input type = 'checkbox' value = '1'><input type = 'checkbox' value = '1'><input type = 'checkbox' value = '1'></form>";
        $count++;
        if ($count == 2){
            echo "<br>";
            $count = 0;
        }
    }
}else if ($data == t5){
    echo "<h3>Весовая категория 75 - 80 кг</h3>";
    echo "<hr>";
    $query = "SELECT `suname` , `weight` , `club` FROM `table` WHERE weight > 75 AND weight <= 80;";
    $send = mysqli_query($link,$query);
        while ($data = mysqli_fetch_array($send)){
        $suname =  $data['suname'];
        $weight =  $data['weight'];
        $club =  $data['club'];
        echo "<table border = 1px><thead><th>Фамилия</th><th>Клуб</th></thead><tbody><tr><td>$suname</td><td>$club</td></tr></tbody></table>";
        echo "<form style = 'text-align: left;'><input type = 'checkbox' value = '1'><input type = 'checkbox' value = '1'><input type = 'checkbox' value = '1'></form>";
        $count++;
        if ($count == 2){
            echo "<br>";
            $count = 0;
        }
    }
}else if ($data == t6) {
    echo "<h3>Весовая категория 80 - 85 кг</h3>";
    echo "<hr>";
    $query = "SELECT `suname` , `weight` , `club` FROM `table` WHERE weight > 80 AND weight <= 85;";
    $send = mysqli_query($link,$query);
    while ($data = mysqli_fetch_array($send)){
        $suname =  $data['suname'];
        $weight =  $data['weight'];
        $club =  $data['club'];
        echo "<table border = 1px><thead><th>Фамилия</th><th>Клуб</th></thead><tbody><tr><td>$suname</td><td>$club</td></tr></tbody></table>";
        echo "<form style = 'text-align: left;'><input type = 'checkbox' value = '1'><input type = 'checkbox' value = '1'><input type = 'checkbox' value = '1'></form>";
        $count++;
        if ($count == 2){
            echo "<br>";
            $count = 0;
        }
    }
}else if ($data == t7) {
    echo "<h3>Весовая категория 85 - 90 кг</h3>";
    echo "<hr>";
    $query = "SELECT `suname` , `weight` , `club` FROM `table` WHERE weight > 85 AND weight <= 90;";
    $send = mysqli_query($link,$query);
    while ($data = mysqli_fetch_array($send)){
        $suname =  $data['suname'];
        $weight =  $data['weight'];
        $club =  $data['club'];
        echo "<table border = 1px><thead><th>Фамилия</th><th>Клуб</th></thead><tbody><tr><td>$suname</td><td>$club</td></tr></tbody></table>";
        echo "<form style = 'text-align: left;'><input type = 'checkbox' value = '1'><input type = 'checkbox' value = '1'><input type = 'checkbox' value = '1'></form>";
        $count++;
        if ($count == 2){
            echo "<br>";
            $count = 0;
        }
    }
}else if ($data == t8) {
    echo "<h3>Весовая категория 90+</h3>";
    echo "<hr>";
    $query = "SELECT `suname` , `weight` , `club`,`id` FROM `table` WHERE weight > 90;";
    $send = mysqli_query($link,$query);
    while ($data = mysqli_fetch_array($send)){
        $id = $data['id'];
        $suname =  $data['suname'];
        $weight =  $data['weight'];
        $club =  $data['club'];
        echo "<table border = 1px name = '$id'><thead><th>Фамилия</th><th>Клуб</th></thead><tbody><tr><td>$suname</td><td>$club</td></tr><tr><td><form style = 'text-align: left;' name = 'check' id = '$id'><input type = 'checkbox' name='hand' id = 'ch-$id-1' onclick = 'f(event);'><input id = 'ch-$id-2' type = 'checkbox' name='khife' onclick = 'f(event);'><input id = 'ch-$id-3' type = 'checkbox' name='shoot' onclick = 'f(event);'></form></td></tr></tbody></table>";
        //echo "<form style = 'text-align: left;' name = 'check'><input type = 'checkbox' name='hand' onclick = 'f();'><input type = 'checkbox' name='khife'><input type = 'checkbox' name='shoot'></form>";
        $count++;
        if ($count == 2){
            echo "<br>";
            echo "<hr>";
            $count = 0;
        }
    }
    
}
?>

