<?php
/**
 * The template for displaying the footer
 * Contains the closing of the body tag and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @since Business Consultr 1.0.0
 */
?>	
</div> <!-- end content -->

		<?php if( business_consultr_get_option( 'disable_footer_widget') ){
			$return =  false;
		}else {
			if( business_consultr_is_active_footer_sidebar() ):
			?>
			<?php
		
			
			if ( is_front_page() && ! is_home() ){
	?>
				
	<?php		
			}else{
	?>


				<section id="education_base_contact-3" class="acme-widgets acme-contact">
<?php 
         business_consultr_section_heading( array( 
            'id' => 'contact_main_page'
         ));

         $shortcode = business_consultr_get_option( 'contact_shortcode' );
      ?>

<?php if (!is_front_page() ) { ?>
   <section class="wrapper block-callback block-search-callback banner-content">
	<div class="banner-overlay">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
											<h2 class="section-title quality_h3">Our Brands. Touching Your Life. Everyday. | Bharosa Tarakki Ka |</h2>
																<div class="button-container">
							<a href="/get-a-quote" class="button-primary button-round">
								Make A Enquiry							</a>
						</div>
									</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>

   <div class="contact-form">
      <div class="container">
         <div class="row">
            <div class="main-title init-animate fadeInDown2 animated" style="visibility: visible;">
            	<div class="section-title-group wow fade-in-up" style="">
         <div class="sub-title">Get in touch 24/7</div>
         <h2 class="section-title"> Get Free Quotation /Request Callback</h2>

         <div class="desc">
            <p></p>
         </div>
      </div>
               
               
            </div>
            <div class="col-sm-6 animated fadeInLeft delay-2s" style="visibility: visible;">
               <div class="contact-page-content">
                  <p><img loading="lazy" class="aligncenter size-full wp-image-1603" src="http://mithilarefrigeration.com/wp-content/uploads/call-mithila-refrigeration.png" alt="" width="440" height="450"></p>
               </div>
            </div>
            <div class="col-sm-6  animated fadeInRight delay-1s" style="visibility: visible;">
            <?php echo do_shortcode( $shortcode ); ?>
            </div>
         </div>
      </div>
   </div>
</section>


	<?php
			}
	?>

				<section class="wrapper block-top-footer">
					<div class="container">
						<div class="row">
						<?php 
							$count = 0;
							for( $i = 1; $i <= 4; $i++ ){
								?>
								<div class="col-md-3 col-sm-6 col-xs-12">
									<?php dynamic_sidebar( 'business-consultr-footer-sidebar-'.$i ); ?>
								</div>
								<?php
							}
							if( $count > 0 ){
								$return = true;
							}else{
								$return = false;
							}
						?>
						</div>
					</div>
				</section>
			<?php
			endif;
		}

		?>
	
		<footer class="wrapper site-footer" role="contentinfo">
			<div class="container">
				<div class="footer-inner">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-8">
							<div class="site-info">
								Copyright © 2023 | All Rights Reserved to Pragati Zone Pvt. Ltd. | Brand Managed by <a ref="nofollow" style="color:#4bb558; font-weight:600" href="https://www.webhouseindia.com/">Webhouseindia.com</a>

							</div><!-- .site-info -->
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="footer-menu">
								<?php business_consultr_get_menu( 'footer' ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a class="float" href="https://api.whatsapp.com/send?phone=+917520200777&amp;text=Hi,%20I%20want%20to%20contact%20you%20for%20" target="_blank">
<i class="kfi kfi-phone my-float"></i>
</a>
<div class="share_box share_box1">
<div class="top-social">
<a href="/wp-content/uploads/PRAGATI-ZONE_compressed.pdf"><i class="kfi kfi-datareport

"></i> <blink>Company Profile</blink>
</a>
</div>
</div>
<div class="share_box share_box2">
<div class="top-social">
<a href="tel:+917520200777" data-toggle="modal"> Call Now <i class="kfi kfi-phone"></i></a>
</div>
</div>
		</footer><!-- #colophon -->
		<?php wp_footer(); ?>
		<script>

		</script>
	</body>
</html>