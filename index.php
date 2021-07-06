<!DOCTYPE HTML>
<html>

    <?php include "portions/_head.php" ?>

	<body>
        <!-- Header -->
        <?php  include 'portions/_header.php'; ?>
              
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h1 class="text-center"> Users Data </h1>
                        </div>
                            <div class="panel-body">
                                <table class="table table-bordered"> 
                                <thead>
                                    <tr class="success">
                                    <td class="text-center">Name</td>
                                    <td class="text-center">Personal image</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    
                                    include "db_conn.php";
			
                                    //read from database
                                    $quuery = " SELECT * FROM user_data ";

                                    $result = $conn->query($quuery);	

                                    while($row = $result->fetch_assoc()){
						
                                        $id = $row['id'];
                                        $name = $row['Name'];
                                        $age =$row['Age'];
                                        $image = $row['Image'];
                                        $hopes = $row['Hopes'];

                                        
                                        echo "<form method='post' action='userprofile.php'> <tr class='text-center'>

                                              <td class='text-center'><a href='userprofile.php?id=".$row['id']."'>" .$row['Name']. "</a></td>
                                              <td class='text-center'><img src='images/" .$row['Image']. "' class ='logo'></td>
                                               </tr></form>" ; }

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