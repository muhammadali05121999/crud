<?php
include'conn.php';

if(isset($_POST['submit'])){

    $name   = $_POST['name'];
    $email   =  $_POST['email'];
    $password = $_POST['password'];
    $number    = $_POST['number'];

$sql= "INSERT INTO `crud table` ( `name`, `email`, `password`, `number`) 
VALUES ('$name', '$email', '$password', '$number')";

$result= mysqli_query($conn,$sql);

if($result){

    header('location:list.php');

}

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OPERATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
      
      <div class="container">
        <form method="POST">
      <!-- <div class="mb-3"> -->
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">    
    <label for="exampleInputEmail1" class="form-label">email</label>
    <input type="eamil" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">    
    <label for="exampleInputEmail1" class="form-label">mobile number</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="number">    
    <!-- <div class="mb-3"> -->
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    <!-- </div> -->
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>

</body>
</html>
