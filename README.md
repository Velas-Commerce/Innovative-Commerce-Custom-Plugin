# Innovative-Commerce-Custom-Plugin
![Plugin logo](https://github.com/LeanneSalva/Innovative-Commerce-Custom-Plugin/assets/123197122/fbfecc1e-cacf-4fb5-b2cf-2650eebec50e)
WordPress plugin for Innovative Commerce

## Description

The Innovative-Commerce-Custom-Plugin is a WordPress plugin that retrieves the current Bitcoin price in USD using the CoinDesk API. It provides a shortcode `[bitcoin_price]` that can be used to display the current Bitcoin price on any page or post.

## Installation

1. Download the plugin ZIP file from the [WordPress plugin repository](https://www.velascommerce.com/).
2. Extract the ZIP file and upload the plugin folder to the `wp-content/plugins/` directory of your WordPress installation.
![GIF](https://export-download.canva.com/a3tvQ/DAFj8Ia3tvQ/5/0-5463475687.gif?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJHKNGJLC2J7OGJ6Q%2F20230525%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230525T124950Z&X-Amz-Expires=18896&X-Amz-Signature=8cf45d6effe800ebf6afd5959f936c19402944f1f0baddc99f8de37ed35934f9&X-Amz-SignedHeaders=host&response-content-disposition=attachment%3B%20filename%2A%3DUTF-8%27%27Untitled%2520design.gif&response-expires=Thu%2C%2025%20May%202023%2018%3A04%3A46%20GMT)

4. Activate the plugin through the WordPress admin panel.

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
![Outlook-3o04z21r](https://github.com/LeanneSalva/Innovative-Commerce-Custom-Plugin/assets/123197122/d645140b-b255-47da-91ee-f985e843d0c1)
## License

This plugin is licensed under the GPL v2 or later. For more details, see the [license file](https://www.gnu.org/licenses/gpl-2.0.html).


