
<?php
    session_start();
    if(!Session::auth())
         header("Location: /index");
    
    
    
?>
<html>

    <head>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
        <link href="/common/css/master.css" rel="stylesheet" type="text/css">
        <link href="/common/css/profile.css" rel="stylesheet" type="text/css">
        <link href="/common/css/leftpanel.css" rel="stylesheet" type="text/css">
        <link href="/common/css/news.css" rel="stylesheet" type="text/css">
        <link href="/views/profile/css/prnews.css" rel="stylesheet" type="text/css">

        <script src="/common/js/jquery.js"></script>
        <style type="text/css"></style>
        <script src="/common/js/plugin.js"></script>
        <script src="/common/js/editdiag.js"></script>
        <script src="/common/js/profile.js"></script>
        <script src="/views/profile/js/prnews.js"></script>

        <title>MusicBook :Profile</title>
    </head>
    <body>
        <div class="header">
            <div class="wrapper">
                <ul class="right">
                                            <!--<li><a href="/search" class="menu">Search</a></li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li><a href="/band" class="menu">Bands</a></li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li><a href="/concert" class="menu">Concerts</a></li>-->
                    <li><a href="/profile/user/???????" class="menu">My Home</a></li>
                    <li><a href="/profile/logout" class="menu">Log Out</a></li>
                </ul>
                <div class="title" style="padding-left: 100px">MusicBook</div>

            </div>
        </div>
        <div class="body">
            <div class="leftpanel">
                <ul>
                    <li><a href="/profile">News</a></li>
                    <li><a href="/profile/posts">Posts</a></li>
                    <li><a href="/profile/reviews">Reviews</a></li>
                    <li><a href="/profile/concerts" class="active">Concerts</a></li>
                    <li><a href="/profile/bands">Bands</a></li>
                    <li><a href="/profile/network">Network</a></li>
                    <li><a href="/profile/lists">Lists</a></li>
                    <li><a href="/profile/search">Search</a></li>
                    <li><a href="/profile/settings">Settings</a></li>




                </ul>
            </div>
            <div class="content">
                <div id="concertcontent">
                    <div class="content-title">
                     Concerts
                    </div>
                    <?php
                        foreach($this->dumpval as $val){
                                           echo '
                                           <div class="oneconcert" style="margin: 5px 0px 10px 0px;background-color: #b4bece;">
                                               <div style="padding: 10px 10px 10px 20px;">
                                                   <img src="/media/images/icon.png" height="42" width="42" alt="concertimage" style="float: left; margin: 15px 50px 15px 15px;" />
                                                   <div>
                                                       <div style="float: left; width:300px">
                                                           <div class="onebloack" style="margin-left: 15px;">Concert Name :  <a href="/profile/concert/'.$val[0].'"> SAMPLE CONCERT</a></div>
                                                           <div class="onebloack" style="margin-left: 15px;">Band Name :  <a href="/concerts/display/'.$val[1].'">'.$val[1].'</a></div>
                                                       </div>
                        
                                                       <div class="onebloack" style="margin-left: 15px;">Venue :  '.$val[2].'</div>
                                                       <div class="onebloack" style="margin-left: 15px;">Event time :  '.$val[6].'</div></br>
                        
                                                       <div class="onebloack" style="margin-left: 15px;margin-bottom: 1px;">Url : '.$val[4].'
                                                       </div>
                        
                                                   </div>
                        
                                                   <div class="onebloack" style="margin-left: 35px; margin-top: 5px">Ticket Amount :  $ '.$val[5].'</div>
                        
                                                   <div class="onebloack" style="margin-left: 15px;">Approved : '; if($val[7]=='na')echo 'No'; else echo 'Yes'; echo'</div>
                                               </div>
                                           </div>
                                          ';}
                    ?>

                </div>
                <div id="concertcontent">
                    <div class="content-title">
                     Concerts RSVP-ed:
                    </div>

                   

                    <?php
                        foreach($this->dumpval2 as $val){
                                           echo '
                                           <div class="oneconcert" style="margin: 5px 0px 10px 0px;background-color: #b4bece;">
                                               <div style="padding: 10px 10px 10px 20px;">
                                                   <img src="/media/images/icon.png" height="42" width="42" alt="concertimage" style="float: left; margin: 15px 50px 15px 15px;" />
                                                   <div>
                                                       <div style="float: left; width:300px">
                                                           <div class="onebloack" style="margin-left: 15px;">Concert Name :  <a href="/profile/concert/'.$val[0].'"> SAMPLE CONCERT</a></div>
                                                           <div class="onebloack" style="margin-left: 15px;">Band Name :  <a href="/concerts/display/'.$val[1].'">'.$val[1].'</a></div>
                                                       </div>
                        
                                                       <div class="onebloack" style="margin-left: 15px;">Venue :  '.$val[2].'</div>
                                                       <div class="onebloack" style="margin-left: 15px;">Event time :  '.$val[6].'</div></br>
                        
                                                       <div class="onebloack" style="margin-left: 15px;margin-bottom: 1px;">Url : '.$val[4].'
                                                       </div>
                        
                                                   </div>
                        
                                                   <div class="onebloack" style="margin-left: 35px; margin-top: 5px">Ticket Amount :  $ '.$val[5].'</div>
                        
                                                   <div class="onebloack" style="margin-left: 15px;">Approved : '; if($val[7]=='na')echo 'No'; else echo 'Yes'; echo'</div>
                                               </div>
                                           </div>
                                          ';}
                    ?>
                </div>




            </div>



        </div>

        </div>
        </div>
        <div class="footer"></div>


    </body>
</html>?>