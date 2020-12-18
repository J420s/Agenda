<?php
define("Page_Size",5);

foreach (getRows() as $row) {
    foreach ($row as $id => $value) {
        echo $value."<br>";
    }
}
function getRows(){
    $query = ConnectAskAndClose("SELECT * FROM contactes");
    $result = [];
    while($row = $query -> fetch_assoc()){
        array_push($result,$row);
    }
    return $result;
}

function ConnectAskAndClose($query){
    $result = null;
    $connection = mysqli_connect("127.0.0.1","admin01","hola01","agenda");

    if($connection -> connect_error){
        $result = $connection -> connect_error;
    }else{
        $result = $connection -> query($query);
    }
    $connection -> close();
    return $result;
}

