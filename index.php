<?php
require __DIR__ . '/functions.php';
require __DIR__ . '/data.php';
usort($posts, 'compareDate');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <title>Fake News</title>
</head>

<body>
    <header>
        <h1 class="title">Fake News </h1>
        <p class="currentDate"><?php echo date("Y/m/d") ?> </p>
    </header>

    <div class="mediaQuery">
    
        <?php foreach ($posts as $post) : ?>
            <article>
                <h2> <?php echo $post['title']; ?> </h2>
                <p class="author"> <?php echo getAuthorName($post['author_id'], $authors) ?></p>
                <img src="<?php echo $post['image']; ?>"  alt="<?php echo $post['title'];?>“  loading="lazy">
                <p class="content"> <?php echo $post['content'] ?> </p>
                <ul class="likes">
                    <li class="postDate"> <?php echo "Posted " . $post['date']  ?> </li>
                    <li class="heart"> <img class="heartForLikes" src="likes.png" loading=“lazy” alt=“heart“> <?php echo $post['likes'] ?> </li>
                </ul>
            </article>
        <?php endforeach; ?>

    </div>


    <?php require __DIR__ . '/footer.php'; ?>