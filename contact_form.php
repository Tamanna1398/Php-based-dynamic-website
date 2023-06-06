<?php 


    include 'view_query_footer_contact.php';
    include 'view_query_contact_form.php';
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

      <h2>Student Information</h2>
    <input type="text" name="" id="myInput" placeholder="names.." onkeyup="searchFun()">
      <table class="table" id="myTable">
  <thead class="thead-dark">
   
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name </th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  
<?php while($contact_form_data = mysqli_fetch_assoc($contact_form_result)){ ?>
 
    <tr>
      <th scope="row"><?php echo $contact_form_data['id'];?></th>
      <td><?php echo $contact_form_data['name'];?></td>
      <td><?php echo $contact_form_data['email'];?></td>
      <td><?php echo $contact_form_data['subject'];?></td>
      <td><?php echo $contact_form_data['message'];?></td>
     
      <td>
         <form action="view_query_about_section.php? id=<?php echo $contact_form_data['id'];?>" method="POST">
           
            <button type="submit" class="btn btn-primary">View</button>
        </form>
      
      </td>

      <td>
      <a href="delete_query_contact_form.php? id=<?php echo $contact_form_data['id'];?>" class="btn btn-danger">Delete</a>

      </td>
    </tr>
  
    <?php } ?>
  </tbody>
            </table>



</div>
       
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--Searching code-->
<script>
    const searchFun = () =>{
        let filter = document.getElementById('myInput').value.toUpperCase();
        let myTable = document.getElementById('myTable');
        let tr=myTable.getElementsByTagName('tr');
        for(var i =0; i<tr.length; i++){
            let td=tr[i].getElementsByTagName('td')[1];
            if(td){
                let textvalue = td.textContent || td.innerHTML;
                if(textvalue.toUpperCase().indexOf(filter) > -1){
                    tr[i].style.display="";
                }else{
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
</body>
</html>