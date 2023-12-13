<?php

class Post extends AppModel {
    var $name = 'Post';
    public $hasMany = array('Comment');
    var $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
}

?>