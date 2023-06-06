<?php 
    include 'view_query_footer_logo.php';
    include 'view_query_footer_socket.php';
    include 'view_query_footer_social_media.php';
    include 'view_query_footer_contact.php';

?>

<section class="contact_section">
            <div class="container">
                <div class="main_column">
              
                        <p><?php echo $footer_contact_data['text']; ?>:<a href=<?php echo $footer_contact_data['cell']; ?>><?php echo $footer_contact_data['cell']; ?></a></p>
                      
                </div>
            </div>
    </section>

<section class="footer">
        <div class="container">
         <div class="main_column">
         <div class="logo">
         <img src="<?php echo $logo_show['footer_logo']; ?>" alt=" "></img>
         </div>
         <div class="icons">
         <?php while($footer_social_media_data= mysqli_fetch_assoc($result)){ ?>
            <a href="#"><i class="<?php echo $footer_social_media_data["icon"];?>"></i></a>
            <?php } ?>
           <!-- <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>-->
         </div>
         </div>
        </div>
    </section>

    <section class="copywrite">
        <div class="container">
           


            <p><?php echo $footer_socket_data['socket_text'] ;  ?></p>

        </div>

    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.min.js" integrity="sha512-FmCXNJaXWw1fc3G8zO3WdwR2N23YTWDFDTM3uretxVIbZ7lvnjHkciW4zy6JGvnrgjkcNEk8UNtdGTLs2GExAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function(){
            $('#menu').slicknav();
        });
    </script>
    
    <script>
        $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    items:1,
})
    </script>
    </body>
</html>