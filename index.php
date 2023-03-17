<!DOCTYPE html>
<html>

<head>
    <title>BMI Calculator</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <!-- Navigation Bar -->
    <div class="topnav">
        <a class="active" href="#home">BMI Calculator</a>
        <a href="#Home">Home</a>
        <a href="#start">Start BMI Calculator</a>
        <a href="#about">About</a>
    </div>

    <div class="container mt-5">
        <h1>BMI Calculator</h1>
        <form>
            <div class="form-group">
                <label for="weight">Weight (in kg)</label>
                <input type="number" class="form-control" id="weight" placeholder="Enter weight">
            </div>
            <div class="form-group">
                <label for="height">Height (in cm)</label>
                <input type="number" class="form-control" id="height" placeholder="Enter height">
            </div>
            <button type="button" class="btn btn-primary" onclick="calculateBMI()">Calculate</button>
        </form>
        <div id="result"></div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>

    <!-- Main JS -->
    <script src="js/main.js"></script>
</body>

</html>