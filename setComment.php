<?php
  session_start();
  include 'includes/dbh.inc.php';

  if(isset($_POST['meatballsSubmit']))
  {
    $user_uid = $_SESSION['u_uid'];
    $date = $_POST['date'];
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO meatballscomments (user_uid, date, message) VALUES ('$user_uid', '$date', '$message')";
    mysqli_query($conn, $sql);
    header('Location: meatballs.php');
    /*echo "{$_SESSION['u_uid']}<br>";
    echo "$user_uid<br>";
    echo "$date<br>";
    echo "$message<br>";*/
  }

  if(isset($_POST['pancakesSubmit']))
  {
    $user_uid = $_SESSION['u_uid'];
    $date = $_POST['date'];
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO pancakescomments (user_uid, date, message) VALUES ('$user_uid', '$date', '$message')";
    mysqli_query($conn, $sql);
    header('Location: pancakes.php');
    /*echo "{$_SESSION['u_uid']}<br>";
    echo "$user_uid<br>";
    echo "$date<br>";
    echo "$message<br>";*/
  }
