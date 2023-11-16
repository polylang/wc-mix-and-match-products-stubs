<?php

/**
 * Admin AJAX meta-box handlers.
 */
class WC_MNM_Admin_Ajax
{
    /**
     * Hook in.
     */
    public static function init()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Edit-Order.
    |--------------------------------------------------------------------------
    */
    /**
     * True when displaying content in an edit-container order item modal.
     *
     * @deprecated 2.3.0
     * @return bool
     */
    public static function is_container_edit_request()
    {
    }
    /**
     * Form content used to populate "Configure/Edit" container order item modals.
     *
     * @deprecated 2.3.0
     */
    public static function ajax_container_order_item_form()
    {
    }
    /**
     * Validates edited/configured containers and returns updated order items.
     *
     * @deprecated 2.3.0
     */
    public static function ajax_edit_container_in_order()
    {
    }
    /**
     * Validates user can edit this product.
     *
     * @return mixed - If editable will return an array. Otherwise, will return WP_Error.
     *
     * @deprecated 2.3.0
     */
    protected static function can_edit_container()
    {
    }
}
class WC_MNM_Admin_Notes
{
    /**
     * Attach hooks and filters
     */
    public static function init()
    {
    }
    /**
     * Include the notes to create.
     *
     * @since 2.4.1
     */
    public static function possibly_add_notes()
    {
    }
    /**
     * Include the notes to create.
     *
     * @since 2.4.1 - renamed already.
     */
    public static function initialize_notes()
    {
    }
}
/**
 * WC_MNM_Admin_Notices Class.
 *
 * Handle the addition/display of admin notices.
 */
class WC_MNM_Admin_Notices
{
    /**
     * Constructor.
     */
    public static function init()
    {
    }
    /**
     * Store  notices to DB.
     */
    public static function store_notices()
    {
    }
    /**
     * Get notices
     *
     * @since 2.0.0
     *
     * @return array
     */
    public static function get_notices()
    {
    }
    /**
     * Remove all notices.
     */
    public static function remove_all_notices()
    {
    }
    /**
     * Add a notice/error.
     *
     * @param string $name Notice name.
     * @param bool   $force_save Force saving inside this method instead of at the 'shutdown'.
     * @param  bool  $save_notice - deprecated 3rd arg.
     */
    public static function add_notice($name, $force_save = \false, $save_notice = \false)
    {
    }
    /**
     * Remove a notice from being displayed.
     *
     * @since 2.0.0
     *
     * @see WC_Admin_Notices::hide_notice() if there is a need to make a notice dismissable and store user meta. More relevant to optional notices.
     *
     * @param string $name Notice name.
     * @param bool   $force_save Force saving inside this method instead of at the 'shutdown'.
     */
    public static function remove_notice($name, $force_save = \false)
    {
    }
    /**
     * See if a notice is being shown.
     *
     * @since 2.0.0
     *
     * @param string $name Notice name.
     * @return boolean
     */
    public static function has_notice($name)
    {
    }
    /**
     * Hide a notice if the GET variable is set.
     *
     * @since 2.0.0
     */
    public static function hide_notices()
    {
    }
    /**
     * Show maintenance notices.
     */
    public static function add_notices()
    {
    }
    /**
     * Add custom notice.
     * NB: see WC_Admin_Notices:add_custom_notice if we need to make these persistent/dismissiable.
     *
     * @since 2.0.0
     *
     * @param string $name        Notice name - currently not used.
     * @param string $notice_html Notice HTML.
     * @param string $notice_type Class added to notice div.
     */
    public static function add_custom_notice($name = '', $notice_html = '', $notice_type = 'error')
    {
    }
    /**
     * Add 'update' maintenance notice.
     *
     * @since  1.10.0
     */
    public static function update_notice()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated.
    |--------------------------------------------------------------------------
    */
    /**
     * Show any stored error messages.
     *
     * @deprecated 2.0.0
     */
    public static function output_notices()
    {
    }
    /**
     * Add a maintenance notice to be displayed.
     *
     * @deprecated 2.0.0
     *
     * @param  string  $notice_name
     */
    public static function add_maintenance_notice($notice_name)
    {
    }
    /**
     * Remove a maintenance notice.
     *
     * @deprecated 2.0.0
     *
     * @param  string  $notice_name
     */
    public static function remove_maintenance_notice($notice_name)
    {
    }
    /**
     * Dismisses a notice.
     *
     * @since  1.10.0
     * @deprecated 2.0.0
     *
     * @param  string  $notice
     */
    public static function dismiss_notice($notice)
    {
    }
    /**
     * Checks if a maintenance notice is visible.
     *
     * @since  1.10.0
     *
     * @param  string  $notice_name
     * @return boolean
     */
    public static function is_maintenance_notice_visible($notice_name)
    {
    }
    /**
     * Checks if a dismissible notice has been dismissed in the past.
     *
     * @since  1.10.0
     * @deprecated 2.0.0
     *
     * @param  string  $notice_name
     * @return boolean
     */
    public static function is_dismissible_notice_dismissed($notice_name)
    {
    }
    /**
     * Save errors to an option.
     *
     * @deprecated 2.0.0
     */
    public static function save_notices()
    {
    }
    /**
     * Show maintenance notices.
     */
    public static function hook_maintenance_notices()
    {
    }
    /**
     * Act upon clicking on a 'dismiss notice' link.
     *
     * @deprecated 2.0.0
     */
    public static function dismiss_notice_handler()
    {
    }
    /**
     * Add 'updating' maintenance notice.
     *
     * @deprecated 1.10.0
     */
    public static function updating_notice()
    {
    }
}
/**
 * WC_Mix_and_Match_Admin Class.
 *
 * Loads admin tabs, scripts and adds related hooks / filters.
 */
class WC_Mix_and_Match_Admin
{
    /**
     * Bootstraps the class and hooks required.
     */
    public static function init()
    {
    }
    /**
     * Message to add in the WP Privacy Policy Guide page.
     *
     * @since  1.3.3
     *
     * @return string
     */
    protected static function get_privacy_policy_guide_message()
    {
    }
    /**
     * Admin init.
     */
    public static function includes()
    {
    }
    /**
     * Add a message in the WP Privacy Policy Guide page.
     *
     * @since  1.3.3
     */
    public static function add_privacy_policy_guide_content()
    {
    }
    /**
     * Load the product metabox script.
     */
    public static function admin_scripts()
    {
    }
    /**
     * Add an icon to MNM product data tab
     *
     * @deprecated 1.7.0 - Rule is in mnm-admin.css.
     */
    public static function admin_header()
    {
    }
    /**
     * Add template overrides for MNM to WooCommerce Tracker.
     *
     * @param  array  $paths
     * @return array
     */
    public static function template_scan_path($paths)
    {
    }
    /**
     * Renders the MNM information in the WC status page
     *
     * @props to ProsPress
     */
    public static function render_system_status_items()
    {
    }
    /**
     * Show row meta on the plugin screen.
     *
     * @param   mixed  $links
     * @param   mixed  $file
     * @return  array
     */
    public static function plugin_row_meta($links, $file)
    {
    }
    /**
     * Include the upgrade notice that will fire when 1.3.0 is released.
     *
     * @param array $plugin_data information about the plugin
     * @param array $response response from the server about the new version
     */
    public static function update_notice($plugin_data, $response)
    {
    }
}
/**
 * WC_MNM_Product_Export Class.
 *
 * Add support for MNM products to WooCommerce product export.
 */
class WC_MNM_Product_Export
{
    /**
     * Hook in.
     */
    public static function init()
    {
    }
    /**
     * Add CSV columns for exporting container data.
     *
     * @param  array  $columns
     * @return array  $columns
     */
    public static function add_columns($columns)
    {
    }
    /**
     * "Contents source" column content.
     *
     * @since 2.0.0
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_content_source($value, $product)
    {
    }
    /**
     * "Child Category Ids" column content.
     *
     * @since 2.0.0
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_child_category_ids($value, $product)
    {
    }
    /**
     * MnM child items data column content.
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_child_items($value, $product)
    {
    }
    /**
     * "Min Container Quantity" column content.
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_min_container_size($value, $product)
    {
    }
    /**
     * "max Container Quantity" column content.
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_max_container_size($value, $product)
    {
    }
    /**
     * "Container priced per product" column content.
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_priced_per_product($value, $product)
    {
    }
    /**
     * "Container packing mode" column content.
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_packing_mode($value, $product)
    {
    }
    /**
     * "Container Weight Cumulative" column content.
     *
     * @since 2.0.0
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_weight_cumulative($value, $product)
    {
    }
    /**
     * "Container Discount per product" column content.
     *
     * @since  1.4.0
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_discount_per_product($value, $product)
    {
    }
    /**
     * "Layout override" column content.
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_layout_override($value, $product)
    {
    }
    /**
     * "Layout" column content.
     *
     * @since  1.4.0
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_layout($value, $product)
    {
    }
    /**
     * "Add to cart form location" column content.
     *
     * @since  1.4.0
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_add_to_cart_form_location($value, $product)
    {
    }
    /**
     * JSON-encode child items for export.
     *
     * @since 2.3.0
     *
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function prepare_child_items_for_export($product)
    {
    }
    /**
     * JSON encode categories for export.
     *
     * @since 2.3.0
     *
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function prepare_child_category_ids_for_export($product)
    {
    }
    /**
     * MnM contents data column content.
     *
     * @deprecated 2.0.0
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_contents($value, $product)
    {
    }
    /**
     * "Container shipped per product" column content.
     *
     * @deprecated 2.0.0
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_shipped_per_product($value, $product)
    {
    }
}
/**
 * WC_MNM_Product_Import Class.
 *
 * Add support for MNM products to WooCommerce product import.
 */
class WC_MNM_Product_Import
{
    /**
     * Hook in.
     */
    public static function init()
    {
    }
    /**
     * Register the 'Custom' columns in the importer.
     *
     * @param  array  $columns
     * @return array  $columns
     */
    public static function map_columns($columns)
    {
    }
    /**
     * Add automatic mapping support for custom columns.
     *
     * @param  array  $columns
     * @return array  $columns
     */
    public static function add_columns_to_mapping_screen($columns)
    {
    }
    /**
     * Set formatting (decoding) callback for child item data.
     *
     * @since  2.3.0
     *
     * @param  array                    $callbacks
     * @param  WC_Product_CSV_Importer  $importer
     * @return array
     */
    public static function append_formatting_callbacks($callbacks, $importer)
    {
    }
    /**
     * JSON Decode MNM child data.
     *
     * @since 2.3.0
     *
     * @param string $value Field value.
     * @return array
     */
    public static function decode_child_items($value)
    {
    }
    /**
     * If not null string, parse an integer.
     *
     * @since 2.3.0
     *
     * @param string $value Field value.
     * @return mixed
     */
    public static function maybe_parse_intval($value)
    {
    }
    /**
     * Decode MNM child data items and parse relative IDs.
     *
     * @param  array                    $parsed_data
     * @param  WC_Product_CSV_Importer  $importer
     * @return array
     */
    public static function parse_child_items($parsed_data, $importer)
    {
    }
    /**
     * Set container-type props.
     * NB: We shouldn't need to parse anything further here. Parsed by core on import and rest handled by setters.
     *
     * @param WC_Product
     * @param  array  $parsed_data
     * @return WC_Product
     */
    public static function set_mnm_props($product, $data)
    {
    }
    /**
     * Get container-type props from parsed data.
     *
     * @param  array  $data
     * @param WC_Product
     * @return array
     */
    public static function get_parsed_props($data, $product)
    {
    }
    /**
     * Decode MNM data items and parse relative IDs.
     *
     * @deprecated 2.0.0
     *
     * @param  array                    $parsed_data
     * @param  WC_Product_CSV_Importer  $importer
     * @return array
     */
    public static function parse_mnm_items($parsed_data, $importer)
    {
    }
    /**
     * Decode MNM child category items and parse relative term IDs.
     *
     * @since 2.0.0
     * @deprecated 2.3.0 - Register formatter directly in append_formatting_callbacks()
     *
     * @param  array                    $parsed_data
     * @param  WC_Product_CSV_Importer  $importer
     * @return array
     */
    public static function parse_child_category_ids($parsed_data, $importer)
    {
    }
}
/**
 * Mix and Match edit-order functions and filters.
 */
class WC_MNM_Meta_Box_Order
{
    /**
     * Order object to use in 'display_edit_button'.
     *
     * @var WC_Order
     */
    protected static $order;
    /**
     * Setup Admin class.
     */
    public static function init()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Filter hooks.
    |--------------------------------------------------------------------------
    */
    /**
     * Auto-populate child order-items for Mix and Match containers that don't require configuration.
     *
     * @param  $item_id  int
     * @param  $item     WC_Order_Item
     * @param  $order    WC_Order
     */
    public static function add_child_items($item_id, $item, $order)
    {
    }
    /**
     * Save order object to use in 'display_edit_button'.
     *
     * Although the order object can be retrieved via 'WC_Order_Item::get_order', we've seen a significant performance hit when using that method.
     *
     * @param  WC_Order  $order
     */
    public static function set_order($order)
    {
    }
    /**
     * Reattach the edit button when doing ajax.
     *
     * @since 2.4.0
     */
    public static function reattach_edit_button()
    {
    }
    /**
     * Display "Configure/Edit" button next to configurable Mix and Match container items in the edit-order screen.
     *
     * @param  $item_id  int
     * @param  $item     WC_Order_Item
     * @param  $order    WC_Product
     */
    public static function display_edit_button($item_id, $item, $product)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Edit-Order Modal.
    |--------------------------------------------------------------------------
    */
    /**
     * Force tabular layout and hide child links.
     *
     * @since 2.3.0
     *
     * @param  $product  WC_Product_Mix_and_Match
     * @param  $order_item WC_Order_Item
     * @param  $order      WC_Order
     * @param  string $source The originating source loading this template
     */
    public static function force_container_styles($product, $order_item, $order, $source)
    {
    }
    /**
     * Nuke any theme overrides of quantity-input.php template.
     *
     * @since 2.3.0
     *
     * @param  $item_id  int
     * @param  $item     WC_Order_Item
     * @param  $order    WC_Product
     * @return void
     */
    public static function force_core_template($template, $template_name, $args, $template_path, $default_path)
    {
    }
    /**
     * JS template of modal for configuring/editing containers.
     */
    public static function add_js_template()
    {
    }
}
/**
 * WC_MNM_Meta_Box_Product_Data Class.
 *
 * Adds and save product meta.
 */
class WC_MNM_Meta_Box_Product_Data
{
    /**
     * Bootstraps the class and hooks required.
     */
    public static function init()
    {
    }
    /**
     * Adds the 'mix and match product' type to the product types dropdown.
     *
     * @param  array    $options
     * @return array
     * @deprecated 1.8.0 moved to WC_MNM_Install class
     */
    public static function product_selector_filter($options)
    {
    }
    /**
     * Mix-and-match type options.
     *
     * @param  array    $options
     * @return array
     */
    public static function type_options($options)
    {
    }
    /**
     * Shipping type image select html.
     *
     * @since 2.0.0
     */
    public static function container_shipping_options_admin_html()
    {
    }
    /**
     * Adds the MnM Product write panel tabs.
     *
     * @param  array $tabs
     * @return array
     */
    public static function product_data_tab($tabs)
    {
    }
    /**
     * Write panel.
     */
    public static function product_data_panel()
    {
    }
    /**
     * Add container discount option.
     *
     * @param  int $post_id
     * @param  WC_Mix_and_Match  $mnm_product_object
     */
    public static function discount_options($post_id, $mnm_product_object)
    {
    }
    /**
     * Render Layout options on 'wc_mnm_admin_product_options'.
     *
     * @param  int $post_id
     * @param  WC_Mix_and_Match  $mnm_product_object
     */
    public static function container_layout_options($post_id, $mnm_product_object)
    {
    }
    /**
     * Adds the container size option writepanel options.
     *
     * @param int $post_id
     * @param  WC_Product_Mix_and_Match  $mnm_product_object
     * @since  1.0.7
     */
    public static function container_size_options($post_id, $mnm_product_object)
    {
    }
    /**
     * Adds allowed contents select2 writepanel options.
     *
     * @param int $post_id
     * @param  WC_Product_Mix_and_Match  $mnm_product_object
     * @since  1.0.7
     */
    public static function allowed_contents_options($post_id, $mnm_product_object)
    {
    }
    /**
     * Adds the MnM per-item pricing option.
     *
     * @param int $post_id
     * @param  WC_Product_Mix_and_Match  $mnm_product_object
     * @since  1.2.0
     */
    public static function pricing_options($post_id, $mnm_product_object)
    {
    }
    /**
     * Adds the MnM per-item shipping option.
     *
     * @param int $post_id
     * @param  WC_Product_Mix_and_Match  $mnm_product_object
     * @since  1.2.0
     * @deprecated 2.0.0 - Moved to Shipping Panel
     */
    public static function shipping_options($post_id, $mnm_product_object)
    {
    }
    /**
     * Process, verify and save product data
     *
     * @param  WC_Product  $product
     */
    public static function process_mnm_data($product)
    {
    }
    /**
     * Process allowed child items into array.
     *
     * @param  WC_Product $product
     * @param  array $data [ int The Product|Variation ID ]
     * @return array [ int => [
     *                      'product_id' => int,
     *                      'variation_id' => int
     *               ] ]
     */
    public static function process_child_items_data($product, $data)
    {
    }
}
/**
 * Support note.
 */
class WC_MNM_Notes_Get_Support
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-mnm-admin-get-support-note';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}
/**
 * Add_First_Product.
 */
class WC_MNM_Notes_Help_Improve
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-mnm-admin-help-improve-note';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}
/**
 * WC_MNM_Notes_Run_Db_Update.
 */
class WC_MNM_Notes_Run_Db_Update
{
    const NOTE_NAME = 'wc-mnm-update-db-reminder';
    /**
     * Attach hooks.
     */
    public function __construct()
    {
    }
    /**
     * Set this notice to an actioned one, so that it's no longer displayed.
     */
    public static function set_notice_actioned()
    {
    }
    /**
     * Prepare the correct content of the db update note to be displayed by WC Admin.
     *
     * This one gets called on each page load, so try to bail quickly.
     *
     * If the db needs an update, the notice should be always shown.
     * If the db does not need an update, but the notice has *not* been actioned (i.e. after the db update, when
     * store owner hasn't acknowledged the successful db update), still show the Thanks notice.
     * If the db does not need an update, and the notice has been actioned, then notice should *not* be shown.
     * The notice should also be hidden if the db does not need an update and the notice does not exist.
     */
    public static function show_reminder()
    {
    }
}
/**
 * WC_Mix_and_Match_REST_API Class.
 *
 * Adds WooCommerce Mix and Match product data to WC REST API.
 */
class WC_Mix_and_Match_REST_API
{
    /**
     * Setup API class.
     *
     * @return object
     */
    public static function init()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Products.
    |--------------------------------------------------------------------------
    */
    /**
     * Filter the data for a response.
     *
     * The dynamic portion of the hook name, $this->post_type,
     * refers to object type being prepared for the response.
     *
     * @param array $schema Schema array.
     * @return array
     */
    public static function filter_product_schema($schema)
    {
    }
    /**
     * Filter the data for a response.
     *
     * The dynamic portion of the hook name, $this->post_type,
     * refers to object type being prepared for the response.
     *
     * @param WP_REST_Response $response The response object.
     * @param WC_Product     $product  Product object.
     * @return WP_REST_Response $response The response object.
     */
    public static function prepare_product_response($response, $product)
    {
    }
    /**
     * Filters an object before it is inserted via the REST API.
     *
     * @param WC_Product     $product  Product object.
     * @param WP_REST_Request $request  Request object.
     * @return WC_Product     $product  Product object.
     */
    public static function prepare_insert_product($product, $request)
    {
    }
    /**
     * Adds 'mnm_child_of' and 'mnm_child_items' schema properties to line items.
     *
     * @param  array  $schema
     * @return array
     */
    public static function filter_order_schema($schema)
    {
    }
    /**
     * Filter the data for a response.
     *
     * The dynamic portion of the hook name, $this->post_type,
     * refers to object type being prepared for the response.
     *
     * @param WP_REST_Response $response The response object.
     * @param WC_Data          $order   Object data.
     * @return WP_REST_Response $response The response object.
     */
    public static function prepare_order_response($response, $order)
    {
    }
    /**
     * Save container configuration data on item for later processing.
     *
     * @param  WC_Order_Item  $item
     * @param  array          $posted_item_data
     */
    public static function set_order_item($item, $posted_item_data)
    {
    }
    /**
     * Filters order contents to add child items to order.
     *
     * @param WC_Order        $order  Object object.
     * @param WP_REST_Request $request  Request object.
     * @return WC_Order       $order  Object object.
     */
    public static function add_container_to_order($order, $request)
    {
    }
    /**
     * Converts a posted container configuration to a format understood by 'WC_Mix_and_Match_Cart::validate_container_configuration'.
     *
     * @param  WC_Product_Mix_and_Match  $container
     * @param  array                     $posted_configuration
     * @return array
     */
    public static function parse_posted_container_configuration($container, $posted_configuration)
    {
    }
}
/**
 * Extends the store public API with container related data for each container parent and child item.
 */
class WC_MNM_Store_API
{
    /**
     * Plugin Identifier, unique to each plugin.
     *
     * @var string
     */
    const IDENTIFIER = 'mix_and_match';
    /**
     * Bootstraps the class and hooks required data.
     */
    public static function init()
    {
    }
    /**
     * Registers the actual data into each endpoint.
     */
    public static function extend_store()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Cart Item Functions.
    |--------------------------------------------------------------------------
    */
    /**
     * Register parent/child product data into cart/items endpoint.
     *
     * @param array  $cart_item
     * @return array $item_data
     */
    public static function extend_cart_item_data($cart_item)
    {
    }
    /**
     * Register mix and match product schema into cart/items endpoint.
     *
     * @return array Registered schema.
     */
    public static function extend_cart_item_schema()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Callbacks.
    |--------------------------------------------------------------------------
    */
    /**
     * Filter store API responses to:
     *
     * - aggregate container prices/subtotals;
     * - keep min/max/step quantity fields in sync.
     *
     * @param  $response  WP_REST_Response
     * @param  $server    WP_REST_Server
     * @param  $request   WP_REST_Request
     * @return WP_REST_Response
     */
    public static function filter_cart_item_data($response, $server, $request)
    {
    }
    /**
     * Validate container in Store API context.
     *
     * @throws RouteException
     *
     * @param  WC_Product  $product
     * @param array       $request Add to cart request params including id, quantity, and variation attributes.
     */
    public static function validate_add_to_cart_item($product, $request)
    {
    }
    /**
     * Validate container in Store API context.
     *
     * @throws RouteException
     *
     * @param  WC_Product  $product
     * @param  array       $cart_item
     * @throws RouteException On error.
     */
    public static function validate_cart_item($product, $cart_item)
    {
    }
    /**
     * Remove quantity inputs from child items in Store API context.
     *
     * @param bool $qty_is_editable
     * @param  WC_Product  $product
     * @param  array       $cart_item
     * @return false
     */
    public static function product_quantity_editable($qty_is_editable, $product, $cart_item)
    {
    }
    /**
     * Prevents access to the checkout block if a container in the cart is misconfigured.
     *
     * @throws RouteException
     *
     * @param  WC_Order  $order
     * @throws RouteException On error.
     */
    public static function validate_draft_order($order)
    {
    }
    /**
     * Prevent removal of child items.
     *
     * @throws RouteException
     *
     * @param  string   $cart_item_key
     * @param  WC_Cart  $cart
     * @return void
     */
    public static function prevent_child_item_removal($cart_item_key, $cart)
    {
    }
}
/**
 * Class for integrating with WooCommerce Blocks scripts.
 */
class WC_MNM_Checkout_Blocks_Integration implements \Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface
{
    /**
     * Whether the intregration has been initialized.
     *
     * @var boolean
     */
    protected $is_initialized;
    /**
     * The single instance of the class.
     *
     * @var WC_MNM_Checkout_Blocks_Integration
     */
    protected static $_instance = \null;
    /**
     * Main WC_MNM_Checkout_Blocks_Integration instance. Ensures only one instance of WC_MNM_Checkout_Blocks_Integration is loaded or can be loaded.
     *
     * @static
     * @return WC_MNM_Checkout_Blocks_Integration
     */
    public static function instance()
    {
    }
    /**
     * Cloning is forbidden.
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     */
    public function __wakeup()
    {
    }
    /**
     * The name of the integration.
     *
     * @return string
     */
    public function get_name()
    {
    }
    /**
     * When called invokes any initialization/setup for the integration.
     */
    public function initialize()
    {
    }
    /**
     * Returns an array of script handles to enqueue in the frontend context.
     *
     * @return string[]
     */
    public function get_script_handles()
    {
    }
    /**
     * Returns an array of script handles to enqueue in the editor context.
     *
     * @return string[]
     */
    public function get_editor_script_handles()
    {
    }
    /**
     * An array of key, value pairs of data made available to the block on the client side.
     *
     * @return array
     */
    public function get_script_data()
    {
    }
}
/**
 * Main WC_Mix_and_Match class.
 *
 * The main instance of the plugin.
 *
 * @since  1.0.0
 */
class WC_Mix_and_Match
{
    /**
     * The single instance of the class.
     *
     * @var obj The WC_Mix_and_Match object
     */
    protected static $_instance = \null;
    /**
     * Plugin Version.
     *
     * @var str
     */
    public $version = '2.5.0';
    /**
     * Required Version of WooCommerce.
     *
     * @var str
     */
    public $required_woo = \WC_MNM_REQUIRED_WOO;
    /**
     * Main WC_Mix_and_Match instance.
     *
     * Ensures only one instance of WC_Mix_and_Match is loaded or can be loaded.
     *
     * @return WC_Mix_and_Match Single instance.
     */
    public static function instance()
    {
    }
    /**
     * Cloning is forbidden.
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     */
    public function __wakeup()
    {
    }
    /**
     * Auto-load in-accessible properties.
     *
     * @param  mixed  $key
     * @return mixed
     */
    public function __get($key)
    {
    }
    /**
     * WC_Mix_and_Match Constructor
     *
     * @return  WC_Mix_and_Match
     */
    public function __construct()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Helper Functions.
    |--------------------------------------------------------------------------
    */
    /**
     * Get the plugin url.
     *
     * @return string
     */
    public function plugin_url()
    {
    }
    /**
     * Get the plugin path.
     *
     * @return string
     */
    public function plugin_path()
    {
    }
    /**
     * Get the plugin base path name.
     *
     * @since  1.2.0
     *
     * @return string
     */
    public function plugin_basename()
    {
    }
    /**
     * Get the file modified time as a cache buster if we're in dev mode.
     *
     * @since 2.0.0
     *
     * @param  string  $file
     * @param  string  $version - A version number, handy for mini-extensions to make use of this method.
     * @return string
     */
    public function get_file_version($file, $version = '')
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Load Files.
    |--------------------------------------------------------------------------
    */
    /**
     * Fire in the hole!
     */
    public function initialize_plugin()
    {
    }
    /**
     * Constants.
     *
     * @since 1.10.0
     */
    public function define_constants()
    {
    }
    /**
     * Include required core files used in admin and on the frontend.
     */
    public function includes()
    {
    }
    /**
     * Admin & AJAX functions and hooks.
     *
     * @since 1.2.0
     */
    public function admin_includes()
    {
    }
    /**
     * Displays a warning message if version check fails.
     *
     * @return string
     */
    public function admin_notice()
    {
    }
    /**
     * Include template functions and hooks.
     */
    public function theme_includes()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Localization.
    |--------------------------------------------------------------------------
    */
    /**
     * Make the plugin translation ready.
     *
     * Translations should be added in the WordPress language directory:
     *      - WP_LANG_DIR/plugins/woocommerce-mix-and-match-products-LOCALE.mo
     *
     * @since  1.0.0
     */
    public function load_plugin_textdomain()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Resources.
    |--------------------------------------------------------------------------
    */
    /**
     * Returns URL to a doc or support resource.
     *
     * @since  2.0.0
     *
     * @param  string  $handle
     * @return string
     */
    public function get_resource_url($handle)
    {
    }
}
/**
 * AJAX handlers - used in order metabox and subscriptions frontend.
 *
 * @class    WC_MNM_Ajax
 */
class WC_MNM_Ajax
{
    /**
     * Hook in.
     */
    public static function init()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Edit-Order.
    |--------------------------------------------------------------------------
    */
    /**
     * True when displaying content in an edit-container order item modal.
     *
     * @since 2.4.0
     * @return bool
     */
    public static function is_container_edit_request()
    {
    }
    /**
     * Form content used to populate "Configure/Edit" container order item modals.
     */
    public static function edit_container_order_item_form()
    {
    }
    /**
     * Updates the MNM container config.
     */
    public static function update_container_order_item()
    {
    }
    /**
     * Validates user can edit this product.
     *
     * @return mixed - If editable will return an array. Otherwise, will return WP_Error.
     */
    protected static function can_edit_container()
    {
    }
    /**
     * Load the scripts required for order editing.
     *
     * @param int $item_id The subscription line item ID.
     * @param WC_Order_Item|array $item The subscription line item.
     * @param WC_Subscription $subscription The subscription.
     */
    public static function load_edit_scripts()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Edit-Order Modal.
    |--------------------------------------------------------------------------
    */
    /**
     * Force tabular layout and hide child links.
     *
     * @since 2.4.0
     *
     * @param  $product  WC_Product_Mix_and_Match
     * @param  $order_item WC_Order_Item
     * @param  $order      WC_Order
     * @param  string $source The originating source loading this template
     */
    public static function force_container_styles($product, $order_item, $order, $source)
    {
    }
    /**
     * Nuke any theme overrides of quantity-input.php template.
     *
     * @since 2.4.0
     *
     * @param  $item_id  int
     * @param  $item     WC_Order_Item
     * @param  $order    WC_Product
     * @return void
     */
    public static function force_core_template($template, $template_name, $args, $template_path, $default_path)
    {
    }
}
/**
 * Autoloader class.
 */
class WC_MNM_Autoloader
{
    /**
     * The Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Auto-load WC classes on demand to reduce memory consumption.
     *
     * @param string $class Class name.
     */
    public function autoload($class)
    {
    }
}
/**
 * WC_Mix_and_Match_Cart Class.
 *
 * Functions and filters for adding Mix and Match type products to cart.
 */
class WC_Mix_and_Match_Cart
{
    /**
     * The single instance of the class.
     *
     * @var WC_Mix_and_Match_Cart
     *
     * @since 1.9.2
     */
    protected static $_instance = \null;
    /**
     * Main class instance. Ensures only one instance of class is loaded or can be loaded.
     *
     * @static
     * @return WC_Mix_and_Match_Cart
     * @since  1.9.2
     */
    public static function get_instance()
    {
    }
    /**
     * __construct function.
     *
     * @return object
     */
    public function __construct()
    {
    }
    /**
     * Session data loaded?
     *
     * @since  1.4.0
     *
     * @param  string  $context
     * @return string
     */
    public function is_cart_session_loaded()
    {
    }
    /**
     * Adds mnm contents to the cart.
     *
     * @param  string   $container_cart_key
     * @param  int      $product_id
     * @param  int      $quantity
     * @param  int      $variation_id
     * @param  array    $variation
     * @param  array    $cart_item_data
     */
    function add_mnm_items_to_cart($container_cart_key, $product_id, $quantity, $variation_id, $variation, $cart_item_data)
    {
    }
    /**
     * Add a mnm child to the cart. Must be done without updating session data, recalculating totals or calling 'woocommerce_add_to_cart' recursively.
     * For the recursion issue, see: https://core.trac.wordpress.org/ticket/17817.
     *
     * @param int          $container_id
     * @param int          $product_id
     * @param string       $quantity
     * @param int          $variation_id
     * @param array        $variation
     * @param array        $cart_item_data
     * @return string|false
     */
    public function mnm_add_to_cart($container_id, $product_id, $quantity = 1, $variation_id = '', $variation = '', $cart_item_data = array())
    {
    }
    /**
     * Build container configuration array from posted data.
     *
     * @param  mixed  $product
     * @param  array $config example: array(
     *      134 => 2 // product|variation_id => quantity.
     * )
     * @return array example:
     *
     *    $config = array(
     *        134 => array(                             // ID of child item.
     *            'child_item_id'     => 134,           // ID of child item.
     *            'product_id'        => 15,            // ID of child product.
     *            'quantity'          => 2,             // Qty of child product, will fall back to min.
     *            'variation_id'      => 43             // ID of chosen variation, if applicable.
     *            'variation'         => array( 'color' => 'blue' ) // Attributes of chosen variation.
     *        )
     *    );
     */
    public function get_posted_container_configuration($product, $config = array())
    {
    }
    /**
     * Rebuilds posted form data associated with a container configuration.
     *
     * @since  1.4.0
     *
     * @param  array $configuration
     * @param  obj   $container WC_Mix_and_Match_Product // Added in 1.7.0.
     * @return array
     *    $form_data = array(
     *         'mnm_quantity' => array( array( $ID => $quantity ) )
     *    );
     */
    public function rebuild_posted_container_form_data($configuration = array(), $container = \null)
    {
    }
    /**
     * Validates that all MnM items chosen can be added-to-cart before actually starting to add items.
     *
     * @param  bool $passed_validation
     * @param  int  $product_id
     * @param  int  $quantity
     * @param  int  $variation_id
     * @param array $variation - selected attribues
     * @param array $cart_item_data - data from session
     * @return bool
     */
    public function add_to_cart_validation($passed_validation, $product_id, $quantity, $variation_id = '', $variations = array(), $cart_item_data = array())
    {
    }
    /**
     * Validates add-to-cart for MNM containers.
     * Basically ensures that stock for all child products exists before attempting to add them to cart.
     *
     * @since  1.4.0
     *
     * @param  WC_Product_Mix_and_Match  $container
     * @param  int                $quantity
     * @param  array              $cart_item_data
     * @return boolean
     */
    public function validate_container_add_to_cart($container, $quantity, $cart_item_data)
    {
    }
    /**
     * Validates that all MnM items can be updated before updating the container.
     *
     * @param  bool     $passed_validation
     * @param  int      $cart_item_key
     * @param  array    $values
     * @param  int      $quantity
     * @return bool
     */
    public function update_cart_validation($passed_validation, $cart_item_key, $values, $product_quantity)
    {
    }
    /**
     * Check container cart item configurations on cart load.
     */
    public function check_cart_items()
    {
    }
    /**
     * Check container cart item configuration and children.
     *
     * @since 2.0.0
     *
     * @param  array $cart_item
     */
    public function validate_container_in_cart($cart_item)
    {
    }
    /**
     * Validates add to cart for MNM containers.
     * Basically ensures that stock for all child products exists before attempting to add them to cart.
     *
     * @throws Exception
     *
     * @since  1.4.0
     *
     * @param  mixed   $container int|WC_Product_Mix_and_Match
     * @param  int     $container_quantity
     * @param  array   $configuration
     * @see            get_posted_container_configuration() for array details.
     * @param  array|string  $args
     * @return boolean
     */
    public function validate_container_configuration($container, $container_quantity, $configuration, $args = array())
    {
    }
    /**
     * Redirect to the cart when editing a container "in-cart".
     *
     * @since   1.4.0
     * @param  string  $url
     * @return string
     */
    public function edit_in_cart_redirect($url)
    {
    }
    /**
     * Filter the displayed notice after redirecting to the cart when editing a container "in-cart".
     *
     * @since   1.4.0
     * @param  string  $url
     * @return string
     */
    public function edit_in_cart_redirect_message($message)
    {
    }
    /**
     * Adds configuration-specific cart-item data.
     *
     * @param  array  $cart_item_data
     * @param  int    $product_id
     * @param int $variation_id Child item's variation ID.
     * @return array
     */
    public function add_cart_item_data($cart_item_data, $product_id, $variation_id)
    {
    }
    /**
     * Modifies MNM cart item data.
     * Important for the first calculation of totals only.
     *
     * @param  array    $cart_item
     * @param  string   $cart_item_key
     * @return array
     */
    public function add_cart_item_filter($cart_item, $cart_item_key)
    {
    }
    /**
     * Load all MnM-related session data.
     *
     * @param  array    $cart_item
     * @param  array    $cart_session_item
     * @param  string   $key
     */
    public function get_cart_data_from_session($cart_item, $cart_session_item, $key)
    {
    }
    /**
     * Ensure any child cart items have a valid parent. If not, silently remove them.
     *
     * @since  1.9.4
     *
     * @param  WC_Cart  $cart
     * @return void
     */
    public function cart_loaded_from_session($cart)
    {
    }
    /**
     * Keeps MNM item quantities in sync with container item.
     *
     * @param  string  $cart_item_key
     * @param  integer $quantity
     */
    public function update_quantity_in_cart($cart_item_key, $quantity = 0)
    {
    }
    /**
     * Filters the reported cart weights.
     * Counts cumulative weight of containers.
     *
     * @since 2.0.0
     *
     * @param  float  $weight
     * @return float
     */
    public function cart_contents_weight($weight)
    {
    }
    /**
     * Remove child cart items with parent.
     *
     * @param  string  $cart_item_key
     * @param  obj WC_Cart $cart
     */
    public function cart_item_removed($cart_item_key, $cart)
    {
    }
    /**
     * Restore child cart items with parent.
     *
     * @param  string  $cart_item_key
     * @param  WC_Cart $cart
     */
    public function cart_item_restored($cart_item_key, $cart)
    {
    }
    /**
     * Shipping fix - add the value of any children that are not shipped individually to the container value and, optionally, add their weight to the container weight, as well.
     *
     * @param  array  $packages
     * @return array
     */
    public function cart_shipping_packages($packages)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated methods.
    |--------------------------------------------------------------------------
    */
    /**
     * Reinitialize cart item data for re-ordering purchased orders.
     *
     * @deprecated 1.4.0
     *
     * @param  mixed     $cart_item
     * @param  mixed     $order_item
     * @param  WC_Order  $order
     * @return mixed
     */
    public function order_again($cart_item, $order_item, $order)
    {
    }
    /**
     * Find the parent of a child item in a cart.
     *
     * @deprecated 1.4.0
     *
     * @param  array  $item
     * @return array
     */
    public function get_bundled_cart_item_container_key($item)
    {
    }
    /**
     * Do not show mix and matched items in cart widget.
     *
     * @deprecated 2.0.0
     *
     * @param  bool     $show
     * @param  array    $cart_item
     * @param  string   $cart_item_key
     * @return bool
     */
    public function cart_widget_filter($show, $cart_item, $cart_item_key)
    {
    }
    /**
     * Filters the reported number of cart items.
     *
     * @deprecated 2.0.0
     *
     * Counts only MnM containers.
     *
     * @param  int  $count
     * @return int
     */
    public function cart_contents_count($count)
    {
    }
    /**
     * MnM items can't be removed individually from the cart.
     * This filter doesn't pass the $cart_item array for some reason.
     *
     * @deprecated 2.0.0
     *
     * @param  string  $link
     * @param  string  $cart_item_key
     * @return string
     */
    public function cart_item_remove_link($link, $cart_item_key)
    {
    }
    /**
     * Modifies the cart.php formatted quantity for items in the container.
     *
     * @deprecated 2.0.0
     *
     * @param  string  $quantity
     * @param  string  $cart_item_key
     * @param  array   $cart_item
     * @return string
     */
    public function cart_item_quantity($quantity, $cart_item_key, $cart_item)
    {
    }
    /**
     * Modifies the cart.php formatted html prices visibility for items in the container.
     *
     * @deprecated 2.0.0
     *
     * @param  string  $price
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return string
     */
    public function cart_item_price($price, $cart_item, $cart_item_key)
    {
    }
    /**
     * Modifies the cart.php template formatted subtotal appearance.
     *
     * @deprecated 2.0.0
     *
     * @param  string  $subtotal
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return string
     */
    public function cart_item_subtotal($subtotal, $cart_item, $cart_item_key)
    {
    }
    /**
     * Outputs a formatted subtotal ( @see cart_item_subtotal() ).
     *
     * @deprecated 2.0.0
     *
     * @static
     * @param  obj     $product   The WC_Product.
     * @param  string  $subtotal  Formatted subtotal.
     * @return string             Modified formatted subtotal.
     */
    public static function format_product_subtotal($product, $subtotal)
    {
    }
}
/**
 * Child Item class.
 *
 * @class    WC_MNM_Child_Item
 */
class WC_MNM_Child_Item extends \WC_Data
{
    /**
     * Data array, with defaults.
     *
     * @var array
     */
    protected $data = array('product_id' => 0, 'variation_id' => 0, 'container_id' => 0, 'menu_order' => 0, 'priced_individually' => \null, 'discount' => \null);
    /**
     * Stores meta in cache for future reads.
     * A group must be set to to enable caching.
     *
     * @var string
     */
    protected $cache_group = 'wc-mnm-child-items';
    /**
     * This is the name of this object type.
     *
     * @var string
     */
    protected $object_type = 'wc_mnm_child_item';
    /**
     * __construct method.
     *
     * @param  mixed  int|array $child_item
     * @param  WC_Product_Mix_and_Match  $container
     */
    public function __construct($child_item = 0, $container = \false)
    {
    }
    /**
     * __call method.
     * magically relay method to WC_Product class if possible.
     */
    public function __call($name, $args)
    {
    }
    /**
     * Get child item ID.
     * Returns the DB item ID if it exists, or a temporary ID based on the unique product ID.
     *
     * @return mixed int|"product-ID", ex: "product-99"
     */
    public function get_child_item_id()
    {
    }
    /**
     * Get the ID of the associated product object.
     *
     * @param string $context
     * @return int
     */
    public function get_product_id($context = 'view')
    {
    }
    /**
     * Get the ID of the associated variation object.
     *
     * @param string $context
     * @return int
     */
    public function get_variation_id($context = 'view')
    {
    }
    /**
     * Get the ID of the parent container.
     *
     * @param string $context
     * @return int
     */
    public function get_container_id($context = 'view')
    {
    }
    /**
     * Get the menu order.
     *
     * @param string $context
     * @return int
     */
    public function get_menu_order($context = 'view')
    {
    }
    /**
     * Get the discount - Currently inherited from the parent container.
     *
     * @param string $context
     * @return string|float
     */
    public function get_discount($context = 'view')
    {
    }
    /**
     * Get priced individually - Currently inherited from the parent container.
     *
     * @param string $context
     * @return string|float
     */
    public function get_priced_individually($context = 'view')
    {
    }
    /**
     * Returns the child item's product.
     *
     * @return WC_Product|false - Can return false if this product does not exist.
     */
    public function get_product()
    {
    }
    /**
     * Get child product price after discount, price filters excluded.
     *
     * @param  mixed  $product
     * @return mixed
     */
    public function get_raw_price($product = \false)
    {
    }
    /**
     * Get child product regular price before discounts, price filters excluded.
     *
     * @param  mixed  $product
     * @return mixed
     */
    public function get_raw_regular_price($product = \false)
    {
    }
    /**
     * Returns the parent.
     *
     * @return WC_Product_Mix_and_Match|false
     */
    public function get_container()
    {
    }
    /**
     * Returns item's data attributes.
     *
     * @return array
     */
    public function get_data_attributes()
    {
    }
    /**
     * Item min/max/step quantity.
     *
     * @param  string  $type
     * @return mixed null|int
     */
    public function get_quantity($type = 'value')
    {
    }
    /**
     * Get a name prefix for quantity input.
     *
     * @param  int $child_id - Product ID of child product.
     * @return string
     */
    function get_input_name($add_child = \true)
    {
    }
    /**
     * Get the availability message of a child, taking its purchasable status into account.
     *
     * @param  string $child_id
     * @return string
     */
    public function get_availability_html()
    {
    }
    /**
     * Item title.
     *
     * @since  2.2.0
     *
     * @return string
     */
    public function get_title()
    {
    }
    /**
     * Item permalink.
     *
     * @since  2.2.0
     *
     * @return string
     */
    public function get_permalink()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Setters
    |--------------------------------------------------------------------------
    */
    /**
     * Set child item ID.
     *
     * @param  int  $value
     */
    public function set_child_item_id($value)
    {
    }
    /**
     * Set child product ID.
     *
     * @param  int  $value
     */
    public function set_product_id($value)
    {
    }
    /**
     * Set child variation ID.
     *
     * @param  int  $value
     */
    public function set_variation_id($value)
    {
    }
    /**
     * Set product bundle is.
     *
     * @param  int  $value
     */
    public function set_container_id($value)
    {
    }
    /**
     * Set child item menu order.
     *
     * @param  int  $value
     */
    public function set_menu_order($value)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Conditional Methods
    |--------------------------------------------------------------------------
    */
    /**
     * Child item exists status.
     *
     * @return boolean
     */
    public function exists()
    {
    }
    /**
     * Child item visibility.
     *
     * @param string $context
     * @return boolean
     */
    public function is_visible($context = 'view')
    {
    }
    /**
     * Returns whether or not the item's product price is counted towards the total.
     *
     * @param string $context
     * @return bool
     */
    public function is_priced_individually($context = 'view')
    {
    }
    /**
     * Returns whether or not the item's product price is discounted.
     *
     * @param string $context
     * @return cool
     */
    public function has_discount($context = 'view')
    {
    }
    /**
     * Returns whether or not the item's product price is discounted from regular price or sale price.
     *
     * @return bool
     */
    public function is_discounted_from_regular_price()
    {
    }
}
/**
 * WC_Mix_and_Match_Display Class.
 *
 * Mix and Match front-end functions and filters.
 */
class WC_Mix_and_Match_Display
{
    /**
     * The single instance of the class.
     *
     * @var WC_Mix_and_Match_Display
     *
     * @since 1.9.2
     */
    protected static $_instance = \null;
    /**
     * Main class instance. Ensures only one instance of class is loaded or can be loaded.
     *
     * @static
     * @return WC_Mix_and_Match_Display
     * @since  1.9.2
     */
    public static function get_instance()
    {
    }
    /**
     * __construct function.
     */
    public function __construct()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Scripts and Styles.
    |--------------------------------------------------------------------------
    */
    /**
     * Load scripts.
     */
    public function frontend_scripts()
    {
    }
    /**
     * Returns Add to Cart Parameters.
     *
     * @param  bool $trim_zeros - Deprecated 1.10.5.
     * @return array
     */
    public static function get_add_to_cart_parameters($deprecated = \false)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Cart Display.
    |--------------------------------------------------------------------------
    */
    /**
     * Changes the tr class of MNM content items to allow their styling.
     *
     * @param  string  $class
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return string
     */
    public function cart_item_class($class, $cart_item, $cart_item_key)
    {
    }
    /**
     * MnM items can't be removed individually from the cart.
     * This filter doesn't pass the $cart_item array for some reason.
     *
     * @since 2.0.0
     *
     * @param  string  $link
     * @param  string  $cart_item_key
     * @return string
     */
    public function cart_item_remove_link($link, $cart_item_key)
    {
    }
    /**
     * Adds style wrapper to child cart items.
     *
     * @since 2.0.0
     *
     * @param  string   $content
     * @param  array    $cart_item
     * @return string
     */
    public function cart_item_wrap($content, $cart_item)
    {
    }
    /**
     * Adds arrows to child products.
     *
     * @param  string   $content
     * @param  array    $cart_item
     * @param  string   $cart_item_key
     * @return string
     */
    public function in_cart_item_title($content, $cart_item, $cart_item_key)
    {
    }
    /**
     * Adds edit button to container cart items.
     *
     * @since 2.4.8
     *
     * @param  array    $cart_item
     * @param  string   $cart_item_key
     */
    public function edit_selections_button($cart_item, $cart_item_key)
    {
    }
    /**
     * Disables the cart.php permalink for items in the container.
     *
     * @since  2.0.0
     *
     * @param  string  $permalink
     * @param  array   $cart_item
     * @return string
     */
    public function cart_item_permalink($permalink, $cart_item)
    {
    }
    /**
     * Modifies the cart.php formatted quantity for items in the container.
     *
     * @since 2.0.0
     *
     * @param  string  $quantity
     * @param  string  $cart_item_key
     * @param  array   $cart_item
     * @return string
     */
    public function cart_item_quantity($quantity, $cart_item_key, $cart_item)
    {
    }
    /**
     * Modifies the cart.php formatted html prices visibility for items in the container.
     *
     * @since 2.0.0
     *
     * @param  string  $price
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return string
     */
    public function cart_item_price($price, $cart_item, $cart_item_key)
    {
    }
    /**
     * Aggregates parent + child cart item prices.
     *
     * @since  2.1.0
     *
     * @param  array   $cart_item
     * @param  strong  $type Values: 'price' | 'regular_price' | 'sale_price'
     * @return string
     */
    public function get_container_cart_item_price_amount($cart_item, $type = 'price')
    {
    }
    /**
     * Modifies line item subtotals in the 'cart.php' & 'review-order.php' templates.
     *
     * @since 2.1.0
     *
     * @param  string  $subtotal
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return string
     */
    public function cart_item_subtotal($subtotal, $cart_item, $cart_item_key)
    {
    }
    /**
     * Aggregates cart item totals.
     *
     * @since 2.1.0
     *
     * @param  array   $cart_item
     * @param  string  $type Values: 'total' | 'tax' | 'subtotal' | 'subtotal_tax'
     * @return float
     */
    public static function get_container_cart_item_subtotal_amount($cart_item, $type = 'total')
    {
    }
    /**
     * Outputs a formatted subtotal ( @see cart_item_subtotal() ). how necessary is this one?
     *
     * @since 2.1.0
     *
     * @param  obj     $product   The WC_Product.
     * @param  string  $subtotal  Formatted subtotal.
     * @return string             Modified formatted subtotal.
     */
    public static function format_product_subtotal($product, $subtotal)
    {
    }
    /**
     * Rendering cart widget?
     *
     * @since  1.4.0
     * @return boolean
     */
    public function is_cart_widget()
    {
    }
    /**
     * Add cart widget filters.
     *
     * @since  2.0.5
     */
    public function add_cart_widget_filters()
    {
    }
    /**
     * Remove cart widget filters.
     *
     * @since  2.0.5
     */
    public function remove_cart_widget_filters()
    {
    }
    /**
     * Change the li class of composite parent/child items in mini-cart templates to allow their styling.
     *
     * @since  2.0.5
     *
     * @param  string  $classname
     * @param  array   $cart_item
     * @return string
     */
    public function mini_cart_item_class($classname, $cart_item)
    {
    }
    /**
     * Do not show mix and matched items in cart widget.
     *
     * @since  1.0.0
     * @since  2.0.5 - Renamed from cart_widget_filter.
     *
     * @param  bool     $show
     * @param  array    $cart_item
     * @param  string   $cart_item_key
     * @return bool
     */
    public function cart_widget_item_visible($show, $cart_item, $cart_item_key)
    {
    }
    /**
     * Adds content data as parent item meta (by default in the mini-cart only).
     *
     * @since  2.0.5
     *
     * @param  array  $data
     * @param  array  $cart_item
     * @return array
     */
    public function cart_widget_container_item_data($data, $cart_item)
    {
    }
    /**
     * Get container configuration data.
     *
     * @since  2.0.5
     *
     * @param  array  $cart_item
     * @param  array  $args
     *
     * @return array
     */
    public function get_container_config_cart_item_data($cart_item, $args = array())
    {
    }
    /**
     * Filters the reported number of cart items.
     * Counts only MnM containers.
     *
     * @param  int  $count
     * @return int
     */
    public function cart_contents_count($count)
    {
    }
    /**
     * Add "Configuration" cart item data to container items.
     *
     * @param  array  $data
     * @param  array  $cart_item
     * @return array
     */
    public function cart_item_data($data, $cart_item)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Order Display.
    |--------------------------------------------------------------------------
    */
    /**
     * Adds child item title preambles to order-details template.
     *
     * @param  string   $content
     * @param  object   $order_item
     * @return string
     */
    public function order_table_item_title($content, $order_item)
    {
    }
    /**
     * Hide the "Container size" meta in the my-account area.
     *
     * @param  array  $formatted_meta
     * @param  obj    $order
     * @return array
     */
    public function order_item_meta($formatted_meta, $order)
    {
    }
    /**
     * Changes the tr class of MNM content items to allow their styling in orders.
     *
     * @param  string    $class
     * @param  array     $order_item
     * @param  WC_Order  $order
     * @return string
     */
    public function order_item_class($class, $order_item, $order)
    {
    }
    /**
     * Stop displaying the "Part of" meta key for MNM children.
     *
     * @param  obj[] $formatted_meta an array of objects indexed by meta key
     * @param  WC_Order_Item $order_item
     * @return  array
     */
    public function remove_part_of_meta_key_from_display($formatted_meta, $order_item)
    {
    }
    /**
     * Display mnm_container_size meta as Container size.
     *
     * @param  string $display_key The front-end label for the meta key.
     * @param  obj $meta Meta object with key and value properties.
     * @param  WC_Order_Item $order_item
     * @return  array
     */
    public function order_item_meta_label($display_key, $meta, $order_item)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Emails.
    |--------------------------------------------------------------------------
    */
    /**
     * Indent child items in emails.
     *
     * @param  string  $css
     * @return string
     */
    public function email_styles($css)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated.
    |--------------------------------------------------------------------------
    */
    /**
     * Add-to-cart template for Mix and Match products.
     *
     * @deprecated 1.3.0
     */
    public function add_to_cart_template()
    {
    }
    /**
     * QuickView scripts init.
     *
     * @deprecated 2.0.0
     */
    public function quickview_support()
    {
    }
    /**
     * Do not show mix and matched items in cart widget.
     *
     * @deprecated 2.0.5 - Soft deprecated.
     *
     * @param  bool     $show
     * @param  array    $cart_item
     * @param  string   $cart_item_key
     * @return bool
     */
    public function cart_widget_filter($show, $cart_item, $cart_item_key)
    {
    }
}
/**
 * WC_MNM_Helpers Class.
 *
 * Mix and Match order caching helper functions.
 */
class WC_MNM_Helpers
{
    /**
     * Runtime cache for simple storage.
     *
     * @var array $cache
     */
    public static $cache = array();
    /**
     * Simple runtime cache getter.
     *
     * @param  string  $key
     * @param  string  $group_key
     * @return mixed
     */
    public static function cache_get($key, $group_key = '')
    {
    }
    /**
     * Simple runtime cache setter.
     *
     * @param  string  $key
     * @param  mixed   $value
     * @param  string  $group_key
     */
    public static function cache_set($key, $value, $group_key = '')
    {
    }
    /**
     * Simple runtime cache unsetter.
     *
     * @param  string  $key
     * @param  mixed   $value
     * @param  string  $group_key
     */
    public static function cache_delete($key, $group_key = '')
    {
    }
    /**
     * Product types supported by the plugin.
     * You can dynamically attach these product types to Mix and Match Product.
     *
     * @static
     * @since  1.1.6
     * @return array
     */
    public static function get_supported_product_types()
    {
    }
    /**
     * Check if child is supported type.
     *
     * @since  1.10.0
     *
     * @param  WC_Product $product
     * @return  boolean
     */
    public static function is_child_supported_product_type($product)
    {
    }
    /**
     * Format a product title incl qty.
     *
     * @since 1.11.4
     *
     * @param  string  $title
     * @param  string  $qty
     * @return string
     */
    public static function format_product_title($title, $qty = '', $args = array())
    {
    }
    /**
     * Recursive version of 'urlencode' for multidimensional assosciative arrays.
     *
     * Hat tip to Composite Products.
     *
     * @since  2.2.0
     *
     * @param  function  $array
     * @param  array     $escaped_array
     * @return array
     */
    public static function urlencode_recursive($array)
    {
    }
    /**
     * Check how long plugin has been active for.
     *
     * @since   2.4.0
     * @param   int $seconds - Time in seconds to check.
     * @return  boolean|int Whether or not plugin has been active for $seconds.
     */
    public static function is_plugin_active_for($seconds = '')
    {
    }
    /*
    	-----------------------------------------------------------------------------------*/
    /*
    	Deprecated Functions */
    /*-----------------------------------------------------------------------------------*/
    /**
     * Helper method to get the version of the currently installed WooCommerce
     *
     * @since 1.0.5
     * @deprecated 1.2.0
     * @see WC_MNM_Core_Compatibility::get_wc_version()
     *
     * @return string woocommerce version number or null
     */
    public static function get_wc_version()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is 2.4 or greater
     *
     * @since 1.0.5
     * @deprecated 1.2.0
     * @see WC_MNM_Core_Compatibility::get_wc_version()
     *
     * @return bool true if the installed version of WooCommerce is 2.2 or greater
     */
    public static function is_wc_version_gte_2_4()
    {
    }
    /**
     * Calculates child product prices incl. or excl. tax depending on the 'woocommerce_tax_display_shop' setting.
     * For WC < 3.0.
     *
     * @since 1.0.5
     * @deprecated 1.3.0
     * @see wc_get_price_to_display()
     *
     * @param  WC_Product   $product    the product
     * @param  double       $price      the product price
     * @return double                   modified product price incl. or excl. tax
     */
    public static function get_product_display_price($product, $price)
    {
    }
    /**
     * Get formatted variation data with WC < 2.4 back compat and proper formatting of text-based attribute names.
     *
     * @since 1.0.4
     * @deprecated 1.2.0
     * @see wc_get_formatted_variation()
     *
     * @param  WC_Product_Variation  $variation   the variation
     * @return string                             formatted attributes
     */
    public static function get_formatted_variation_attributes($variation, $flat = \false)
    {
    }
}
/**
 * WC_MNM_Install Class.
 *
 * Handles installation and updating tasks.
 */
class WC_MNM_Install
{
    /**
     * Hook in tabs.
     */
    public static function init()
    {
    }
    /**
     * Adds support for the 'mix and match' product type.
     *
     * @param  array    $options
     * @return array
     * @since  1.8.0
     */
    public static function product_selector_filter($options)
    {
    }
    /**
     * If the DB version is out-of-date, a DB update must be in progress: define a 'WC_MNM_NEEDS_DB_UPDATE' constant.
     *
     * @since  1.10.0
     */
    public static function define_updating_constant()
    {
    }
    /**
     * Check version and run the installer if necessary.
     */
    public static function check_version()
    {
    }
    /**
     * See if we need to show or run database updates during install.
     *
     * @since  2.0.0
     */
    public static function admin_db_update_notice()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Handle action scheduler.
    |--------------------------------------------------------------------------
    */
    /**
     * Run an update callback when triggered by ActionScheduler.
     *
     * @param string $update_callback Callback name.
     *
     * @since 2.0.0
     */
    public static function run_update_callback($update_callback)
    {
    }
    /**
     * Triggered when a callback will run.
     *
     * @since 2.0.0
     */
    protected static function run_update_callback_start()
    {
    }
    /**
     * Triggered when a callback has ran.
     *
     * @since 2.0.0
     * @param string $callback Callback name.
     * @param bool   $result Return value from callback. Non-false need to run again.
     */
    protected static function run_update_callback_end($callback, $result)
    {
    }
    /**
     * Install actions when a update button is clicked within the admin area.
     *
     * This function is hooked into admin_init to affect admin only.
     *
     * @since  2.0.0
     */
    public static function install_actions()
    {
    }
    /**
     * Install MNM.
     */
    public static function install()
    {
    }
    /**
     * Check version and run the installer if necessary.
     *
     * @since  1.10.0
     */
    public static function is_new_install()
    {
    }
    /**
     * DB update needed?
     *
     * @since  2.0.0
     *
     * @return boolean
     */
    public static function needs_db_update()
    {
    }
    /**
     * Get the most recent updated version.
     *
     * @since  2.0.0
     *
     * @return string
     */
    public static function get_latest_update_version()
    {
    }
    /**
     * Get list of DB update callbacks.
     *
     * @since  2.0.0
     * @return array
     */
    public static function get_db_update_callbacks()
    {
    }
    /**
     * Is auto-updating enabled?
     *
     * @since  1.10.0
     *
     * @return boolean
     */
    public static function auto_update_enabled()
    {
    }
    /**
     * Update DB version to current.
     *
     * @param  string  $version
     */
    public static function update_db_version($version = \null)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Notice action callbacks.
    |--------------------------------------------------------------------------
    */
    /**
     * Run the updater if triggered.
     *
     * @since  2.0.0
     */
    public static function do_update_db()
    {
    }
    /**
     * Delete the old mnm child meta data.
     *
     * @since  2.0.0
     */
    public static function do_2x00_cleanup_legacy_child_meta()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated methods.
    |--------------------------------------------------------------------------
    */
    /**
     * Init background updates.
     *
     * @deprecated 2.0.0
     */
    public static function init_background_updater()
    {
    }
    /**
     * True if a DB update was started but not completed.
     *
     * @since  1.10.0
     * @deprecated 2.0.0
     *
     * @return boolean
     */
    public static function is_update_incomplete()
    {
    }
    /**
     * True if an update process is running.
     *
     * @since  1.10.0
     * @deprecated 2.0.0
     *
     * @return boolean
     */
    public static function is_update_process_running()
    {
    }
    /**
     * True if an update background process is running.
     *
     * @since  1.10.0
     * @deprecated 2.0.0
     *
     * @return boolean
     */
    public static function is_update_background_process_running()
    {
    }
    /**
     * True if a CLI update is running.
     *
     * @since  1.10.0
     * @deprecated 2.0.0
     *
     * @return boolean
     */
    public static function is_update_cli_process_running()
    {
    }
    /**
     * Force re-start the update cron if everything else fails.
     *
     * @deprecated 2.0.0
     */
    public static function force_update()
    {
    }
    /**
     * Check version and run the installer if necessary.
     *
     * @since  1.10.0
     * @deprecated 2.0.0
     */
    public static function maybe_install()
    {
    }
    /**
     * See if we need to show or run database updates during install.
     *
     * @deprecated 2.0.0
     */
    public static function maybe_update()
    {
    }
    /**
     * Trigger DB update.
     *
     * @deprecated 2.0.0
     */
    public static function trigger_update()
    {
    }
    /**
     * If the DB version is out-of-date, a DB update must be in progress.
     *
     * @deprecated 1.10.0
     */
    public static function check_updating()
    {
    }
    /**
     * True if an update is in progress.
     *
     * @return bool
     */
    public static function is_update_pending()
    {
    }
    /**
     * True if an update is in progress.
     *
     * @deprecated 1.10.0
     * @return bool
     */
    public static function is_update_in_progress()
    {
    }
}
/**
 * Order-again functions and filters.
 *
 * @class    WC_MNM_Order_Again
 * @version  1.7.0
 */
class WC_MNM_Order_Again
{
    /*
     * Initilize.
     */
    public static function init()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Filter hooks.
    |--------------------------------------------------------------------------
    */
    /**
     * Reinitialize cart item data for re-ordering purchased orders.
     *
     * @param  mixed     $cart_item
     * @param  mixed     $order_item
     * @param  WC_Order  $order
     * @return mixed
     */
    public static function order_again_cart_item_data($cart_item, $order_item, $order)
    {
    }
    /**
     * Initialize parent-child associations from order-again keys.
     *
     * @since  1.4.0
     *
     * @param  array   $cart_item
     * @param  array   $cart_session_item
     * @param  string  $key
     */
    public static function get_cart_item_from_session($cart_item, $cart_session_item, $key)
    {
    }
    /**
     * Finalize parent-child associations from order-again keys.
     *
     * @since  1.4.0
     *
     * @param  WC_Cart  $cart
     * @return void
     */
    public static function cart_loaded_from_session($cart)
    {
    }
}
/**
 * WC_Mix_and_Match_Order Class.
 *
 * Functions and filters for ordering Mix and Match type products.
 */
class WC_Mix_and_Match_Order
{
    /**
     * Flag to short-circuit 'WC_Mix_and_Match_Order::get_order_items'.
     *
     * @var bool
     */
    public static $override_order_items_filter = \false;
    /**
     * Flag to short-circuit 'WC_Mix_and_Match_Order::get_product_from_item'.
     *
     * @var bool
     */
    public static $override_product_from_item_filter = \false;
    /**
     * The single instance of the class.
     *
     * @var WC_Mix_and_Match_Order
     *
     * @since 1.9.2
     */
    protected static $_instance = \null;
    /**
     * Main class instance. Ensures only one instance of class is loaded or can be loaded.
     *
     * @static
     * @return WC_Mix_and_Match_Order
     * @since  1.9.2
     */
    public static function get_instance()
    {
    }
    /**
     * Setup order class.
     */
    public function __construct()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | API functions.
    |--------------------------------------------------------------------------
    */
    /**
     * Reads the configuration array stored on a container order item and modifies it based on the actual state of the container.
     *
     * @since  1.7.0
     *
     * @param  WC_Order_Item  $order_item
     * @param  WC_Order       $order
     * @return array
     */
    public static function get_current_container_configuration($order_item, $order)
    {
    }
    /**
     * Validates a container configuration and adds all associated line items to an order. Relies on specifying a container configuration array with all necessary data.
     * The configuration array is passed as a 'configuration' key of the $args method argument. Example:
     *
     *    $args = array(
     *        'configuration' => array(
     *            134 => array(                      // ID of child item. Product ID if simple, Variation ID if variation.
     *                'quantity'          => 2,      // Qty of child product, will fall back to min.
     *                'variation_id'      => 134,    // ID of chosen variation, if applicable.
     *                'variation'         => array() // array of attributes
     *                'product_id'        => 200     // ID of the product.
     *                'args'              => array() // Custom child item args to pass into 'WC_Order::add_product()'.
     *            )
     *        )
     *    );
     *
     * Returns the container order item ID if sucessful, or false otherwise.
     *
     * Note: Container/child order item totals are calculated without taxes, based on their pricing setup.
     * - Container item totals can be overridden by passing a 'totals' array in $args, as with 'WC_Order::add_product()'.
     * - Child item totals can be overridden in the 'configuration' array, as shown in the example above.
     *
     * @param  WC_Product_Mix_and_Match  $container
     * @param  WC_Order                 $order
     * @param  integer                  $quantity
     * @param  array                    $args
     * @return integer|WP_Error
     */
    public function add_container_to_order($container, $order, $quantity = 1, $args = array())
    {
    }
    /**
     * Modifies container/child order items depending on their shipping setup. Reconstructs an accurate representation of a container for shipping purposes.
     * Used in combination with 'get_product_from_item', right below.
     *
     * Adds the totals of "packaged" items to the container totals and creates a container "Contents" meta field to provide a description of the included items.
     *
     * @param  array     $items
     * @param  WC_Order  $order
     * @return array
     */
    public function get_order_items($items, $order)
    {
    }
    /**
     * Modifies parent/child order products in order to reconstruct an accurate representation of a bundle for shipping purposes:
     *
     * - If it's a container, then its weight is modified to include the weight of "packaged" children.
     * - If a child is "packaged" inside its parent, then it is marked as virtual.
     *
     * Used in combination with 'get_order_items', right above.
     *
     * @param  WC_Product  $product
     * @param  array       $item
     * @param  WC_Order    $order
     * @return WC_Product
     */
    public function get_product_from_item($product, $item, $order = \false)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Filter hooks.
    |--------------------------------------------------------------------------
    */
    /**
     * Modify the subtotal of order-items (order-details.php) depending on the bundles's pricing strategy.
     *
     * @param  string   $subtotal   the item subtotal
     * @param  array    $item       the items
     * @param  WC_Order $order      the order
     * @return string               modified subtotal string.
     */
    public function order_item_subtotal($subtotal, $item, $order)
    {
    }
    /**
     * Filters the reported number of order items.
     * Do not count child items.
     *
     * @param  int          $count      initial reported count
     * @param  string       $type       line item type
     * @param  WC_Order     $order      the order
     * @return int                      modified count
     */
    public function order_item_count($count, $type, $order)
    {
    }
    /**
     * Filters the order item admin class.
     *
     * @param  string   $class     class
     * @param  array    $item      the order item
     * @param  WC_Order  $order
     * @return string              modified class
     */
    public function html_order_item_class($class, $item, $order)
    {
    }
    /**
     * MnM Containers need no processing - let it be decided by child items only.
     *
     * @param  bool      $is_needed   product needs processing: true/false
     * @param  WC_Product   $product     the product
     * @param  int          $order_id    the order id
     * @return bool                   modified product needs processing status
     */
    public function container_item_needs_processing($is_needed, $product, $order_id)
    {
    }
    /**
     * Hides bundle metadata.
     *
     * @param  array    $hidden     hidden meta strings
     * @return array                modified hidden meta strings
     */
    public function hidden_order_item_meta($hidden)
    {
    }
    /**
     * Add MnM bundle info meta to order items.
     *
     * @param  WC_Order_Item  $order_item
     * @param  string         $cart_item_key
     * @param  array          $cart_item_values
     */
    public function add_order_item_meta($order_item, $cart_item_key, $cart_item_values)
    {
    }
    /**
     * Activates the 'get_product_from_item' filter below.
     *
     * @param  string  $order_id
     */
    public function apply_order_item_product_filter($order_id)
    {
    }
    /**
     * Deactivates the 'get_product_from_item' filter below.
     *
     * @param  string  $order_id
     */
    public function remove_get_product_from_item_filter($order_id)
    {
    }
    /**
     * Filters 'get_product_from_item' to add data used for 'woocommerce_order_item_needs_processing'.
     *
     * @param  WC_Product  $product
     * @param  array       $item
     * @param  WC_Order    $order
     * @return WC_Product
     */
    public function get_processing_order_item_product($product, $item)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated methods.
    |--------------------------------------------------------------------------
    */
    public function get_bundled_order_item_container($item, $order)
    {
    }
}
/**
 * Price functions and hooks.
 *
 * @class    WC_MNM_Product_Prices
 */
class WC_MNM_Product_Prices
{
    /**
     * Initialize.
     */
    public static function init()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Class methods.
    |--------------------------------------------------------------------------
    */
    /**
     * A non-strict way to tell if a product's prices are being altered due to the presence of a parent "container".
     *
     * @param  WC_Product  $product
     * @param  string      $context
     * @return boolean
     */
    public static function is_child_pricing_context($product, $context = 'any')
    {
    }
    /**
     * Method to use for calculating cart item discounts. Values: 'filters' | 'props'
     *
     * @return string  $method
     */
    public static function get_discount_method()
    {
    }
    /**
     * Returns the incl/excl tax coefficients for calculating prices incl/excl tax on the client side.
     *
     * @param  WC_Product  $product The product to get ratios for.
     * @return array
     */
    public static function get_tax_ratios($product)
    {
    }
    /**
     * Discounted price getter.
     *
     * @param  mixed  $price
     * @param  mixed  $discount
     * @return mixed
     */
    public static function get_discounted_price($price, $discount)
    {
    }
    /**
     * Calculates product prices.
     *
     * @param  WC_Product  $product
     * @param  array       $args
     * @return mixed
     */
    public static function get_product_price($product, $args)
    {
    }
    /**
     * Get rounding precision.
     * Needed to avoid an infinite loop when filtering.
     *
     * @since  1.4.0
     *
     * @return int
     */
    public static function extend_rounding_precision($price_decimals = \false)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Callbacks.
    |--------------------------------------------------------------------------
    */
    /**
     * Filter get_price() calls for child products to include discounts.
     *
     * @param  double      $price
     * @param  WC_Product  $product
     * @return double
     */
    public static function filter_get_price($price, $product)
    {
    }
    /**
     * Filter get_regular_price() calls for child products to include discounts.
     *
     * @param  double      $price
     * @param  WC_Product  $product
     * @return double
     */
    public static function filter_get_regular_price($regular_price, $product)
    {
    }
    /**
     * Filter get_sale_price() calls for child products to include discounts.
     *
     * @param  double      $price
     * @param  WC_Product  $product
     * @param  string      $context
     * @return double
     */
    public static function filter_get_sale_price($sale_price, $product, $context = '')
    {
    }
}
/**
 * WC_Mix_and_Match_Stock_Manager Class.
 *
 * Used to create and store a product_id / variation_id representation of a product collection based on the included items' inventory requirements.
 */
class WC_Mix_and_Match_Stock_Manager
{
    /**
     * The Mix and Match Product Object.
     *
     * @var obj WC_Product
     */
    public $product;
    public function __construct(\WC_Product $product)
    {
    }
    /**
     * Add a product to the collection.
     *
     * @param WC_MNM_Child_Item $child_item
     * @param int               $quantity
     * @param false             $deprecated - formerly quantity.
     */
    public function add_item($child_item, $quantity = 1, $deprecated = \false)
    {
    }
    /**
     * Return the items of this collection.
     *
     * @return WC_Mix_and_Match_Stock_Manager_Product[]
     */
    public function get_items()
    {
    }
    /**
     * Return the items of this collection.
     *
     * @return array
     */
    public function get_total_quantity()
    {
    }
    /**
     * Merge another collection with this one.
     *
     * @param WC_Mix_and_Match_Stock_Manager  $stock
     * @return bool | Whether successfully added
     */
    public function add_stock($stock)
    {
    }
    /**
     * Return the stock requirements of the items in this collection.
     * To validate stock accurately, this method is used to add quantities and build a list of product/variation ids to check.
     * Note that in some cases, stock for a variation might be managed by the parent - this is tracked by the managed_by_id property in WC_Mix_and_Match_Stock_Manager_Item.
     *
     * @return array { int $managed_by_id {
     *      @type WC_Product $product  The product object controlling this item's stock
     *      @type int        $quantity The selected quantity for this item.
     *  }
     * }
     */
    public function get_managed_items()
    {
    }
    /**
     * Validate that all managed items in the collection are in stock.
     *
     * @throws Exception
     *
     * @param  array  $args
     * @return boolean
     */
    public function validate_stock($args = array())
    {
    }
}
/**
 * Maps a product/variation in the collection to the item managing stock for it.
 * These 2 will differ only if stock for a variation is managed by its parent.
 *
 * @class    WC_Mix_and_Match_Stock_Manager_Item
 *
 * @since    1.0.5
 * @version  2.4.0
 */
class WC_Mix_and_Match_Stock_Manager_Item
{
    /**
     * Magic getter for old props.
     *
     * @var int
     */
    public function __get($prop)
    {
    }
    /**
     * __construct function.
     *
     * @param WC_MNM_Child_Item $child_item
     * @param int $quantity
     * @param int $deprecated
     */
    public function __construct($child_item, $quantity = 1, $deprecated = \false)
    {
    }
    /**
     * Get the stock managed by ID.
     *
     * @return int
     */
    public function get_managed_by_id()
    {
    }
    /**
     * Get the configured quantity.
     *
     * @return int
     */
    public function get_quantity()
    {
    }
    /**
     * Get the child item object for this item.
     *
     * @return WC_MNM_Child_Item
     */
    public function get_child_item()
    {
    }
    /**
     * Get the product object for this item.
     *
     * @return WC_Product}false
     */
    public function get_product()
    {
    }
    /**
     * Get the stock-managed product object for this item.
     * Mostly it's the same, except when a variation is managed at the parent-product level.
     *
     * @return WC_Product|false
     */
    public function get_managed_product()
    {
    }
}
/**
 * WC_Product_Mix_and_Match Class.
 *
 * The custom product type for WooCommerce.
 *
 * @uses  WC_Product
 */
class WC_Product_Mix_and_Match_Legacy extends \WC_Product
{
    /*
    |--------------------------------------------------------------------------
    | Deprecated methods.
    |
    --------------------------------------------------------------------------
    */
    public function get_base_price()
    {
    }
    public function get_base_regular_price()
    {
    }
    public function get_base_sale_price()
    {
    }
    public function get_mnm_data()
    {
    }
    public function get_container_size($context = 'view')
    {
    }
    public function maybe_sync()
    {
    }
    /**
     * Contained product IDs getter.
     *
     * @since  1.2.0
     * @deprecated 2.0.0
     *
     * @param  string $context
     * @return array
     */
    public function get_contents($context = 'view')
    {
    }
    /**
     * Get an array of available children for the current product.
     *
     * @deprecated 2.0.0
     * @return array
     */
    public function get_available_children()
    {
    }
    /**
     * Get the product object of one of the child items.
     *
     * @deprecated 2.0.0
     *
     * @param  int      $child_id
     * @return object   WC_Product or WC_Product_Variation
     */
    public function get_child($child_id)
    {
    }
    /**
     * Is child item available for inclusion in container.
     *
     * @deprecated 2.0.0
     *
     * @param  int  $child_id
     * @return bool
     */
    public function is_child_available($child_id)
    {
    }
    /**
     * Get min/max mnm price.
     *
     * @deprecated 2.0.0
     *
     * @param  string $min_or_max
     * @return mixed
     */
    public function get_mnm_price($min_or_max = 'min', $display = \false)
    {
    }
    /**
     * Get min/max MnM regular price.
     *
     * @deprecated 2.0.0
     *
     * @param  string $min_or_max
     * @return mixed
     */
    public function get_mnm_regular_price($min_or_max = 'min', $display = \false)
    {
    }
    /**
     * MnM price including tax.
     *
     * @deprecated 2.0.0
     *
     * @return mixed
     */
    public function get_mnm_price_including_tax($min_or_max = 'min', $qty = 1)
    {
    }
    /**
     * Min/max MnM price excl tax.
     *
     * @deprecated 2.0.0
     *
     * @return mixed
     */
    public function get_mnm_price_excluding_tax($min_or_max = 'min', $qty = 1)
    {
    }
    /**
     * Per-Item Shipping getter.
     *
     * @since  1.2.0
     * @deprecated 2.0.0
     *
     * @param  string $context
     * @return bool
     */
    public function get_shipped_per_product($context = 'view')
    {
    }
    /**
     * Contained product IDs setter.
     *
     * @since  1.2.0
     * @deprecated 2.0.0
     *
     * @param  array  $value
     */
    public function set_contents($value)
    {
    }
    /**
     * Per-Item Shipping setter.
     *
     * @since  1.2.0
     * @deprecated 2.0.0
     *
     * @param  string  $value
     */
    public function set_shipped_per_product($value)
    {
    }
    /**
     * Returns whether or not the product has any child product.
     *
     * @deprecated 2.0.0
     *
     * @return bool
     */
    public function has_children()
    {
    }
    /**
     * Returns whether or not the product container has any available child items.
     *
     * @deprecated 2.0.0
     *
     * @return bool
     */
    public function has_available_children()
    {
    }
    /**
     * Returns whether or not the child products are shipped separately.
     *
     * @deprecated 2.0.0
     *
     * @param string $context
     * @return bool
     */
    public function is_shipped_per_product($context = 'view')
    {
    }
    /**
     * Runtime application of discount to products in an MNM container.
     *
     * @since  1.4.0
     * @deprecated 2.0.0
     *
     * @see WC_MNM_Child_Item
     *
     * @param WC_Product $child
     */
    public function maybe_apply_discount_to_child($child)
    {
    }
}
/**
 * WC_Product_Mix_and_Match Class.
 *
 * The custom product type for WooCommerce.
 *
 * @uses  WC_Product
 */
class WC_Product_Mix_and_Match extends \WC_Product_Mix_and_Match_Legacy
{
    /**
     * Child items that need deleting are stored here.
     *
     * @since 2.0.0
     * @var array
     */
    protected $child_items_to_delete = array();
    /**
     *  Define type-specific properties.
     *
     * @var array
     */
    protected $extended_data = array('min_raw_price' => '', 'min_raw_regular_price' => '', 'max_raw_price' => '', 'max_raw_regular_price' => '', 'layout_override' => \false, 'layout' => 'tabular', 'add_to_cart_form_location' => 'default', 'min_container_size' => 0, 'max_container_size' => \null, 'priced_per_product' => \false, 'discount' => 0, 'packing_mode' => 'together', 'weight_cumulative' => \false, 'content_source' => 'products', 'child_category_ids' => array(), 'child_items_stock_status' => 'outofstock');
    /**
     * __construct function.
     *
     * @param  mixed $product
     */
    public function __construct($product = 0)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Getters.
    |--------------------------------------------------------------------------
    */
    /**
     * Get internal type.
     *
     * @return string
     */
    public function get_type()
    {
    }
    /**
     * Checks if a product is virtual (has no shipping).
     *
     * @return bool
     */
    public function is_virtual()
    {
    }
    /**
     * Load property and runtime cache defaults to trigger a re-sync.
     *
     * @since 2.0.0
     */
    public function load_defaults($reset_child_items = \false)
    {
    }
    /**
     * Get the add to cart button text for the single page.
     *
     * @return string
     */
    public function single_add_to_cart_text()
    {
    }
    /**
     * Get the add to cart button text
     *
     * @return string
     */
    public function add_to_cart_text()
    {
    }
    /**
     * Get the add to cart button text description - used in aria tags.
     *
     * @since 2.0.0
     * @return string
     */
    public function add_to_cart_description()
    {
    }
    /**
     * Returns the base active price of the MnM container.
     *
     * @since  1.2.0
     *
     * @param  string $context
     * @return mixed
     */
    public function get_price($context = 'view')
    {
    }
    /**
     * Returns the base regular price of the MnM container.
     *
     * @since  1.2.0
     *
     * @param  string $context
     * @return mixed
     */
    public function get_regular_price($context = 'view')
    {
    }
    /**
     * Returns the base sale price of the MnM container.
     *
     * @since  1.2.0
     *
     * @param  string  $context
     * @return mixed
     */
    public function get_sale_price($context = 'view')
    {
    }
    /**
     * "Form Location" getter.
     *
     * @since  1.3.0
     *
     * @param  string  $context
     * @return string
     */
    public function get_add_to_cart_form_location($context = 'view')
    {
    }
    /**
     * "Override template" getter.
     *
     * @since  2.0.0
     *
     * @param  string  $context
     * @return string
     */
    public function get_layout_override($context = 'view')
    {
    }
    /**
     * "Layout" getter.
     *
     * @since  1.3.0
     *
     * @param  string  $context
     * @return string
     */
    public function get_layout($context = 'view')
    {
    }
    /**
     * Minimum raw MnM container price getter.
     *
     * @since  1.2.0
     *
     * @param  string  $context
     * @return string
     */
    public function get_min_raw_price($context = 'view')
    {
    }
    /**
     * Minimum raw regular MnM container price getter.
     *
     * @since  1.2.0
     *
     * @param  string  $context
     * @return string
     */
    public function get_min_raw_regular_price($context = 'view')
    {
    }
    /**
     * Minimum raw MnM container price getter.
     *
     * @since  1.2.0
     *
     * @param  string  $context
     * @return string
     */
    public function get_max_raw_price($context = 'view')
    {
    }
    /**
     * Minimum raw regular MnM container price getter.
     *
     * @since  1.2.0
     *
     * @param  string  $context
     * @return string
     */
    public function get_max_raw_regular_price($context = 'view')
    {
    }
    /**
     * Per-Item Pricing getter.
     *
     * @since  1.2.0
     *
     * @param  string $context
     * @return bool
     */
    public function get_priced_per_product($context = 'view')
    {
    }
    /**
     * Per-Item Discount getter.
     *
     * @since  1.4.0
     *
     * @param  string $context
     * @return string
     */
    public function get_discount($context = 'view')
    {
    }
    /**
     * Packing Mode getter.
     *
     * @since  2.0.0
     *
     * @param  string $context
     * @return bool
     */
    public function get_packing_mode($context = 'view')
    {
    }
    /**
     * Shipping weight cumulative getter.
     *
     * @since  2.0.0
     *
     * @param  string $context
     * @return string
     */
    public function get_weight_cumulative($context = 'view')
    {
    }
    /**
     * Child items content source getter.
     *
     * @since  2.0.0
     *
     * @param  string $context
     * @return string
     */
    public function get_content_source($context = 'view')
    {
    }
    /**
     * Category contents getter.
     *
     * @since  2.0.0
     *
     * @param  string $context
     * @return array
     */
    public function get_child_category_ids($context = 'view')
    {
    }
    /**
     * Return the product's minimum size limit.
     *
     * @param  string $context
     * @return int
     */
    public function get_min_container_size($context = 'view')
    {
    }
    /**
     * Return the product's maximum size limit.
     *
     * @param  string $context
     * @return mixed | string or int
     */
    public function get_max_container_size($context = 'view')
    {
    }
    /**
     * Get child items stock status.
     *
     * @since 2.0.0
     *
     * @param  string $context
     * @return string
     */
    public function get_child_items_stock_status($context = 'view')
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Setters.
    |--------------------------------------------------------------------------
    */
    /**
     * "Override template" setter.
     *
     * @since  2.0.0
     *
     * @param  string  $value
     */
    public function set_layout_override($value)
    {
    }
    /**
     * "Form Location" setter.
     *
     * @since  1.3.0
     *
     * @param  string  $location
     */
    public function set_add_to_cart_form_location($location)
    {
    }
    /**
     * "Layout" setter.
     *
     * @since  1.3.0
     *
     * @param  string  $layout
     */
    public function set_layout($layout)
    {
    }
    /**
     * Minimum raw price setter.
     *
     * @since  1.2.0
     *
     * @param string $price Min Raw Price.
     */
    public function set_min_raw_price($price)
    {
    }
    /**
     * Minimum raw regular price setter.
     *
     * @since  1.2.0
     *
     * @param string $price Min Raw Regular Price.
     */
    public function set_min_raw_regular_price($price)
    {
    }
    /**
     * Maximum raw price setter.
     *
     * @since  1.2.0
     *
     * @param string $price Max Raw Price.
     */
    public function set_max_raw_price($price)
    {
    }
    /**
     * Maximum raw regular price setter.
     *
     * @since  1.2.0
     *
     * @param string $price Max Raw Regular Price.
     */
    public function set_max_raw_regular_price($price)
    {
    }
    /**
     * Per-Item Pricing setter.
     *
     * @since  1.2.0
     *
     * @param  string  $value
     */
    public function set_priced_per_product($value)
    {
    }
    /**
     * Per-Item Pricing Discount setter.
     *
     * @since  1.2.0
     *
     * @param  string  $value
     */
    public function set_discount($value)
    {
    }
    /**
     * Packing Mode setter.
     *
     * @since  2.0.0
     *
     * @param  string  $value 'virtual' | 'together' | 'separate' | 'separate_plus'
     *    'virtual'       - Everything is virtual.
     *    'together'      - Packed as a single unit.
     *    'separate'      - Packed separately, no physical container.
     *    'separate_plus' - Packed separately, with physical container.
     */
    public function set_packing_mode($value)
    {
    }
    /**
     * Shipping weight calculation setter.
     *
     * @since  2.0.0
     *
     * @param  string $value
     */
    public function set_weight_cumulative($value)
    {
    }
    /**
     * Child items content source setter.
     *
     * @since  2.0.0
     *
     * @param  string $value - 'products' | 'categories'
     */
    public function set_content_source($value)
    {
    }
    /**
     * Category contents setter.
     *
     * @since  2.0.0
     *
     * @param  int[] $value
     */
    public function set_child_category_ids($value)
    {
    }
    /**
     * Set the product's minimum size limit.
     *
     * @since  1.2.0
     *
     * @param  string  $value
     */
    public function set_min_container_size($value)
    {
    }
    /**
     * Set the product's maximum size limit.
     *
     * @since  1.2.0
     *
     * @param  string  $value
     */
    public function set_max_container_size($value)
    {
    }
    /**
     * Child items/product IDs setter.
     *
     * @since  2.0.0
     *
     * @param  mixed WC_MNM_Child_Item[] | array[]  $data {
     *     @type  int  $product_id     Child product id.
     *     @type  int  $variation_id   Child variation id.
     * }
     */
    public function set_child_items(array $data)
    {
    }
    /**
     * Set child items stock status.
     *
     * @since 2.0.0
     *
     * @param string  $status - 'instock' | 'onbackorder' | 'outofstock'
     *    'instock'     - Child items stock can fill all slots.
     *    'onbackorder' - Child items stock must be backordered to fill all slots.
     *    'outofstock'  - Child items do not have enough stock to fill all slots.
     */
    public function set_child_items_stock_status($status = '')
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Conditionals
    |--------------------------------------------------------------------------
    */
    /**
     * Equivalent of 'get_changes', but boolean and for child items only.
     *
     * @since  2.0.0
     *
     * @return boolean
     */
    public function has_child_item_changes()
    {
    }
    /**
     * Returns whether or not the product has additional options that need
     * selecting before adding to cart.
     *
     * @since  1.10.2
     * @return boolean
     */
    public function has_options()
    {
    }
    /**
     * Is this a NYP product?
     *
     * @return bool
     */
    public function is_nyp()
    {
    }
    /**
     * Returns whether or not the product container has any visible child items.
     *
     * @since 2.0.0
     *
     * @param string $context
     * @return bool
     */
    public function has_child_items($context = 'view')
    {
    }
    /**
     * A MnM product must contain children and have a price in static mode only.
     *
     * @return bool
     */
    public function is_purchasable()
    {
    }
    /**
     * Returns whether or not the product container's price is based on the included items.
     *
     * @param string $context
     * @return bool
     */
    public function is_priced_per_product($context = 'view')
    {
    }
    /**
     * Returns whether or not the product container's price is based on the included items.
     *
     * @since  1.4.0
     *
     * @param string $context
     * @return bool
     */
    public function has_discount($context = 'view')
    {
    }
    /**
     * Returns whether or not the child products are shipped as a single unit.
     *
     * @since 2.0.0
     *
     * @param  string  $context
     * @return bool
     */
    public function is_packed_together($context = 'view')
    {
    }
    /**
     * Returns whether or not the product container's shipping weight is cumulative.
     *
     * @since  2.0.0
     *
     * @param  string  $context
     * @return bool
     */
    public function is_weight_cumulative($context = 'view')
    {
    }
    /**
     * Returns whether container is in stock
     *
     * NB: Child items stock is only checked for the child items on the frontend.
     *
     * @return bool
     */
    public function is_in_stock()
    {
    }
    /**
     * Override on_sale status of mnm product. In per-product-pricing mode, true if has discount or if there is a base sale price defined.
     *
     * @param  string  $context
     * @return bool
     */
    public function is_on_sale($context = 'view')
    {
    }
    /**
     * Stock of container is synced to allowed child items.
     *
     * @return bool
     */
    public function is_synced()
    {
    }
    /**
     *
     * Does this product have a layout override
     *
     * @param  string  $context
     *
     * @return bool
     */
    public function has_layout_override($context = 'view')
    {
    }
    /**
     *
     * Is this product ID in the allowed contents.
     *
     * @param  mixed WC_Product|int  $id | product or variation ID
     *
     * @return bool
     */
    public function is_allowed_child_product($id)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Non-CRUD Getters
    |--------------------------------------------------------------------------
    */
    /**
     * Return array of allowed child product IDs
     *
     * @since  2.0.0
     *
     * @return array[] array of child item ID => product|variation ID
     */
    public function get_child_product_ids($context = 'view')
    {
    }
    /**
     * Return all child items
     * these are the items that are allowed to be in the container
     *
     * @since  2.0.0
     *
     * @return WC_MNM_Child_Item[]
     */
    public function get_child_items($context = 'view')
    {
    }
    /**
     * Gets a specific child item.
     *
     * @since  2.0.0
     *
     * @param  int  $child_item_id
     * @param  string $context
     * @return false|WC_MNM_Child_Item
     */
    public function get_child_item($child_item_id, $context = 'view')
    {
    }
    /**
     * Return a specific child item by product|variation ID.
     *
     * @since  2.0.0
     *
     * @return WC_MNM_Child_Item|false
     */
    public function get_child_item_by_product_id($child_product_id, $context = 'view')
    {
    }
    /**
     * Adds container configuration data to the URL.
     *
     * @since 2.0.0
     *
     * @param  array|null $item_object item array If a cart or order item is passed, we can get a link containing the exact attributes selected for the variation, rather than the default attributes.
     * @return string
     */
    public function get_cart_edit_link($item_object = \null)
    {
    }
    /**
     * Returns range style html price string without min and max.
     *
     * @param  mixed    $price    default price
     * @return string             overridden html price string (old style)
     */
    public function get_price_html($price = '')
    {
    }
    /**
     * Prices incl. or excl. tax are calculated based on the child products prices, so get_price_suffix() must be overridden to return the correct field in per-product pricing mode.
     *
     * @param  mixed    $price  price string
     * @param  mixed    $qty  item quantity
     * @return string    modified price html suffix
     */
    public function get_price_suffix($price = '', $qty = 1)
    {
    }
    /**
     * Get availability of container.
     *
     * @return array
     */
    public function get_availability()
    {
    }
    /**
     * Get min/max container price.
     *
     * @since  2.0.0
     *
     * @param  string $min_or_max
     * @return mixed
     */
    public function get_container_price($min_or_max = 'min', $display = \false)
    {
    }
    /**
     * Get min/max container regular price.
     *
     * @since  2.0.0
     *
     * @param  string $min_or_max
     * @return mixed
     */
    public function get_container_regular_price($min_or_max = 'min', $display = \false)
    {
    }
    /**
     * Get min/max container price excl tax.
     *
     * @since  2.0.0
     *
     * @return mixed
     */
    public function get_container_price_including_tax($min_or_max = 'min', $qty = 1)
    {
    }
    /**
     * Get min/max container price excl tax.
     *
     * @since  2.0.0
     *
     * @return mixed
     */
    public function get_container_price_excluding_tax($min_or_max = 'min', $qty = 1)
    {
    }
    /**
     * Calculates container prices.
     *
     * @since  2.0.0
     *
     * @param  array  $args
     * @return mixed
     */
    public function calculate_price($args)
    {
    }
    /**
     * Gets price data array. Contains localized strings and price data passed to JS.
     *
     * @since  1.4.0
     * @return array
     */
    public function get_container_price_data()
    {
    }
    /**
     * Get the data attributes
     *
     * @param array $args
     * @return string
     */
    public function get_data_attributes($args = array())
    {
    }
    /**
     * Get the min/max/step quantity of a child.
     *
     * @param  string $value options: 'min' | 'max' | 'step'
     * @param  int $child_id
     * @return int
     */
    public function get_child_quantity($value, $child_id)
    {
    }
    /**
     * Get the availability message of a child, taking its purchasable status into account.
     *
     * @param  int $child_id
     * @return string
     */
    public function get_child_availability_html($child_id)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Sync with children.
    |--------------------------------------------------------------------------
    */
    /**
     * Sync child data such as price, availability, etc.
     */
    public function sync()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Static methods.
    |--------------------------------------------------------------------------
    */
    /**
     * Supported "Form Location" options.
     *
     * @since  1.3.0
     * @changed 2.0.0
     *
     * @return array {
     *     @type string       $label        The translatable label for the icon.
     *     @type string       $description  Text to display a longer decsription of the icon. Optional.
     *     @type string       $image        URL to option icon.
     * }
     */
    public static function get_add_to_cart_form_location_options()
    {
    }
    /**
     * Supported layouts.
     *
     * @since  1.3.0
     * @changed 2.0.0
     *
     * @return array {
     *     @type string       $label        The translatable label for the icon.
     *     @type string       $description  Text to display a longer decsription of the icon. Optional.
     *     @type string       $image        URL to option icon.
     * }
     */
    public static function get_layout_options()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Save child items.
    --------------------------------------------------------------------------
    */
    /**
     * Do any extra processing needed after the actual product save
     * (but before triggering the 'woocommerce_after_..._object_save' action)
     *
     * @since 2.0.0
     *
     * @param mixed $state The state object that was returned by before_data_store_save_or_update.
     */
    protected function after_data_store_save_or_update($state)
    {
    }
    /**
     * Save all child items which are part of this product.
     *
     * @since 2.0.0
     */
    protected function save_child_items()
    {
    }
}
/**
 * Handles deprecation notices and triggering of legacy action hooks.
 */
class WC_MNM_Deprecated_Action_Hooks extends \WC_Deprecated_Action_Hooks
{
    /**
     * Array of deprecated hooks we need to handle. Format of 'new' => 'old'.
     *
     * @var array
     */
    protected $deprecated_hooks = array('wc_mnm_loaded' => 'woocommerce_mnm_loaded', 'wc_mnm_before_mnm_add_to_cart' => 'woocommerce_mnm_before_mnm_add_to_cart', 'wc_mnm_after_mnm_add_to_cart' => 'woocommerce_mnm_after_mnm_add_to_cart', 'wc_mnm_add_to_cart' => 'woocommerce_mnm_add_to_cart', 'wc_mnm_child_add_to_order' => 'woocommerce_mnm_child_add_to_order', 'wc_mnm_item_add_order_item_meta' => 'woocommerce_mnm_item_add_order_item_meta', 'wc_mnm_container_add_order_item_meta' => 'woocommerce_mnm_container_add_order_item_meta', 'wc_mnm_synced' => 'woocommerce_mnm_synced', 'wc_mnm_child_item_details' => 'woocommerce_mnm_child_item_details', 'wc_mnm_before_child_items' => 'woocommerce_before_mnm_items', 'wc_mnm_after_child_items' => 'woocommerce_after_mnm_items', 'wc_mnm_content_loop' => 'woocommerce_mnm_content_loop', 'wc_mnm_add_to_cart_wrap' => 'woocommerce_mnm_add_to_cart_wrap', 'wc_mnm_admin_product_options' => 'woocommerce_mnm_product_options');
    /**
     * Array of versions on each hook has been deprecated.
     *
     * @var array
     */
    protected $deprecated_version = array('woocommerce_mnm_loaded' => '2.0.0', 'woocommerce_mnm_before_mnm_add_to_cart' => '2.0.0', 'woocommerce_mnm_after_mnm_add_to_cart' => '2.0.0', 'woocommerce_mnm_add_to_cart' => '2.0.0', 'woocommerce_mnm_child_add_to_order' => '2.0.0', 'woocommerce_mnm_item_add_order_item_meta' => '2.0.0', 'woocommerce_mnm_container_add_order_item_meta' => '2.0.0', 'woocommerce_mnm_synced' => '2.0.0', 'woocommerce_mnm_child_item_details' => '2.0.0', 'woocommerce_before_mnm_items' => '2.0.0', 'woocommerce_after_mnm_items' => '2.0.0', 'woocommerce_mnm_content_loop' => '2.0.0', 'woocommerce_mnm_add_to_cart_wrap' => '2.0.0', 'woocommerce_mnm_product_options' => '2.0.0');
}
/**
 * Handles deprecation notices and triggering of legacy filter hooks
 */
class WC_MNM_Deprecated_Filter_Hooks extends \WC_Deprecated_Filter_Hooks
{
    /**
     * Array of deprecated hooks we need to handle.
     * Format of 'new' => 'old'.
     *
     * @var array
     */
    protected $deprecated_hooks = array(
        'wc_mnm_grid_layout_columns' => 'woocommerce_mnm_grid_layout_columns',
        'wc_mnm_tabular_column_headers' => 'woocommerce_mnm_tabular_column_headers',
        'wc_mnm_is_container_order_item_editable' => 'woocommerce_is_mnm_container_order_item_editable',
        'wc_mnm_csv_product_import_mapping_default_columns' => 'woocommerce_mnm_csv_product_import_mapping_default_columns',
        'wc_mnm_csv_product_import_mapping_options' => 'woocommerce_mnm_csv_product_import_mapping_options',
        'wc_mnm_import_set_props' => 'woocommerce_mnm_import_set_props',
        'wc_mnm_export_column_names' => 'woocommerce_mnm_export_column_names',
        'wc_mnm_system_status' => 'woocommerce_mnm_system_status',
        'wc_mnm_form_wrapper_classes' => 'woocommerce_mnm_form_wrapper_classes',
        'wc_mnm_container_min_size' => 'woocommerce_mnm_min_container_size',
        'wc_mnm_container_max_size' => 'woocommerce_mnm_max_container_size',
        'wc_mnm_container_is_priced_per_product' => 'woocommerce_mnm_priced_per_product',
        'wc_mnm_container_has_discount' => 'woocommerce_mnm_has_discount',
        // 'wc_mnm_shipped_per_product'                      => 'woocommerce_mnm_shipped_per_product', // Intentionally commented out. Replaced by it's inverse: wc_mnm_container_is_packed_together @see: WC_Product_Mix_and_Match::is_packed_together()
        'wc_mnm_container_is_on_sale' => 'woocommerce_mnm_is_on_sale',
        'wc_mnm_container_empty_price_html' => 'woocommerce_mnm_empty_price_html',
        'wc_mnm_container_show_free_string' => 'woocommerce_mnm_show_free_string',
        'wc_mnm_container_free_price_html' => 'woocommerce_mnm_free_price_html',
        'wc_mnm_container_sale_price_html' => 'woocommerce_mnm_sale_price_html',
        'wc_mnm_container_get_price_html' => 'woocommerce_get_mnm_price_html',
        'wc_mnm_container_prices_hash' => 'woocommerce_mnm_prices_hash',
        'wc_mnm_container_price_data' => 'woocommerce_mnm_container_price_data',
        'wc_mnm_container_data_attributes' => 'woocommerce_mix_and_match_data_attributes',
        'wc_mnm_child_item_discount_from_regular' => 'woocommerce_mnm_item_discount_from_regular',
        'wc_mnm_child_cart_item_data' => 'woocommerce_mnm_child_cart_item_data',
        'wc_mnm_child_item_cart_item_identifier' => 'woocommerce_mnm_child_item_cart_item_identifier',
        'wc_mnm_get_posted_container_configuration' => 'woocommerce_mnm_get_posted_container_configuration',
        'wc_mnm_get_posted_container_form_data' => 'woocommerce_mnm_get_posted_container_form_data',
        'wc_mnm_before_container_validation' => 'woocommerce_mnm_before_container_validation',
        'wc_mnm_container_validation_context' => 'woocommerce_mnm_container_validation_context',
        'wc_mnm_add_to_cart_container_validation' => 'woocommerce_mnm_add_to_cart_container_validation',
        'wc_mnm_cart_container_validation' => 'woocommerce_mnm_cart_container_validation',
        'wc_mnm_add_to_order_container_validation' => 'woocommerce_mnm_add_to_order_container_validation',
        'wc_mnm_container_quantity_error_message' => 'woocommerce_mnm_container_quantity_error_message',
        'wc_mnm_child_cart_item' => 'woocommerce_mnm_cart_item',
        'wc_mnm_container_cart_item' => 'woocommerce_mnm_container_cart_item',
        'wc_mnm_child_item_shipped_individually' => 'woocommerce_mnm_item_shipped_individually',
        'wc_mnm_child_item_has_cumulative_weight' => 'woocommerce_mnm_item_has_bundled_weight',
        'wc_mnm_add_to_cart_script_parameters' => 'woocommerce_mnm_add_to_cart_parameters',
        'wc_mnm_order_item_legacy_part_of_meta' => 'woocommerce_mnm_order_item_legacy_part_of_meta',
        'wc_mnm_supported_products' => 'woocommerce_mnm_supported_products',
        'wc_mnm_order_item_legacy_part_of_meta' => 'woocommerce_mnm_order_item_legacy_part_of_meta',
        'wc_mnm_order_item_container_size_meta_value' => 'woocommerce_mnm_order_item_container_size_meta_value',
        'wc_mnm_order_item_meta_title' => 'woocommerce_mnm_order_item_meta_title',
        'wc_mnm_order_item_meta_description' => 'woocommerce_mnm_order_item_meta_description',
        'wc_mnm_sku_from_order_item' => 'woocommerce_mnm_sku_from_order_item',
        'wc_mnm_container_quantity_message' => 'woocommerce_mnm_container_quantity_message',
        'wc_mnm_cocart_item_add_to_cart_validation' => 'woocommerce_mnm_cocart_item_add_to_cart_validation',
        'wc_mnm_add_to_cart_form_location_options' => 'woocommerce_mnm_add_to_cart_form_location_options',
        'wc_mnm_supported_layouts' => 'woocommerce_mnm_supported_layouts',
        'wc_mnm_quantity_name_prefix' => 'woocommerce_mnm_quantity_name_prefix',
        'wc_mnm_query_products_by_categories_args' => 'wc_mnm_categories_get_cat_content_args',
    );
    /**
     * Array of versions on each hook has been deprecated.
     *
     * @var array
     */
    protected $deprecated_version = array('woocommerce_mnm_grid_layout_columns' => '2.0.0', 'woocommerce_mnm_tabular_column_headers' => '2.0.0', 'woocommerce_is_mnm_container_order_item_editable' => '2.0.0', 'woocommerce_mnm_csv_product_import_mapping_default_columns' => '2.0.0', 'woocommerce_mnm_csv_product_import_mapping_options' => '2.0.0', 'woocommerce_mnm_import_set_props' => '2.0.0', 'woocommerce_mnm_export_column_names' => '2.0.0', 'woocommerce_mnm_system_status' => '2.0.0', 'woocommerce_mnm_form_wrapper_classes' => '2.0.0', 'woocommerce_mnm_min_container_size' => '2.0.0', 'woocommerce_mnm_max_container_size' => '2.0.0', 'woocommerce_mnm_priced_per_product' => '2.0.0', 'woocommerce_mnm_has_discount' => '2.0.0', 'woocommerce_mnm_shipped_per_product' => '2.0.0', 'woocommerce_mnm_is_on_sale' => '2.0.0', 'woocommerce_mnm_empty_price_html' => '2.0.0', 'woocommerce_mnm_show_free_string' => '2.0.0', 'woocommerce_mnm_free_price_html' => '2.0.0', 'woocommerce_mnm_sale_price_html' => '2.0.0', 'woocommerce_get_mnm_price_html' => '2.0.0', 'woocommerce_mnm_prices_hash' => '2.0.0', 'woocommerce_mnm_container_price_data' => '2.0.0', 'woocommerce_mix_and_match_data_attributes' => '2.0.0', 'woocommerce_mnm_item_discount_from_regular' => '2.0.0', 'woocommerce_mnm_child_item_cart_item_identifier' => '2.0.0', 'woocommerce_mnm_child_cart_item_data' => '2.0.0', 'woocommerce_mnm_get_posted_container_configuration' => '2.0.0', 'woocommerce_mnm_get_posted_container_form_data' => '2.0.0', 'woocommerce_mnm_before_container_validation' => '2.0.0', 'woocommerce_mnm_container_validation_context' => '2.0.0', 'woocommerce_mnm_add_to_cart_container_validation' => '2.0.0', 'woocommerce_mnm_cart_container_validation' => '2.0.0', 'woocommerce_mnm_add_to_order_container_validation' => '2.0.0', 'woocommerce_mnm_container_quantity_error_message' => '2.0.0', 'woocommerce_mnm_cart_item' => '2.0.0', 'woocommerce_mnm_container_cart_item' => '2.0.0', 'woocommerce_mnm_item_shipped_individually' => '2.0.0', 'woocommerce_mnm_item_has_bundled_weight' => '2.0.0', 'woocommerce_mnm_add_to_cart_parameters' => '2.0.0', 'woocommerce_mnm_order_item_legacy_part_of_meta' => '2.0.0', 'woocommerce_mnm_supported_products' => '2.0.0', 'woocommerce_mnm_order_item_legacy_part_of_meta' => '2.0.0', 'woocommerce_mnm_order_item_container_size_meta_value' => '2.0.0', 'woocommerce_mnm_order_item_meta_title' => '2.0.0', 'woocommerce_mnm_order_item_meta_description' => '2.0.0', 'woocommerce_mnm_sku_from_order_item' => '2.0.0', 'woocommerce_mnm_container_quantity_message' => '2.0.0', 'woocommerce_mnm_cocart_item_add_to_cart_validation' => '2.0.0', 'woocommerce_mnm_add_to_cart_form_location_options' => '2.0.0', 'woocommerce_mnm_supported_layouts' => '2.0.0', 'woocommerce_mnm_quantity_name_prefix' => '2.0.0', 'wc_mnm_categories_get_cat_content_args' => '2.0.0');
}
/**
 * WC_MNM_Legacy_Meta Class.
 *
 * Adds back-compatibility for 1.x post metas until DB is updated.
 */
class WC_MNM_Legacy_Meta
{
    public static function init()
    {
    }
    /**
     * Read the child items from _mnm_data post meta
     *
     * @param  WC_MNM_Child_Item[]
     * @param  WC_Product_Mix_and_Match  $product
     * @return WC_MNM_Child_Item[]
     */
    public static function read_items_from_meta($child_items, $product)
    {
    }
    /**
     * Set packing mode based on 1.0x style meta.
     *
     * @param  string $mode
     * @param  WC_Product_Mix_and_Match  $product
     * @return string
     */
    public static function read_packing_mode_from_meta($mode, $product)
    {
    }
    /**
     * Set content source based on mini-extension meta.
     *
     * @param  string $source
     * @param  WC_Product_Mix_and_Match  $product
     * @return string
     */
    public static function read_content_source_from_meta($source, $product)
    {
    }
    /**
     * Set catagories based on mini-extension meta.
     *
     * @param  int|string[] $categories
     * @param  WC_Product_Mix_and_Match  $product
     * @return array
     */
    public static function read_child_category_ids_from_meta($categories, $product)
    {
    }
}
/**
 * WC_Mix_and_Match_Compatibility Class.
 *
 * Load classes for making Mix and Match compatible with other plugins|woocommerce|legacy.
 */
class WC_MNM_Compatibility
{
    /**
     * Define dependencies
     *
     * @var array of minimum versions
     * @since 2.0.0
     */
    public $required = array('apfs' => '3.0.0', 'blocks' => '7.2.0', 'subs' => '3.0.0');
    /**
     * Array of deprecated hook handlers.
     *
     * @var array of WC_Deprecated_Hooks
     * @since 2.0.0
     */
    public $deprecated_hook_handlers = array();
    /**
     * The single instance of the class.
     *
     * @var WC_MNM_Compatibility
     *
     * @since 1.9.2
     */
    protected static $_instance = \null;
    /**
     * Main class instance. Ensures only one instance of class is loaded or can be loaded.
     *
     * @static
     * @return WC_Mix_and_Match_Compatibility
     * @since  1.9.2
     */
    public static function get_instance()
    {
    }
    public function __construct()
    {
    }
    /**
     * Declare HPOS (Custom Order tables) compatibility.
     *
     * @since 2.2.0
     */
    public function declare_hpos_compatibility()
    {
    }
    /**
     * Unload mini-extensions.
     */
    public function unload()
    {
    }
    /**
     * Init compatibility classes.
     */
    public function init()
    {
    }
    /**
     * Checks versions of compatible/integrated/deprecated extensions.
     */
    public function add_compatibility_notices()
    {
    }
    /**
     * Tells if a product is a Name Your Price product, provided that the extension is installed.
     *
     * @param  mixed  $product
     * @return bool
     */
    public function is_nyp($product)
    {
    }
    /**
     * Returns true if the plugin version of MNM is greater than or equal to $version.
     *
     * @since  2.0.0
     *
     * @param  string  $version the version to compare
     * @return bool true if the installed version of MNM is > $version
     */
    public static function is_version_gte($version)
    {
    }
    /**
     * Returns true if the DB version of MNM is greater than or equal to $version.
     *
     * @since  2.0.0
     *
     * @param  string  $version the version to compare
     * @return bool true if the installed version of MNM is > $version
     */
    public static function is_db_version_gte($version)
    {
    }
}
/**
 * WC_MNM_Theme_Compatibility Class.
 *
 * Load classes for making Mix and Match compatible with certain themes.
 */
class WC_MNM_Theme_Compatibility
{
    /**
     * Delay Init compatibility classes.
     */
    public static function init()
    {
    }
    /**
     * Init compatibility classes.
     */
    public static function add_theme_compat()
    {
    }
}
/**
 * WC_MNM_Core_Compatibility Class.
 *
 * Wrapper functions for WC core back-compatibility.
 */
class WC_MNM_Core_Compatibility
{
    /**
     * Attach any hooks/filters for core WooCommerce
     *
     * @since 2.0.0
     */
    public static function attach_hooks_and_filters()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Callbacks.
    |--------------------------------------------------------------------------
    */
    /**
     * Saves the current rest request.
     *
     * @since  6.15.0
     *
     * @param  mixed            $result
     * @param  WP_REST_Server   $server
     * @param  WP_REST_Request  $request
     * @return mixed
     */
    public static function save_rest_request($result, $server, $request)
    {
    }
    /**
     * Filter wc_get_products() to support querying by category IDs.
     *
     * @since  2.0.0
     *
     * @param array $wp_query_args Query vars sent to WP_Query.
     * @param array $query_vars Query vars from a WC_Product_Query.
     * @return array
     */
    public static function query_products_by_category_ids($wp_query_args, $query_vars)
    {
    }
    /**
     * Order/Group products by category
     *
     * @since 2.0.0
     *
     * @param string   $orderby The GROUP BY clause of the query.
     * @param WP_Query $query   The WP_Query instance (passed by reference).
     * @return string
     */
    public static function posts_orderby_category($orderby, $query)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Utilities.
    |--------------------------------------------------------------------------
    */
    /**
     * Helper method to get the version of the currently installed WooCommerce.
     *
     * @since  1.2.0
     *
     * @return string
     */
    public static function get_wc_version()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
     *
     * @since  1.2.0
     *
     * @param  string  $version the version to compare
     * @return bool true if the installed version of WooCommerce is > $version
     */
    public static function is_wc_version_gte($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than $version.
     *
     * @since  1.2.0
     *
     * @param  string  $version the version to compare
     * @return bool true if the installed version of WooCommerce is > $version
     */
    public static function is_wc_version_gt($version)
    {
    }
    /**
     * Check if all variation's attributes are set.
     *
     * @since  1.2.0
     *
     * @param  WC_Product_Variation $variation
     */
    public static function has_all_attributes_set($variation)
    {
    }
    /**
     * Whether this is a Store/REST API request.
     *
     * @since  2.0.0
     *
     * @return boolean
     */
    public static function is_api_request()
    {
    }
    /**
     * Returns the current Store/REST API request or false.
     *
     * @since  2.0.0
     *
     * @return WP_REST_Request|false
     */
    public static function get_api_request()
    {
    }
    /**
     * Whether this is a Store API request.
     *
     * @since  2.0.0
     *
     * @param  string  $route
     * @return boolean
     */
    public static function is_store_api_request($route = '')
    {
    }
    /**
     * Back-compat wrapper for 'is_rest_api_request'.
     *
     * @since  2.0.0
     *
     * @return boolean
     */
    public static function is_rest_api_request()
    {
    }
    /**
     * Given an element name, returns a class name.
     *
     * If the WP-related function is not defined (added in 6.1), return empty string.
     *
     * @param string $element The name of the element.
     *
     * @since 2.4.0
     * @return string
     */
    public static function wp_theme_get_element_class_name($element)
    {
    }
    /**
     * Returns true if site is using block theme.
     *
     * @since  2.4.10
     *
     * @return boolean
     */
    public static function wc_current_theme_is_fse_theme()
    {
    }
    /**
     *
     * Gets value of a meta key from WC_Data object if passed, otherwise from the post object.
     * This helper function support backward compatibility for meta box functions, when moving from posts based store to custom tables.
     *
     * @param WP_Post|null  $post Post object, meta will be fetched from this only when `$data` is not passed.
     * @param \WC_Data|null $data WC_Data object, will be preferred over post object when passed.
     * @param string        $key Key to fetch metadata for.
     * @param bool          $single Whether metadata is single.
     *
     * @since 2.4.10
     *
     * @return array|mixed|string Value of the meta key.
     */
    public static function get_post_or_object_meta(?\WP_Post $post, ?\WC_Data $data, string $key, bool $single)
    {
    }
    /**
     * Wrapper for wc_print_notice
     *
     * @since 2.5.0
     */
    public static function wc_print_notice($message = '')
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated Functions.
    |--------------------------------------------------------------------------
    */
    /**
     * Back-compat wrapper for wc_set_loop_prop
     *
     * @since 1.3.0
     * @deprecated 2.0.0
     * @param string $prop Prop to set.
     * @param string $value Value to set.
     */
    public static function set_loop_prop($prop, $value = '')
    {
    }
    /**
     * Back-compat wrapper for 'get_parent_id'.
     *
     * @since  1.2.0
     * @deprecated 2.0.0
     *
     * @param  WC_Product  $product
     * @return mixed
     */
    public static function get_parent_id($product)
    {
    }
    /**
     * Back-compat wrapper for 'get_id'.
     *
     * @since  1.2.0
     * @deprecated 2.0.0
     *
     * @param  WC_Product  $product
     * @return mixed
     */
    public static function get_id($product)
    {
    }
    /**
     * Back-compat wrapper for getting CRUD object props directly.
     * Falls back to meta under WC 2.7+.
     *
     * @since  1.2.0
     * @deprecated 2.0.0
     *
     * @param  WC_Data  $obj
     * @param  string   $name
     * @param  string   $context
     * @return mixed
     */
    public static function get_prop($obj, $name, $context = 'view')
    {
    }
    /**
     * Back-compat wrapper for setting CRUD object props directly.
     * Falls back to meta under WC 2.7+.
     *
     * @since  1.2.0
     * @deprecated 2.0.0
     *
     * @param  WC_Data  $product
     * @param  string   $name
     * @param  mixed    $value
     * @return void
     */
    public static function set_prop($obj, $name, $value)
    {
    }
    /**
     * Back-compat wrapper for getting CRUD object meta.
     *
     * @since  1.2.0
     * @deprecated 2.0.0
     *
     * @param  WC_Data  $obj
     * @param  string   $key
     * @return mixed
     */
    public static function get_meta($obj, $key)
    {
    }
    /**
     * Back-compat wrapper for 'wc_get_formatted_variation'.
     *
     * @since  1.2.0
     * @deprecated 2.0.0
     *
     * @param  WC_Product_Variation  $variation
     * @param  bool               $flat
     * @return string
     */
    public static function wc_get_formatted_variation($variation, $flat = \false)
    {
    }
    /**
     * Get prefix for use with wp_cache_set. Allows all cache in a group to be invalidated at once..
     *
     * @since  1.2.0
     * @deprecated 2.0.0
     *
     * @param  string  $group
     * @return string
     */
    public static function wc_cache_helper_get_cache_prefix($group)
    {
    }
    /**
     * Increment group cache prefix (invalidates cache).
     *
     * @since  1.2.0
     * @deprecated 2.0.0
     *
     * @param  string  $group
     */
    public static function wc_cache_helper_incr_cache_prefix($group)
    {
    }
    /**
     * Returns the price including or excluding tax, based on the 'woocommerce_tax_display_shop' setting.
     *
     * @since  1.2.0
     * @deprecated 2.0.0
     *
     * @param  WC_Product $product
     * @param  array $args
     */
    public static function wc_get_price_to_display($product, $args = array())
    {
    }
    /**
     * Get price including tax.
     *
     * @since  1.2.0
     * @deprecated 2.0.0
     *
     * @param  WC_Product $product
     * @param  array $args
     */
    public static function wc_get_price_including_tax($product, $args = array())
    {
    }
    /**
     * Get price excluding tax.
     *
     * @since  1.2.0
     * @deprecated 2.0.0
     *
     * @param  WC_Product $product
     * @param  array $args
     */
    public static function wc_get_price_excluding_tax($product, $args = array())
    {
    }
    /**
     * Backwards compatible logging using 'WC_Logger' class.
     *
     * @since  1.2.0
     * @deprecated 2.0.0
     *
     * @param  string  $message
     * @param  string  $level
     * @param  string  $context
     */
    public static function log($message, $level, $context)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is 2.7 or greater.
     *
     * @since  1.2.0
     * @deprecated 1.2.5
     * @see WC_MNM_Core_Compatibility::is_wc_version_gte()
     *
     * @return bool
     */
    public static function is_wc_version_gte_2_7()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is 2.6 or greater.
     *
     * @since  1.2.0
     * @deprecated 1.2.5
     * @see WC_MNM_Core_Compatibility::is_wc_version_gte()
     *
     * @return bool
     */
    public static function is_wc_version_gte_2_6()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is 2.5 or greater.
     *
     * @since  1.2.0
     * @deprecated 1.2.5
     * @see WC_MNM_Core_Compatibility::is_wc_version_gte()
     *
     * @return bool
     */
    public static function is_wc_version_gte_2_5()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is 2.4 or greater.
     *
     * @since  1.2.0
     * @deprecated 1.2.5
     * @see WC_MNM_Core_Compatibility::is_wc_version_gte()
     *
     * @return bool
     */
    public static function is_wc_version_gte_2_4()
    {
    }
    /**
     * Get rounding precision.
     * Needed to avoid an infinite loop when filtering.
     *
     * @since  1.4.0
     * @deprecated 2.0.0
     *
     * @return int
     */
    public static function wc_get_rounding_precision($price_decimals = \false)
    {
    }
}
class WC_MNM_APFS_Pricing_Compatibility
{
    /**
     * Hooks for MNM/APFS Per-Item Pricing Compat.
     */
    public static function add_hooks()
    {
    }
    /**
     * Per-item pricing container base prices can be empty strings, which throws notice in Subscriptions.
     */
    public static function add_price_filters($context = '')
    {
    }
    /**
     * Per-item pricing container base prices can be empty strings, which throws notice in Subscriptions.
     */
    public static function remove_price_filters($context = '')
    {
    }
    /**
     * Filter get_price() calls to take scheme price overrides into account.
     *
     * @param  double      $price
     * @param  WC_Product  $product
     * @return double
     */
    public static function filter_price($price, $product)
    {
    }
    /**
     * Remove APFS price filters before retrieving the bundled item Regular Price.
     *
     * @since 2.3.1
     */
    public static function remove_regular_price_filters()
    {
    }
    /**
     * Re-add APFS price filters after retrieving the bundled item Regular Price.
     *
     * @since 2.3.1
     */
    public static function add_regular_price_filters()
    {
    }
    /**
     * Sub schemes attached on a Product Bundle should not work if the bundle contains a non-convertible product, such as a "legacy" subscription.
     *
     * WCS_ATT_Integration_PB_CP::bundle_contains_subscription() is private and can't be used here, so duplicate it's logic.
     *
     * @param  array       $schemes
     * @param  WC_Product  $product
     * @return array
     */
    public static function get_product_bundle_schemes($schemes, $product)
    {
    }
    /**
     * Register our custom script.
     *
     * @return void
     */
    public static function enqueue_scripts()
    {
    }
    /**
     * Load our custom script on Mix and Match products.
     *
     * @return void
     */
    public static function load_script()
    {
    }
    /**
     * Modify container price data attributes to always show the total updating for schemes.
     *
     * @param  array       $data
     * @return array
     */
    public static function container_price_data($data)
    {
    }
    /**
     * Dynamically update one-time price.
     *
     * @param  bool $has_price
     * @param  WC_Product       $product
     * @return bool
     */
    public static function update_one_time_price($has_price, $product)
    {
    }
    /**
     * Change price strings.
     *
     * @param  bool $discount_format
     * @param  WC_Product       $product
     * @return bool
     */
    public static function html_discount_format($discount_format, $product)
    {
    }
}
class WC_MNM_APFS_Switching_Compatibility
{
    /**
     * Hooks for MNM support.
     */
    public static function add_hooks()
    {
    }
    /**
     * Add containers to subscriptions using 'WC_Mix_and_Match_Order::add_container_to_order'.
     *
     * @param  WC_Subscription  $subscription
     * @param  array            $cart_item
     * @param  WC_Cart          $recurring_cart
     */
    public static function add_container_to_order($subscription, $cart_item, $recurring_cart)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Hooks - Application
    |--------------------------------------------------------------------------
    */
    /**
     * Hide child cart item subscription options.
     *
     * @param  boolean  $show
     * @param  array    $cart_item
     * @param  string   $cart_item_key
     * @return boolean
     */
    public static function hide_child_item_options($show, $cart_item, $cart_item_key)
    {
    }
    /**
     * Child cart items inherit the active subscription scheme id of their parent.
     *
     * @param  string  $scheme_key
     * @param  array   $cart_item
     * @param  array   $cart_level_schemes
     * @return string
     */
    public static function set_child_item_subscription_scheme($scheme_key, $cart_item, $cart_level_schemes)
    {
    }
    /**
     * Child cart items inherit the subscription schemes of their parent, with some modifications.
     *
     * @param  WC_Cart  $cart
     * @return void
     */
    public static function apply_child_item_subscription_schemes($cart)
    {
    }
    /**
     * Child cart items inherit the subscription schemes of their parent, with some modifications (first add).
     *
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return array
     */
    public static function set_child_item_schemes($cart_item, $cart_item_key)
    {
    }
    /**
     * Pass subscription details placeholder to JS script.
     *
     * @since  3.0.0
     *
     * @param  array           $data
     * @param  WCS_ATT_Scheme  $subscription_scheme
     * @param  WC_Product      $product
     * @return array
     */
    public static function container_subscription_option_data($data, $subscription_scheme, $product)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Hooks - Cart Templates
    |--------------------------------------------------------------------------
    */
    /**
     * Add subscription details next to subtotal of per-item-priced container container cart items.
     *
     * @param  string  $subtotal
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return string
     */
    public static function filter_container_item_subtotal($subtotal, $cart_item, $cart_item_key)
    {
    }
    /**
     * Modify container cart item subscription options to include child item prices.
     *
     * @param  array   $options
     * @param  array   $subscription_schemes
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return boolean
     */
    public static function container_item_options($options, $subscription_schemes, $cart_item, $cart_item_key)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Hooks - Subscriptions View
    |--------------------------------------------------------------------------
    */
    /**
     * Change the switch button text for Mix and Match subscriptions.
     *
     * @since 2.1.0
     *
     * @param string $switch_link_text The switch link html.
     * @param int $item_id The order item ID of a subscription line item
     * @param array $item An order line item
     * @param object $subscription A WC_Subscription object
     * @return string
     */
    public static function switch_link_text($switch_link_text, $item_id, $item, $subscription)
    {
    }
    /**
     * Change the switch button text for Mix and Match subscriptions.
     *
     * @since 2.0.9
     *
     * @param string $switch_link The switch link html.
     * @param int $item_id The order item ID of a subscription line item
     * @param array $item An order line item
     * @param object $subscription A WC_Subscription object
     * @return string
     */
    public static function switch_link($switch_link, $item_id, $item, $subscription)
    {
    }
    /**
     * Don't count container child items and hidden container container/child items.
     *
     * @param  boolean          $can
     * @param  WC_Subscription  $subscription
     * @return boolean
     */
    public static function can_remove_subscription_items($can, $subscription)
    {
    }
    /**
     * Prevent direct removal of child subscription items from 'My Account > Subscriptions'.
     * Does ~nothing~ to prevent removal at an application level, e.g. via a REST API call.
     *
     * @param  boolean          $can
     * @param  WC_Order_Item    $item
     * @param  WC_Subscription  $subscription
     * @return boolean
     */
    public static function can_remove_child_subscription_item($can, $item, $subscription)
    {
    }
    /**
     * Handle parent subscription line item removals under 'My Account > Subscriptions'.
     *
     * @param  WC_Order_Item  $item
     * @param  WC_Order       $subscription
     * @return void
     */
    public static function user_removed_parent_subscription_item($item, $subscription)
    {
    }
    /**
     * Handle parent subscription line item re-additions under 'My Account > Subscriptions'.
     *
     * @param  WC_Order_Item  $item
     * @param  WC_Order       $subscription
     * @return void
     */
    public static function user_readded_parent_subscription_item($item, $subscription)
    {
    }
    /**
     * Add extra 'Allow Switching' options for content switching of Mix and Match containers
     *
     * @See: 'WCS_ATT_Admin::allow_switching_options'.
     *
     * @param  array  $data
     * @return array
     */
    public static function add_container_switching_options($data)
    {
    }
    /**
     * Add Switch settings to the Subscription's settings page.
     *
     * @since 2.0.9
     */
    public static function add_settings($settings)
    {
    }
    /**
     * Prevent direct switching of child subscription items from 'My Account > Subscriptions'.
     * Allow content switching for parent items only, which means that a matching scheme must exist.
     *
     * @param  boolean          $can
     * @param  WC_Order_Item    $item
     * @param  WC_Subscription  $subscription
     * @return boolean
     */
    public static function can_switch_container_type_item($can, $item, $subscription)
    {
    }
    /**
     * Add content switching support.
     *
     * @param  bool        $is_feature_supported
     * @param  WC_Product  $product
     * @param  string      $feature
     * @param  array       $args
     * @return bool
     */
    public static function container_supports_switching($is_feature_supported, $product, $feature, $args)
    {
    }
    /**
     * Make WCS see containers with a switched content as non-identical ones.
     *
     * @param  boolean        $is_identical
     * @param  int            $product_id
     * @param  int            $quantity
     * @param  int            $variation_id
     * @param  WC_Order       $subscription
     * @param  WC_Order_Item  $item
     * @return boolean
     */
    public static function container_is_identical($is_identical, $product_id, $quantity, $variation_id, $subscription, $item)
    {
    }
    /**
     * Retrieve subscription switch-related parameters of child items from the parent cart item data array.
     *
     * @param  array  $child_item_cart_data
     * @param  array  $cart_item_data
     * @return array
     */
    public static function child_item_switch_cart_data($child_item_cart_data, $cart_item_data)
    {
    }
    /**
     * Restore container configuration when switching.
     *
     * @param  string           $url
     * @param  int              $item_id
     * @param  WC_Order_Item    $item
     * @param  WC_Subscription  $subscription
     * @return string
     */
    public static function container_type_switch_configuration_url($url, $item_id, $item, $subscription)
    {
    }
    /**
     * Changes the order item status of old child items when the new parent is added.
     *
     * @param  WC_Order         $order
     * @param  WC_Subscription  $subscription
     * @param  int              $adding_item_id
     * @param  int              $removing_item_id
     * @return void
     */
    public static function remove_switched_subscription_child_items($order, $subscription, $adding_item_id, $removing_item_id)
    {
    }
    /**
     * Disallow plan switching for mix and match. Only content switching permitted!
     *
     * @param  boolean     $is_forced
     * @param  WC_Product  $product
     * @return boolean
     */
    public static function force_switched_container_type_subscription($is_forced, $product)
    {
    }
    /**
     * Container schemes should be limited to the one matching the subscription while the product is being switched.
     * This is the meaning of 'content switching': It's not permitted to apply plan changes, only content changes are allowed.
     *
     * @param  array       $schemes
     * @param  WC_Product  $product
     * @return array
     */
    public static function limit_switched_container_type_schemes($schemes, $product)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Hooks - Add to Subscription
    |--------------------------------------------------------------------------
    */
    /**
     * Modify the validation context when adding a container product to an order.
     *
     * @param  int  $product_id
     */
    public static function set_container_type_validation_context($product_id)
    {
    }
    /**
     * Modify the validation context when adding a container product to an order.
     *
     * @param  int  $product_id
     */
    public static function reset_container_type_validation_context($product_id)
    {
    }
    /**
     * Sets the validation context to 'add-to-order'.
     *
     * @param  WC_Product_Mix_and_Match  $container
     */
    public static function set_add_to_order_validation_context($container)
    {
    }
    /**
     * Validates container stock in 'add-to-order' context.
     *
     * @param  boolean                  $is_valid
     * @param  WC_Product_Mix_and_Match $container
     * @param  WC_MNM_Stock_Manager     $mnm_stock
     * @param  array                    $configuration
     * @param  boolean  $is_valid
     */
    public static function validate_container_type_stock($is_valid, $container, $stock_manager, $configuration)
    {
    }
    /**
     * Don't attempt to increment the quantity of container subscription items when adding to an existing subscription.
     * Also omit child items -- they'll be added by their parent.
     *
     * @param  false|WC_Order_Item_Product  $found_order_item
     * @param  array                        $matching_cart_item
     * @param  WC_Cart                      $recurring_cart
     * @param  WC_Subscription              $subscription
     * @return false|WC_Order_Item_Product
     */
    public static function found_container_in_subscription($found_order_item, $matching_cart_item, $recurring_cart, $subscription)
    {
    }
    /**
     * Return 'add_container_to_order' as a callback for adding mix and match containers to subscriptions.
     * Do not add child items as they'll be added by their parent.
     *
     * @param  array    $callback
     * @param  array    $cart_item
     * @param  WC_Cart  $recurring_cart
     */
    public static function add_container_to_subscription_callback($callback, $cart_item, $recurring_cart)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Hooks - Container
    |--------------------------------------------------------------------------
    */
    /**
     * Set default scheme on container product.
     *
     * @param  WC_Product_Mix_and_Match $container
     */
    public static function set_container_default_scheme($container)
    {
    }
    /**
     * When loading child item's product, always set the active container scheme on the child product.
     *
     * @Note - This is done differently from WCS_ATT_Integration_PB_CP::set_bundled_items_scheme() because in MNM 2.0, $child_item->get_product() returns a cached value of the product object and $child-item->product is private.
     * This make the product object not directly manipulatable on the `wc_mnm_get_child_items` filter the way it is on `woocommerce_bundled_items` for Product Bundles.
     * So we need to manipulate the product object when it initialized, on the `wc_mnm_child_item_product` filter. see WC_MNM_Child_Item::get_product()
     *
     * @param  WC_Product $child_product
     * @param  WC_MNM_Child_Item
     * @return WC_Product
     */
    public static function set_child_item_scheme($child_product, $child_item)
    {
    }
    /**
     * Add scheme data to runtime price cache hashes.
     *
     * @param  array              $hash
     * @param  WC_Product_Mix_and_Match  $container
     * @return array
     */
    public static function container_prices_hash($hash, $container)
    {
    }
    /**
     * Calculate correct switch type for containers and force crossgrade to disable proration calculations. Remember to cache the initial value.
     *
     * @param  string           $switch_type
     * @param  WC_Subscription  $subscription
     * @param  array            $cart_item
     * @return string
     */
    public static function force_switch_type($switch_type, $subscription, $cart_item)
    {
    }
    /**
     * Restore initial switch type if applicable.
     *
     * @since 2.4.0
     *
     * @param  WC_Cart  $cart
     * @return void
     */
    public static function restore_switch_type($cart)
    {
    }
    /**
     * Pass parent scheme meta to children.
     *
     * @since 2.3.0
     *
     * Use this filter to modify the posted configuration.
     *
     * @param  $order_item_args array
     * @param  $product    WC_Product_Mix_and_Match
     * @param  $order_item WC_Order_Item
     * @param  $order      WC_Order
     */
    public static function child_item_scheme_meta($order_item_args, $product, $order_item, $order)
    {
    }
}
/**
 * WooCommerce Blocks Compatibility.
 *
 * @version 2.0.0
 */
class WC_MNM_Blocks_Compatibility
{
    /**
     * Initialize.
     */
    public static function init()
    {
    }
}
/**
 * WC_MNM_COCART_Compatibility Class.
 *
 * Adds compatibility with CoCart.
 */
class WC_MNM_COCART_Compatibility
{
    public static function init()
    {
    }
    // END __construct()
    /**
     * Overrides the handler used for adding a Mix and Match product.
     *
     * @param  string     $handler The name of the original handler to use when adding product to the cart.
     * @param  WC_Product $product Product object.
     * @return string     $handler The name of the new handler to use when adding product to the cart.
     */
    public static function add_to_cart_handler($handler, $product)
    {
    }
    // END add_to_cart_handler()
    /**
     * Validates the product before being added to the cart.
     *
     * @throws CoCart_Data_Exception Exception if invalid data is detected.
     *
     * @since  1.10.0 Introduced.
     * @since  2.0.0  No longer requesting `wc_get_product()` twice. Using `$product_type` to identify product type.
     * @param  bool   $passed_validation - The current status of validation.
     * @param  int    $product_id        - Contains the ID of the product.
     * @param  float  $quantity          - Contains the quantity of the item.
     * @param  int    $variation_id      - Contains the ID of the variation.
     * @param  array  $variation         - Attribute values.
     * @param  array  $cart_item_data    - Extra cart item data we want to pass into the item.
     * @param  string $product_type      - The product type.
     * @return bool
     */
    public static function add_to_cart_validation($passed_validation, $product_id, $quantity, $variation_id = '', $variation = array(), $cart_item_data = array(), $product_type = '')
    {
    }
    // END add_to_cart_validation()
    /**
     * Reconfigures the MNM configuration so cart item data is still valid for cart.
     *
     * @param  array $cart_item_data
     * @return array $cart_item_data
     */
    public static function reconfigure_mnm_configuration($cart_item_data)
    {
    }
    // END reconfigure_mnm_configuration()
    /**
     * Validates add to cart for MNM containers.
     *
     * Basically ensures that stock for all child products exists before attempting to add them to cart.
     *
     * @deprecated 2.2.0
     *
     * @throws CoCart_Data_Exception Exception if invalid data is detected.
     *
     * @since  1.10.0  Introduced.
     * @since  2.0.0   Now using `CoCart_Data_Exception` for error handling.
     * @param  mixed   $container int|WC_Product_Mix_and_Match
     * @param  int     $container_quantity
     * @param  array   $configuration
     * @return boolean
     */
    public static function validate_container_configuration($container, $container_quantity, $configuration)
    {
    }
    // END validate_container_configuration()
    /**
     * Validates the item when being updated.
     *
     * @throws CoCart_Data_Exception Exception if invalid data is detected.
     *
     * @param  bool   $passed_validation - The current status of validation.
     * @param  string $cart_item_key     - The item in the cart we are updating.
     * @param  array  $values            - Product data of item in cart.
     * @param  float  $product_quantity  - The quantity of the item we want.
     * @return bool
     */
    public static function update_cart_validation($passed_validation, $cart_item_key, $values, $product_quantity)
    {
    }
    // END update_cart_validation()
    /**
     * Returns the item quantity based on MNM settings.
     *
     * @param  array  $cart_contents
     * @param  int    $item_key
     * @param  array  $cart_item
     * @return array  $cart_contents
     */
    public static function cart_item_quantity($cart_contents, $item_key, $cart_item)
    {
    }
    // END cart_item_quantity()
    /**
     * Returns the item quantity based on MNM settings.
     *
     * @since  2.0.0 Introduced
     * @param  int   $quantity
     * @param  int   $item_key
     * @param  array $cart_item
     * @return array $quantity
     */
    public static function cart_item_quantity_v2($quantity, $item_key, $cart_item)
    {
    }
    // END cart_item_quantity()
    /**
     * Gets the cart item child price.
     *
     * @since  2.0.0 Introduced
     * @param  int|string $price
     * @param  array      $cart_item
     * @param  int        $item_key
     * @return int|string $price
     */
    public static function get_cart_item_price($price, $cart_item, $item_key)
    {
    }
    // END get_cart_item_price()
    /**
     * Returns the item price based on MNM settings.
     *
     * @param  array $cart_contents
     * @param  int   $item_key
     * @param  array $cart_item
     * @return array $cart_contents
     */
    public static function cart_item_price($cart_contents, $item_key, $cart_item)
    {
    }
    // END cart_item_price()
    /**
     * Returns the item price based on MNM settings.
     *
     * @since  2.0.0 Introduced
     * @param  string $price
     * @param  array  $cart_item
     * @param  int    $item_key
     * @return string $price
     */
    public static function cart_item_price_v2($price, $cart_item, $item_key)
    {
    }
    // END cart_item_price_v2()
    /**
     * Gets the cart item child subtotal.
     *
     * @since  2.0.0 Introduced
     * @param  int|string $subtotal
     * @param  array      $cart_item
     * @param  int        $item_key
     * @return int|string $subtotal
     */
    public static function get_cart_item_subtotal($subtotal, $cart_item, $item_key)
    {
    }
    // END get_cart_item_subtotal()
    /**
     * Returns the item subtotal based on MNM configuration.
     *
     * @param  array $cart_contents
     * @param  int   $item_key
     * @param  array $cart_item
     * @return array $cart_contents
     */
    public static function cart_item_subtotal($cart_contents, $item_key, $cart_item)
    {
    }
    // END cart_item_subtotal()
    /**
     * Returns the item subtotal based on MNM configuration.
     *
     * @since  2.0.0 Introduced
     * @param  array  $subtotal
     * @param  int    $item_key
     * @param  array  $cart_item
     * @return string $subtotal
     */
    public static function cart_item_subtotal_v2($subtotal, $item_key, $cart_item)
    {
    }
    // END cart_item_subtotal_v2()
    /**
     * Gets the Mix and Match Product schema for the cart.
     *
     * @since  2.0.0 Introduced
     * @return array
     */
    public static function get_additional_cart_schema()
    {
    }
    // END get_additional_cart_schema()
    /**
     * Adds Mix and Match Product schema to the cart.
     *
     * @param  array $schema Before schema is altered.
     * @return array $schema After schema is altered.
     */
    public static function add_additional_cart_schema($schema)
    {
    }
    // END add_additional_cart_schema()
    /**
     * Adds Mix and Match Product schema to the cart.
     *
     * @param  array $schema Before schema is altered.
     * @return array $schema After schema is altered.
     */
    public static function add_additional_cart_schema_v2($schema)
    {
    }
    // END add_additional_cart_schema_v2()
    /**
     * Returns the REST URL for adding product to the cart.
     *
     * @param  string     $rest_url Default REST URL.
     * @param  WC_Product $product  Product Object.
     * @return string     $rest_url New REST URL.
     */
    public static function add_to_cart_rest_url($rest_url, $product)
    {
    }
    // END add_to_cart_rest_url()
    /**
     * Add Mix and Match Product data to products that
     * are a mix and match product only.
     *
     * @param object     $response
     * @param WC_Product $product Product object.
     */
    public static function add_mnm_product_data($response, $product)
    {
    }
    // add_mnm_product_data()
    /**
     * Add Mix and Match Product data to products that
     * are a mix and match product only.
     *
     * @param object     $response
     * @param WC_Product $product Product object.
     */
    public static function add_mnm_product_data_v2($response, $product)
    {
    }
    // add_mnm_product_data_v2()
    /**
     * Returns Mix and Match Product data.
     *
     * @param  WC_Product $product  Returns product details of the parent product.
     * @param  array      $products List of available products applied to the container.
     * @return array
     */
    public static function mnm_data($product, $products)
    {
    }
    // END mnm_data()
    /**
     * Returns the price range for the Mix and Match Product.
     *
     * @param  array      $price   Original price range if any.
     * @param  WC_Product $product Product object.
     * @return array      $price   Price range returned.
     */
    public static function price_range($price, $product)
    {
    }
    // END price_range()
    /**
     * Adds Mix and Match Product schema to Products.
     *
     * @param  array $schema Before schema is altered.
     * @return array $schema After schema is altered.
     */
    public static function add_additional_fields_schema($schema)
    {
    }
    // END add_additional_fields_schema()
}
/**
 * WC_MNM_COG_Compatibility Class.
 *
 * Adds compatibility with WooCommerce Cost of Goods.
 */
class WC_MNM_COG_Compatibility
{
    public static function init()
    {
    }
    /**
     * Cost of goods compatibility: Zero order item cost for child products that belong to statically priced bundles.
     *
     * @param  double    $cost
     * @param  array     $item
     * @param  WC_Order  $order
     * @return double
     */
    public static function cost_of_goods_set_order_item_bundled_item_cost($cost, $item, $order)
    {
    }
}
/**
 * Min/Max Quantities Compatibility.
 *
 * @version  2.0.7
 */
class WC_MNM_Min_Max_Compatibility
{
    /**
     * The child item object whose qty input is being filtered.
     *
     * @var WC_MNM_Child_Item
     */
    public static $child_item = \false;
    /**
     * Unfiltered quantity input data used at restoration time.
     *
     * @var array
     */
    public static $unfiltered_args = \false;
    /**
     * Initilize hooks.
     */
    public static function init()
    {
    }
    /**
     * Adds the MnM per-item shipping option.
     *
     * @param int $post_id
     * @param  WC_Product_Mix_and_Match  $mnm_product_object
     * @since  1.6.1
     */
    public static function min_max_options($post_id, $mnm_product_object)
    {
    }
    /**
     * Save meta data
     *
     * @param  WC_Product  $product
     * @param  WC_Product_Mix_and_Match  $mnm_product_object
     * @since  1.6.1
     */
    public static function process_mnm_min_max_data($product)
    {
    }
    /**
     * Validate child items with min/max quantities.
     * By default, Min/Max will catch the invalid item in the cart, but this will prevent the whole container from being added with an invalid configuration.
     *
     * @param bool $is_valid
     * @param WC_Product_Mix_and_Match $container  of parent container.
     * @param WC_MNM_Child_Item $child_item of child item.
     * @param int $item_quantity Quantity of child item.
     * @param int $container_quantity Quantity of parent container.
     * @since 1.6.1
     */
    public static function min_max_item_validation($is_valid, $container, $child_item, $item_quantity, $container_quantity)
    {
    }
    /**
     * Set global $child_item variable.
     *
     * @param  WC_MNM_Child_Item $child_item of child item.
     * @param  WC_Product_Mix_and_Match $container
     * @return void
     */
    public static function restore_quantities_set($child_item, $container)
    {
    }
    /**
     * Unset global $child_item variable.
     *
     * @param  WC_Product  $child_item
     * @return void
     */
    public static function restore_quantities_unset($child_item)
    {
    }
    /**
     * Save unmodified quantity args.
     *
     * @param  array   $data
     * @param  object  $product
     * @return array
     */
    public static function save_quantity_input_args($data, $product)
    {
    }
    /**
     * Restore min/max child item quantities to the values they had before min/max interference.
     *
     * @param  array   $data
     * @param  object  $product
     * @return array
     */
    public static function restore_quantity_input_args($data, $product)
    {
    }
    /**
     * Restore allowed min/max quantity for child items to empty, so min/max cart validation rules do not apply.
     *
     * @param  string  $is_ignored
     * @param  string  $checking_id
     * @param  string  $cart_item_key
     * @param  array   $cart_item
     * @return string
     */
    public static function ignore_child_items($is_ignored, $checking_id, $cart_item_key, $cart_item)
    {
    }
    /**
     * Restore allowed min/max quantity for child items to empty, so min/max cart validation rules do not apply.
     *
     * @param  string  $qty_meta
     * @param  string  $checking_id
     * @param  string  $cart_item_key
     * @param  array   $cart_item
     * @return array
     */
    public static function restore_allowed_quantity($qty_meta, $checking_id, $cart_item_key, $cart_item)
    {
    }
    /**
     * Add child item and input cart quantity to the product.
     *
     * @param  WC_Product  $product
     * @param  array       $cart_item
     * @param  string      $cart_item_key
     * @return WC_Product
     */
    public static function add_child_item_to_product($product, $cart_item, $cart_item_key)
    {
    }
    /**
     * Validate child items with min/max quantities.
     * By default, Min/Max will catch the invalid item in the cart, but this will prevent the whole container from being added with an invalid configuration.
     *
     * @param obj $container WC_Product_Mix_and_Match of parent container.
     * @return bool
     * @since  1.6.1
     */
    public static function contents_ignores_rules($container)
    {
    }
    /**
     * Apply min/max/step to all child products.
     * Unfortunately, applying to the products means ultimately we check the meta twice (here and then again by MMQ in the woocommerce_quantity_input_args filter)
     * But this ensure we validate properly on add to cart instead of only relying on the input limits.
     *
     * @since  2.0.7
     * @param  string  $qty
     * @param  WC_MNM_Child_Item  $child_item
     * @param obj $container WC_Product_Mix_and_Match of parent container.
     * @return string
     */
    public static function child_item_quantity_limits($qty, $child_item, $container_product)
    {
    }
    /**
     * If this is a MNM child item, don't use Group as for our minimum or initial value.
     *
     * @since 2.0.7
     *
     * @param boolean $use_group Whether to use group quantity as minimum. Default true.
     * @param object  $product   Product object.
     * @param array   $data      Available product data.
     * @return boolean
     */
    public static function skip_group_for_child_items($use_group, $product, $data)
    {
    }
    /*
    	-----------------------------------------------------------------*/
    /*
    		Deprecated    .                                                */
    /*-----------------------------------------------------------------*/
    /**
     * Apply min/max/step to variations.
     *
     * @deprecated 2.0.7
     */
    public static function variation_inputs($qty, $child_item, $container_product)
    {
    }
}
/**
 * WC_MNM_OPC_Compatibility Class.
 *
 * Adds compatibility with WooCommerce One Page Checkout.
 */
class WC_MNM_OPC_Compatibility
{
    public static function init()
    {
    }
    /**
     * OPC Single-product mix and match add-to-cart template.
     *
     * @param  int  $opc_post_id
     * @return void
     */
    public static function opc_single_add_to_cart_mnm($opc_post_id)
    {
    }
    /**
     * OPC Single-product mix and match type "after_summary" add-to-cart template.
     *
     * @param  int  $opc_post_id
     * @return void
     */
    public static function opc_add_to_cart_after_summary()
    {
    }
    /**
     * Prevent OPC from managing child items.
     *
     * @param  bool   $allow
     * @param  array  $cart_item
     * @param  string $cart_item_key
     * @param  string $opc_id
     * @return bool
     */
    public static function opc_disallow_bundled_cart_item_modification($allow, $cart_item, $cart_item_key, $opc_id)
    {
    }
}
/**
 * The Main WC_NYP_PayPal_Payments_Compatibility class
 **/
class WC_MNM_PayPal_Payments_Compatibility
{
    /**
     * WC_MNM_PayPal_Payments_Compatibility Constructor
     *
     * @since 3.0.0
     */
    public static function init()
    {
    }
    /**
     * Hide PayPal's payment request buttons
     *
     * @param   bool $supports
     * @param   obj WC_Product
     * @return  bool
     */
    public static function hide_request_buttons($supports, $product)
    {
    }
}
/**
 * Print Invoices & Packing Lists Integration.
 *
 * @version  1.7.0
 */
class WC_MNM_PIP_Compatibility
{
    /**
     * The document being processed.
     *
     * @var WC_PIP_Document
     */
    public static $document;
    /**
     * Add hooks.
     */
    public static function init()
    {
    }
    /**
     * Rendering a PIP document?
     *
     * @since  1.4.0
     *
     * @param  string  $type
     * @return boolean
     */
    public static function rendering_document($type = '')
    {
    }
    /**
     * Fires off before rendering the PIP document body.
     *
     * @since  1.4.0
     *
     * @param  string           $type
     * @param  string           $action
     * @param  WC_PIP_Document  $document
     * @param  WC_Order         $order
     * @return void
     */
    public static function before_body($type, $action, $document, $order)
    {
    }
    /**
     * Fires off after rendering the PIP document body.
     *
     * @since  1.4.0
     *
     * @param  string           $type
     * @param  string           $action
     * @param  WC_PIP_Document  $document
     * @param  WC_Order         $order
     * @return void
     */
    public static function after_body($type, $action, $document, $order)
    {
    }
    /**
     * Modify the returned order items and products to return the correct items/weights/values for shipping.
     *
     * @since  1.4.0
     */
    public static function add_filters()
    {
    }
    /**
     * Remove filters above.
     *
     * @since  1.4.0
     */
    public static function remove_filters()
    {
    }
    /**
     * Recounts items excluding bundle containers.
     *
     * @param  int  $count
     * @return int
     */
    public static function items_count($count)
    {
    }
    /**
     * Temporarily add order item data to array.
     *
     * @param  array       $item_data
     * @param  array       $item
     * @param  WC_Product  $product
     * @param  string      $order_id
     * @param  string      $type
     * @return array
     */
    public static function row_item_data($item_data, $item, $product, $order_id, $type)
    {
    }
    /**
     * Re-sort PIP table rows so that child items are always below their container.
     *
     * @param  array   $table_rows
     * @param  array   $items
     * @param  string  $order_id
     * @param  string  $type
     * @return array
     */
    public static function table_rows($table_rows, $items, $order_id, $type, $pip_document = \null)
    {
    }
    /**
     * Add 'mnm-child-item' class to pip row classes.
     *
     * @param  array       $classes
     * @param  WC_Product  $product
     * @param  array       $item
     * @param  string      $type
     * @return array
     */
    public static function bundled_item_class($classes, $product, $item, $type)
    {
    }
    /**
     * Add "assembled" item meta to pick-lists.
     *
     * @since  1.4.0
     *
     * @param  int            $item_id
     * @param  WC_Order_Item  $item
     */
    public static function add_assembled_order_item_meta($item_id, $item)
    {
    }
    /**
     * Ensure bundle container line items are always displayed, otherwise we will not be able to collect their children in 'table_rows'.
     *
     * @param  boolean     $hide
     * @param  WC_Product  $product
     * @param  array       $order_item
     * @param  WC_Order    $order
     * @return boolean
     */
    public static function hide_item($hide, $product, $order_item, $order)
    {
    }
    /**
     * Prevent child order items from being sorted/categorized.
     *
     * @param  boolean   $uncategorize
     * @param  array     $order_item
     * @param  WC_Order  $order
     * @return boolean
     */
    public static function group_bundled_items_as_uncategorized($uncategorize, $order_item, $order)
    {
    }
    /**
     * Add bundled item class CSS rule.
     *
     * @return  void
     */
    public static function add_styles()
    {
    }
}
/**
 * WC_MNM_PnR_Compatibility Class.
 *
 * Adds compatibility with WooCommerce Points and Rewards.
 */
class WC_MNM_PnR_Compatibility
{
    /*
     * Initialize.
     */
    public static function init()
    {
    }
    /**
     * Return zero points for child cart items if container item has product- or category-level points or child item is not priced individually.
     *
     * @param  int     $points
     * @param  string  $cart_item_key
     * @param  array   $cart_item_values
     * @return int
     */
    public static function points_earned_for_bundled_cart_item($points, $cart_item_key, $cart_item_values)
    {
    }
    /**
     * Return zero points for child order items if container item has product- or category-level points or child item is not priced individually.
     *
     * @param  int        $points
     * @param  string     $item_key
     * @param  array      $item
     * @param  WC_Order   $order
     * @return int
     */
    public static function points_earned_for_bundled_order_item($points, $product, $item_key, $item, $order)
    {
    }
    /**
     * Points and Rewards single product message for MnM bundles.
     *
     * @param  string                    $message
     * @param  WC_Points_Rewards_Product $points_n_rewards
     * @return string
     */
    public static function points_rewards_mnm_message($message, $points_n_rewards)
    {
    }
    /**
     * Filter bundle price returned by 'get_price' to return the min/max bundle price.
     *
     * @param  mixed              $price
     * @param  WC_Product_Bundle  $product
     * @return mixed
     */
    public static function replace_price($price, $product)
    {
    }
}
/**
 * WC_MNM_PO_Compatibility Class.
 *
 * Adds compatibility with WooCommerce Pre-Orders.
 */
class WC_MNM_PO_Compatibility
{
    public static function init()
    {
    }
    /**
     * Remove child cart item meta "Available On" text.
     *
     * @param  array  $pre_order_meta
     * @param  array  $cart_item_data
     * @return array
     */
    public static function remove_bundled_pre_orders_cart_item_meta($pre_order_meta, $cart_item_data)
    {
    }
    /**
     * Remove child order item meta "Available On" text.
     *
     * @param  array    $pre_order_meta
     * @param  array    $order_item
     * @param  WC_Order $order
     * @return array
     */
    public static function remove_bundled_pre_orders_order_item_meta($pre_order_meta, $order_item, $order)
    {
    }
}
/**
 * The Main WC_MNM_Quick_View_Compatibility class
 **/
class WC_MNM_Quick_View_Compatibility
{
    /**
     * WC_MNM_Quick_View_Compatibility Constructor
     *
     * @since 2.0.0
     */
    public static function init()
    {
    }
    /**
     * Load scripts for use by QV on non-product pages.
     */
    public static function load_scripts()
    {
    }
    /**
     * Add filter on the form location prop
     */
    public static function attach_hooks()
    {
    }
    /**
     * Set form location prop to default in QV
     *
     * @param string $location
     * @return string
     */
    public static function filter_form_location($location)
    {
    }
}
/**
 * WC_MNM_Ship_Multiple_Compatibility Class.
 *
 * Adds compatibility with WooCommerce Multiple Shipping Addresses.
 */
class WC_MNM_Ship_Multiple_Compatibility
{
    public static function init()
    {
    }
    /**
     * Add a list of MNM config to the Multiple Shipping address' product title
     *
     * @param  string $title
     * @param  array  $item
     * @return string
     */
    public static function add_mnm_config($title, $item)
    {
    }
}
/**
 * WC_MNM_Shipstation_Compatibility Class.
 *
 * Adds compatibility with WooCommerce ShipStation.
 */
class WC_MNM_Shipstation_Compatibility
{
    public static function init()
    {
    }
    /**
     * Modify the returned order items and products to return the correct items/weights/values for shipping.
     */
    public static function add_filters()
    {
    }
}
/**
 * The Main WC_MNM_Stripe_Compatibility class
 **/
class WC_MNM_Stripe_Compatibility
{
    /**
     * WC_MNM_Stripe_Compatibility Constructor
     */
    public static function init()
    {
    }
    /**
     * Add support for MNM products.
     *
     * @param   array $types - The product types that can support payment request buttons.
     * @return  array
     */
    public static function supported_request_product_types($types)
    {
    }
    /**
     * Hide Stripe's instant pay buttons
     *
     * @param   bool $hide - true if hiding request buttons.
     * @param   obj WP_POST - Global WP post.
     * @return  bool
     */
    public static function hide_payment_request_on_product_page($hide, $post)
    {
    }
}
/**
 * The Main WC_MNM_WCPay_Compatibility class
 **/
class WC_MNM_WCPay_Compatibility
{
    /**
     * WC_MNM_WCPay_Compatibility Constructor
     */
    public static function init()
    {
    }
    /**
     * Hide payment request pay buttons
     *
     * @param   bool        $supported
     * @param   WC_Product  $product
     * @return  bool
     */
    public static function hide_request_buttons($supported, $product)
    {
    }
}
/**
 * WC_MNM_WL_Compatibility Class.
 *
 * Adds compatibility with WooCommerce Wishlists.
 */
class WC_MNM_WL_Compatibility
{
    public static function init()
    {
    }
    /**
     * Inserts bundle contents after main wishlist bundle item is displayed.
     *
     * @param  array    $item       Wishlist item
     * @param  array    $wishlist   Wishlist
     */
    public static function wishlist_after_list_item_name($item, $wishlist)
    {
    }
    /**
     * Modifies wishlist bundle item price - the precise sum cannot be displayed reliably unless the item is added to the cart.
     *
     * @param  double   $price      Item price
     * @param  array    $item       Wishlist item
     * @param  array    $wishlist   Wishlist
     * @return string   $price
     */
    public static function wishlist_list_item_price($price, $item, $wishlist)
    {
    }
}
/**
 * WC_MNM_Astra_Compatibility Class.
 */
class WC_MNM_Astra_Compatibility
{
    /**
     * Attach hooks and filters.
     */
    public static function init()
    {
    }
    /**
     * Add theme-specific classes to body.
     *
     * @param  array     $classes - All classes on the body.
     * @return array
     */
    public static function body_classes($classes)
    {
    }
    /**
     * Add theme-specific style rules to header.
     */
    public static function inline_styles()
    {
    }
    /**
     * Add theme-specific style rules to header.
     *
     * @since 2.4.5
     */
    public static function init_quick_view()
    {
    }
    /**
     * Add filter on the form location prop
     *
     * @since 2.4.5
     */
    public static function attach_hooks()
    {
    }
    /**
     * Set form location prop to default in QV
     *
     * @since 2.4.5
     *
     * @param string $location
     * @return string
     */
    public static function filter_form_location($location)
    {
    }
    /**
     * Force use of Astra plus/minus buttons
     *
     * @since 2.4.9
     *
     * @param string $value
     * @return string
     */
    public static function filter_plus_minus_buttons($value)
    {
    }
}
/**
 * WC_MNM_Avada_Compatibility Class.
 *
 * @version  2.0.0
 */
class WC_MNM_Avada_Compatibility
{
    /**
     * Attach hooks and filters.
     */
    public static function init()
    {
    }
    /**
     * Add theme-specific wrapper.
     *
     * @param obj WC_Product $child_product the child product
     * @param obj WC_Mix_and_Match $container_product the parent container
     */
    public static function entry_wrap_open($child_product, $container_product)
    {
    }
    /**
     * Add theme-specific wrapper.
     *
     * @param obj WC_Product $child_product the child product
     * @param obj WC_Mix_and_Match $container_product the parent container
     */
    public static function entry_wrap_close($child_product, $container_product)
    {
    }
    /**
     * Add theme-specific wrapper.
     *
     * @param obj WC_Product $child_product the child product
     * @param obj WC_Mix_and_Match $container_product the parent container
     */
    public static function entry_details_open($child_product, $container_product)
    {
    }
    /**
     * Add theme-specific wrapper.
     *
     * @param obj WC_Product $child_product the child product
     * @param obj WC_Mix_and_Match $container_product the parent container
     */
    public static function entry_details_close($child_product, $container_product)
    {
    }
    /**
     * Add theme-specific wrapper classes to loop.
     *
     * @param  array     $classes - All classes on the wrapper container.
     * @param obj $product WC_Mix_And_Match of parent product
     * @return array
     */
    public static function loop_classes($classes, $product)
    {
    }
    /**
     * Add theme-specific styles.
     */
    public static function inline_style()
    {
    }
}
/**
 * WC_MNM_Flatsome_Compatibility Class.
 */
class WC_MNM_Flatsome_Compatibility
{
    /**
     * Attach hooks and filters.
     */
    public static function init()
    {
    }
    /**
     * Add theme-specific wrapper classes to Mix and Match grid wrapper.
     *
     * @param  array     $classes - All classes on the wrapper container.
     * @param obj $product WC_Mix_And_Match of parent product
     * @return array
     */
    public static function loop_classes($classes, $product)
    {
    }
    /**
     * Add theme-specific wrapper classes to child items.
     *
     * @param  array     $classes - All classes on the wrapper container.
     * @param  obj $child_item WC_MNM_Child_Item
     * @param obj $product WC_Mix_And_Match of parent product
     * @return array
     */
    public static function child_item_classes($classes, $child_item, $product)
    {
    }
    /**
     * Add theme-specific wrapper.
     *
     * @param obj WC_Product $child_product the child product
     * @param obj WC_Mix_and_Match $container_product the parent container
     */
    public static function entry_wrap_open($child_product, $container_product)
    {
    }
    /**
     * Add theme-specific wrapper.
     *
     * @param obj WC_Product $child_product the child product
     * @param obj WC_Mix_and_Match $container_product the parent container
     */
    public static function entry_wrap_close($child_product, $container_product)
    {
    }
    /**
     * Add theme-specific wrapper.
     *
     * @param obj WC_Product $child_product the child product
     * @param obj WC_Mix_and_Match $container_product the parent container
     */
    public static function image_wrap_close($child_product, $container_product)
    {
    }
    /**
     * Add theme-specific wrapper.
     *
     * @since 2.3.0
     *
     * @param string
     * @param obj WC_MNM_Child_Item $child_item
     * @param obj WC_Mix_and_Match $container_product the parent container
     * @return string
     */
    public static function child_item_image_html($html, $child_item, $container_product)
    {
    }
    /**
     * Add theme-specific styles.
     */
    public static function inline_style()
    {
    }
}
/**
 * WC_MNM_OceanWP_Compatibility Class.
 *
 * @version  2.0.8
 */
class WC_MNM_OceanWP_Compatibility
{
    /**
     * Attach hooks and filters.
     */
    public static function init()
    {
    }
    /**
     * Add theme-specific wrapper classes to loop.
     *
     * @param  array     $classes - All classes on the wrapper container.
     * @param obj $product WC_Mix_And_Match of parent product
     * @return array
     */
    public static function loop_classes($classes, $product)
    {
    }
    /**
     * Add theme-specific styles.
     */
    public static function inline_style()
    {
    }
}
/**
 * WC_MNM_Storefront_Compatibility Class.
 */
class WC_MNM_Storefront_Compatibility
{
    /**
     * Attach hooks and filters.
     */
    public static function init()
    {
    }
    /**
     * Add theme-specific style rules to product post class.
     */
    public static function add_filters()
    {
    }
    /**
     * Remove theme-specific style rules.
     */
    public static function remove_filters()
    {
    }
    /**
     * Add theme-specific classes to post.
     *
     * @param array      $classes Array of CSS classes.
     * @return array
     */
    public static function post_class($classes)
    {
    }
}
/**
 * WC_MNM_Woodmart_Compatibility Class.
 */
class WC_MNM_Woodmart_Compatibility
{
    /**
     * Attach hooks and filters.
     */
    public static function init()
    {
    }
    /**
     * Add theme-specific wrapper classes to Mix and Match grid wrapper.
     *
     * @param  array     $classes - All classes on the wrapper container.
     * @param obj $product WC_Mix_And_Match of parent product
     * @return array
     */
    public static function loop_classes($classes, $product)
    {
    }
    /**
     * Add theme-specific wrapper classes to child items.
     *
     * @param  array     $classes - All classes on the wrapper container.
     * @param obj $product WC_Mix_And_Match of parent product
     * @return array
     */
    public static function child_item_classes($classes, $product)
    {
    }
}
/**
 * WC_MNM_X_Compatibility Class.
 */
class WC_MNM_X_Compatibility
{
    /**
     * Attach hooks and filters.
     */
    public static function init()
    {
    }
    /**
     * Add theme-specific wrapper.
     *
     * @param obj WC_Product $child_product the child product
     * @param obj WC_Mix_and_Match $container_product the parent container
     */
    public static function entry_wrap_open($child_product, $container_product)
    {
    }
    /**
     * Add theme-specific wrapper.
     *
     * @param obj WC_Product $child_product the child product
     * @param obj WC_Mix_and_Match $container_product the parent container
     */
    public static function entry_wrap_close($child_product, $container_product)
    {
    }
    /**
     * Add theme-specific styles.
     */
    public static function inline_style()
    {
    }
}
/**
 * WC_MNM_Customizer Class.
 *
 * Functions and filters for Mix and Match customizer options.
 */
class WC_MNM_Customizer
{
    /**
     * The single instance of the class.
     *
     * @var WC_MNM_Customizer
     */
    protected static $_instance = \null;
    /**
     * Main class instance. Ensures only one instance of class is loaded or can be loaded.
     *
     * @static
     * @return WC_MNM_Customizer
     */
    public static function get_instance()
    {
    }
    /**
     * __construct function.
     *
     * @return object
     */
    public function __construct()
    {
    }
    /**
     * Enqueues scripts for the live preview.
     */
    public function customize_preview()
    {
    }
    /**
     * Enqueue scripts.
     */
    public function customize_controls()
    {
    }
    /**
     * Add Mix and Match section to the WooCommerce panel.
     *
     * @param  bool     $wp_customize
     */
    public function add_section($wp_customize)
    {
    }
    /**
     * For FSE themes add a "Customize Mix and Match" link to the Appearance menu.
     *
     * FSE themes hide the "Customize" link in the Appearance menu. In Mix and Match we have several options that can currently
     * only be edited via the Customizer. For now, we are thus adding a new link for Mix and Match specific Customizer options.
     *
     * @since 2.0.0
     */
    public function add_fse_customize_link()
    {
    }
    /**
     * No per-product overrides allowed when viewing customizer
     *
     * @param bool
     *
     * @since 2.3.0
     */
    public function disable_override($override)
    {
    }
}
class KIA_Customizer_Radio_Image_Control extends \WP_Customize_Control
{
    public $type = 'kia-radio-image';
    /**
     * Enqueue scripts/styles.
     */
    public function enqueue()
    {
    }
    /**
     * Add custom JSON parameters to use in the JS template.
     */
    public function to_json()
    {
    }
    /**
     * Underscore JS template to handle the control's output.
     */
    public function content_template()
    {
    }
    /**
     * Sanitize the image radios.
     *
     * @param string $value
     * @param Wp_Customizer_Setting
     * @return string
     */
    public static function sanitize($value, $setting)
    {
    }
}
class KIA_Customizer_Range_Control extends \WP_Customize_Control
{
    public $type = 'kia-range';
    /**
     * Enqueue scripts/styles.
     */
    public function enqueue()
    {
    }
    /**
     * Add custom parameters to pass to the JS via JSON.
     */
    public function to_json()
    {
    }
    /**
     * Don't render the content via PHP.  This control is handled with a JS template.
     */
    public function render_content()
    {
    }
    /**
     * An Underscore (JS) template for this control's content.
     *
     * Class variables for this control class are available in the `data` JS object;
     * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
     *
     * @see    WP_Customize_Control::print_template()
     */
    protected function content_template()
    {
    }
}
class KIA_Customizer_Toggle_Control extends \WP_Customize_Control
{
    public $type = 'kia-toggle';
    /**
     * Enqueue scripts/styles.
     */
    public function enqueue()
    {
    }
    /**
     * Add custom parameters to pass to the JS via JSON.
     */
    public function to_json()
    {
    }
    /**
     * Don't render the content via PHP.  This control is handled with a JS template.
     */
    public function render_content()
    {
    }
    /**
     * An Underscore (JS) template for this control's content.
     *
     * Class variables for this control class are available in the `data` JS object;
     * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
     *
     * @see    WP_Customize_Control::print_template()
     */
    protected function content_template()
    {
    }
    /**
     * Sanitize the toggle.
     *
     * @param string $value
     * @param Wp_Customizer_Setting
     * @return bool
     */
    public static function sanitize($value, $setting)
    {
    }
}
/**
 * Class WC_MNM_Child_Item_Data_Store file.
 */
class WC_MNM_Child_Item_Data_Store
{
    /*
    |--------------------------------------------------------------------------
    | CRUD methods
    |--------------------------------------------------------------------------
    |
    | Methods which create, read, update and delete data from the database.
    |
    */
    /**
     * Create a new child item in database.
     *
     * @param WC_MNM_Child_Item $child_item child item object.
     */
    public function create(&$child_item)
    {
    }
    /**
     * Read from the database.
     *
     * @param WC_MNM_Child_Item $child_item child item object.
     */
    public function read(&$child_item)
    {
    }
    /**
     * Update data in the database.
     *
     * @param WC_MNM_Child_Item $child_item child item object.
     */
    public function update(&$child_item)
    {
    }
    /**
     * Delete data from the database.
     *
     * @param WC_MNM_Child_Item $child_item child item object.
     */
    public function delete(&$child_item)
    {
    }
    /**
     * Get container ID by child item ID.
     *
     * @param  int $child_item_id Child Item ID.
     * @return int
     */
    public function get_container_id_by_child_item_id($child_item_id)
    {
    }
    /**
     * Clear cache.
     *
     * @param WC_MNM_Child_Item $child_item child item object.
     */
    protected function clear_caches($child_item)
    {
    }
}
/**
 * WC_MNM_Data Class.
 *
 * MnM Data filters and includes.
 */
class WC_MNM_Data
{
    public static function init()
    {
    }
    /**
     * Registers the Mix and Match product custom post type data store.
     *
     * @param  array  $stores
     * @return array
     */
    public static function register_mnm_type_data_store($stores)
    {
    }
}
/**
 * WC_MNM_DB_Sync class
 */
class WC_MNM_DB_Sync
{
    /**
     * Attach hooks and filters.
     */
    public static function init()
    {
    }
    /**
     * Duplicates child items when duplicating a container.
     *
     * @param  WC_Product  $duplicated_product
     * @param  WC_Product  $product
     */
    public static function duplicate_product_before_save($duplicated_product, $product)
    {
    }
    /**
     * Deletes child item DB entries when their container product is deleted.
     *
     * @param  mixed  $id  ID of post being deleted.
     */
    public static function delete_post($id)
    {
    }
    /**
     * Deletes child item DB entries when their container product is deleted
     *
     * @param  mixed  $id  ID of product being deleted.
     */
    public static function delete_product($id)
    {
    }
}
/**
 * WC_Product_MNM_Data_Store_CPT Class.
 *
 * MnM data stored as Custom Post Type. For use with the WC 3.0+ CRUD API.
 *
 * @uses  WC_Product_Data_Store_CPT
 */
class WC_Product_MNM_Data_Store_CPT extends \WC_Product_Data_Store_CPT
{
    /**
     * Data stored in meta keys, but not considered "meta" for the MnM type.
     *
     * @var array
     */
    protected $extended_internal_meta_keys = array('_mnm_base_price', '_mnm_base_regular_price', '_mnm_base_sale_price', '_mnm_layout_override', '_mnm_layout_style', '_mnm_add_to_cart_form_location', '_mnm_min_container_size', '_mnm_max_container_size', '_mnm_per_product_pricing', '_mnm_per_product_discount', '_mnm_packing_mode', '_mnm_max_price', '_mnm_max_regular_price', '_mnm_weight_cumulative', '_mnm_content_source', '_mnm_child_category_ids');
    /**
     * Maps extended properties to meta keys.
     *
     * @var array
     */
    protected $props_to_meta_keys = array('min_raw_price' => '_price', 'min_raw_regular_price' => '_regular_price', 'max_raw_price' => '_mnm_max_price', 'max_raw_regular_price' => '_mnm_max_regular_price', 'price' => '_mnm_base_price', 'regular_price' => '_mnm_base_regular_price', 'sale_price' => '_mnm_base_sale_price', 'layout_override' => '_mnm_layout_override', 'layout' => '_mnm_layout_style', 'add_to_cart_form_location' => '_mnm_add_to_cart_form_location', 'min_container_size' => '_mnm_min_container_size', 'max_container_size' => '_mnm_max_container_size', 'priced_per_product' => '_mnm_per_product_pricing', 'discount' => '_mnm_per_product_discount', 'packing_mode' => '_mnm_packing_mode', 'weight_cumulative' => '_mnm_weight_cumulative', 'content_source' => '_mnm_content_source', 'child_category_ids' => '_mnm_child_category_ids');
    /**
     * Maps global properties to options.
     *
     * @var array
     */
    protected $global_props = array('layout' => 'wc_mnm_layout', 'add_to_cart_form_location' => 'wc_mnm_add_to_cart_form_location');
    /**
     * Callback to exclude MnM-specific meta data.
     *
     * @param  object  $meta
     * @return bool
     */
    protected function exclude_internal_meta_keys($meta)
    {
    }
    /**
     * Reads all MnM-specific post meta.
     *
     * @param  WC_Product_Mix_and_Match  $product
     */
    protected function read_extra_data(&$product)
    {
    }
    /**
     * Writes all MnM-specific post meta.
     *
     * @param  WC_Product_Mix_and_Match  $product
     * @param  bool                   $force
     */
    protected function update_post_meta(&$product, $force = \false)
    {
    }
    /**
     * Handle updated meta props after updating meta data.
     *
     * @param  WC_Product_Mix_and_Match  $product
     */
    protected function handle_updated_props(&$product)
    {
    }
    /**
     * Get data to save to a lookup table.
     *
     * @since  1.4.3
     *
     * @param  int     $id
     * @param  string  $table
     * @return array
     */
    protected function get_data_for_lookup_table($id, $table)
    {
    }
    /**
     * Writes MnM raw price meta to the DB.
     *
     * @param  WC_Product_Mix_and_Match  $product
     */
    public function update_raw_prices(&$product)
    {
    }
    /**
     * Gets props to meta keys pairs
     *
     * @since  1.10.7
     * @return  array
     */
    public function get_props_to_meta_keys()
    {
    }
    /**
     * Reads the child contents from the DB.
     *
     * @since 2.0.0
     *
     * @param  int|WC_Product_Mix_and_Match  $product
     * @return WC_MNM_Child_Item[]
     */
    public function read_child_items($product)
    {
    }
    /**
     * Reads the allowed contents from the DB.
     *
     * @since 2.0.0
     *
     * @param  int|WC_Product_Mix_and_Match  $product
     * @param string $return Format of returned data, values: 'ids'|'array'
     * @return array() - map of [ child item ids => child product ids ] OR map of full props ex: [ child item ids => [ child_item_id, p_id, product_id, variation_id, container_id, menu_order ] ]
     */
    public function query_child_items_by_container($product, $return = 'ids')
    {
    }
    /**
     * Reads the allowed contents from the DB.
     *
     * @since 2.0.0
     *
     * @param  WC_Product_Mix_and_Match  $product
     * @return int[] child product ids
     */
    public function query_child_items_by_category($product)
    {
    }
    /**
     * Find the MNM products a product belongs to.
     *
     * @since 2.0.0
     *
     * @param  int|WC_Product  $product
     * @return array() - map of child item ids / Mix and Match product ids
     */
    public function query_containers_by_product($product)
    {
    }
    /**
     * Clear any caches.
     *
     * @param WC_Product $product Product object.
     * @since 3.0.0
     */
    protected function clear_caches(&$product)
    {
    }
}
/*
|--------------------------------------------------------------------------
| Admin functions.
|--------------------------------------------------------------------------
*/
/**
 * Output a radio image input box.
 *
 * @param array   $field Field data.
 * @param WC_Data $data WC_Data object, will be preferred over post object when passed.
 */
function wc_mnm_wp_radio_images($field, \WC_Data $data = \null)
{
}
/**
 * Output a toggle checkbox input box.
 *
 * @param array   $field Field data.
 * @param WC_Data $data WC_Data object, will be preferred over post object when passed.
 */
function wc_mnm_wp_toggle($field, \WC_Data $data = \null)
{
}
/**
 * Output a enhanced select input box. Defaults to a product search, very specific to the plugin and not a generic function for any kind of enhanced search.
 * WC_Data object is not used here since the "value" param must be formatted a specific way.
 *
 * @param array   $field Field data.
 */
function wc_mnm_wp_enhanced_select($field)
{
}
/**
 * Returns the main instance of WC_Mix_and_Match to prevent the need to use globals.
 *
 * @return WooCommerce
 */
function WC_Mix_and_Match()
{
}
/*
|--------------------------------------------------------------------------
| Frontend.
|--------------------------------------------------------------------------
*/
/**
 * Get a name prefix for quantity input.
 *
 * @since  1.7.0
 *
 * @param  int $container_id | Product ID of MnM container product.
 * @param  int $child_id - Product ID of child product.
 * @return string
 */
function wc_mnm_get_child_input_name($container_id, $child_id = \null)
{
}
/**
 * Given a MnM container, return the prompt for properly filling a container.
 *
 * @since  1.2.0
 *
 * @param  obj $container WC_Product_Mix_and_Match.
 * @return string
 */
function wc_mnm_get_quantity_message($container)
{
}
/*
---------------
	Cart.
---------------
*/
/**
 * Given a child MnM cart item, find and return its container cart item or its cart ID when the $return_id arg is true.
 *
 * @since  1.7.0
 *
 * @param  array $child_cart_item The child item cart array.
 * @param  array $cart_contents The array of all items currently in cart.
 * @param  bool  $return_id Toggle between returning cart item key or the entire item array.
 * @return mixed
 */
function wc_mnm_get_cart_item_container($child_cart_item, $cart_contents = \false, $return_id = \false)
{
}
/**
 * Given a MnM container cart item, find and return its child cart items.
 *
 * @since  1.7.0
 *
 * @param  array $container_cart_item The parent item cart array.
 * @param  array $cart_contents The array of all items currently in cart.
 * @param  bool  $return_ids Toggle between returning cart item key or the entire item array.
 * @return array Either cart items or their cart keys.
 */
function wc_mnm_get_child_cart_items($container_cart_item, $cart_contents = \false, $return_ids = \false)
{
}
/**
 * True if a cart item is a child of a a MnM container.
 * Instead of relying solely on cart item data, the function also checks that the alleged parent item actually exists.
 *
 * @since  1.7.0
 *
 * @param  array $cart_item Cart item array to test.
 * @param  array $cart_contents The array of all items currently in cart.
 * @return bool
 */
function wc_mnm_is_child_cart_item($cart_item, $cart_contents = \false)
{
}
/**
 * True if a cart item appears to be a child product that is part of a MnM container.
 * The result is purely based on cart item data - the function does not check that a valid parent item actually exists.
 *
 * @since  1.7.0
 *
 * @param  array $cart_item Cart item array to test.
 * @return bool
 */
function wc_mnm_maybe_is_child_cart_item($cart_item)
{
}
/**
 * True if a cart item appears to be a MnM container.
 *
 * @since  1.7.0
 *
 * @param  array $cart_item Cart item array to test.
 * @return bool
 */
function wc_mnm_is_container_cart_item($cart_item)
{
}
/*
|--------------------------------------------------------------------------
| Orders.
|--------------------------------------------------------------------------
*/
/**
 * Given a MnM child order item, find and return its container order item or its order item ID when the $return_id arg is true.
 *
 * @since  1.7.0
 *
 * @param array              $child_order_item Order item to test.
 * @param mixed array|object $order array of order items or WC_Order.
 * @param bool               $return_id Either order item or the order item ID.
 * @return mixed
 */
function wc_mnm_get_order_item_container($child_order_item, $order = \false, $return_id = \false)
{
}
/**
 * Given a MnM container order item, find and return its child order items - or their order item IDs when the $return_ids arg is true.
 *
 * @since  1.7.0
 *
 * @param  array        $container_order_item Order item to test.
 * @param  array|object $order array of order items or WC_Order.
 * @param  bool         $return_ids Either order items or the order item IDs.
 * @return mixed
 */
function wc_mnm_get_child_order_items($container_order_item, $order = \false, $return_ids = \false)
{
}
/**
 * True if an order item is part of a MnM container.
 * Instead of relying solely on the existence of item meta, the function also checks that the alleged parent item actually exists.
 *
 * @since  1.7.0
 *
 * @param  mixed     array|WC_Order_Item $order_item  Order item to test.
 * @param  mixed     array|WC_Order_Item $order array of order items or WC_Order.
 * @return bool
 */
function wc_mnm_is_child_order_item($order_item, $order = \false)
{
}
/**
 * True if an order item appears to be part of a MnM container.
 * The result is purely based on item meta - the function does not check that a valid parent item actually exists.
 *
 * @since  1.7.0
 *
 * @param  mixed array|WC_Order_Item $order_item Order item to test.
 * @return bool
 */
function wc_mnm_maybe_is_child_order_item($order_item)
{
}
/**
 * True if an order item appears to be a MnM container.
 *
 * @since  1.7.0
 *
 * @param  mixed array|WC_Order_Item $order_item Order item to test.
 * @return bool
 */
function wc_mnm_is_container_order_item($order_item)
{
}
/*
|--------------------------------------------------------------------------
| Products.
|--------------------------------------------------------------------------
*/
/**
 * Given a product, test if a Mix and Match container type.
 *
 * @since  2.2.0
 *
 * @param  mixed string|WC_Product $product - A product object or product type.
 * @return bool
 */
function wc_mnm_is_product_container_type($product)
{
}
/*
|--------------------------------------------------------------------------
| Formatting.
|--------------------------------------------------------------------------
*/
/**
 * Given an array, prefix all keys with data-
 *
 * @since  2.3.0
 *
 * @param  array $attributes Data attributes to prefix with data-*.
 * @return array
 */
function wc_mnm_prefix_data_attribute_keys($attributes)
{
}
/*
|--------------------------------------------------------------------------
| Deprecated.
|--------------------------------------------------------------------------
*/
/**
 * Given a child MnM cart item, find and return its container cart item or its cart ID when the $return_id arg is true.
 *
 * @since  1.2.0
 * @deprecated 1.7.0
 *
 * @param  array $child_cart_item The child item cart array.
 * @param  array $cart_contents The array of all items currently in cart.
 * @param  bool  $return_id Toggle between returning cart item key or the entire item array.
 * @return mixed
 */
function wc_mnm_get_mnm_cart_item_container($child_cart_item, $cart_contents = \false, $return_id = \false)
{
}
/**
 * Given a MnM container cart item, find and return its child cart items - or their cart IDs when the $return_ids arg is true.
 *
 * @since  1.2.0
 * @deprecated 1.7.0
 *
 * @param  array $container_cart_item The parent item cart array.
 * @param  array $cart_contents The array of all items currently in cart.
 * @param  bool  $return_ids Toggle between returning cart item key or the entire item array.
 * @return mixed
 */
function wc_mnm_get_mnm_cart_items($container_cart_item, $cart_contents = \false, $return_ids = \false)
{
}
/**
 * True if a cart item is a child in a MnM container.
 * Instead of relying solely on cart item data, the function also checks that the alleged parent item actually exists.
 *
 * @since  1.2.0
 * @deprecated 1.7.0
 *
 * @param  array $cart_item Cart item array to test.
 * @param  array $cart_contents The array of all items currently in cart.
 * @return bool
 */
function wc_mnm_is_mnm_cart_item($cart_item, $cart_contents = \false)
{
}
/**
 * True if a cart item appears to be part of a MnM container.
 * The result is purely based on cart item data - the function does not check that a valid parent item actually exists.
 *
 * @since  1.2.0
 * @deprecated 1.7.0
 *
 * @param  array $cart_item Cart item array to test.
 * @return bool
 */
function wc_mnm_maybe_is_mnm_cart_item($cart_item)
{
}
/**
 * True if a cart item appears to be a MnM container item.
 *
 * @since  1.2.0
 * @deprecated 1.7.0
 *
 * @param  array $cart_item Cart item array to test.
 * @return bool
 */
function wc_mnm_is_mnm_container_cart_item($cart_item)
{
}
/**
 * Given a MnM child order item, find and return its container order item or its order item ID when the $return_id arg is true.
 *
 * @since  1.2.0
 * @deprecated 1.7.0
 *
 * @param array              $child_order_item Order item to test.
 * @param mixed array|object $order array of order items or WC_Order.
 * @param bool               $return_id Either order item or the order item ID.
 * @return mixed
 */
function wc_mnm_get_mnm_order_item_container($child_order_item, $order = \false, $return_id = \false)
{
}
/**
 * Given a MnM container order item, find and return its child order items - or their order item IDs when the $return_ids arg is true.
 *
 * @since  1.2.0
 * @deprecated 1.7.0
 *
 * @param  array        $container_order_item Order item to test.
 * @param  array|object $order array of order items or WC_Order.
 * @param  bool         $return_ids Either order items or the order item IDs.
 * @return mixed
 */
function wc_mnm_get_mnm_order_items($container_order_item, $order = \false, $return_ids = \false)
{
}
/**
 * True if an order item is part of a MnM bundle.
 * Instead of relying solely on the existence of item meta, the function also checks that the alleged parent item actually exists.
 *
 * @since  1.2.0
 * @deprecated 1.7.0
 *
 * @param  mixed     array|WC_Order_Item $order_item  Order item to test.
 * @param  mixed     array|WC_Order_Item $order array of order items or WC_Order.
 * @return bool
 */
function wc_mnm_is_mnm_order_item($order_item, $order = \false)
{
}
/**
 * True if an order item appears to be part of a MnM bundle.
 * The result is purely based on item meta - the function does not check that a valid parent item actually exists.
 *
 * @since  1.2.0
 * @deprecated 1.7.0
 *
 * @param  mixed array|WC_Order_Item $order_item Order item to test.
 * @return bool
 */
function wc_mnm_maybe_is_mnm_order_item($order_item)
{
}
/**
 * True if an order item appears to be a MnM container item.
 *
 * @since  1.2.0
 * @deprecated 1.7.0
 *
 * @param  mixed array|WC_Order_Item $order_item Order item to test.
 * @return bool
 */
function wc_mnm_is_mnm_container_order_item($order_item)
{
}
/**
 * Returns the incl/excl tax coefficients for calculating prices incl/excl tax on the client side.
 *
 * @since  1.4.0
 * @deprecated 2.0.0
 *
 * @param  WC_Product $product The product to get ratios for.
 * @return array
 */
function wc_mnm_get_tax_ratios($product)
{
}
/*
|--------------------------------------------------------------------------
| Mix and Match single product template functions.
|--------------------------------------------------------------------------
*/
/**
 * Checks whether this product is rendered using a legacy template; an indication that a classic theme is in use.
 * Although a legacy PHP template might be in use with a block theme (via the "Legacy PHP Product Block", the extension does not account for this scenario when gating template features.
 *
 * @since  2.4.10
 *
 * @param  WC_Product  $product
 * @return boolean
 */
function wc_mnm_has_legacy_product_template($product)
{
}
/**
 * Add-to-cart template for Mix and Match. Handles the 'Form location > After summary' case.
 *
 * @since  1.3.0
 */
function wc_mnm_template_add_to_cart_after_summary()
{
}
/**
 * Add-to-cart template for Mix and Match products.
 *
 * @since  1.3.0
 *
 * @param WC_Product_Mix_and_Match $container - Optionally call template for a specific product. Since 1.11.7
 */
function wc_mnm_template_add_to_cart($container = \false)
{
}
/**
 * Build form classes.
 *
 * @since  2.4.0
 *
 * @param WC_Product_Mix_and_Match $product
 * @return array
 */
function wc_mnm_get_form_classes($classes = array(), $product = \false)
{
}
/**
 * The child contents loop.
 *
 * @param obj $product WC_Mix_And_Match of parent product
 * @since  2.0.0
 */
function wc_mnm_content_loop($product)
{
}
/**
 * Echo opening markup if necessary.
 *
 * @param obj $product WC_Mix_And_Match of parent product
 * @since  1.3.0
 */
function wc_mnm_template_child_items_wrapper_open($product)
{
}
/**
 * Opens the 'mnm_item' child item container.
 *
 * @param obj WC_MNM_Child_Item $child_item of child item
 * @param obj WC_Mix_and_Match $product the parent container
 * @since  1.3.0
 */
function wc_mnm_template_child_item_details_wrapper_open($child_item, $product)
{
}
/**
 * Open the thumbnail sub-section.
 *
 * @param obj WC_MNM_Child_Item $child_item of child item
 * @param obj WC_Mix_and_Match $product the parent container
 */
function wc_mnm_template_child_item_thumbnail_open($child_item, $product)
{
}
/**
 * Get the child item product thumbnail
 *
 * @param obj WC_MNM_Child_Item $child_item of child item
 * @param obj WC_Mix_and_Match $product the parent container
 * @since  1.3.0
 */
function wc_mnm_template_child_item_thumbnail($child_item, $product)
{
}
/**
 * Close the thumbnail section.
 *
 * @since 2.2.0
 *
 * @param obj WC_MNM_Child_Item $child_item of child item
 * @param obj WC_Mix_and_Match $product the parent container
 */
function wc_mnm_template_child_item_thumbnail_close($child_item, $product)
{
}
/**
 * Add a 'details' sub-section.
 *
 * @param obj WC_MNM_Child_Item $child_item of child item
 * @param obj WC_Mix_and_Match $product the parent container
 */
function wc_mnm_template_child_item_details_open($child_item, $product)
{
}
/**
 * Load the child item title template.
 *
 * @param obj WC_MNM_Child_Item $child_item of child item
 * @param obj WC_Mix_and_Match $product the parent container
 */
function wc_mnm_template_child_item_title($child_item, $product)
{
}
/**
 * Get the MNM item product's hidden data attributes
 *
 * @todo: eventually deprecate. All data attributes will be on the opening element.
 * @see: WC_MNM_Child_Item::get_data_attributes()
 * @see: grid/mnm-child-item-wrapper-open.php and table/mnm-child-item-wrapper-open.php templates
 *
 * @param obj WC_MNM_Child_Item $child_item of child item
 * @param obj WC_Mix_and_Match $product the parent container
 */
function wc_mnm_template_child_item_data_details($child_item, $product)
{
}
/**
 * Get the MNM item product's attributes
 *
 * @param obj WC_MNM_Child_Item $child_item of child item
 * @param obj WC_Mix_and_Match $product the parent container
 */
function wc_mnm_template_child_item_attributes($child_item, $product)
{
}
/**
 * Maybe display individual MNM option price
 *
 * @param obj WC_MNM_Child_Item $child_item of child item
 * @param obj WC_Mix_and_Match $product the parent container
 * @since  1.4.0
 */
function wc_mnm_template_child_item_price($child_item, $product)
{
}
/**
 * Get the MNM item product's remaining stock text.
 *
 * Since "out of stock" and "Temporarily unavailable" are also printed by the get_availability_html() method
 * We need to separate this part out into it's own template function.
 *
 * @since 2.3.0
 *
 * @param obj WC_MNM_Child_Item $child_item of child item
 * @param obj WC_Mix_and_Match $product the parent container
 */
function wc_mnm_template_child_item_stock_remaining($child_item, $product)
{
}
/**
 * Open the MNM item product quantity sub-section
 *
 * @param obj WC_MNM_Child_Item $child_item of child item
 * @param obj WC_Mix_and_Match product of parent product
 */
function wc_mnm_template_child_item_quantity_open($child_item, $product)
{
}
/**
 * Get the MNM item product quantity
 *
 * @param obj WC_MNM_Child_Item $child_item of child item
 * @param obj WC_Mix_and_Match product of parent product
 */
function wc_mnm_template_child_item_quantity($child_item, $product)
{
}
/**
 * Close a sub-section.
 *
 * @param obj WC_MNM_Child_Item $child_item of child item
 * @param obj WC_Mix_and_Match $product the parent container
 */
function wc_mnm_template_child_item_section_close($child_item, $product)
{
}
/**
 * Closes the 'mnm_item' child item container.
 *
 * @param  WC_Product    $mnm_item
 * @param  WC_Mix_And_Match  $product
 * @since  1.3.0
 */
function wc_mnm_template_child_item_details_wrapper_close($child_item, $product)
{
}
/**
 * Echo ending markup if neccessary.
 *
 * @param obj $product WC_Mix_And_Match of parent product
 * @since  1.3.0
 */
function wc_mnm_template_child_items_wrapper_close($product)
{
}
/**
 * Add the MNM reset link
 *
 * @since  1.3.0
 */
function wc_mnm_template_reset_link($product)
{
}
/**
 * Get the Add to Cart button wrap.
 *
 * @deprecated 2.2.0
 *
 * @param obj WC_Mix_and_Match product of parent product
 */
function wc_mnm_template_add_to_cart_wrap($product)
{
}
/**
 * Get the validation status template. (replacing wc_mnm_template_add_to_cart_wrap() but similar)
 *
 * @since 2.2.0
 *
 * @param obj WC_Mix_and_Match product of parent product
 */
function wc_mnm_template_container_status($product)
{
}
/**
 * Get the purchasable notice.
 *
 * @since 2.5.0
 *
 * @param obj WC_Mix_and_Match product of parent product
 */
function wc_mnm_template_get_purchasable_notice($product)
{
}
/**
 * Get the Add to Cart button.
 *
 * @since 2.0.0
 *
 * @param obj WC_Mix_and_Match product of parent product
 */
function wc_mnm_template_add_to_cart_button($product)
{
}
/**
 * Display Mix and Match child product short description
 *
 * @param obj WC_MNM_Child_Item $child_item of child item
 * @param obj WC_Mix_and_Match $product the parent container
 */
function wc_mnm_child_item_short_description($child_item, $product)
{
}
/*
|--------------------------------------------------------------------------
| Plus/Minus Buttons
|--------------------------------------------------------------------------
*/
/**
 * Hook plus/minus buttons only in MNM context
 *
 * @since  2.4.0
 */
function wc_mnm_add_plus_minus_buttons()
{
}
/**
 * Unhook plus/minus buttons
 *
 * @since  2.4.0
 */
function wc_mnm_remove_plus_minus_buttons()
{
}
/**
 * Minus Button
 *
 * @since  2.4.0
 */
function wc_mnm_template_quantity_minus_button()
{
}
/**
 * Plus Button
 *
 * @since  2.4.0
 */
function wc_mnm_template_quantity_plus_button()
{
}
/*
|--------------------------------------------------------------------------
| Backcompatibility functions.
|--------------------------------------------------------------------------
*/
/**
 * Load backcompatibility functions uniquely on woocommerce_mix-and-match_add_to_cart hook.
 */
function _wc_mnm_add_template_backcompatibility()
{
}
/**
 * Restore old 1.0.x "row item" hooks for folks overriding the mnm.php template
 */
function _wc_mnm_add_deprecated_hooks($template_name, $template_path, $located, $args)
{
}
/**
 * Log errors if the deprecated hooks are called.
 */
function _wc_mnm_detect_deprecated_hooks($template_name, $template_path, $located, $args)
{
}
/**
 * Get the MNM item product title
 *
 * @param obj WC_MNM_Child_Item $child_item of child itemm
 */
function woocommerce_template_mnm_product_title($child_item, $product)
{
}
/**
 * Get the MNM item product thumbnail
 *
 * @param obj WC_MNM_Child_Item $child_item of child item
 */
function woocommerce_template_mnm_product_thumbnail($child_item, $product)
{
}
/**
 * Get the MNM item product's attributes
 *
 * @param obj WC_MNM_Child_Item $child_item of child item
 */
function woocommerce_template_mnm_product_attributes($child_item, $product)
{
}
/**
 * Get the MNM item product quantity
 *
 * @param obj WC_MNM_Child_Item $child_item of child item
 */
function woocommerce_template_mnm_product_quantity($child_item, $product)
{
}
/**
 * The child contents loop.
 *
 * @since  1.8.0
 * @deprecated 2.0.0
 *
 * @param obj $product WC_Mix_And_Match of parent product
 */
function woocommerce_mnm_content_loop($product)
{
}
/**
 * The first catagory caption.
 *
 * @since 2.0.0
 *
 * @param obj $child_item WC_MNM_Child_Item
 * @param obj $product WC_Mix_And_Match of parent product
 */
function wc_mnm_category_caption($child_item, $product)
{
}
/**
 * The first catagory caption.
 *
 * @since 2.0.0
 *
 * @param obj $product WC_Mix_And_Match of parent product
 */
function wc_mnm_first_category_caption($product)
{
}
/**
 * Display the category titles in the loop.
 *
 * @since 2.2.0
 *
 * @param obj $category WP_Term
 * @param WC_Product_Mix_and_Match
 */
function wc_mnm_category_title($category, $product)
{
}
/**
 * Display the category descriptions in the loop.
 *
 * @since 2.4.0
 *
 * @param obj $category WP_Term
 * @param WC_Product_Mix_and_Match
 */
function wc_mnm_category_description($category, $product)
{
}
/**
 * Edit container template for Mix and Match products.
 *
 * @since 2.2.0
 *
 * @param WC_Product_Mix_and_Match
 * @param WC_Order_Item $order_item
 * @param WC_Order $order
 * @param  string $source The originating source loading this template
 */
function wc_mnm_template_edit_container_order_item($product, $order_item, $order, $source)
{
}
/**
 * Batch processing limit.
 *
 * @since 2.0.0
 * @return int
 */
function wc_mnm_update_batch_limit()
{
}
/**
 * Data Update for Version 1.2.0.
 *
 * @return bool True to run again, false if completed.
 */
function wc_mnm_update_120_main()
{
}
/**
 * Patch product meta for Version 1.10.0.
 *
 * Unlike 1.3 update, we need to keep track of which IDs have been processed.
 * Because _mnm_data existed prior to update, when over 20 items if we hit the time/memory limit we were infinite looping.
 *
 * @see https://github.com/kathyisawesome/woocommerce-mix-and-match-products/issues/371
 * @return bool True to run again, false if completed.
 */
function wc_mnm_update_1x10_product_meta()
{
}
/**
 * Switch container size meta key from translated string.
 *
 * @since  1.10.0
 */
function wc_mnm_update_1x10_order_item_meta()
{
}
/**
 * Update DB Version
 *
 * @since  1.10.0
 * @deperecated 2.0.0
 */
function wc_mnm_update_1x10_db_version()
{
}
/**
 * Delete old notices.
 */
function wc_mnm_update_2x00_remove_notices()
{
}
/**
 * Set global layout settings.
 *
 * Unlike 1.3 update, we need to keep track of which IDs have been processed.
 * Because _mnm_data existed prior to update, when over 20 items if we hit the time/memory limit we were infinite looping.
 *
 * see @link: https://github.com/kathyisawesome/woocommerce-mix-and-match-products/issues/371
 *
 * @since 2.0.0
 *
 * @return bool True to run again, false if completed.
 */
function wc_mnm_update_2x00_customizer_settings()
{
}
/**
 * Set packing mode.
 *
 * @since 2.0.0
 *
 * @return bool True to run again, false if completed.
 */
function wc_mnm_update_2x00_packing_mode()
{
}
/**
 * Add prefix to mnm_container_size, etc order item meta
 *
 * @since 2.0.0
 */
function wc_mnm_update_2x00_order_item_meta()
{
}
/**
 * Add data into new table for 2.0.
 *
 * @since 2.0.0
 * @return bool True to run again, false if completed.
 */
function wc_mnm_update_2x00_custom_tables()
{
}
/**
 * Update category contents mini-extension data.
 *
 * @since 2.0.0
 */
function wc_mnm_update_2x00_category_contents_meta()
{
}
/**
 * Remove duplicate meta keys, prefix meta keys
 *
 * @since 2.0.0
 */
function wc_mnm_update_2x00_product_meta()
{
}
/**
 * Delete the old _mnm_data post meta.
 *
 * @since  2.0.0
 */
function wc_mnm_update_2x00_cleanup_legacy_child_meta()
{
}
/**
 * Remove duplicate meta keys (again)
 *
 * @since 2.2.0
 */
function wc_mnm_update_2x2x0_delete_duplicate_meta()
{
}
/**
 * Load plugin class, if dependencies are met.
 *
 * @since 1.10.0
 */
function wc_mnm_init()
{
}