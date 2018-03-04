<head>
<title>Historical Weather Daily</title>
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
      $start_date=$_GET['start'];
      $end_date=$_GET['end'];

      $url = "https://api.weatherbit.io/v2.0/history/daily?city=".$user_city."&start_date=".$start_date."&end_date=".$end_date."&key=f88caa4e5e914a64adf48a41905a8151";
      $weather_data = file_get_contents($url);
      $json = json_decode($weather_data,TRUE);

      $temp = $json['data']['0']['temp'];
      $windspeed = $json['data']['0']['wind_spd'];
      $clouds = $json['data']['0']['clouds'];
      $datetime = $json['data']['0']['datetime'];


      echo "<strong> City Name: </strong>" . $user_city . "<br/>";
      echo "<strong> Temprature: </strong>" . $temp . "<br/>";
      echo "<strong> Wind speed: </strong>" . $windspeed. "<br/>";
      echo "<strong> Clouds: </strong>" . $clouds. "<br/>";
      echo "<strong> Datetime: </strong>" . $datetime . "<br/>";

    }

 ?>
