<?php

include 'view_query_top_header.php';
include 'view_query_main_menu.php';
include 'logo_view_query.php';
include 'view_query_top_header_social_media.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Project</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.css" integrity="sha512-GYPtCcT5srII9ZyK6OUg3Q2/G3kV7N7aJPDjVzGGpdJWPLTfSVLxmkCJB8HN1F52qVFowpGgGI3kWp27FFD2Pg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/80a40ccd9a.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="top_bar_section">
     <div class="container">
        <div class="main_column">
            <div class="left_column">
                <a href="tel:702-960-7754"><i class="fa-solid fa-phone-volume"></i><?php echo $top_header_data['phone']?></a>
                <a href="mailto:info@gmail.com"><i class="fa-regular fa-envelope"></i><?php echo $top_header_data['email']?></a>
            </div>
            <div class="right_column">
            <?php while($top_header_social_media_data= mysqli_fetch_assoc($result)){ ?>
                    <a href="#"><i class="<?php echo $top_header_social_media_data["icon"];?>"></i></a>
                            <?php } ?>

               <!-- <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>-->
            </div>
        </div>
    </div>
    </section>

    <section class="main_menu_section">
        <div class="container">
            <div class="main_column">
            <div class="left_column">
                    
               
                    <img src="<?php echo $logo_show['logo_img']; ?>" alt=" "></img>
                
            </div>
                <div class="right_column">
                    <ul id="menu">
                    <?php while($main_menu__data = mysqli_fetch_assoc($menu_result)){ ?>
                        <li><a href="<?php echo  $main_menu__data['menu_url'];?>"><?php echo $main_menu__data['menu_name'];?></a></li> 
                        <?php } ?>
                        </ul>
                </div>
            </div>
        </div>
    </section>