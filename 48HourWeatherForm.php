<head>
<title>48 Hour Weather</title>
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

<form method="get" action="48HourWeather.php" >
    <h1>48 Hour Weather Forecast </h1>
    City Name: &nbsp; &nbsp;<input type="text" name="city" placeholder="city"><br><br>
    <div class="btn">
        <input type="submit" value="submit">
    </div>
</form>