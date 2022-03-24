<?php
$title = 'My Blog';
$numPosts = 10;
$hasPosts = $numPosts > 0;
$numPostsDisplay = "\"$numPosts\" posts";
$message = match ($numPosts) {
    0 => 'There are no posts.',
    1, 2, 3 => 'There are some posts.',
    default => 'There are many posts.',
};
?>
<h1><?= $title ?></h1>
<h2><?= $numPostsDisplay ?></h2>
<p><?= $message ?></p>
