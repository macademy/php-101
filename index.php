<?php
$title = 'My Blog';
$post = [
    'title' => 'How to learn PHP',
    'content' => 'This is how you learn PHP.',
];
$numPosts = 10;
$numPostsDisplay = "\"$numPosts\" posts";
?>
<h1><?= $title ?></h1>
<h2><?= $numPostsDisplay ?></h2>
<h3><?= $post['title'] ?></h3>
<p><?= $post['content'] ?></p>
