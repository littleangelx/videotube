<?php

require_once("includes/header.php");
require_once("includes/classes/LikedVideosProvider.php");

if (!User::isLoggedIn()) {
    header("Location: signin.php");
}

$likedVideosProvider = new LikedVideosProvider($con, $userLoggedInObj);
$videos = $likedVideosProvider->getVideos();

$videoGrid = new VideoGrid($con, $userLoggedInObj);

?>

<div class="largeVideoGridContainer">
    <?php 
        if (isset($videos[0]) && sizeof($videos) > 0) {
            echo $videoGrid->createLarge($videos, "Videos you have liked", false);
        } else {
            echo "No videos to show";
        }
    ?>
</div>