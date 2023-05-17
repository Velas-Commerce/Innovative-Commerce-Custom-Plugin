# Innovative-Commerce-Custom-Plugin

WordPress plugin for Innovative Commerce

## Description

The Innovative-Commerce-Custom-Plugin is a WordPress plugin that retrieves the current Bitcoin price in USD using the CoinDesk API. It provides a shortcode `[bitcoin_price]` that can be used to display the current Bitcoin price on any page or post.

## Installation

1. Download the plugin ZIP file from the [WordPress plugin repository](https://www.velascommerce.com/).
2. Extract the ZIP file and upload the plugin folder to the `wp-content/plugins/` directory of your WordPress installation.
3. Activate the plugin through the WordPress admin panel.

## Usage

To display the current Bitcoin price in USD on a page or post, use the `[bitcoin_price]` shortcode.

## Adding the Code to the Theme Header (header.php)

To display the current Bitcoin price in the header of your WordPress theme, follow these steps:

1. Open your theme's `header.php` file.
2. Locate the `<header>` tag with the `id="site-header"` attribute.
3. Insert the following code inside the `<header>` tag, preferably in a suitable location:

```php
<div style="text-align: center; background-color: black; color: white;">
  <?php echo do_shortcode('[bitcoin_price]'); ?>
</div>
```

## Requirements

- WordPress version 5.2 or higher
- PHP version 7.2 or higher

## Author

- VelasCommerce
- Website: [https://www.velascommerce.com/](https://www.velascommerce.com/)
![Plugin logo](https://github.com/LeanneSalva/Innovative-Commerce-Custom-Plugin/assets/123197122/fbfecc1e-cacf-4fb5-b2cf-2650eebec50e)

## License

This plugin is licensed under the GPL v2 or later. For more details, see the [license file](https://www.gnu.org/licenses/gpl-2.0.html).

