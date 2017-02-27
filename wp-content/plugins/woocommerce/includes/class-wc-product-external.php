<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * External Product Class.
 *
 * External products cannot be bought; they link offsite. Extends simple products.
 *
 * @class 		WC_Product_External
 * @version		2.7.0
 * @package		WooCommerce/Classes/Products
 * @category	Class
 * @author 		WooThemes
 */
class WC_Product_External extends WC_Product {

	/**
	 * Stores product data.
	 *
	 * @var array
	 */
	protected $extra_data = array(
		'product_url' => '',
		'button_text' => '',
	);

	/**
	 * Get internal type.
	 * @return string
	 */
	public function get_type() {
		return 'external';
	}

	/*
	|--------------------------------------------------------------------------
	| Getters
	|--------------------------------------------------------------------------
	|
	| Methods for getting data from the product object.
	*/

	/**
	 * Get product url.
	 *
	 * @param  string $context
	 * @return string
	 */
	public function get_product_url( $context = 'view' ) {
		return esc_url( $this->get_prop( 'product_url', $context ) );
	}

	/**
	 * Get button text.
	 *
	 * @param  string $context
	 * @return string
	 */
	public function get_button_text( $context = 'view' ) {
		return $this->get_prop( 'button_text', $context );
	}

	/*
	|--------------------------------------------------------------------------
	| Setters
	|--------------------------------------------------------------------------
	|
	| Functions for setting product data. These should not update anything in the
	| database itself and should only change what is stored in the class
	| object.
	*/

	/**
	 * Set product URL.
	 *
	 * @since 2.7.0
	 * @param string $product_url Product URL.
	 */
	public function set_product_url( $product_url ) {
		$this->set_prop( 'product_url', $product_url );
	}

	/**
	 * Set button text.
	 *
	 * @since 2.7.0
	 * @param string $button_text Button text.
	 */
	public function set_button_text( $button_text ) {
		$this->set_prop( 'button_text', $button_text );
	}

	/**
	 * External products cannot be stock managed.
	 *
	 * @since 2.7.0
	 * @param bool
	 */
	public function set_manage_stock( $manage_stock ) {
		$this->set_prop( 'manage_stock', false );

		if ( true === $manage_stock ) {
			$this->error( 'product_external_invalid_manage_stock', __( 'External products cannot be stock managed.', 'woocommerce' ) );
		}
	}

	/**
	 * External products cannot be stock managed.
	 *
	 * @since 2.7.0
	 * @param bool
	 */
	public function set_stock_status( $stock_status = '' ) {
		$this->set_prop( 'stock_status', 'instock' );

		if ( 'instock' !== $stock_status ) {
			$this->error( 'product_external_invalid_stock_status', __( 'External products cannot be stock managed.', 'woocommerce' ) );
		}
	}

	/**
	 * xternal products cannot be backordered.
	 *
	 * @since 2.7.0
	 * @param string $backorders Options: 'yes', 'no' or 'notify'.
	 */
	public function set_backorders( $backorders ) {
		$this->set_prop( 'backorders', 'no' );

		if ( 'no' !== $backorders ) {
			$this->error( 'product_external_invalid_backorders', __( 'External products cannot be backordered.', 'woocommerce' ) );
		}
	}

	/*
	|--------------------------------------------------------------------------
	| Other Actions
	|--------------------------------------------------------------------------
	*/

	/**
	 * Returns false if the product cannot be bought.
	 *
	 * @access public
	 * @return bool
	 */
	public function is_purchasable() {
		return apply_filters( 'woocommerce_is_purchasable', false, $this );
	}

	/**
	 * Get the add to url used mainly in loops.
	 *
	 * @access public
	 * @return string
	 */
	public function add_to_cart_url() {
		return apply_filters( 'woocommerce_product_add_to_cart_url', $this->get_product_url(), $this );
	}

	/**
	 * Get the add to cart button text for the single page.
	 *
	 * @access public
	 * @return string
	 */
	public function single_add_to_cart_text() {
		return apply_filters( 'woocommerce_product_single_add_to_cart_text', $this->get_button_text(), $this );
	}

	/**
	 * Get the add to cart button text.
	 *
	 * @access public
	 * @return string
	 */
	public function add_to_cart_text() {
		return apply_filters( 'woocommerce_product_add_to_cart_text', $this->get_button_text(), $this );
	}
}