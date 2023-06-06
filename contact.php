<?php
    include 'header.php';
?>

   <section class="inner_banner">
    <div class="container">
        
       <div class="caption">
        <h1>Contact Us</h1>
        <p>Home  <span>/</span>  Contact Us</p>
       </div> 
        
    </div>
   </section>
  
   <section class="contact_page">
    <div class="container">
        <div class="main_column">
            <div class="left_column">
                <h2>Contact Us</h2>
                <p>Send us any questions you have about getting your FREE consultation.</p>
                <form action="insert_query_contact_form.php" method="POST">
                  <div class="flex_column">
                      <div class="name"><input type="text"  placeholder="Name" name="name"></div>
                      <div class="email"><input type="email" placeholder="E-mail" name="email"></div>
                  </div>
                  <input type="text" placeholder="Subject" name="subject">
                  <textarea  cols="30" rows="10" placeholder="Message" name="message"></textarea>
                  <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            <div class="right_column">
                <h2>SilverHawk</h2>
                <div class="info">
                <a href="office"><i class="fa-sharp fa-solid fa-city"></i><span>Office:</span> +1 702-960-7754</a>
                <a href=" phone"><i class="fa-solid fa-phone-volume"></i><span>Phone: </span> 702.960.7754</a>
                <a href="fax"><i class="fa-sharp fa-solid fa-fax"></i><span>Fax: </span>702.960.7754</a>
                <a href="website"><i class="fa-light fa-globe"></i><span>website:</span>www.silverhawk.com</a>
            </div>
            </div>

        </div>

    </div>

   </section>


 
    

  

<?php
    include 'footer.php';
   ?>