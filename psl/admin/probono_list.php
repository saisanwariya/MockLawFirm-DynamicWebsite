<?php include 'admin_header.php'; 
?>
 <section class="contact">
    <div class="container">

    <div class="col-md-12">
          <div class="heading-normal">
            <h2>Probono List</h2>
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
  <!-- InstanceBeginEditable name="contentArea" -->
  
        <?php 
        $data['case'] = [
          '2'=>'Case One',
          '3'=>'Case Two',
          '4'=>'Case Three'
        ]; 
        $data['income'] = [
          '2'=>'10,000 to 25,000',
          '3'=>'25,000 to 50,000',
          '4'=>'50,000 to 75,000',
          '5'=>'75,000 to 1,00,000',
        ]; 
        ?>
        <div class="col-md-8">
        
        	 <?php
          $sql = "SELECT * FROM pro_bono_info order by id desc";

if($result = mysqli_query($link, $sql)){

    if(mysqli_num_rows($result) > 0){
                echo "<table class='table table-bordered table-stripied'>";

            echo "<tr>";

                echo "<th>Sr. No</th>";
                echo "<th>Name</th>";
                echo "<th>Age</th>";
                echo "<th>Case Info</th>";
                echo "<th>Situation</th>";
                echo "<th>Income</th>";
                echo "<th>Created Time</th>";

            echo "</tr>";
$i=1;
        while($row = mysqli_fetch_array($result)){

            echo "<tr>";

                echo "<td>" . $i++ . "</td>";

                echo "<td>" . $row['name'] . "</td>";

                echo "<td>" . $row['age'] . "</td>";

                echo "<td>" . $data['case'][$row['case_info']] . "</td>";
                echo "<td>" . $row['situation'] . "</td>";
                echo "<td>" . $data['income'][$row['income']] . "</td>";
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
  