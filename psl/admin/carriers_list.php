<?php include 'admin_header.php'; 
?>
 <section class="contact">
    <div class="container">

    <div class="col-md-12">
          <div class="heading-normal">
            <h2>Careers List</h2>
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
        $data['qualification'] = [
          '1'=>'10th Class',
          '2'=>'Any Degree',
          '3'=>'B.Tech',
          '4'=>'MBA',
          '5'=>'MBBS',
        ]; 
        ?>
        <div class="col-md-8">
        
           <?php
          $sql = "SELECT * FROM careers order by id desc";

if($result = mysqli_query($link, $sql)){

    if(mysqli_num_rows($result) > 0){
                echo "<table class='table table-bordered table-stripied'>";

            echo "<tr>";

                echo "<th>Sr. No</th>";
                echo "<th>Name</th>";
                echo "<th>Qualification</th>";
                echo "<th>Actions</th>";
                echo "<th>Created Time</th>";

            echo "</tr>";

        while($row = mysqli_fetch_array($result)){
          $path = '/psl/uploads/'.$row['file_name'];
            echo "<tr>";

                echo "<td>" . $row['id'] . "</td>";

                echo "<td>" . $row['name'] . "</td>";

                echo "<td>" . $data['qualification'][$row['qualification']] . "</td>";
                echo "<td><a target='_blank' href='".$path."'>Download</a></td>";

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
  