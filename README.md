# Innovative-Commerce-Custom-Plugin
![Plugin logo](https://github.com/LeanneSalva/Innovative-Commerce-Custom-Plugin/assets/123197122/fbfecc1e-cacf-4fb5-b2cf-2650eebec50e)
WordPress plugin for Innovative Commerce

## Description

The Innovative-Commerce-Custom-Plugin is a WordPress plugin that retrieves the current Bitcoin price in USD using the CoinDesk API. It provides a shortcode `[bitcoin_price]` that can be used to display the current Bitcoin price on any page or post.

## Installation

1. Download the plugin ZIP file from [GitHub](https://github.com/LeanneSalva/Innovative-Commerce-Custom-Plugin).

   ![GIF](https://export-download.canva.com/CaMWM/DAFkB8CaMWM/2/0-5530311659.gif?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJHKNGJLC2J7OGJ6Q%2F20230525%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230525T203441Z&X-Amz-Expires=75294&X-Amz-Signature=85d480e9dbf62a0284c1b66221fb24c3fedd20b86b3f187eef6a3ee819e20dcd&X-Amz-SignedHeaders=host&response-content-disposition=attachment%3B%20filename%2A%3DUTF-8%27%27Untitled%2520design.gif&response-expires=Fri%2C%2026%20May%202023%2017%3A29%3A35%20GMT)


2. Extract the ZIP file and upload the plugin folder to the `wp-content/plugins/` directory of your WordPress installation.

   ![GIF](https://export-download.canva.com/f7J-4/DAFkB9f7J-4/4/0-5531111063.gif?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJHKNGJLC2J7OGJ6Q%2F20230526%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230526T093800Z&X-Amz-Expires=27088&X-Amz-Signature=22444b9cbda89caa6a2ffede72f748a10cc6bbedd420914d1224916a3434e330&X-Amz-SignedHeaders=host&response-content-disposition=attachment%3B%20filename%2A%3DUTF-8%27%27Untitled%2520design.gif&response-expires=Fri%2C%2026%20May%202023%2017%3A09%3A28%20GMT)
   
3. Activate the plugin through the WordPress admin panel.

   ![GIF](https://export-download.canva.com/YaAGE/DAFkBzYaAGE/5/0-5531878138.gif?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJHKNGJLC2J7OGJ6Q%2F20230525%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230525T190133Z&X-Amz-Expires=80204&X-Amz-Signature=50542f8cca6ba16cc1edb4cb92da6fc3c13a97f778adcf46cd70d45b735a353d&X-Amz-SignedHeaders=host&response-content-disposition=attachment%3B%20filename%2A%3DUTF-8%27%27Untitled%2520design.gif&response-expires=Fri%2C%2026%20May%202023%2017%3A18%3A17%20GMT)
  

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


