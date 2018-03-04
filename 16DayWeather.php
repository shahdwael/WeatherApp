<head>
<title>16 day Weather</title>
    <style>
        body{
            background-image: url("images (1).jpg");
            background-repeat:no-repeat;
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

      $url = "https://api.weatherbit.io/v2.0/forecast/daily?city=".$user_city."&key=f88caa4e5e914a64adf48a41905a8151";

      $weather_data = file_get_contents($url);
      $json = json_decode($weather_data,TRUE);

       for($i=0; $i<16; $i++){

           
            $temp = $json['data'][$i]['temp'];
            $Weather_Description= $json['data'][$i]['weather']['description'];
            $windspeed = $json['data'][$i]['wind_spd'];
            $clouds = $json['data'][$i]['clouds'];
            $datetime = $json['data'][$i]['datetime'];
           
           if($i!=0){
               echo "<strong>Day ".++$i.":</strong>"."<br>";
               $i--;
           }
           else{
               echo "<strong>Day 1:</strong>"."<br>";
           }

            echo "<strong> City Name: </strong>" . $user_city . "<br>";
            echo "<strong> Temprature: </strong>" . $temp . "<br>";
            echo "<strong> Weather description: </strong>" . $Weather_Description . "<br>";
            echo "<strong> Wind speed: </strong>" . $windspeed. "<br>";
            echo "<strong> Clouds: </strong>" . $clouds. "<br>";
            echo "<strong> Datetime: </strong>" . $datetime . "<br>"."<br>";
       }
    }

 ?>
</body>