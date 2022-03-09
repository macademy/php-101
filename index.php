<?php
$title = 'My Blog';
$numPosts = 10;
$numPosts = $numPosts + 10;
define('MIN_NUM_POSTS', 0);
const MAX_NUM_POSTS = 100;
$numPostsDisplay = "\"$numPosts\" posts";
?>
<h1><?= $title ?></h1>
<h2><?= $numPostsDisplay ?></h2>
<h3>Minimum: <?= MIN_NUM_POSTS ?></h3>
<h3>Maximum: <?= MAX_NUM_POSTS ?></h3>
