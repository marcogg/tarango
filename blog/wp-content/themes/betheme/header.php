<?php
/**
 * The Header for our theme.
 *
 * @package Betheme
 * @author Muffin group
 * @link http://muffingroup.com
 */
?><!DOCTYPE html>
<?php 
	if( $_GET && key_exists('mfn-rtl', $_GET) ):
		echo '<html class="no-js" lang="ar" dir="rtl">';
	else:
?>
<html class="no-js" <?php language_attributes(); ?> <?php mfn_tag_schema(); ?>>
<?php endif; ?>

<!-- head -->
<head>

<!-- meta -->
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php if( mfn_opts_get('responsive') ) echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">'; ?>

<title itemprop="name"><?php
if( mfn_title() ){
	echo mfn_title();
} else {
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'betheme' ), max( $paged, $page ) );
}
?></title>

<?php do_action('wp_seo'); ?>

<link rel="shortcut icon" href="<?php mfn_opts_show('favicon-img',THEME_URI .'/images/favicon.ico'); ?>" type="image/x-icon" />	

<!-- wp_head() -->
<?php wp_head(); ?>



<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1884979165077450'); 
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1" 
src="https://www.facebook.com/tr?id=1884979165077450&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->



</head>

<!-- body -->
<body <?php body_class(); ?>>
	
	<?php do_action( 'mfn_hook_top' ); ?>
	
	<?php get_template_part( 'includes/header', 'sliding-area' ); ?>
	
	<?php if( mfn_header_style( true ) == 'header-creative' ) get_template_part( 'includes/header', 'creative' ); ?>
	
	<!-- #Wrapper -->
	<div id="Wrapper">
	
		<?php 
			// Header Featured Image ----------
			$header_style = '';
			
			// Image -----
			if( mfn_ID() && ! is_search() ){
				if( ( ( mfn_ID() == get_option( 'page_for_posts' ) ) || ( get_post_type() == 'page' ) ) && has_post_thumbnail( mfn_ID() ) ){
					
					// Pages & Blog Page ---
					$subheader_image = wp_get_attachment_image_src( get_post_thumbnail_id( mfn_ID() ), 'full' );
					$header_style .= ' style="background-image:url('. $subheader_image[0] .');"';

				} elseif( get_post_meta( mfn_ID(), 'mfn-post-header-bg', true ) ){

					// Single Post ---
					$header_style .= ' style="background-image:url('. get_post_meta( mfn_ID(), 'mfn-post-header-bg', true ) .');"';

				}
			}
			
			// Attachment -----
			if( mfn_opts_get('img-subheader-attachment') == 'fixed' ){
				$header_style .= ' class="bg-fixed"';
			} elseif( mfn_opts_get('img-subheader-attachment') == 'parallax' ){
				$header_style .= ' class="bg-parallax" data-stellar-background-ratio="0.5"';
			}
		?>
		
		<?php if( mfn_header_style() == 'header-below' ) echo mfn_slider(); ?>
	
		<!-- #Header_bg -->
		<div id="Header_wrapper" <?php echo $header_style; ?>>
	
			<!-- #Header -->
			<header id="Header">
				<?php if( mfn_header_style( true ) != 'header-creative' ) get_template_part( 'includes/header', 'top-area' ); ?>	
				<?php if( mfn_header_style() != 'header-below' ) echo mfn_slider(); ?>
			</header>
				
			<?php 
				if( ( mfn_opts_get('subheader') != 'all' ) && ! get_post_meta( mfn_ID(), 'mfn-post-hide-title', true ) ){
					
					if( is_search() ){
						
						// Page title -------------------------
						echo '<div id="Subheader">';
							echo '<div class="container">';
								echo '<div class="column one">';
								
									global $wp_query;
									$total_results = $wp_query->found_posts;
									
									$translate['search-results'] = mfn_opts_get('translate') ? mfn_opts_get('translate-search-results','results found for:') : __('results found for:','betheme');								
									echo '<h1 class="title">'. $total_results .' '. $translate['search-results'] .' '. get_search_query() .'</h1>';
									
								echo '</div>';
							echo '</div>';
						echo '</div>';
						
					} elseif( ! mfn_slider() || mfn_opts_get( 'subheader-slider-show' ) ){
		
						// Page title -------------------------
						echo '<div id="Subheader">';
							echo '<div class="container">';
								echo '<div class="column one">';
									
									// Title
									echo '<h1 class="title">'. mfn_page_title() .'</h1>';
									
									// Breadcrumbs
									if( ! mfn_opts_get('subheader') ) mfn_breadcrumbs();
									
								echo '</div>';
							echo '</div>';
						echo '</div>';
						
					}
					
				}
			?>
		
		</div>
		
		<?php do_action( 'mfn_hook_content_before' ); ?>