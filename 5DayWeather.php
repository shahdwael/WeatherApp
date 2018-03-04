<head>
<title>5 day Weather</title>
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
<body>
<?php
    if(isset($_GET))
    {
      $user_city=$_GET['city'];

      $url = "https://api.weatherbit.io/v2.0/forecast/3hourly?city=".$user_city."&key=f88caa4e5e914a64adf48a41905a8151";

      $weather_data = file_get_contents($url);
      $json = json_decode($weather_data,TRUE);


      echo "<strong> Day one: </strong>"."<br>";

      $temp = $json['data']['0']['temp'];
      $Weather_Description= $json['data']['0']['weather']['description'];
      $windspeed = $json['data']['0']['wind_spd'];
      $clouds = $json['data']['0']['clouds'];
      $datetime = $json['data']['0']['datetime'];

      echo "<strong> City Name: </strong>" . $user_city . "<br/>";
      echo "<strong> Temprature: </strong>" . $temp . "<br/>";
      echo "<strong> Weather description: </strong>" . $Weather_Description . "<br/>";
      echo "<strong> Wind speed: </strong>" . $windspeed. "<br/>";
      echo "<strong> Clouds: </strong>" . $clouds. "<br/>";
      echo "<strong> Datetime: </strong>" . $datetime . "<br/>". "<br/>";
        
        
      echo "<strong> Day two: </strong>"."<br>";

      $temp = $json['data']['2']['temp'];
      $Weather_Description= $json['data']['2']['weather']['description'];
      $windspeed = $json['data']['2']['wind_spd'];
      $clouds = $json['data']['2']['clouds'];
      $datetime = $json['data']['2']['datetime'];

      echo "<strong> City Name: </strong>" . $user_city . "<br/>";
      echo "<strong> Temprature: </strong>" . $temp . "<br/>";
      echo "<strong> Weather description: </strong>" . $Weather_Description . "<br/>";
      echo "<strong> Wind speed: </strong>" . $windspeed. "<br/>";
      echo "<strong> Clouds: </strong>" . $clouds. "<br/>";
      echo "<strong> Datetime: </strong>" . $datetime . "<br/>". "<br/>";
        
      echo "<strong> Day three: </strong>"."<br>";

      $temp = $json['data']['10']['temp'];
      $Weather_Description= $json['data']['10']['weather']['description'];
      $windspeed = $json['data']['10']['wind_spd'];
      $clouds = $json['data']['10']['clouds'];
      $datetime = $json['data']['10']['datetime'];

      echo "<strong> City Name: </strong>" . $user_city . "<br/>";
      echo "<strong> Temprature: </strong>" . $temp . "<br/>";
      echo "<strong> Weather description: </strong>" . $Weather_Description . "<br/>";
      echo "<strong> Wind speed: </strong>" . $windspeed. "<br/>";
      echo "<strong> Clouds: </strong>" . $clouds. "<br/>";
      echo "<strong> Datetime: </strong>" . $datetime . "<br/>". "<br/>";
        
      echo "<strong> Day four: </strong>"."<br>";

      $temp = $json['data']['18']['temp'];
      $Weather_Description= $json['data']['18']['weather']['description'];
      $windspeed = $json['data']['18']['wind_spd'];
      $clouds = $json['data']['18']['clouds'];
      $datetime = $json['data']['18']['datetime'];

      echo "<strong> City Name: </strong>" . $user_city . "<br/>";
      echo "<strong> Temprature: </strong>" . $temp . "<br/>";
      echo "<strong> Weather description: </strong>" . $Weather_Description . "<br/>";
      echo "<strong> Wind speed: </strong>" . $windspeed. "<br/>";
      echo "<strong> Clouds: </strong>" . $clouds. "<br/>";
      echo "<strong> Datetime: </strong>" . $datetime . "<br/>". "<br/>";
        
      echo "<strong> Day five: </strong>"."<br>";

      $temp = $json['data']['26']['temp'];
      $Weather_Description= $json['data']['26']['weather']['description'];
      $windspeed = $json['data']['26']['wind_spd'];
      $clouds = $json['data']['26']['clouds'];
      $datetime = $json['data']['26']['datetime'];

      echo "<strong> City Name: </strong>" . $user_city . "<br/>";
      echo "<strong> Temprature: </strong>" . $temp . "<br/>";
      echo "<strong> Weather description: </strong>" . $Weather_Description . "<br/>";
      echo "<strong> Wind speed: </strong>" . $windspeed. "<br/>";
      echo "<strong> Clouds: </strong>" . $clouds. "<br/>";
      echo "<strong> Datetime: </strong>" . $datetime . "<br/>";
    }
    

 ?>
    </body>
