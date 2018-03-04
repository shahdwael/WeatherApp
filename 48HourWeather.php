<head>
<title>48 Hour Weather</title>
    <style>
        body{
            background-image: url("images (1).jpg");
            background-repeat: no-repeat;
            background-size: 100%;
            font-size: 150%;
        }
    
    </style>
</head>
<br> <br>
<?php
    if(isset($_GET))
    {
      $user_city=$_GET['city'];

      $url = "https://api.weatherbit.io/v2.0/forecast/hourly?city=".$user_city."&key=f88caa4e5e914a64adf48a41905a8151";

      $weather_data = file_get_contents($url);
      $json = json_decode($weather_data,TRUE);

      $temp = $json['data']['0']['temp'];
      $Weather_Description= $json['data']['0']['weather']['description'];
      $windspeed = $json['data']['0']['wind_spd'];
      $clouds = $json['data']['0']['clouds'];
      $datetime = $json['data']['0']['datetime'];

      echo "<strong>Day one:</strong>"."<br>";

      echo "<strong> City Name: </strong>" . $user_city . "<br/>";
      echo "<strong> Temprature: </strong>" . $temp . "<br/>";
      echo "<strong> Weather description: </strong>" . $Weather_Description . "<br/>";
      echo "<strong> Wind speed: </strong>" . $windspeed. "<br/>";
      echo "<strong> Clouds: </strong>" . $clouds. "<br/>";
      echo "<strong> Datetime: </strong>" . $datetime . "<br/>"."<br/>";

      $temp = $json['data']['24']['temp'];
      $Weather_Description= $json['data']['24']['weather']['description'];
      $windspeed = $json['data']['24']['wind_spd'];
      $clouds = $json['data']['24']['clouds'];
      $datetime = $json['data']['24']['datetime'];


      echo "<strong>Day two:</strong>"."<br>";
      echo "<strong> City Name: </strong>" . $user_city . "<br/>";
      echo "<strong> Temprature: </strong>" . $temp . "<br/>";
      echo "<strong> Weather description: </strong>" . $Weather_Description . "<br/>";
      echo "<strong> Wind speed: </strong>" . $windspeed. "<br/>";
      echo "<strong> Clouds: </strong>" . $clouds. "<br/>";
      echo "<strong> Datetime: </strong>" . $datetime . "<br/>";


    }
 ?>
