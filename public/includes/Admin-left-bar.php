
<?php  include('connectionpage.php');?>

<div class="left_sidebar">

          <div class="single_widget">
            
            <a href="admin-dashboard.php" class="bg bg-lg"> Dashboard &nbsp; &nbsp; <i class="fa fa-dashboard"></i> </a>
        
<br>
<div class="bg bg-success fa fa-book"><i>Registrations </i></div>
             <div class="">

             <?php  $sql=$con->query("SELECT *FROM conference_reg_info");

$countUsers=$sql->rowCount();
              ?>
            <a href="manage-amcregistration.php" class="btn btn-block btn-black fa fa-users" role="button">  &nbsp; &nbsp;  Manage Amc Registration &nbsp;( <?php echo $countUsers; ?>)  
            </a>
           </div>






<div class="">

             <?php  $sql=$con->query("SELECT *FROM hotels ");

$countUsers=$sql->rowCount();
              ?>
            <a href="add-hotels.php" class="btn btn-block btn-black fa fa-bank" role="button">  &nbsp; &nbsp; Add Accomadation &nbsp;( <?php echo $countUsers; ?>)  
            </a>
           </div>


             <div class="">

            
           </div>
           

             <div class="">
               <?php  $sql=$con->query("SELECT *FROM mycontacts ");

$countContacts=$sql->rowCount(); ?>
              <div class="bg bg-success fa fa-music">Audio Messages (<?Php echo $countContacts=$sql->rowCount(); ?>)</div>
              <ul>
                <li class="">
                  <div><a href="#" class="btn btn-black btn-block" role="button"> 
              Upload Messages
            </a> </div></li>
            <li>
               <a href="#" class="btn btn-block btn-black fa fa-light " role="button">Manage Audio Messages
            </a>
              <li>

              </li>
           </div>
           <div class="bg bg-success fa fa-cloud">UPCOMGING EVENT</div>
           <div class="">
            <a href="manage-audio-messages.php" class="btn btn-block btn-black fa fa-light " role="button">Add Upcoming Event
            </a>
           </div>



            


            <div class="">

             <?php  //$sql=$conn->query("SELECT *FROM ");

//$countMessage=$sql->rowCount();
              ?>
            
           <a href="manage-contacts.php" class="btn btn-block btn-black fa fa-envelope" role="button"> 
              &nbsp;<?php// echo $countMessage; ?> &nbsp;  Messages 
            </a>
          
           </div>

            <div class="">
            <a href="admin-change-password.php" class="btn btn-block btn-black fa fa-key" role="button">  &nbsp;&nbsp; change password
            </a>
           </div>


  </div>
  