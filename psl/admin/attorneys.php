<?php include 'admin_header.php'; 
?>
 <section class="contact">
    <div class="container">

    <div class="col-md-12">
          <div class="heading-normal">
            <h2>Attorneys List</h2>
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
  
        
        <div class="col-md-8">

        <a href="attorneys_add.php">
        <button type="button" class="btn btn-default" aria-label="Left Align">
          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Attorney
        </button>
        </a>
        <br />
        <br />
        
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
  