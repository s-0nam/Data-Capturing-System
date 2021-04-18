<?php session_start();
include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


if(!isset($_SESSION['username'])){
		header("Location: ../index.php");   }
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="./css/theme.css"> -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/w3_l.css">
  <link rel="icon" href="../logo.png">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <title><?php echo strtoupper($_SESSION['name']);?></title>
  <style>
     body{
         background-color: #fff!important;

		}
		.DAVV{
			background-color:#0E3778 !important;
		}

		.Username{
			background-color:#0E3778;
		}

		.BACK{
			background-color:#0E3778;
		}
        #containerHead{
          width: auto;
          height:80px;
          margin-top: 15px;
          background-color: #E0E0E0;
          color: black;
          font-size: 30px;
          padding-top: 20px;
          text-align: center;
          font-family: 'Bahnschrift', 'Roboto';
          font-weight: bold;
        }
        .containerCriteria{
          width: auto;
          height:60px;
          margin-top: 1px;
          margin-bottom: 1px;
          background-color: #E0E0E0;
          color: black;
          font-size: 26px;
          padding-top: 10px;
          text-align: center;
          font-family: 'Bahnschrift', 'Roboto';
          
        }
        .questionBox{
            width: auto;
            height: 60px;
            background-color: #E0E0E0;
            color: slategrey;
            font-size: 20.3px;
            font-weight: normal;
            margin-top: 1px;
            padding-left: 30px;
            margin-bottom: 1px;
            padding-top: 15px;
            font-family: 'calibri', 'Roboto';
        }
        .selectAns{
            padding-top: 0;
            width: 200px;
            float: right;
            margin-right: 30px;
        }
  </style>
  <body>
  <div class="container DAVV" style="width:100%; padding-bottom:20px; padding-top:20px;">
        <div class="col-sm-3"></div>

        <div class="col-sm-8" style="margin-left:-50px;">
            <div class="container" style="width:100%;">
                <div class="col-sm-2" style="margin-left:5px;">
                    <img src="../logo.png" alt="logo" style="width:120px; height:120px;">
                </div>

                <div class="col-sm-9" style="margin-left:-20px;">
                    <div style="font-size:30px; margin-top:20px; margin-left:30px; color:#FFF"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
                    <div style="font-size:20px; margin-top:10px; margin-left:30px; color:#FFF;"><b>Data Capturing System NAAC A & A 2019</b></div>
                </div>
            </div>

        </div>

        <div class="col-sm-1"></div>
    </div>

    <div id="myHeader" class="col-sm-12 Username" style="z-index:10; width:100%;">
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px; "><a href="../homepage.php"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['name']);?></h4></div></center>
        <center><div id="myHeader3" class="col-sm-1 Username" style="padding:10px; ">
        <style>

.nn:hover,.nnn,.nnn:hover{
  color: white;
}

</style>

        <div  style="margin-top:10px; color:black; margin-left:-60px; background-color:transparent; text-decoration:none; color:white;" class="w3-dropdown-hover nnn">
  <a style="text-decoration:none; color:white; cursor:pointer;"  class="nn">PROFILE</a>
  <div style="text-decoration:none; color:white;" class="w3-dropdown-content w3-bar-block w3-border">
    <a href="../Courses/view.php" class="w3-bar-item w3-button">Courses</a>
    <a href="#" onClick="window.open('../profile/link_generator/generate.php','Link Generator','resizable,height=600,width=1100'); return false;" class="w3-bar-item w3-button">URL Generator</a>
    <a href="#" onClick="window.open('../save_my_data/get_data.php','Save My Data','resizable,height=600,width=1100'); return false;" class="w3-bar-item w3-button">Save My Data</a>
    <a href="../additional_data/add_view.php" class="w3-bar-item w3-button">Upload Additional Data</a>
    <a href="../helpdesk/msg.php" class="w3-bar-item w3-button">Help-Desk</a>
    <a href="../logout.php" class="w3-bar-item w3-button">Logout</a>
  </div>
 </center>
</div>
    <br><br>
    <div id="containerHead">
      <p>ACADEMIC AUDIT</p>
    </div>
    <!-- Academic Audit Criteria Block -->
    <div class="containerCriteria">
      <p>1. Curriculum Development</p>
    </div>
    <!-- add action in the form to redirect to page -->
   <form method="POST">
        <div class="form-group questionBox">
            <label for="Learning objectives are clearly defined and measurable" class="control-label">1. Learning objectives are clearly defined and measurable</label>
            
            <select class="form-control selectAns" name="Learning objectives are clearly defined and measurable" required>
            <option value="yes">yes</option>
            <option value="no">no</option> 
            <option value="not known" selected>not known</option> </select>

        </div>
        <div class="form-group questionBox">
            <label for="Learning objectives are in line with student need" class="control-label">2. Learning objectives are in line with student needs</label>
            <select class="form-control selectAns" name="Learning objectives are in line with student need" required>
            
            <option value="yes">yes</option>
            <option value="no">no</option> 
            <option value="not known" selected>not known</option> </select>
        </div>
        <div class="form-group questionBox">
        <label for="Learning objectives are in line with industry need" class="control-label">3. Learning objectives are in line with industry needs</label>
            <select class="form-control selectAns" name="Learning objectives are in line with industry need" required>
            
            <option value="yes">yes</option>
            <option value="no">no</option> 
            <option value="not known" selected>not known</option> </select>
        </div>
        <div class="form-group questionBox">
        <label for="Content development is in line with the learning objectives" class="control-label">4. Content development in line with the learning objectives</label>
            <select class="form-control selectAns" name="Content development is in line with the learning objectives" required>
        
            <option value="yes">yes</option>
            <option value="no">no</option> 
            <option value="not known" selected>not known</option> </select>
        </div>
        <div class="form-group questionBox">
        <label for="Content revision and updating is done regularly" class="control-label">5. Content revision and updating is done regularly</label>
            <select class="form-control selectAns" name="Content revision and updating is done regularly" required>
        
            <option value="yes">yes</option>
            <option value="no">no</option> 
            <option value="not known" selected>not known</option> </select>
        </div>
        <div class="form-group questionBox">
        <label for="Curriculum is flexible enough to incorporate changes" class="control-label">6. Curriculum is flexible enough to incorporate changes</label>
            <select class="form-control selectAns" name="Curriculum is flexible enough to incorporate changes" required>

            <option value="yes">yes</option>
            <option value="no">no</option> 
            <option value="not known" selected>not known</option> </select>
        </div>
        <div class="form-group questionBox">
        <label for="Choice Based Credit System is followed in true sense" class="control-label">7. Choice Based Credit System is followed in true sense</label>
            <select class="form-control selectAns" name="Choice Based Credit System is followed in true sense" required>
        
            <option value="yes">yes</option>
            <option value="no">no</option> 
            <option value="not known" selected>not known</option> </select>
        </div>
        <div class="form-group questionBox">
        <label for="Programs are in line with mission and vision of Department & University" class="control-label">8. Programs are in line with mission and vision of Department & University</label>
            <select class="form-control selectAns" name="Programs are in line with mission and vision of Department & University" required>
            
            <option value="yes">yes</option>
            <option value="no">no</option> 
            <option value="not known" selected>not known</option> </select>
        </div>
        <div class="form-group questionBox">
        <label for="New Program Started in Last One Year" class="control-label">9. New Program Started in Last One Year</label>
            <select class="form-control selectAns" name="New Program Started in Last One Year" required>

            <option value="yes">yes</option>
            <option value="no">no</option> 
            <option value="not known" selected>not known</option> </select>
        </div>

        <button name="submit" type="submit" class="btn btn-primary saveChange">
            <span class="glyphicon glyphicon-heart"></span> Save Changes
        </button>
        <style>
          .saveChange{
              margin-left: 37%;
              margin-right: 5%;
              margin-top: 1px;
              margin-bottom: 1px;
          }
          .reportGen{
              margin-top: 1px;
              margin-bottom: 1px;
          }
          .imgLink{
              margin-left: 20%;
              margin-right: 20%;

          }
          .modalHeading{
              font-weight: bold;
              font-size: 23px;
          }
        </style>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger reportGen" data-toggle="modal" data-target="#exampleModalCenter">
         Generate Report
        </button>
         
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title modalHeading" id="exampleModalLongTitle">Generate Report</h5>
                </div>
                <div class="modal-body">
                    <p style="text-align: center; font-size: 16px; ">Choose the Format to Get the Report</p>
                    <a class="imgLink" href=""><img src="../assets/images/pdflogo.png" style="height: 40px; width: 30px"></a>
                    <a class="imgLink" href=""><img src="../assets/images/xlslogo.png" style="height: 40px; width: 30px"></a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
        <!-- <script>
          $(".saveChange").click(function(){
               alert("Are You Sure to Make Changes!");
               alert("Changes Saved Successfully!");
          })
        </script> -->
    </form>
    <?php
      $user = $_SESSION['username'];
      $connection = mysqli_connect($servername, $username, $password, $dbname);
       if(isset($_POST['submit'])){
        $one = $_POST['Learning_objectives_are_clearly_defined_and_measurable']; 
        $two = $_POST['Learning_objectives_are_in_line_with_student_need'];
        $three = $_POST['Learning_objectives_are_in_line_with_industry_need'];
        $four = $_POST['Content_development_is_in_line_with_the_learning_objectives'];
        $five = $_POST['Content_revision_and_updating_is_done_regularly'];
        $six = $_POST['Curriculum_is_flexible_enough_to_incorporate_changes'];
        $seven = $_POST['Choice_Based_Credit_System_is_followed_in_true_sense'];
        $eight = $_POST['Programs_are_in_line_with_mission_and_vision_of_Department_&_University'];
        $nine = $_POST['New_Program_Started_in_Last_One_Year']; 
        $sqlInsert = "INSERT INTO academic_criteria_1 (username, learning_objectives_are_clearly_defined_and_measurable,learning_objectives_are_inline_with_student_need,learning_are_inline_with_industry_need,content_development_is_inline_with_the_learning_objectives,content_revision_and_updating_is_done_regularly,curriculum_is_flexible_enough_to_incorporate_changes,choice_based_credit_system_is_followed_in_true_sense,programs_are_inline,new_program_started_in_last_one_year)
        VALUES ('$user', '$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine')";
       
        $sqlUpdate = "UPDATE academic_criteria_1 
          SET learning_objectives_are_clearly_defined_and_measurable = $one,
          learning_objectives_are_inline_with_student_need = $two,
          learning_are_inline_with_industry_need = $three,
          content_development_is_inline_with_the_learning_objectives = $four,
          content_revision_and_updating_is_done_regularly = $five,
          curriculum_is_flexible_enough_to_incorporate_changes = $six,
          choice_based_credit_System_is_followed_in_true_sense = $seven,
          programs_are_inline= $eight,
          new_program_started_in_last_one_year = $nine WHERE username = $user";
        

      
          $checkQuery = mysqli_query($connection, "SELECT * FROM academic_criteria_1 WHERE username = $user");
// 
//          Problem Arises Here!
//          
        if($checkQuery){
            $update = mysqli_query($connection, $sqlUpdate);
            if($update){
                echo "<script>alert('Updated Successfully!)</script>";
            }else{
                echo mysqli_error($connection);
            }
        }else{
            $insert = mysqli_query($connection, $sqlInsert);
            if($insert)
            {
                echo "<script>alert('Changes Saved Successfully!')</script>";
            }
            else
            {
                echo mysqli_error($connection);
            }
      }
    }
    
    ?>
 

 


  </body>
  
</html>
