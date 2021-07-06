

<!DOCTYPE HTML>

<html>
    <?php include "portions/_head.php" ?>
	<body>

		<!-- navbar -->
        <?php include "portions/_header.php" ?>


<div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h1 class="text-center"> Users Data </h1>
                        </div>
                            <div class="panel-body">
                                <table class="table table-bordered"> 
                                <thead>
                                    <tr class="info">
                                    <td class="text-center">Name</td>
                                    <td class="text-center">Age</td>
                                    <td class="text-center">Hopes</td>
                                    <td class="text-center">Personal image</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    
                                    include "db_conn.php";
                                    
      

                                if(isset($_GET['id'])){

                                   $user_id = $_GET['id'];
                                
			
                                    //read from database
                                    $quuery = " SELECT * FROM user_data where id = $user_id ";

                                    $result = $conn->query($quuery);	

                                    while($row = $result->fetch_assoc()){
						
                                        $name = $row['Name'];
                                        $age =$row['Age'];
                                        $image = $row['Image'];
                                        $hopes = $row['Hopes'];

                                        
                                        echo "
                                              <td class='text-center'><a href='userprofile.php?id=".$row['id']."'>" .$row['Name']. "</a></td>
                                              <td class='text-center'>" .$row['Age'].  "</td>
                                              <td class='text-center'>" .$row['Hopes']. "</td>
                                              <td class='text-center'><img src='images/" .$row['Image']. "' class ='logo'></td>
                                               </tr></form>" ; }}

                                    ?>
                                </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
  
           






	</body>
</html>