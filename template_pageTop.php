<?php

/*HANDLING DYNAMIC LOGIN/LOGOUT HEADER LINKS AND NOTIFICATIONS IMAGES*/
$envelope = '<img src="images/logged_out.png" width="22" height="22" alt="Notes" title="This envelope is for logged in members">';
$loginLink = '<a href="login.php">Log In</a> &nbsp; | &nbsp; <a href="signup.php">Sign Up</a>';
if($user_ok == true) {
  $sql = "SELECT notescheck FROM users WHERE username='$log_username' LIMIT 1";
  $query = mysqli_query($db_conx, $sql);
  $row = mysqli_fetch_row($query);
  $notescheck = $row[0];
  $sql = "SELECT id FROM notifications WHERE username='$log_username' AND date_time > '$notescheck' LIMIT 1";
  $query = mysqli_query($db_conx, $sql);
  $numrows = mysqli_num_rows($query);
    if ($numrows == 0) {
    $envelope = '<a href="notifications.php" title="Your notifications and friend requests"><img src="images/no_notifications.png" width="22" height="22" alt="Notes"></a>';
    } else {
    $envelope = '<a href="notifications.php" title="You have new notifications"><img src="images/have_notifications.gif" width="22" height="22" alt="Notes"></a>';
  }
    $loginLink = '<a href="user.php?u='.$log_username.'">'.$log_username.'</a> &nbsp; | &nbsp; <a href="logout.php">Log Out</a>';
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Web Intersect Social Network Tutorials and Demo</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="css/style.css">
<script src = "js/main.js"></script>
</head>
<body>

<div id="pageTop">
  <div id="pageTopWrap">
    <div id="pageTopLogo">
      <a href="http://www.webintersect.com">
        <img src="images/logo.png" alt="logo" title="Web Intersect 2.0">
      </a>
    </div>
    <div id="pageTopRest">
      <div id="menu1">
        <div>
          <?php echo $envelope; ?> &nbsp; &nbsp; <?php echo $loginLink; ?>
        </div>
      </div>
      <div id="menu2">
        <div>
          <a href="http://www.webintersect.com">
            <img src="images/home.png" alt="home" title="Home">
          </a>
          <!--<a href="#">Menu_Item_1</a>
          <a href="#">Menu_Item_2</a> -->
        </div>
      </div>
    </div>
  </div>
</div>