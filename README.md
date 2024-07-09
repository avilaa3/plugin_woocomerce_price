# Custom Functions Plugin

This `README.md` file provides a detailed description, installation instructions, usage details, code explanation, support information, and license information for this plugin.


## Description
The Custom Functions Plugin is designed to enhance WooCommerce by displaying the percentage discount and sale price savings for products on sale. When a product is on sale, it shows the regular price, the sale price, the amount saved, and the percentage saved.

## Version
1.0

## Author
**Abraham A.**
- [Website](https://impactdesign.com.mx)

## Installation
1. Upload the `custom-functions-plugin` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

## Usage
Once activated, this plugin automatically modifies the price display for sale products in WooCommerce. It calculates the amount saved and the percentage discount, displaying them alongside the sale price.

### Example:
If a product is on sale, the price will be displayed as:

Sale Price
You save: $X (Y%)

Where `$X` is the amount saved and `Y%` is the percentage discount.

## Code Explanation
The plugin utilizes the `woocommerce_get_price_html` filter to alter the price display for sale products.

The filter woocommerce_get_price_html modifies the HTML that displays the product price.
The function change_displayed_sale_price_html checks if the product is on sale and not in the admin area or a variable product.
It calculates the regular price, sale price, savings amount, and savings percentage.
The savings amount and percentage are appended to the price HTML.

Support

For any questions or issues, please contact the author at impactdesign.com.mx.


