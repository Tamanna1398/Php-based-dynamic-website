<?php
    include 'header.php';
    include 'view_query_about_service.php';
     include 'view_query_design_section.php';
     include 'view_query_about_note.php';
?>

   <section class="inner_banner">
    
    <div class="container">
        
       <div class="caption">
        <h1>About Us</h1>
        <p>Home  <span>/</span>  About Us</p>
       </div> 
        
    </div>
   </section>
  
   

    <section class="about_section">
    
        <div class="container">
       
            <div class="main_column">
            <?php while($about_service_data = mysqli_fetch_assoc($about_service_result)){?>
                <div class="left_column">
                    <img src=<?php echo $about_service_data['image']; ?> alt=" ">
                </div>
                <div class="right_column">
                    <div class="content">
                    <h2 class="heading"><?php echo $about_service_data['heading']; ?></h2>
                    <img src="Image/about-icon.png" alt="">
                    <p><?php echo $about_service_data['content1']; ?> </p>
                    <p><?php echo $about_service_data['content2']; ?></p>
                            
                      
                </div>
                <?php } ?>
            </div>
            
        </div>
        
    </section>


    <section class="design-section">
   
        <div class="container">
        
            <div class="main_column">
            <?php while($design_section_data = mysqli_fetch_assoc($design_section_result)){?>
                <div class="flex_column">
                    <img src=<?php echo $design_section_data['icon']; ?> alt="">
                    <h2><?php echo $design_section_data['tag']; ?></h2>
                    <img src="Image/support2.png" alt="">
                    <p><?php echo $design_section_data['content']; ?></p>
                </div>
                <?php } ?>
            </div>
           
        </div>
       
    </section>

     <section class="about_note">
      <div class="container">
        <div class="note">
            <p><span>Silver Hawk</span> is a General Construction Company</p>
        </div>
      </div>  
     </section>

     <section class="maintenance">
        <div class="container">
            <div class="main_column">
            <?php while($about_note_data = mysqli_fetch_assoc($about_note_result)){?>
          <div class="flex_column">
            <img src=<?php echo $about_note_data ['icon']; ?> alt="">
            <h2><?php echo $about_note_data['tag']; ?></h2>
            <p><?php echo $about_note_data['content']; ?></p>
          </div>
          <?php } ?>
          
        </div>
        </div>
     </section>

  

<?php
    include 'footer.php';
   ?>