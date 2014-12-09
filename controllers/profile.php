<?php
class profile extends Controller{
        public function __construct(){
            parent::__construct();
        }

        public function init(){
            
            $this->view->loadView(__CLASS__,__FUNCTION__);
            
        }

        public function newuser(){
            
            $this->model->insertuser($_REQUEST['rname'],$_REQUEST['runame'],$_REQUEST['dob'],$_REQUEST['remail'],$_REQUEST['password'],                         $_REQUEST['rcity']);

            $this->model->insertuser($_REQUEST['rname'],$_REQUEST['runame'],$_REQUEST['dob'],$_REQUEST['remail'],$_REQUEST['password'],$_REQUEST['rcity']);

            $this->model->logreg($_REQUEST['runame']);


            if (isset($_REQUEST['usertype'])){
                
             $this->model->insertartist($_REQUEST['runame'],$_REQUEST['band'],$_REQUEST['rurl']);
            }
            $this->model->logreg($_REQUEST['runame']);
            header("Location: /index/success");

        }

        public function concerts(){
            session_start();
            $dump_arr = $this->model->userconcerts($_SESSION['uname123']);
            $dump_arr2 = $this->model->userplanconcerts($_SESSION['uname123']);
            $this->view->dumpval = $dump_arr;
            $this->view->dumpval2 = $dump_arr2;
            $this->view->loadView(__CLASS__,__FUNCTION__);
        }

        public function concert($concertid){
            $this->view->conid=$concertid;
            $this->view->loadView(__CLASS__,__FUNCTION__);            
        }

        public function logout(){
            
            Session::destroy();
            header("Location: /index");
        }
         
    
            
        

}
?>


