# Weather Plugin

![Weather Plugin Banner](link-to-your-banner-image.png)

**Weather Plugin** is a WordPress plugin that allows you to display weather information for the current location or Delhi on your WordPress site.

## Features

- Display weather information for the current location or Delhi.
- Easy-to-use shortcode integration.
- Customizable display options.

## Installation

1. Download the plugin ZIP file from the [Releases](https://github.com/suraj0023/plugin_weather/) page.
2. Log in to your WordPress admin panel.
3. Go to **Plugins > Add New**.
4. Click on the **Upload Plugin** button.
5. Upload the ZIP file you downloaded.
6. Activate the plugin.

## Usage

To display weather information on your WordPress site, use the `[weather_plugin]` shortcode. By default, it will show weather information for Delhi.

```shortcode
[weather_plugin]
You can also specify the location:

[weather_plugin location="current"] for the current location.
[weather_plugin location="delhi"] for Delhi.
## Configuration
To configure the plugin, open weather-plugin.php and replace 'YOUR_API_KEY' with your actual OpenWeatherMap API key.
