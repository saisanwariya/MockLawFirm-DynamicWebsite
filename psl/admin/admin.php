<?php include 'admin_header.php'; 
?>
 <section class="contact">
    <div class="container">

    <div class="col-md-12">
          <div class="heading-normal">
            <h2>Admin DashBoard</h2>
          </div>
        </div>
    
      <div class="row">
        <div class="col-md-4">
        
          <ul> 
              <li> <a href="appointment_list.php">Appointments List</a> </li>
              <li> <a href="attorneys.php">Add Attorneys </a> </li>
              <li> <a href="probono_list.php">Pro Bono </a> </li>
              <li> <a href="feedback.php">Feed Back </a> </li>
              <li> <a href="carriers_list.php">Carriers </a> </li>
              
            </ul>
        
        </div>

        
        <div class="col-md-8">
        
        	 <?php
          $sql = "SELECT * FROM appointment_info";

if($result = mysqli_query($link, $sql)){

    if(mysqli_num_rows($result) > 0){
                echo "<table class='table table-bordered table-stripied'>";

            echo "<tr>";

                echo "<th>Sr. No</th>";

                echo "<th>Name</th>";

                echo "<th>Email</th>";

                echo "<th>Age</th>";
                echo "<th>Appointment date</th>";
                echo "<th>Type</th>";
                echo "<th>Preferred timings</th>";
                echo "<th>message</th>";
                echo "<th>Booked Time</th>";

            echo "</tr>";

        while($row = mysqli_fetch_array($result)){

            echo "<tr>";

                echo "<td>" . $row['id'] . "</td>";

                echo "<td>" . $row['name'] . "</td>";

                echo "<td>" . $row['email'] . "</td>";

                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['appointment_date'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "<td>" . $row['preferred_timings'] . "</td>";
                echo "<td>" . $row['message'] . "</td>";
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
  