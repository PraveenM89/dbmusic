<?php
<<<<<<< HEAD
    class profile extends Controller{
            public function __construct(){
                parent::__construct();
=======
class profile extends Controller{
        public function __construct(){
            parent::__construct();
        }

        public function init(){
            session_start();
            $newsarr=$this->model->concertsfeed($_SESSION['uname123']);
           
            $this->view->newsarray=$newsarr;
            
            $this->view->loadView(__CLASS__,__FUNCTION__);
            
        }

        public function newuser(){
            
            $this->model->insertuser($_REQUEST['rname'],$_REQUEST['runame'],$_REQUEST['dob'],$_REQUEST['remail'],$_REQUEST['password'],                         $_REQUEST['rcity']);

            $this->model->insertuser($_REQUEST['rname'],$_REQUEST['runame'],$_REQUEST['dob'],$_REQUEST['remail'],$_REQUEST['password'],$_REQUEST['rcity']);

            $this->model->logreg($_REQUEST['runame']);


            if (isset($_REQUEST['usertype'])){
                
             $this->model->insertartist($_REQUEST['runame'],$_REQUEST['band'],$_REQUEST['rurl']);
>>>>>>> origin/master
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
                $arrdump = $this->model->conreview($concertid);
                $this->view->condump = $arrdump;
                $this->view->loadView(__CLASS__,__FUNCTION__);            
            }
    
    
            public function newreview(){
                $review_text = $_REQUEST['retext'];
                $conid =  $_REQUEST['id'];
                $rating =  $_REQUEST['rate'];
    
    
                $new_arr = $this->model->insertandgetreview($conid, $review_text, $rating);

                echo'
                <div style="margin: 5px 0px 10px 0px; background-color: #b4bece;">
                        <div class="oneconcert" style="display: inline-block">
                            <img src="/media/images/icon.png" height="25" width="25" alt="concertimage" style="float: left; margin: 15px 40px 15px 15px;" />
    
                            <div style="width: 750px;margin-top:16px;">
    
                                <div class="onebloack" style="margin-left: 15px; border:1px;">'.$new_arr[0][].'</div></br>
                            </div>
    
                        </div>
                        <div style=" width:750px">
                            <div class="oneblock" style="margin-left: 15px;">Created by: '.$new_arr[0][].'</div>
                            <div class="oneblock" style="margin-left: 15px;">Posted on : '.$new_arr[0][].'</div>
                            <div class="oneblock" style="margin-left: 15px;">Rating :  '.$new_arr[0][].'</div>
                        </div>
                    </div>';
            }
    
            public function logout(){
    
                Session::destroy();
                header("Location: /index");
            }
    
    
    
    
    
    }
<<<<<<< HEAD
=======

        public function logout(){
            
            Session::destroy();
            header("Location: /index");
        }
         
<<<<<<< HEAD
        public function news(){
            session_start();
            $newsarr=$this->model->concertsfeed($_SESSION['uname123']);
           
            $this->view->newsarray=$newsarr;
           $this->view->loadview(__CLASS__,__FUNCTION__);
        }
=======
    
>>>>>>> origin/master
            
        

}
>>>>>>> origin/master
?>


