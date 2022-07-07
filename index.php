<?php
function getPosts()
{
    
}

$title = 'My Blog';
$posts = [
    [
        'title' => 'How to learn PHP',
        'content' => 'This is how you learn PHP.',
    ],
    [
        'title' => 'How to learn MySQL',
        'content' => 'This is how you learn MySQL.',
    ],
    [
        'title' => 'How to learn Nginx',
        'content' => 'This is how you learn Nginx.',
    ],
];
$numPosts = count($posts);
$postText = $numPosts === 1 ? 'post' : 'posts';
$numPostsDisplay = "$numPosts $postText";
?>
<h1><?= $title ?></h1>
<h2><?= $numPostsDisplay ?></h2>
<?php for ($i = 0; $i < $numPosts; $i++) : ?>
    <?php
    if (str_contains($posts[$i]['title'], 'SQL')) :
        break;
    endif
    ?>
    <h3><?= $posts[$i]['title'] ?></h3>
    <p><?= $posts[$i]['content'] ?></p>
<?php endfor ?>
