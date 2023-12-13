<?php
class CommentsController extends AppController {
    var $helpers = array ('Html','Form');
    var $name = 'Comments';
    public function index2(){
        $this->loadModel('Post');
        $posts = $this->Post->find('all', array(
            'contain' => 'Comment'
        ));
    }
    public function index() {
        $this->set('comments', $this->Comment->find('all'));
    }

}
?>