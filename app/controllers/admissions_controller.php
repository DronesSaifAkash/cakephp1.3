<?php
class AdmissionsController extends AppController {
    var $helpers = array ('Html','Form');
    var $name = 'Admissions';
    function index() {
        $this->set('admissions', $this->Admission->find('all'));
    }
    
    function form(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        //    print_r($_POST);
        //    exit;
           if ($this->Admission->validates($_POST)) {
                $arr = array();
                if (isset($_POST['name'])) {
                    $arr['name']=$_POST['name'];
                }
                if (isset($_POST['class'])) {
                    $arr['class']=$_POST['class'];
                }
                if (isset($_POST['images'])) {
                    $arr['name']=$_POST['name'];
                }
                if (isset($_POST['gender'])) {
                    $arr['gender']=$_POST['gender'];
                }
                if (isset($_POST['hobbies'])) {
                    $arr['hobbies']=implode(', ',$_POST['hobbies']);
                }
                if (isset($_POST['address'])) {
                    $arr['address']=$_POST['address'];
                }
                if (isset($_POST['dob'])) {
                    $arr['dob']=$_POST['dob'];
                }
                if (isset($_POST['languages'])) {
                    $arr['languages']=implode(', ',$_POST['languages']);
                }
                if (isset($this->data['Admissions']['images']) && $this->data['Admissions']['images']!='') {
                    $file=$this->data['Admissions']['images'];
                    $ext1= $file['name'];	
					$arr2=explode(".",$ext1);
                    $ext1=$arr2[sizeof($arr2)-1];
                    $image = time().$arr2[0].'.'.$ext1;

					if(($ext1=="jpeg") || ($ext1=="jpg") || ($ext1=="JPG") || ($ext1=="JPEG") || ($ext1=="gif") || ($ext1=="GIF") || ($ext1=="png") || ($ext1=="PNG") ){
                        move_uploaded_file($file['tmp_name'],"E:/xampp/htdocs/sksaif/app/webroot/img/".$image);
                        $arr['images'] = $image;
                    }
                }
                if ($this->Admission->save($arr)) {
                    
                    $this->Session->setFlash('Your data has been saved.');
                    $this->redirect(array('action' => 'index'));
                }
            } else {
                // The data is not valid, errors are in $this->Post->validationErrors
                echo 'Validation errors occurred';
                
            }
        }
    }

    function edit($id = null) {
        $this->Admission->id = $id;
        if (empty($this->data)) {
            $this->data = $this->Admission->read();
        } else {
            if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                // 
              
                $arr = array();
                if (isset($_POST['name'])) {
                    $arr['name']=$_POST['name'];
                }
                if (isset($_POST['class'])) {
                    $arr['class']=$_POST['class'];
                }
               
                if (isset($_POST['images'])) {
                    $arr['name']=$_POST['name'];
                }
                if (isset($_POST['gender'])) {
                    $arr['gender']=$_POST['gender'];
                }
                if (isset($_POST['hobbies'])) {
                    $arr['hobbies']=implode(', ',$_POST['hobbies']);
                }
                if (isset($_POST['address'])) {
                    $arr['address']=$_POST['address'];
                }
                if (isset($_POST['dob'])) {
                    $arr['dob']=$_POST['dob'];
                }
                if (isset($_POST['languages'])) {
                    $arr['languages']=implode(', ',$_POST['languages']);
                }
                if (isset($this->data['Admissions']['images']) && $this->data['Admissions']['images']!='') {
                    $file=$this->data['Admissions']['images'];
                    $ext1= $file['name'];	
                    $arr2=explode(".",$ext1);
                    $ext1=$arr2[sizeof($arr2)-1];
                    $image = time().$arr2[0].'.'.$ext1;

                    if(($ext1=="jpeg") || ($ext1=="jpg") || ($ext1=="JPG") || ($ext1=="JPEG") || ($ext1=="gif") || ($ext1=="GIF") || ($ext1=="png") || ($ext1=="PNG") ){
                        move_uploaded_file($file['tmp_name'],"E:/xampp/htdocs/sksaif/app/webroot/img/".$image);
                        $arr['images'] = $image;
                    }
                }
            }
            if ($this->Admission->save($arr)) {
                $this->Session->setFlash('Your data has been updated.');
                $this->redirect(array('action' => 'index'));
            }
            $this->redirect(array('action' => 'index'));
        }
    }


}
?>
