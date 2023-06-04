# Innovative-Commerce-Custom-Plugin
![Plugin logo](https://github.com/LeanneSalva/Innovative-Commerce-Custom-Plugin/assets/123197122/fbfecc1e-cacf-4fb5-b2cf-2650eebec50e)
WordPress plugin for Innovative Commerce

## Description

The Innovative-Commerce-Custom-Plugin is a WordPress plugin that retrieves the current Bitcoin price in USD using the CoinDesk API. It provides a shortcode `[bitcoin_price]` that can be used to display the current Bitcoin price on any page or post.

## Installation

1. Download the plugin ZIP file from [GitHub](https://github.com/LeanneSalva/Innovative-Commerce-Custom-Plugin).

   ![GIF](https://export-download.canva.com/CaMWM/DAFkB8CaMWM/2/0-6849241510024048835.gif?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJHKNGJLC2J7OGJ6Q%2F20230604%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230604T063003Z&X-Amz-Expires=31814&X-Amz-Signature=a88768d57600f79b6be41603ef2838e7985e6de29328903d804e1ab1a1bcda71&X-Amz-SignedHeaders=host&response-content-disposition=attachment%3B%20filename%2A%3DUTF-8%27%27Untitled%2520design.gif&response-expires=Sun%2C%2004%20Jun%202023%2015%3A20%3A17%20GMT)



2. Extract the ZIP file and upload the plugin folder to the `wp-content/plugins/` directory of your WordPress installation.

   ![GIF](https://export-download.canva.com/f7J-4/DAFkB9f7J-4/4/0-1893030124076167560.gif?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJHKNGJLC2J7OGJ6Q%2F20230604%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230604T013223Z&X-Amz-Expires=50611&X-Amz-Signature=7f7c580d35127084e31843796a8f671d2005abd3607b2de723060ab97cd27500&X-Amz-SignedHeaders=host&response-content-disposition=attachment%3B%20filename%2A%3DUTF-8%27%27Untitled%2520design.gif&response-expires=Sun%2C%2004%20Jun%202023%2015%3A35%3A54%20GMT)
   
   
3. Activate the plugin through the WordPress admin panel.

   ![GIF](https://export-download.canva.com/YaAGE/DAFkBzYaAGE/5/0-214313363224401943.gif?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJHKNGJLC2J7OGJ6Q%2F20230603%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230603T235911Z&X-Amz-Expires=55326&X-Amz-Signature=8781ad713cad3e0c1d619f7b796d75332035a229b677365d6a479613a2b94e5c&X-Amz-SignedHeaders=host&response-content-disposition=attachment%3B%20filename%2A%3DUTF-8%27%27Untitled%2520design.gif&response-expires=Sun%2C%2004%20Jun%202023%2015%3A21%3A17%20GMT)
  

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


