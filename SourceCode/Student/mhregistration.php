<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title></title>
    <link rel="stylesheet" href="..\css\mhreg.css">
  </head>
  <body style="margin: 0; font-family: 'Roboto Slab', serif; background-color: #f9f9f9;">

<?php session_start(); ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $regno = $_SESSION['regno'];
  require_once('../dbConnect.php');

  if (isset($_POST["krishnablock"])) {
    $blockname = "Krishnablock";
  } elseif (isset($_POST["godavariblock"])) {
    $blockname = "Godavariblock";
  } elseif (isset($_POST["yamunablock"])) {
    $blockname = "Yamunablock";
  } elseif (isset($_POST["gangablock"])) {
    $blockname = "Gangablock";
  } elseif (isset($_POST["narmadablock"])) {
    $blockname = "Narmadablock";
  } elseif (isset($_POST["kaveriblock"])) {
    $blockname = "Kaveriblock";
  } elseif (isset($_POST["vedavathiblock"])) {
    $blockname = "Vedavathiblock";
  } elseif (isset($_POST["brahmaputrablock"])) {
    $blockname = "Brahmaputrablock";
  }

  if (isset($blockname)) {
    // Calculate available rooms dynamically
    $roomOptions = [];
    for ($floor = 1; $floor <= 8; $floor++) {
      for ($room = 1; $room <= 15; $room++) {
        $roomNo = ($floor * 100) + $room;
        $result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM users WHERE block='$blockname' AND roomno='$roomNo'");
        $data = mysqli_fetch_assoc($result);
        if ($data['total'] < 3) { // Room capacity is 3
          $roomOptions[] = $roomNo;
        }
      }
    }
    $_SESSION['blockname'] = $blockname;
    $_SESSION['roomOptions'] = $roomOptions;
  }

  if (isset($_POST['room_selection'])) {
    $roomno = $_POST['room_selection'];
    $blockname = $_SESSION['blockname'];

    $sql = "UPDATE `users` SET `block`='$blockname', `roomno`='$roomno' WHERE regno='$regno'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
      echo 'Entry successful';
      header('Location: studentdashboard.php');
    } else {
      echo "Error occurred";
    }
  }
}
?>

<?php include '../header.php'; ?>
<form class="" action="mhregistration.php" method="post">
    <section class="cards">
<article class="card card--1">
  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> MH Hostel</span>
    <h3 class="card__title">Krishna block</h3>
    <input type="submit" name="krishnablock" id="krishnablock" class="card__by" value="submit">
  </div>
</article>

<article class="card card--2">
  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> MH Hostel</span>
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
    <span class="card__category"> MH Hostel</span>
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
    <span class="card__category"> MH Hostel</span>
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
    <span class="card__category"> MH Hostel</span>
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
    <span class="card__category"> MH Hostel</span>
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
    <span class="card__category"> MH Hostel</span>
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
    <span class="card__category"> MH Hostel</span>
    <h3 class="card__title">Brahmaputra block</h3>
    <input type="submit" name="brahmaputrablock" id="brahmaputrablock" class="card__by" value="submit">
  </div>
</article>
  </section>
</form>

<!-- Room selection -->
<?php if (!empty($_SESSION['roomOptions'])): ?>
<form action="mhregistration.php" method="post" style="
  margin: 20px auto;
  padding: 20px;
  background-color: #ffffff;
  border-radius: 12px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  max-width: 600px;
  text-align: center;">
  <h2 style="
    font-family: 'Roboto Slab', serif;
    font-size: 24px;
    color: #333333;
    margin-bottom: 20px;">Available Rooms in <?= htmlspecialchars($_SESSION['blockname']) ?></h2>
  <label for="room_selection" style="
    font-family: 'Raleway', sans-serif;
    font-size: 16px;
    color: #555555;">Select Room:</label>
  <select name="room_selection" id="room_selection" style="
    font-family: 'Raleway', sans-serif;
    padding: 10px 15px;
    margin: 10px 20px;
    font-size: 16px;
    border: 1px solid #dddddd;
    border-radius: 8px;
    width: 80%;
    box-sizing: border-box;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;">
    <?php foreach ($_SESSION['roomOptions'] as $room): ?>
      <option value="<?= $room ?>"><?= $room ?></option>
    <?php endforeach; ?>
  </select>
  <button type="submit" style="
    font-family: 'Raleway', sans-serif;
    font-size: 16px;
    background-color: #01bf71;
    color: #ffffff;
    border: none;
    border-radius: 8px;
    padding: 10px 25px;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;">Allocate Room</button>
</form>
<?php endif; ?>
  </body>
</html>