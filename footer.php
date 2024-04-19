 <?php
 $links = get_field("social-media-links");
 $githubLink = get_field("github");
 $linkedinLink = get_field("linkedin");
 $instagramLIink = get_field("instagram");
 $contactme = get_field("contact");
 $phoneNumber = get_field("phone");
 $email = get_field("email");
 $footerimage = get_field("footer_image");
 $arrowVertical = get_field("vertical_arrow");

 ?>

<!--contact section -->
<footer>
 <div class="container contact" id="contact"> 
  <hr>
  <div class="row justify-content-between align-items-center">
    <div class="col-3 footerimage d-none d-sm-block">
      <img src="<?php echo $footerimage["url"]; ?>" alt="" class="footer-photo img-fluid">
    </div>
    <div class="col-6">
      <h1>ANNA TSANTEKIDOU</h1>
      <div class="row footer-links">
        <div class="col-6">
          <h2><?php echo $links; ?>
</h2>
      <div class="github">
   <a href="<?php echo $githubLink; ?>" target="_blank"> <i class="fa-brands fa-github"></i>Github</a>
   </div>
     <div class="linkedin">
   <a href="<?php echo $linkedinLink; ?>" target="_blank"> <i class="fa-brands fa-linkedin"></i>LinkedIn</a>
    </div>

  <div class="instagram">
     <a href="<?php echo $instagramLink; ?>" target="_blank"> <i class="fa-brands fa-instagram"></i>Instagram</a>

  </div>
        </div>
        <div class="col-6">
              <div>
            <h2>Let's chat</h2>
          
      <div class="phone">
     <a href=#> <i class="fa-solid fa-phone"></i>+45 50101827</a>
  </div>
   <div class="email">
     <a href="mailto:ann_tsant@hotmail.com"> <i class="fa-solid fa-envelope"></i>ann_tsat@hotmail.com</a>
  </div>
          </div>
          
        </div>
      
        </div>
      </div>
      <div class="col-3 text-center">
        <a href="#top" title="Scroll to Top">
              <img src="<?php echo $arrowVertical["url"]; ?>" alt="" class="img-fluid arrow-img">
</a>
      </div>
     
    

 </div>
    
 
<hr>
    </div>
<div class="copyright text-center">
  <i class="fa-regular fa-copyright"></i> Anna Tsantekidou. All rights reserved.
</div>
 <!--contact sectio ends-->
</footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <?php wp_footer()?>
  </body>
</html>
