<!-- app/views/comments/index.ctp -->

<h1>Comments Index</h1>

<?php foreach ($comments as $comment): ?>
    <div>
        <p><?php echo $comment['Comment']['comment_text']; ?></p>
        <!-- Add more fields as needed -->
    </div>
<?php endforeach; ?>
