<?php  


  include_once '../database.php';
      // session_start();
      
    if (isset($_POST['submit'])) {
    $error = "";
    $name = "";
    $position = "";
    $practice = "";
    $office = "";

    if (!empty($_POST['name'])) {
    $name = $_POST['name'];
    } else {
    $error .= "You didn't type in your name. <br />";
    }

    if (!empty($_POST['position']) && $_POST['position']>0) {
    $position = $_POST['position'];
    } else {
    $error .= "Select position. <br />";
    }

    if (!empty($_POST['practice']) && $_POST['practice']>0) {
    $practice = $_POST['practice'];
    } else {
    $error .= "Select practice. <br />";
    }

    if (!empty($_POST['office']) && $_POST['office']>0) {
    $office = $_POST['office'];
    } else {
    $error .= "Select office. <br />";
    }


  // $name = $_POST['name'];
  // $position = $_POST['position'];
  // $practice = $_POST['practice'];
  // $office = $_POST['office'];

  $sql = "INSERT INTO attorneys (name, position, practice, office ) VALUES ('$name', $position, $practice, $office)";

    if(mysqli_query($link, $sql)){

        $app_msg = "Your successfully submitted";

    } else{

        $app_msg = "Sorry, Something went wrong . Please try again";

    }

    }

include 'admin_header.php'; 
?>
 <section class="contact">
    <div class="container">

    <div class="col-md-12">
          <div class="heading-normal">
            <h2>Add Attorney </h2>
          </div>
        </div>
    
      <div class="row">
        <div class="col-md-4">        
          <ul> 
              <li> <a href="appointment_list.php">Appointments </a> </li>
              <li> <a href="probono_list.php">Pro Bono </a> </li>
              <li> <a href="feedback.php">FeedBack </a> </li>
              <li> <a href="carriers_list.php">Carriers </a> </li>
              <li> <a href="attorneys.php">Attorneys </a> </li>
            </ul>
        
        </div>
  <!-- InstanceBeginEditable name="contentArea" -->
  
        
        <div class="col-md-8">

            <form method="POST">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="first-name">Name</label>
                    <input type="text" name="name" class="form-control" id="first-name" placeholder="Name">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="last-name">Practice</label>
                    <select id="practice" name="practice" class="form-control">
                      <option selected="selected" value="0">ALL PRACTICES</option>
                      
                      <option value="4">Criminal Law</option>
                      <option value="5">Litigation</option>
                      <option value="36">Takeover &amp; Merger</option>
                      <option value="36">Corporate</option>
                      <option value="141">Bankruptcy</option>
                      <option value="141">Sports &amp; Entertainment</option>
                      <option value="3">Antitrust</option>
                      <option value="34">Real Estate</option>
                      <option value="10">Environmental</option>

                </select>
                  </div>
                </div>
                
                
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="date">Position</label>
                    <select name="position" id="position" class="form-control">
                      <option selected="selected" value="0">ALL POSITIONS</option>
                      <option value="114">Associate</option>
                      <option value="153">Chairman</option>
                      <option value="134">European Counsel</option>
                      <option value="145">Managing Clerk</option>
                      <option value="132">Of Counsel</option>
                      <option value="118">Partner</option>
                      <option value="154">Practice Area Associate</option>
                      <option value="146">Retired Partner</option>
                      <option value="147">Senior Chairman</option>
                      <option value="121">Senior Counsel</option>
                      <option value="131">Special Counsel</option>
                      <option value="152">Special Counsel - Pro Bono</option>
                    </select>
                    
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="subject">Office</label>
                    <select name="office" id="office" class="form-control">
                      <option selected="selected" value="0">ALL OFFICES</option>
                      <option value="6">Melbourne</option>
                      <option value="7">New York</option>
                      <option value="10">Sydney</option>
                      <option value="12">Washington, D.C.</option>
                    </select>
                  </div>
                </div>
                
                
              </div>
              <div class="col-md-12">
              <br />
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="submit" name="submit" value="Add Attorney" class="btn btn-success">
                  </div>
                </div>
                <br /><br />
              </div>
            </form>









        
        	 <?php
          $sql = "select a.id ,a.name, pr.name practice, po.name position, o.name office from attorneys a left join office o on o.id=a.office left join practice pr on pr.id=a.practice left join position po on po.id=a.position";

if($result = mysqli_query($link, $sql)){

    if(mysqli_num_rows($result) > 0){
                echo "<table class='table table-bordered table-stripied'>";

            echo "<tr>";

                echo "<th>Sr. No</th>";
                echo "<th>Name</th>";
                echo "<th>Office</th>";
                echo "<th>Practice</th>";
                echo "<th>Position</th>";

            echo "</tr>";

        while($row = mysqli_fetch_array($result)){
            echo "<tr>";

                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['office'] . "</td>";
                echo "<td>" . $row['practice'] . "</td>";
                echo "<td>" . $row['position'] . "</td>";

            echo "</tr>";

        }

        echo "</table>";

                mysqli_free_result($result);

    } else{

        echo "No records matching your query were found.";

    }
  }
          ?>
        
        </div>
        
      </div>
    </div>
  </section>
  <!-- InstanceEndEditable --> 
  
  <!--Footer Section Starts Here -->
  
  <?php include '../adminFooter.php';?>
  