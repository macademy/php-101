<?php
$title = 'My Blog';
$numPosts = 10;
$hasPosts = $numPosts > 0;
$numPostsDisplay = "\"$numPosts\" posts";
switch ($numPosts) {
    case 0:
        $message = 'There are no posts.';
        break;
    case 1:
    case 2:
    case 3:
        $message = 'There are a few posts.';
        break;
    default:
        $message = 'There are many posts.';
}
?>
<h1><?= $title ?></h1>
<h2><?= $numPostsDisplay ?></h2>
<p><?= $message ?></p>
