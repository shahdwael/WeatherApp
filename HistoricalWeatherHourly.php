<head>
<title>Historical Weather Hourly</title>
    <style>
        body{
            background-image: url("images (1).jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
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

      $url = "https://api.weatherbit.io/v2.0/history/hourly?city=".$user_city."&start_date=".$start_date."&end_date=".$end_date."&key=f88caa4e5e914a64adf48a41905a8151";

      $weather_data = file_get_contents($url);
      $json = json_decode($weather_data,TRUE);

      for($i=0; $i<25; $i++){

      $temp = $json['data'][$i]['temp'];
      $Weather_Description= $json['data'][$i]['weather']['description'];
      $windspeed = $json['data'][$i]['wind_spd'];
      $clouds = $json['data'][$i]['clouds'];
      $datetime = $json['data'][$i]['datetime'];


      echo "<strong> City Name: </strong>" . $user_city . "<br/>";
      echo "<strong> Temprature: </strong>" . $temp . "<br/>";
      echo "<strong> Weather description: </strong>" . $Weather_Description . "<br/>";
      echo "<strong> Wind speed: </strong>" . $windspeed. "<br/>";
      echo "<strong> Clouds: </strong>" . $clouds. "<br/>";
      echo "<strong> Datetime: </strong>" . $datetime . "<br/>"."<br/>";

        }
    }

 ?>
