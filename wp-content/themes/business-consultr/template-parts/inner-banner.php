<?php
/**
* Template for Inner Banner Section for all the inner pages
*
* @since Business Consultr 1.0.0
*/
?>




<?php if (is_page( array( 550, 'or post title'  ) ) ) : ?>
   <section class="wrapper wrap-inner-banner" style="background-image: url('/wp-content/uploads/infrastructure-construction-pragatizone.png')">


    <?php elseif (is_page( array( 834, 'or post title'  ) ) ) : ?>
  <section class="wrapper wrap-inner-banner" style="background-image: url('/wp-content/uploads/it-pheripheral.png')">
      <?php elseif (is_page( array( 1068, 'or post title'  ) ) ) : ?>
  <section class="wrapper wrap-inner-banner" style="background-image: url('/wp-content/uploads/fmcg-pragatizone-1.png')">
         	 <?php elseif (is_page( array( 551, 'or post title'  ) ) ) : ?>
 <section class="wrapper wrap-inner-banner" style="background-image: url('/wp-content/uploads/security-setup-cctv.png')">
<?php else : ?>
 <section class="wrapper wrap-inner-banner" style="background-image: url('/wp-content/uploads/pragatizone-default-banner-1.png')">

<?php endif; ?>  



	<div class="container">
		<header class="page-header">
			<div class="inner-header-content">
				<h1 class="page-title"><?php echo wp_kses_post( $args[ 'title' ] ); ?></h1>
				<?php if( $args[ 'description' ] ): ?>
					<div class="page-description">
						<?php echo wp_kses_post( $args[ 'description' ] ); ?>
					</div>
				<?php endif; ?>
			</div>
		</header>
	</div>
</section>
<section class="wrapper breadcrumb-wrap">
	<div class="container">
		<?php 
			if( !is_front_page()){
				business_consultr_breadcrumb();
			}
		?>
	</div>
</section>