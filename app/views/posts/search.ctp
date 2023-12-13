<!-- In your view (search.ctp) -->
<?php echo $this->Form->create('Posts', array('action' => 'search')); ?>
    <?php echo $this->Form->input('search', array('label' => 'Search', 'name'=>'srch')); ?>
    <?php echo $this->Form->submit('Search'); ?>
<?php echo $this->Form->end(); ?>

<!-- Display search results -->
<?php if (!empty($posts)): ?>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li><?php echo $post['Post']['title']; ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No results found.</p>
<?php endif; ?>