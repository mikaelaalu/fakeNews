<?php 
require __DIR__ . '/header.php';
?>
    <div class="mediaQuery">
    
        <?php foreach ($posts as $post) : ?>
            <article>
                <h2> 
                    <?php echo $post['title']; ?> 
                </h2>
                <p class="author"> 
                    <?php echo getAuthorName($post['author_id'], $authors) ?>
                </p>
                <img src="<?php echo $post['image']; ?>"  alt="<?php echo $post['title'];?>“  loading="lazy">
                <p class="content"> 
                    <?php echo $post['content'] ?> 
                </p>
                <ul class="likes">
                    <li class="postDate"> 
                        <?php echo "Posted " . $post['date']  ?> 
                    </li>
                    <li class="heart"> 
                        <img class="heartForLikes" src="likes.png" alt=“heart“ loading=“lazy” > 
                        <?php echo $post['likes'] ?> 
                    </li>
                </ul>
            </article>
        <?php endforeach; ?>

    </div>
    <?php require __DIR__ . '/footer.php'; ?>