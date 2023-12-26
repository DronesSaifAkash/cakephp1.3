<div class="card p-2 m-5">

    <table class="table">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Action</th>
            <th>Created Date-Time</th>
        </tr>
        
        <?php foreach ($posts as $post): ?>
        <tr>
            <td><?php echo $post['Post']['id']; ?></td>
            <td>
                <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id'] ), array( 'class'=>'text-dark text-decoration-none'));?>
            </td>
            <td>
                <a href="<?=$this->webroot.'posts/delete/'.$post['Post']['id'] ?>"  title="Delete" class="text-danger btn"><i class="fa fa-trash"></i></a>
                <a href="<?=$this->webroot.'posts/edit/'.$post['Post']['id'] ?>" title="Edit"  class="text-warning btn"><i class="fa fa-edit "></i></a>
            </td>
            <td><?php echo $post['Post']['created']; ?></td>
        </tr>
        <?php endforeach; ?>

    </table>
</div>