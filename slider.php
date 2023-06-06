<?php 

    include 'view_query_slider.php';
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
             <form action="insert_query_slider.php" method="POST" enctype="multipart/form-data">
                        <h3>Insert Slider Heading 1</h3>
                
                        <input type="text"  placeholder="Write Text" name="heading1">
                        <br><br>

                       

                        <h3>Insert Slider Heading 2</h3>
                        <input type="text"  placeholder="Write Text" name="heading2">
                        <br><br>


                        <h3>Insert Slider Content</h3>
                         <input type="text"  placeholder="Write Text" name="content_text">
                         <br><br>


                        <label for="">Select Your Slider Image</label>
                       <input type="file" name="slider_image">
                        <button type="submit" class="btn btn-primary">Submit</button>

                       
                    <br><br>
                </form>
                </div> 

                <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Heading 1</th>
      <th scope="col">Heading 2</th>
      <th scope="col">Slider Content</th>
      <th scope="col">Slider Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  
<?php while($slider_data = mysqli_fetch_assoc($slider_result)){ ?>
 
    <tr>
      <th scope="row"><?php echo $slider_data['id'];?></th>
      <td><?php echo $slider_data['heading1'];?></td>
      <td><?php echo $slider_data['heading2'];?></td>
      <td><?php echo $slider_data['content_text'];?></td>
      <td><img src=<?php echo $slider_data['slider_image'];?>></img></td>
      <td>
         <form action="slider_edit_query.php? id=<?php echo $slider_data['id'];?>" method="POST" enctype="multipart/form-data">
         
         <input type="text"  value="<?php echo $slider_data['heading1'];?>" name="heading1">
            <input type="text"  value="<?php echo $slider_data['heading2'];?>" name="heading2">
            <input type="text"  value="<?php echo $slider_data['content_text'];?>" name="content_text">
            <input type="file"  value="<?php echo $slider_data['slider_image'];?>" name="slider_image">
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
      
      </td>

      <td>
      <a href="delete_query_slider.php? id=<?php echo $slider_data['id'];?>" class="btn btn-danger">Delete</a>

      </td>
    </tr>
  
    <?php } ?>
  </tbody>
            </table>

               
           
      </div> 
 </div>   

</div>
       
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>