<head>
<title>Current Weather</title>
    <style>
        body{
            background-image: url("images (1).jpg");
            background-repeat: no-repeat;
            background-size: 100%;
            font-size: 150%;
        }
        div.btn{
            margin-left: 18.5%;
        }
    
    </style>
</head>
<h1>Current weather</h1>
<form method="GET" action="CurrentWeather.php" >
    City Name: &nbsp; &nbsp;<input type="text" name="city" placeholder="city"> <br><br>
    <div class="btn">
        <input type="submit" value="submit" align="right" >
    </div>
</form>