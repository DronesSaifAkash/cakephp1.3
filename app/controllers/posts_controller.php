<?php
class PostsController extends AppController {
    var $helpers = array ('Html','Form');
    var $name = 'Posts';

    function index() {
        if (!empty($this->params['form'])) {
            $searchTerm = $this->params['form']['srch'];
            $posts = $this->Post->find('all', array(
                'conditions' => array(
                    'OR' => array(
                        'Post.title LIKE' => "%".$searchTerm."%",
                        'Post.body LIKE' => "%".$searchTerm."%"
                    )
                )
            ));
            $this->set('posts', $posts);
        }else{
            $this->set('posts', $this->Post->find('all'));
        }
    }

    function view($id = null) {
        $this->Post->id = $id;
        $this->set('post', $this->Post->read());
    }

    function add() {
        if (!empty($this->data)) {
            if ($this->Post->save($this->data)) {
                $this->Session->setFlash('Your post has been saved.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    function delete($id) {
        if ($this->Post->delete($id)) {
            $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }

    function edit($id = null) {
        $this->Post->id = $id;
        if (empty($this->data)) {
            $this->data = $this->Post->read();
        } else {
            if ($this->Post->save($this->data)) {
                $this->Session->setFlash('Your post has been updated.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function view_all() {
        $this->set('posts', $this->Post->find('all', array('contain' => 'Comment')));
    }

    // function search() {
    //     if ($this->params['form']) {
    //         $searchTerm = $this->params['form']['srch'];
    //         $posts = $this->Post->find('all', array(
    //             'conditions' => array(
    //                 'OR' => array(
    //                     'Post.title LIKE' => "%".$searchTerm."%",
    //                     'Post.body LIKE' => "%".$searchTerm."%"
    //                 )
    //             )
    //         ));
    //         $this->set('posts', $posts);
    //     }
    // }
}
?>