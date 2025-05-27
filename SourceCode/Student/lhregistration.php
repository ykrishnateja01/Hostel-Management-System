<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title></title>
  <link rel="stylesheet" href="..\css\mhreg.css">
  </head>
  <body>
    <?php       session_start(); ?>

      <?php

      if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once('../dbConnect.php');
        $regno =  $_SESSION['regno'];
        if(isset($_POST["krishnablock"])){
          $blockname="Krishnablock";
          $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
          $row = mysqli_fetch_array( $rowSQL );
          $largestNumber = $row['max'];
          if($largestNumber==0){
            $largestNumber=1;
          }
          $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
        $data=mysqli_fetch_assoc($result);
        $count= $data['total'];
        if($count<6){
          $roomno=$largestNumber;
        }
        else{
            $roomno=$largestNumber+1;
        }
        }
    if(isset($_POST["godavariblock"])){
      $blockname="Godavariblock";
      $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
      $row = mysqli_fetch_array( $rowSQL );
      $largestNumber = $row['max'];
      if($largestNumber==0){
        $largestNumber=1;
      }
      $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
    $data=mysqli_fetch_assoc($result);
    $count= $data['total'];
    if($count<6){
      $roomno=$largestNumber;
    }
    else{
        $roomno=$largestNumber+1;
    }
    }
    if(isset($_POST["yamunablock"])){
      $blockname="Yamunablock";
      $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
      $row = mysqli_fetch_array( $rowSQL );
      $largestNumber = $row['max'];
      if($largestNumber==0){
        $largestNumber=1;
      }
      $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
    $data=mysqli_fetch_assoc($result);
    $count= $data['total'];
    if($count<6){
      $roomno=$largestNumber;
    }
    else{
        $roomno=$largestNumber+1;
    }
    }
    if(isset($_POST["gangablock"])){
      $blockname="Gangablock";
      $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
      $row = mysqli_fetch_array( $rowSQL );
      $largestNumber = $row['max'];
      if($largestNumber==0){
        $largestNumber=1;
      }
      $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
    $data=mysqli_fetch_assoc($result);
    $count= $data['total'];
    if($count<6){
      $roomno=$largestNumber;
    }
    else{
        $roomno=$largestNumber+1;
    }
    }
    if(isset($_POST["narmadablock"])){
      $blockname="Narmadablock";
      $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
      $row = mysqli_fetch_array( $rowSQL );
      $largestNumber = $row['max'];
      if($largestNumber==0){
        $largestNumber=1;
      }
      $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
    $data=mysqli_fetch_assoc($result);
    $count= $data['total'];
    if($count<6){
      $roomno=$largestNumber;
    }
    else{
        $roomno=$largestNumber+1;
    }
    }
    if(isset($_POST["kaveriblock"])){
      $blockname="Kaveriblock";
      $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
      $row = mysqli_fetch_array( $rowSQL );
      $largestNumber = $row['max'];
      if($largestNumber==0){
        $largestNumber=1;
      }
      $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
    $data=mysqli_fetch_assoc($result);
    $count= $data['total'];
    if($count<6){
      $roomno=$largestNumber;
    }
    else{
        $roomno=$largestNumber+1;
    }
    }
    if(isset($_POST["vedavathiblock"])){
      $blockname="Vedavathiblock";
      $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
      $row = mysqli_fetch_array( $rowSQL );
      $largestNumber = $row['max'];
      if($largestNumber==0){
        $largestNumber=1;
      }
      $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
    $data=mysqli_fetch_assoc($result);
    $count= $data['total'];
    if($count<6){
      $roomno=$largestNumber;
    }
    else{
        $roomno=$largestNumber+1;
    }
    }

    if(isset($_POST["brahmaputrablock"])){
      $blockname="Brahmaputrablock";
      $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
      $row = mysqli_fetch_array( $rowSQL );
      $largestNumber = $row['max'];
      if($largestNumber==0){
        $largestNumber=1;
      }
      $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
    $data=mysqli_fetch_assoc($result);
    $count= $data['total'];
    if($count<6){
      $roomno=$largestNumber;
    }
    else{
        $roomno=$largestNumber+1;
    }
    }
    if(isset($_POST["tungabhadrablock"])){
      $blockname="Tungabhadrablock";
      $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
      $row = mysqli_fetch_array( $rowSQL );
      $largestNumber = $row['max'];
      if($largestNumber==0){
        $largestNumber=1;
      }
      $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
    $data=mysqli_fetch_assoc($result);
    $count= $data['total'];
    if($count<6){
      $roomno=$largestNumber;
    }
    else{
        $roomno=$largestNumber+1;
    }
    }


    $sql="UPDATE `users` SET `block`='$blockname' where regno='$regno'";
    $query=mysqli_query($conn,$sql);
    $sql="UPDATE `users` SET `roomno`='$roomno' where regno='$regno'";
    $query1=mysqli_query($conn,$sql);
    if($query && $query1){
      echo 'Entry successful';
      header('Location: studentdashboard.php');
    }
    else{
      echo "error occoured";
    }
    }
       ?>
<?php include '../header.php';?>


<form class="" action="lhregistration.php" method="post">
    <section class="cards">
<article class="card card--1">
  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> LH Hostel</span>
    <h3 class="card__title">Krishna block</h3>
    <!-- <span class="card__by"> <a href="#" class="card__author" title="author">select</a></span> -->
    <input type="submit" name="krishnablock" id="krishnablock" class="card__by" value="submit">
  </div>
</article>


<article class="card card--2">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> LH Hostel</span>
    <h3 class="card__title">Godavari block</h3>
    <input type="submit" name="godavariblock" id="godavariblock" class="card__by" value="submit">
  </div>
</article>

<article class="card card--3">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> LH Hostel</span>
    <h3 class="card__title">Yamuna block</h3>
      <input type="submit" name="yamunablock" id="yamunablock" class="card__by" value="submit">
  </div>
</article>
<article class="card card--4">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> LH Hostel</span>
    <h3 class="card__title">Ganga block</h3>
      <input type="submit" name="gangablock" id="gangablock" class="card__by" value="submit">
  </div>
</article>


<article class="card card--5">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> LH Hostel</span>
    <h3 class="card__title">Narmada block</h3>
      <input type="submit" name="narmadablock" id="narmadablock" class="card__by" value="submit">
  </div>
</article>


<article class="card card--6">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> LH Hostel</span>
    <h3 class="card__title">Kaveri block</h3>
    <input type="submit" name="kaveriblock" id="kaveriblock" class="card__by" value="submit">
  </div>
</article>


<article class="card card--7">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> LH Hostel</span>
    <h3 class="card__title">Vedavathi block</h3>
      <input type="submit" name="vedavathiblock" id="vedavathiblock" class="card__by" value="submit">
  </div>
</article>


<article class="card card--8">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> LH Hostel</span>
    <h3 class="card__title">Tungabhadra block</h3>
    <input type="submit" name="tungabhadrablock" id="tungabhadrablock" class="card__by" value="submit">
  </div>
</article>


  </section>
</form>

  </body>
</html>
