<head>
    <title>Current Weather</title>
    <style>
        body{
            background-image: url("images (1).jpg");
            background-repeat: no-repeat;
            background-size: 100%;
            font-size: 150%;
        }
    
    </style>
</head>

<?php
    if(isset($_GET))
    {
      $user_city=$_GET['city'];

      $url = "https://api.weatherbit.io/v2.0/current?city=".$user_city."&key=f88caa4e5e914a64adf48a41905a8151";

      $weather_data = file_get_contents($url);
      $json = json_decode($weather_data,TRUE);

      $city_name = $json['data']['0']['city_name'];
      $temp = $json['data']['0']['temp'];
      $Weather_Description= $json['data']['0']['weather']['description'];
      $sunrise = $json['data']['0']['sunrise'];
      $sunset = $json['data']['0']['sunset'];
      $datetime = $json['data']['0']['datetime'];

        echo "<br>"."<br>";
        echo "<strong> City Name: </strong>" . $city_name . "<br/>";
        echo "<strong> Temprature: </strong>" . $temp . "<br/>";
        echo "<strong> Weather description: </strong>" . $Weather_Description . "<br/>";
        echo "<strong> Sunrise: </strong>" . $sunrise . "<br/>";
        echo "<strong> Sunset: </strong>" . $sunset. "<br/>";
        echo "<strong> Datetime: </strong>" . $datetime . "<br/>"; 
    }
 ?>
