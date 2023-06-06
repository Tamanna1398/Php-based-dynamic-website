<?php 
    include 'view_query_main_menu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<section class="dashboard">
<div class="row">
        <?php include 'sidebar.php'; ?>

  <div class="right_column col-10">
      <div class="row">  
            <div class="form-group col-6">
                
              <form action="footer_logo_insert_query.php" method="POST" enctype="multipart/form-data">
                <h3>Insert Footer Logo</h3>
                   <label for="">Select Footer Logo</label>
                       <input type="file" name="footer_logo">
                         <button type="submit" class="btn btn-primary">Submit</button>
             </form>
            </div>

            <div class="form-group col-6">
                <form action="update_query_footer_logo.php " method="POST" enctype="multipart/form-data">
                    <h3>Update Footer Logo</h3>
                        <label>Select Logo</label>
                        <input type="file"  value="<?php echo $logo_show['footer_logo']; ?>" name="footer_logo">

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                <br><br><br><br>
            </div>

            <div class="form-group col-10">
            <form action = "insert_query_footer_social_media.php" method="POST"  >
                        <label for="">Select Your Social Icon</label>
                        <input type="text" name="icon" id="$id ">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <br><br>
            </form>
            </div> 

            <div class="form-group col-6">
             <form action="insert_footer_socket.php" method="POST">
                        <h2>Insert Socket</h2>
                        <label></label>
                        <input type="text" class="form-control" placeholder="Write Text" name="socket_text">
                        <br><br>
                        <button type="submit" class="btn btn-primary">Submit</button>

                       
                    <br><br>
                </form>
            </div> 

            <div class="form-group col-6">
             <form action="update_query_footer_socket.php" method="POST">
                        <h2>Update Socket</h2>
                        <label></label>
                        <input type="text" class="form-control" placeholder="Write Text" name="socket_text">
                        <br><br>
                        <button type="submit" class="btn btn-primary">Submit</button>

                       
                    <br><br>
                </form>

                
            </div> 
      </div> 
 </div>   

</div>
       
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>