
<!doctype html>
<html >
<?php include "portions/_head.php" ?>

<body>
<?php include "portions/_header.php" ?>

<?php
    
    include "db_conn.php";

    if(isset($_POST['add'])){

    $name=$_POST['name'];
    $age=$_POST['age'];
    $image = $_FILES['image']['name'];
    $target = "images/".basename($image);
    $hopes=$_POST['hopes'];


    $sql = "INSERT INTO user_data (name,Age,Image,Hopes) VALUES ('$name','$age','$image','$hopes') ";

    $result = mysqli_query($conn,$sql);
  
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "";
    }else{
            $msg = "Failed to upload image";
    }
    }
?>
<div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                                <h1>Enter your data </h1>
                        </div>
                        <div class="panel-body">
                            <form action="edit.php" method="post" enctype="multipart/form-data">
                                
                                <label for="password">Enter your User name:</label>
                                <input type="text" name="name" placeholder="Username" class="form-control" placeholder="User name" required autofocus>
                                
                                <br>
                                <label for="department">Enter your Age:</label>
                                <input type="number" name="age" class="form-control" placeholder="Age." required autofocus>

                                <br>
                                <label for="image">Enter your Image:</label>
                                <input type="file" name="image"  class="form-control">

                                <br>
                                <label for="ID_">Enter your Hopes:</label>
                                <input type="text" name="hopes" class="form-control" placeholder="like: reading booke..." required autofocus>

                                
                                <br>
                                <input type="submit" name="add" class="btn btn-primary btn-block" value="submit !">
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</body>
</html>