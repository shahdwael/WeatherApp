<head>
<title>Historical Weather Hourly</title>
    <style>
        body{
            background-image: url("images (1).jpg");
            background-repeat: no-repeat;
            background-size: 100%;
            font-size: 150%;
        }
        div.btn{
            margin-left: 18%;
        }
    
    </style>
</head>

<form method="get" action="HistoricalWeatherHourly.php" >
    <h1>Historical  Weather Forecast Hourly </h1>
    City Name: &nbsp;<input type="text" name="city" placeholder="city"><br>
    Start date: &nbsp;&nbsp;&nbsp;<input type="text" name="start" placeholder="start date"><br>
    End date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="end" placeholder="end date"><br><br>
    <div class="btn">
        <input type="submit" value="submit">
    </div>

</form>