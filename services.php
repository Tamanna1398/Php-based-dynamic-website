<?php
    include 'header.php';
    include 'view_query_service_part.php';
    include 'view_query_service_gallery.php';
?>

   <section class="inner_banner">
   <!--<img src= <?php echo $service_slider_data ['slider_image']; ?> alt=""></img>-->
    <div class="container">
        
       <div class="caption">
        <h1>Services</h1>
        <p>Home  <span>/</span> Services</p>
       </div> 
        
    </div>
   </section>
  
   <section class="service_section2">
    <div class="container">
        <h2 class="heading">What services do WE offer? </h2>
        <img src="Image/icon2.png" alt="">
        <div class="main_column">
        <?php while($service_part_data = mysqli_fetch_assoc($service_part_result)){?>
                <div class="flex_column">
                    <img src=<?php echo $service_part_data['service_icon']; ?>  alt="">
                    <p><?php echo $service_part_data['service_text']; ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


     <section class="maintenance2">
        <div class="container">
            <div class="main_column">
            <?php while($service_gallery_data = mysqli_fetch_assoc($service_gallery_result)){?>
          <div class="flex_column">
          <img src=<?php echo $service_gallery_data['service_image']; ?>  alt="">
            <h2><?php echo $service_gallery_data['service_tag']; ?></h2>
            <p><?php echo $service_gallery_data['service_content']; ?></p>
          </div>
          <?php } ?>
            <!--<img src="Image/service1.png" alt="">
            <h2>House Renovation</h2>
            <p>With over thirty years of experience in residential renovation design and over 16,000 renovation plans delivered to this day.</p>
          </div>
          <div class="flex_column">
            <img src="Image/service2.png" alt="">
            <h2>Laminate Flooring</h2>
            <p>Lorem doller count meter dummy text goes to show doller count meter. Inset count meter dollwr lorem count lorem ipsum.</p>
          </div>
          <div class="flex_column">
            <img src="Image/service3.png" alt="">
            <h2>Metal Roofing</h2>
            <p>Lorem doller count meter dummy text goes to show doller count meter. Inset count meter dollwr lorem count lorem ipsum.</p>
          </div>-->
        </div>
        </div>
     </section>

  
<?php
    include 'footer.php';
   ?>