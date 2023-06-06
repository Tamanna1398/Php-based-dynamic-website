<?php 

    include 'view_query_about_section.php';
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
             <form action="insert_query_about_section.php" method="POST" enctype="multipart/form-data">
                        <h3>Insert Image </h3>
                        <input type="file"  name="about_image">
                        <br><br>

                         <h3>Insert Heading</h3>
                         <input type="text"  placeholder="Write Text" name="heading">
                         <br><br>

                         <h3>Insert Content1</h3>
                         <input type="text"  placeholder="Write Text" name="content1">
                         <br><br>

                         <h3>Insert Content2</h3>
                         <input type="text"  placeholder="Write Text" name="content2">
                         <br><br>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>

                       
                    <br><br>
                </form>
                </div> 

              <table class="table">
             <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col"> Image </th>
      <th scope="col">Heading</th>
      <th scope="col">Content 1st Part</th>
      <th scope="col">Content 2nd Part</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  
    <?php while($about_section_data = mysqli_fetch_assoc($about_section_result)){ ?>
 
    <tr>
      <th scope="row"><?php echo $about_section_data ['id'];?></th>
      <td><img src=<?php echo $about_section_data ['about_image'];?>></img></td>
      <td><?php echo $about_section_data ['heading'];?></td>
      <td><?php echo $about_section_data ['content1'];?></td>
      <td><?php echo $about_section_data ['content2'];?></td>
    
      <td>
         <form action="edit_query_about_section.php? id=<?php echo $about_section_data ['id'];?>" method="POST" enctype="multipart/form-data">
        
            <input type="file"  value="<?php echo $about_section_data ['about_image'];?>" name="about_image">
            <input type="text" value="<?php echo $about_section_data ['heading'];?>" name="heading">
            <input type="text" value="<?php echo $about_section_data ['content1'];?>" name="content1">
            <input type="text" value="<?php echo $about_section_data ['content2'];?>" name="content2">
            
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
      
      </td>

      <td>
      <a href="delete_query_about_section.php? id=<?php echo $about_section_data ['id'];?>" class="btn btn-danger">Delete</a>

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