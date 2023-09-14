<?php include 'admin_header.php'; 
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

        <button type="button" class="btn btn-default" aria-label="Left Align">
          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Attorney
        </button>
        <br />
        <br />
        
        	 <?php
          $sql = "SELECT * FROM contact_us";

if($result = mysqli_query($link, $sql)){

    if(mysqli_num_rows($result) > 0){
                echo "<table class='table table-bordered table-stripied'>";

            echo "<tr>";

                echo "<th>Sr. No</th>";
                echo "<th>Name</th>";
                echo "<th>Email</th>";
                echo "<th>Message</th>";
                echo "<th>Created Time</th>";

            echo "</tr>";

        while($row = mysqli_fetch_array($result)){
            echo "<tr>";

                echo "<td>" . $row['id'] . "</td>";

                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";

                echo "<td>" . $row['msg'] . "</td>";

                echo "<td>" . date('d-m-Y H:i:s A',strtotime($row['created_at'])) . "</td>";

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
  