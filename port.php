<?php
    include 'header.php';
    include 'view_query_port_gallery.php';
?>

       <section class="inner_banner">
           <div class="container">
               
              <div class="caption">
               <h1>Gallery</h1>
               <p>Home  <span>/</span> Gallery</p>
              </div> 
               
           </div>
          </section>
   
       <section class="portfolio_section">
           <div class="container">
               <h2 class="heading">Gallery</h2>
               <img src="Image/icon2.png" alt="">
               <div class="main_column">
               <?php while($port_gallery_data = mysqli_fetch_assoc($port_gallery_result)){?>
                   <div class="flex_column">
                       <img src=<?php echo $port_gallery_data['image']; ?> alt="">
                       <div class="caption">
                           <img src="Image/plus.png" alt="">
                           <h3><?php echo $port_gallery_data['heading']; ?></h3>
                           <p><?php echo $port_gallery_data['tag']; ?></p>
                       </div>
                   </div>
                   <?php } ?>
                   <!--<div class="flex_column">
                       <img src="Image/gallery2.jpg"alt="">
                       <div class="caption">
                           <img src="Image/plus.png" alt="">
                           <h3>Summerlink</h3>
                           <p>Paint work</p>
                       </div>
                   </div>
                   <div class="flex_column">
                       <img src="Image/gallery3.jpg"alt="">
                       <div class="caption">
                           <img src="Image/plus.png" alt="">
                           <h3>Summerlink</h3>
                           <p>Paint work</p>
                       </div>
                   </div>
                   <div class="flex_column">
                       <img src="Image/gallery4.jpg"alt="">
                       <div class="caption">
                           <img src="Image/plus.png" alt="">
                           <h3>Summerlink</h3>
                           <p>Paint work</p>
                       </div>
                   </div>
                   <div class="flex_column">
                       <img src="Image/gallery5.jpg"alt="">
                       <div class="caption">
                           <img src="Image/plus.png" alt="">
                           <h3>Summerlink</h3>
                           <p>Paint work</p>
                       </div>
                   </div>
                   <div class="flex_column">
                       <img src="Image/gallery6.jpg"alt="">
                        <div class="caption">
                           <img src="Image/plus.png" alt="">
                           <h3>Summerlink</h3>
                           <p>Paint work</p>
                       </div>
                   </div>
                   <div class="flex_column">
                       <img src="Image/port1.png"alt="">
                        <div class="caption">
                           <img src="Image/plus.png" alt="">
                           <h3>Summerlink</h3>
                           <p>Paint work</p>
                       </div>
                   </div>
                   <div class="flex_column">
                       <img src="Image/port2.png"alt="">
                        <div class="caption">
                           <img src="Image/plus.png" alt="">
                           <h3>Summerlink</h3>
                           <p>Paint work</p>
                       </div>
                   </div>
                   <div class="flex_column">
                       <img src="Image/port3.png"alt="">
                        <div class="caption">
                           <img src="Image/plus.png" alt="">
                           <h3>Summerlink</h3>
                           <p>Paint work</p>
                       </div>
                   </div>-->
               </div>
           </div>
       </section>


    <?php
    include 'footer.php';
   ?>