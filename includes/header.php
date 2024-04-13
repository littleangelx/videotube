<?php 

require_once("includes/config.php");
require_once("includes/classes/User.php");
require_once("includes/classes/Video.php");

$usernameLoggedIn = isset($_SESSION["userLoggedIn"]) ? $_SESSION["userLoggedIn"] : "";
$userLoggedInObj = new User($con, $usernameLoggedIn);

?>

<!DOCTYPE html>
<html>
<head>
    <title>VideoTube</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/index.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/js/commonActions.js"></script>
</head>
<body>
  <div id="pageContainer">
    <div id="mastHeadContainer">
        <button class="navShowHide"><img src="assets/images/icons/menu.png" /></button>
        <a class="logoContainer" href="index.php">
          <img src="assets/images/icons/VideoTubeLogo.png" title="logo" alt="Site logo"/>
        </a>

        <div class="searchBarContainer">
          <form action="search.php" method="GET">
            <input type="text" class="searchBar" name="term" placeholder="Search...">
            <button class="searchButton">
            <img src="assets/images/icons/search.png" />
            </button>
          </form>
        </div>

<div class="rightIcons">
  <a href="upload.php"><img src="assets/images/icons/upload.png" class="upload" /></a>
  <a href="#"><img src="assets/images/profilePictures/default.png" class="upload" /></a>
</div>

    </div>
    <div id="sideNavContainer" style="display:none"></div>
    <div id="mainSectionContainer">
      <div id="mainContentContainer">