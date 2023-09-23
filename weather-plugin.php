<?php
/*
Plugin Name: Weather Plugin
Description: Displays weather for the current location or Delhi.

*/


$api_key = 'dd30728fcbf0be730d4810930cb43e0f';

function fetch_weather($city = 'Delhi') {
    global $api_key;
 
    $city = strtolower($city);

  
    $url = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api_key";
    $response = wp_remote_get($url);

    if (is_wp_error($response)) {
        return 'Failed to fetch weather data.';
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);

    if ($data && isset($data['weather'][0]['description'], $data['main']['temp'])) {
        $description = $data['weather'][0]['description'];
        $temperature = $data['main']['temp'] - 273.15; 
        return "Weather: $description<br>Temperature: $temperature°C";

    }

    return 'Weather data not available.';
}

function display_weather() {
    $location = isset($_GET['location']) ? sanitize_text_field($_GET['location']) : 'Delhi';
    $weather = fetch_weather($location);

    echo '<h2>Weather Information</h2>';
    echo '<form method="get">';
    echo '<label for="location">Select location:</label>';
    echo '<select name="location" id="location">';
    echo '<option value="Delhi">Delhi</option>';
    echo '</select>';
    echo '<input type="submit" value="Get Weather">';
    echo '</form>';
    echo "<p>$weather</p>";
}

add_shortcode('weather_plugin', 'display_weather');
