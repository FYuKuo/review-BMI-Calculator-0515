<?php
if(!empty($_GET)){
    $height=$_GET['height'];
    $weight=$_GET['weight'];
    
    $bmi=round($weight / (($height/100)*($height/100)));

    $result="";

    if($bmi < 18.5){
        $result="體重過輕";
    }elseif($bmi >=18.5 && $bmi < 24){
        $result="正常範圍";
    }elseif($bmi >=24 && $bmi < 27){
        $result="過重";
    }elseif($bmi >=27 && $bmi < 30){
        $result="輕度肥胖";
    }elseif($bmi >=30 && $bmi < 35){
        $result="中度肥胖";
    }elseif($bmi >= 35){
        $result="重度肥胖";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="content">
        <div class="left">
            <div class="left_img">
                <img src="./bmi.png" alt="" width="150px" height="150px">
                <p>BMI Calculator</p>
            </div>
<?php
if(!empty($bmi)){
?>

            <div class="left_result">
                <div class="result_bmi">
                    <?=$bmi?>
                </div>
                <div class="result_text">
                    <?=$result?>
                </div>
            </div>
<?php
}
?>    
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