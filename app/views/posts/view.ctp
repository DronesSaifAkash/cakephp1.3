<div class="text-start border border-success w-75 mx-auto p-2 m-5 ">
    <h1><?php echo $post['Post']['title']?></h1>

    <p><small>Created: <?php echo $post['Post']['created']?></small></p>

    <p><?php echo $post['Post']['body']?></p>
    <hr>
    <div class="container">
        <h4>Comments:</h4>
        <?php
        if(isset($post['Comment'])){
        if(count($post['Comment'])>0){
            foreach ($post['Comment'] as $comment): ?>
        <div class="comment m-2">
            <p>
                <li><?php echo h($comment['comment_text']); ?></li>
            </p>
        </div>
        <?php endforeach;
        }else {
            ?>
        <div class="comment">
            <p>No Comments</p>
        </div>
        <?php
        }}else {
        ?>
        <div class="comment">
            <p>No Comments</p>
        </div>
        <?php
        } ?>
    </div>
</div>