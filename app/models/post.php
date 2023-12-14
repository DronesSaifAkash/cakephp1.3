<?php

class Post extends AppModel {
    var $name = 'Post';
    public $hasMany = array('Comment');
    var $validate = array(
        'title' => array(
            'rule' => 'notEmpty',
            'message' => 'Title cannot be empty'
        ),
        'body' => array(
            'rule' => 'notEmpty',
            'message' => 'Body cannot be empty'
        )
    );
}

?>