<div class="text-center border border-success w-75 mx-auto p-2 m-5">
<h1 class="mb-4">Edit Post</h1>
<?php
    echo $this->Form->create('Post', array('action' => 'edit'));
    echo $this->Form->input('title' , array('class'=> 'form-control me-2 text-center mb-2', 'label' => false, 'placeholder'=>'Title...' ));
    echo $this->Form->input('body', array('rows' => '3' ,'class'=> 'form-control me-2 text-center mb-2', 'label' => false , 'placeholder' => 'Descriptions...'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->submit('Save',array('class'=>'btn  btn-outline-success mx-2')); 
    echo $this->Form->end();
?>
</div>