<?php
$title = 'My Blog';
$numPosts = 10;
$hasPosts = $numPosts > 0;
$numPostsDisplay = "\"$numPosts\" posts";
?>
<h1><?= $title ?></h1>
<h2><?= $numPostsDisplay ?></h2>
<?php
if ($numPosts === 3) {
    echo 'There are exactly 3 posts.';
} elseif ($hasPosts) {
    echo 'Posts exist.';
} else {
    echo 'There are no posts.';
}
?>
