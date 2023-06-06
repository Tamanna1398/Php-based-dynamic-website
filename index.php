<?php
    include 'header.php';
    
    include 'view_query_slider.php';
    include 'view_query_about_section.php';
    include 'view_query_service_section.php';
    include 'view_query_gallery_section.php';
    include 'view_query_footer_contact.php';

?>

   <section class="slider_section">
    <div class="owl-carousel owl-theme">

    <?php while($slider_data = mysqli_fetch_assoc($slider_result)){?>
        <div class="item" id="menu">

       <img src= <?php echo $slider_data['slider_image']; ?> alt=""></img>
     
        <div class="container">
           
            <div class="main_column">
                <div class="left_column">

                </div>
                <div class="right_column">
                    <div class="caption">

                    <h3><?php echo $slider_data['heading1']; ?></h3>
                        <h1><?php echo $slider_data['heading2']; ?></h1>
                        <p><?php echo $slider_data['content_text']; ?></p>
                        
                       
                            <a class="button" href="#">Contact Us</a>
                            <a class="button" href="#">Get Started</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    </div>
    </section>

    <section class="service_section">
    
        <div class="container">
        <h2 class="heading">What services do WE offer? </h2>
            <img src="Image/icon2.png" alt="">
           
            <div class="main_column">
            <?php while($service_section_data = mysqli_fetch_assoc($service_section_result)){?>
                <div class="flex_column">
                    <img src=<?php echo $service_section_data['icon_image']; ?> alt="">
                    <p><?php echo $service_section_data['icon_text']; ?></p>
                </div>
            <?php } ?>
            </div>
           
           
        </div>
        
    </section>


    
    <section class="about_section">
    <?php while($about_section_data = mysqli_fetch_assoc($about_section_result)){?>
        <div class="container">
            <div class="main_column">
           
                <div class="left_column">
                    <img src=<?php echo $about_section_data['about_image']; ?> alt="">
                </div>
                <div class="right_column">
                    <div class="content">
                    <h2 class="heading"><?php echo $about_section_data['heading']; ?></h2>
                    <img src="Image/about-icon.png" alt="">
                        <p><?php echo $about_section_data['content1']; ?> </p>
                        <p><?php echo $about_section_data['content2']; ?></p>
                            
                </div>
            </div>
           
            </div>
           
        </div>
        <?php } ?>
    </section>

    <section class="gallery_section">
        <div class="container">
            <h2 class="heading">Gallery</h2>
            <img src="Image/icon2.png" alt="">
            <div class="main_column">
            <?php while($gallery_section_data = mysqli_fetch_assoc($gallery_section_result)){?>
                <div class="flex_column">
                    <img src=<?php echo $gallery_section_data['image']; ?> alt="">
                    <div class="caption">
                        <img src="Image/plus.png" alt="">
                        <h3><?php echo $gallery_section_data['heading']; ?></h3>
                        <p><?php echo $gallery_section_data['tag']; ?></p>
                    </div>
                </div>
                <?php } ?>
               <!-- <div class="flex_column">
                    <img src="Image/gallery2.jpg"alt="">
                    <div class="caption">
                        <img src="Image/plus.png" alt="">
                        <h3>Summerlin</h3>
                        <p>Paint work</p>
                    </div>
                </div>
                <div class="flex_column">
                    <img src="Image/gallery3.jpg"alt="">
                    <div class="caption">
                        <img src="Image/plus.png" alt="">
                        <h3>Summerlin</h3>
                        <p>Paint work</p>
                    </div>
                </div>
                <div class="flex_column">
                    <img src="Image/gallery4.jpg"alt="">
                    <div class="caption">
                        <img src="Image/plus.png" alt="">
                        <h3>Summerlin</h3>
                        <p>Paint work</p>
                    </div>
                </div>
                <div class="flex_column">
                    <img src="Image/gallery5.jpg"alt="">
                    <div class="caption">
                        <img src="Image/plus.png" alt="">
                        <h3>Summerlin</h3>
                        <p>Paint work</p>
                    </div>
                </div>
                <div class="flex_column">
                    <img src="Image/gallery6.jpg"alt="">
                     <div class="caption">
                        <img src="Image/plus.png" alt="">
                        <h3>Summerlin</h3>
                        <p>Paint work</p>
                    </div>
                </div>-->
            </div>
            <a href="#">Get Started</a>
        </div>
    </section>

   <!-- <section class="contact_section">
            <div class="container">
                <div class="main_column">
              
                        <p><?php echo $footer_contact_data['text']; ?>:<a href=<?php echo $footer_contact_data['cell']; ?>><?php echo $footer_contact_data['cell']; ?></a></p>
                      
                </div>
            </div>
    </section>-->

    <?php
    include 'footer.php';
   ?>