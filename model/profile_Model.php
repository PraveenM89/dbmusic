<?php
    class profile_Model extends Model{
    
        public function insertuser($name,$uname,$dob,$email,$pwd,$city){
            $date=new DateTime();
            $ar= $date->format('Y-m-d H:i:s');
            $query=mysql_query("insert into user(uname,password,dob,name,email,city,jointime,trustrate) values ('$uname','$pwd','$dob','$name','$email','$city','$ar','5')",$this->conn);
    
        }
    
        public function insertartist($runame,$bname,$rurl){
    
            $bid=mysql_query("select bid from band where bname= '$bname'",$this->conn);
    
            while ($arr= mysql_fetch_array($bid)){
                            $arr1= $arr['bid'];
            }
            $query=mysql_query("insert into artist (uname,bid,url) values ('$runame','$arr1','$rurl')",$this->conn);
         }
    
        public function concertsfeed($runame){
    
            $concerts=mysql_query("select concert_id,source_uname,name,bname,vname,time,url,price,event_time,approval from concerts join follow on source_uname=follower join band using(bid) join venue using (vid) join user on source_uname=user.uname where follow.uname='$runame'",$this->conn);
            $col=mysql_num_fields($concerts);
            $ar1=array();
            $i=0;
            while($ar= mysql_fetch_array($concerts)){
                    
                    for($j=0;$j<=$concerts-1;$j++){
                        $ar1[$i][$j]=$ar[$j];
    
             }
             $i=$i+1;
        }
        var_dump($ar1);
        return $ar1;
    }
    
    public function outtime($uname){
            $date=new DateTime();
            $ar= $date->format('Y-m-d H:i:s');
            $query=mysql_query("update user_log set out_time='$ar' where uname='$uname'");
        }
        // public function postsfeed($runame)
    
    
    public function userconcerts($runame){
        $concerts=mysql_query("select concert_id,bname,vname,time,url,price,event_time,approval,bid,vid from concerts join band using(bid) join venue using (vid) join user on source_uname=user.uname where source_uname='$runame'",$this->conn);
            $ar1=array();
            $i=0;
            while($ar= mysql_fetch_array($concerts)){
                    for($j=0;$j<=9;$j++){
                        $ar1[$i][$j]=$ar[$j];
    
             }
             $i=$i+1;
        }
    
        return $ar1;
    }
    
    public function userplanconcerts($runame){
        $pconcerts=mysql_query("select concert_id,bname,vname,time,url,price,event_time,approval from user_plan join concerts using(concert_id) join band using(bid) join venue using(vid) where user_plan.uname='$runame'",$this->conn);
        $ar1=array();
            $i=0;
            while($ar= mysql_fetch_array($pconcerts)){
                    for($j=0;$j<=7;$j++){
                        $ar1[$i][$j]=$ar[$j];
    
             }
             $i=$i+1;
        }
    
        return $ar1;
    }

    public function logreg($uname){
        $date=new DateTime();
        $ar= $date->format('Y-m-d H:i:s');
        $query=mysql_query("insert into user_log (uname,in_time,out_time) values ('$uname','$ar','0000-00-00 00:00:00')",$this->conn);
    }

    public function conreview($conid){
        //to populate a single concert
        $query=mysql_query("select concert_id,bname,bid,vname,source_uname,time,url,price,approval,event_time,uname,name,rating,post_time,review_text from concerts join review using(concert_id) join user using(uname) join band using(bid) join venue using(vid) where concert_id = '$conid' order by 'post_time' desc",$this->conn);
        $ar1=array();
            $i=0;
            while($ar= mysql_fetch_array($query)){
                    for($j=0;$j<=14;$j++){
                        $ar1[$i][$j]=$ar[$j];
    
             }
             $i=$i+1;
        }
        
        return $ar1;
    }

<<<<<<< HEAD
    public function insertandgetreview($runame,$conid,$rate,$reviewtext){
        $date=new DateTime();
        $ar= $date->format('Y-m-d H:i:s');
        $query=mysql_query("insert into review (review_id,uname,concert_id,rating,post_time,review_text) values ('14','$uname','$conid','$rate','$ar','$reviewtext')",$this->conn);
        $query1=mysql_query("select * from review where review_id='14'",$this->conn);
        $ar1=array();
            $i=0;
            while($ar= mysql_fetch_array($query1)){
                    for($j=0;$j<=14;$j++){
                        $ar1[$i][$j]=$ar[$j];
    
             }
             $i=$i+1;
        }

        return $ar1;

    }
=======
    


>>>>>>> origin/master
    }
?>

