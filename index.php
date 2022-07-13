<?php
function getPosts(): array
{
    return [
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
}

function getPostText(int $numPosts): string
{
    return $numPosts === 1 ? 'post' : 'posts';
}

$title = 'My Blog';
$posts = getPosts();
$numPosts = count($posts);
$postText = getPostText($numPosts);
$numPostsDisplay = "$numPosts $postText";
?>
<h1><?= $title ?></h1>
<h2><?= $numPostsDisplay ?></h2>
<?php for ($i = 0; $i < $numPosts; $i++) : ?>
    <h3><?= $posts[$i]['title'] ?></h3>
    <p><?= $posts[$i]['content'] ?></p>
<?php endfor ?>
