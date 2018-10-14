<?php
  include 'includes/dbh.inc.php';

  if(isset($_POST['meatballsDelete']))
  {
    $cid = $_POST['cid'];
    $sql = "DELETE FROM meatballscomments WHERE cid = '$cid'";
    $result = mysqli_query($conn, $sql);
    header("Location: meatballs.php");
  }

  if(isset($_POST['pancakesDelete']))
  {
    $cid = $_POST['cid'];
    $sql = "DELETE FROM pancakescomments WHERE cid = '$cid'";
    $result = mysqli_query($conn, $sql);
    header("Location: pancakes.php");
  }
