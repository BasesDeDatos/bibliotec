<?php
/**
 * Single Product title
 *
 * @author 		book-store
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>
<h1 itemprop="name" class="product_title entry-title"><?php the_title(); ?></h1>
<div class="single-products-author">
            	<?php echo the_terms( get_the_ID(), 'product_author', '<span class="author-name">Author: </span>', ', ', ' ' ); ?>
            </div>