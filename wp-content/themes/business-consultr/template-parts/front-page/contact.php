<?php
/**
* Template for Contact
* @since Business Consultr 1.0.0
*/
?>
<?php if( !business_consultr_get_option( 'disable_contact' ) ): ?>




	<section id="education_base_contact-3" class="acme-widgets acme-contact">
<?php 
         business_consultr_section_heading( array( 
            'id' => 'contact_main_page'
         ));

         $shortcode = business_consultr_get_option( 'contact_shortcode' );
      ?>
   <div class="contact-form">
      <div class="container">
         <div class="row">
            <div class="main-title init-animate fadeInDown2 animated" style="visibility: visible;">
            	<div class="section-title-group wow fade-in-up" style="">
         <div class="sub-title">Get in touch 24/7</div>
         <h2 class="section-title"> Make A Enquiry/Request Callback/Apply For Franchise</h2>

         <div class="desc">
            <p></p>
         </div>
      </div>
               
               
            </div>
            <div class="col-sm-6 animated swing delay-2s" style="visibility: visible;">
               <div class="contact-page-content">
                  <p><img loading="lazy" class="aligncenter size-full wp-image-1603" src="https://pragatizone.in/wp-content/uploads/call-us.png" alt="" width="440" height="450"></p>
               </div>
            </div>
            <div class="col-sm-6  animated fadeInRight delay-1s" style="visibility: visible;">
            <?php echo do_shortcode( $shortcode ); ?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php endif; ?>