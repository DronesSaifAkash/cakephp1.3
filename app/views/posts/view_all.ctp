<!-- app/views/posts/view_all.ctp -->

<h1>All Posts and Comments</h1>

<?php foreach ($posts as $post): ?>
    <div class="post" style="border:1px solid black; margin-bottom:20px; padding:20px;">
        <h2><?php echo h($post['Post']['title']); ?></h2>
        <p><?php echo h($post['Post']['body']); ?></p>
        <br>
        <hr>
        <h3>Comments:</h3>
        <?php
         if(count($post['Comment'])>0){
          foreach ($post['Comment'] as $comment): ?>
            <div class="comment" style="margin:10px;">
                <p><li><?php echo h($comment['comment_text']); ?></li></p>
                <!-- Add more fields as needed -->
            </div>
        <?php endforeach;
         }else {
            ?>
            <div class="comment">
                <p>No Comments</p>
                <!-- Add more fields as needed -->
            </div>
            <?php
         }
        ?>
        <p>
        <?php
            echo $form->create('Comment', array('action' => 'add_comments'));
            echo $this->Form->input('comment_text',array('type'=>'text'));
            echo $this->Form->input('post_id', array('type' => 'hidden', 'value' => $post['Post']['id']));
            echo $this->Form->end('Save Comment');
        ?>
        </p>
    </div>
<?php endforeach; ?>
