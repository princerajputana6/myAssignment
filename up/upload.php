<?php
   if (isset($_POST['upload'])){
       $file_name = $_FILES['file']['name'];
       $file_type = $_FILES['file']['type'];
       $file_size = $_FILES['file']['size'];
       $file_tem_loc = $_FILES['file']['tmp_name'];
       $file_store = "upload/".$file_name;

      if (move_uploaded_file($file_tem_loc, $file_name)){
          $sucess = "Sucessfully uploaded";
          
          echo $sucess;
          
      }
      else{
          $failed = "Uploading Failed";
          
          echo $failed;
          
      }

   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
    <!--start header-->
    <header>
        <div class="container">
          <div class="row">
            <div class="brand-name">
                <a href="" class="logo">My Task</a>
            </div>
            <div class="navbar">
                <ul>
                    <li><a href="../index.php">Back</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
           </div> 
        </div>
    </header>

    <!-- end header -->
    <!--Start Home-->
    <section class="home home-section">
        <label for="" class="label">Upload Your 3D(STP) File Here !!!</label>
            <div class="form">
            <form action="?" class="form-section" method="POST" enctype="multipart/form-data" >
                <input type="file" class="file" name="file" accept=".mp3,.jpg,.jpeg,.step,.doc,.stl"><br>
                <input type="submit" class="submit" name="upload" value="Upload">
            </form>
            
        </div>
    </section>
    <!--end home-->
</body>
</html>