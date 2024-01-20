<?php 

include"conn.php";

if(isset($_GET['deleteid'])){

    $id= $_GET['deleteid'];

    $sql= "DELETE FROM  `crud table` WHERE ID=$id";

    $result= mysqli_query($conn,$sql);

    if($result){

        // echo "delted sucessfuly";
        header("location:list.php");
    } else{

        echo"yet not deleted";
    }


}



?>