<?php
define("Page_Size",5);

function pageNumber(){
    if(isset($_REQUEST['page'])){ 
        ($_REQUEST['page']) - 1;
    }

}

function getPage(){

    $numberOfRows = mysql_ask("SELECT COUNT(*) as total FROM contactes")-> fetch_assoc()['total'];
    $numberOfPages = round($numberOfRows / Page_Size);
    define("Number_Of_Pages",$numberOfPages);
    if(isset($_REQUEST['page'])){
        $page = $_REQUEST['page']; 
        if($page > $numberOfPages-1){header("Location: index.php?page=".($numberOfPages-1));}
        if($page < 0){header("Location: index.php");} 
    }else{
        $page = 0;
    }
   
    $offset = $page * 5;
    
    $query = mysql_ask("SELECT id,nom,cognoms 
                        FROM contactes
                        LIMIT " . Page_Size . "
                        OFFSET $offset");
    
    while($row = $query -> fetch_assoc()){

        echo "  <tr>
                    <th scope='row'>".$row['id']."</th>
                    <td>".$row['nom']."</td>
                    <td>".$row['cognoms']."</td>
                </tr>";
    }
   
}

function mysql_ask($query){
    
    $connection = mysqli_connect("127.0.0.1","phpmyadmin","hola01","Agenda");

    $result = $connection -> connect_error ? $connection -> connect_error : $connection -> query($query);

    $connection -> close();
    return $result;
}
