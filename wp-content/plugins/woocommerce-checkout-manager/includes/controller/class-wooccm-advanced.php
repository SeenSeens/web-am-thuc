<?php

class WOOCCM_Checkout_Advanced_Controller {

  protected static $_instance;

  public function __construct() {
    $this->init();
  }

  public static function instance() {
    if (is_null(self::$_instance)) {
      self::$_instance = new self();
    }
    return self::$_instance;
  }

  public function add_inline_scripts() {

    if ($css = get_option('wooccm_advanced_custom_css', false)) {
      ?>
      <style>
      <?php echo $css; ?>
      </style>
      <?php
    }
  }

  public function get_settings() {

    return array(
        array(
            'type' => 'title',
            'id' => 'section_title'
        ),
//array(
//        'name' => esc_html__('Allow custom field names', 'woocommerce-checkout-manager'),
//        'desc_tip' => esc_html__('Show the selected fields in the thankyou page.', 'woocommerce-checkout-manager'),
//        'id' => 'wooccm_allow_custom_field_names',
//        'type' => 'select',
//        'class' => 'chosen_select',
//        'options' => array(
//            'yes' => esc_html__('Yes', 'woocommerce-checkout-manager'),
//            'no' => esc_html__('No', 'woocommerce-checkout-manager'),
//        ),
//        'default' => 'no',
//    ),
        array(
            'name' => esc_html__('Custom CSS', 'woocommerce-checkout-manager'),
            'desc_tip' => esc_html__('Add custom stylesheets to the checkout page.', 'woocommerce-checkout-manager'),
            'id' => 'wooccm_advanced_custom_css',
            'type' => 'textarea',
            'placeholder' => ''
        ),
        array(
            'type' => 'sectionend',
            'id' => 'section_end'
        )
    );
  }

  // Admin    
  // -------------------------------------------------------------------------

  public function add_header() {
    global $current_section;
    ?>
    <li><a href="<?php echo admin_url('admin.php?page=wc-settings&tab=wooccm&section=advanced'); ?>" class="<?php echo ( $current_section == 'advanced' ? 'current' : '' ); ?>"><?php esc_html_e('Advanced', 'woocommerce-checkout-manager'); ?></a> | </li>
    <?php
  }

  public function add_section() {

    global $current_section;

    if ('advanced' == $current_section) {

      $settings = $this->get_settings();

      include_once( WOOCCM_PLUGIN_DIR . 'includes/view/backend/pages/advanced.php' );
    }
  }

  public function save_settings() {

    global $current_section;

    if ('advanced' == $current_section) {
      woocommerce_update_options($this->get_settings());
    }
  }

  public function custom_css_w($value) {

    $options = get_option('wccs_settings');

    if ($css = @$options['checkness']['custom_css_w']) {
      return $css;
    }

    return $value;
  }

  public function init() {

    add_action('wooccm_sections_header', array($this, 'add_header'));
    add_action('woocommerce_sections_' . WOOCCM_PREFIX, array($this, 'add_section'));
    add_action('woocommerce_settings_save_' . WOOCCM_PREFIX, array($this, 'save_settings'));

    // Frontend
    // -------------------------------------------------------------------------
    add_action('woocommerce_before_checkout_form', array($this, 'add_inline_scripts'));

    // Compatibility
    // -------------------------------------------------------------------------
    add_filter('default_option_wooccm_advanced_custom_css', array($this, 'custom_css_w'));
  }

}

WOOCCM_Checkout_Advanced_Controller::instance();

