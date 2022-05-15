<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <div class="left">
            <div class="left_img">
                <img src="https://cdn0.iconfinder.com/data/icons/health-checkups-3/64/Bmi-measure-scale-weight-512.png" alt="">
                <p>BMI Calculator</p>
            </div>
            <div class="left_result">

            </div>
        </div>
        <form action="./BMI.php" method="get">

            <label for="">Height</label>
            <input type="number" name="height" id="">
            <label for="">Weight</label>
            <input type="number" name="weight" id="">

            <input type="submit" value="Calculator">
        </form>
    </div>
</body>
</html>