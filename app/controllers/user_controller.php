<?php 
Class UsersController extends AppController{ 
    
    public function index() {
        $this->set('users', $this->User->find('all'));
    }

    public function addview() {
        $this->set('addview');
    }

    public function add(){
        if(!empty($this->params['form'])){
            if ($this->User->save($this->params['form'])){  
                $this->redirect('/users');//users
            }          
         }
    }

    public function editview($id = null){
       //echo $id ;exit;//= base64_decode( $id);exit;
        //$this->User->id = $id;
        // $user = $this->User->find();
        $cond = 'User.id = "'.$id.'"';
        $userData = $this->User->find($cond);
        //print_r($userData);exit;
        $this->set('userData', $userData);
        // $this->set('editview', array('u_data' => $user));
    }

    public function edit() {
        $id = $this->request->params['pass'][0];
        $this->User->id = $id;
        if( $this->User->exists() ){
            if( $this->request->is( 'post' ) || $this->request->is( 'put' ) ){
                if( $this->User->save( $this->request->data ) ){
                    $this->Session->setFlash('User was edited.');
                    $this->redirect(array('action' => 'index'));    
                }else{
                    $this->Session->setFlash('Unable to edit user. Please, try again.');
                }
            }else{
                $this->request->data = $this->User->read();
            }
        }else{
            $this->Session->setFlash('The user you are trying to edit does not exist.');
            $this->redirect(array('action' => 'index'));
        }    
    }

    public function delete() {
        $id = $this->request->params['pass'][0];
        
        //the request must be a post request 
        //that's why we use postLink method on our view for deleting user
        if( $this->request->is('get') ){
        
            $this->Session->setFlash('Delete method is not allowed.');
            $this->redirect(array('action' => 'index'));
            
            //since we are using php5, we can also throw an exception like:
            //throw new MethodNotAllowedException();
        }else{
        
            if( !$id ) {
                $this->Session->setFlash('Invalid id for user');
                $this->redirect(array('action'=>'index'));
                
            }else{
                //delete user
                if( $this->User->delete( $id ) ){
                    //set to screen
                    $this->Session->setFlash('User was deleted.');
                    //redirect to users's list
                    $this->redirect(array('action'=>'index'));
                    
                }else{  
                    //if unable to delete
                    $this->Session->setFlash('Unable to delete user.');
                    $this->redirect(array('action' => 'index'));
                }
            }
        }
    }
}
?>