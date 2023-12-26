<!-- app/views/posts/view_all.ctp -->
<div class="w-75 mx-auto p-2 m-4">
    <h1 class="mb-4 text-center">All Posts and Comments</h1>

    <?php foreach ($posts as $post): ?>
    <div class="post border border-secondary my-4 px-5 py-2">
        <h3 class="text-success"><?php echo h($post['Post']['title']); ?></h3>
        <p class="text-secondary"><?php echo h($post['Post']['body']); ?></p>
        <hr>
        <h4>Comments:</h4>
        <p>
            <?php
            echo $form->create('Comment', array('action' => 'add_comments', 'class'=>'mb-2 d-flex text-info'));
            echo $this->Form->input('post_id', array('type' => 'hidden', 'value' => $post['Post']['id']));
            echo $this->Form->input('comment_text',array('type'=>'text', 'class'=>'form-control', 'label'=>false));
            echo $this->Form->submit('Post Comment',array('class'=>'btn  btn-outline-success mx-2')); 
            echo $this->Form->end();
        ?>
        </p>
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
    <?php endforeach; ?>
</div>