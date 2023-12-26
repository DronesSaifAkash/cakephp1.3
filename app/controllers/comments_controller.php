<?php
class CommentsController extends AppController {
    var $helpers = array ('Html','Form');
    var $name = 'Comments';

    // public function index2(){
    //     $this->loadModel('Post');
    //     $posts = $this->Post->find('all', array(
    //         'contain' => 'Comment'
    //     ));
    // }

    // public function index() {
    //     $this->set('comments', $this->Comment->find('all'));
    // }

    public function add_comments(){
        if (!empty($this->data)) {
            if ($this->Comment->save($this->data)) {
                $this->Session->setFlash('Your comment has been saved.');
                $this->redirect(array('controller' => 'posts', 'action' => 'view_all'));
            }
        }
    }

}
?>