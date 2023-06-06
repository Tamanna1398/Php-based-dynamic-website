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
                <form action="insert_main_menu.php" method="POST">
                        <h2>Insert Menu Name</h2>
                        <label>Menu Name</label>
                        <input type="text" class="form-control" placeholder="Enter Menu Name" name="menu_name">

                        <label>Menu URL</label>
                        <input type="text" class="form-control" placeholder="Enter Menu URL" name="menu_url">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <br><br>
                </form>
            </div>
            

            <form action="logo_insert_query.php" method="POST" enctype="multipart/form-data">
                   <label for="">Select your Logo</label>
                       <input type="file" name="logo">
                         <button type="submit" class="btn btn-primary">Submit</button>
           </form>


           
            <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Menu Name</th>
      <th scope="col">Menu URL</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php while($main_menu__data = mysqli_fetch_assoc($menu_result)){ ?>
    <tr>
      <th scope="row"><?php echo $main_menu__data['id'];?></th>
      <td><?php echo $main_menu__data['menu_name'];?></td>
      <td><?php echo $main_menu__data['menu_url'];?></td>
      <td>
         <form action="main_menu_edit_query.php? id=<?php echo $main_menu__data['id'];?>" method="POST">
            <input type="text" class="form-control" value="<?php echo $main_menu__data['menu_name'];?>" name="menu_name">
            <input type="text" class="form-control" value="<?php echo $main_menu__data['menu_url'];?>" name="menu_url">
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
      
      </td>

      <td>
      <a href="delete_query_main_menu.php? id=<?php echo $main_menu__data['id'];?>" class="btn btn-danger">Delete</a>

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