<?php


require __DIR__. '/functions.php';
require __DIR__. '/data.php';
usort ($posts, 'compare');

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
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
   <h1> Fake News </h1>
</header>

<div>

    <?php foreach ($posts as $post) : ?>
    <article>
    <h2> <?php echo $post ['title']; ?> </h2>
    <p> <?php echo $post ['content'] ?> </p>
    
    <ul> <li> <?php echo "Author " . $post['author'] ?> </li>
    <li> <?php echo "Date " . $post ['date']  ?> </li>
    <li> <?php echo "Likes " . $post ['likes'] ?> </li> </ul>
    </article>
    <?php endforeach;?>

</div>




    </body>
</html>

