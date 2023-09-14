<?php include 'admin_header.php'; 
?>
   
  <!-- InstanceBeginEditable name="contentArea" -->
  
        
        <div class="col-md-8">
        
        	 <?php
          $sql = "SELECT * FROM appointment_info ORDER BY created_at DESC";

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
                echo "<td>" . $row['created_at'] . "</td>";

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
  