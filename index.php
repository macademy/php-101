<?php declare(strict_types=1);

require('vendor/autoload.php');

use App\Post;

$title = 'My Blog';
$posts = Post::getAll();
$numPosts = count($posts);
$postText = Post::getText($numPosts);
$numPostsDisplay = "$numPosts $postText";
?>
<h1><?= $title ?></h1>
<h2><?= $numPostsDisplay ?></h2>
<?php for ($i = 0; $i < $numPosts; $i++) : ?>
    <h3><?= $posts[$i]['title'] ?></h3>
    <p><?= $posts[$i]['content'] ?></p>
    <p>By <?= $posts[$i]['author'] ?></p>
<?php endfor ?>
