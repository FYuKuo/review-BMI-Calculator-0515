<?php
if(!empty($_GET)){
    $height=$_GET['height'];
    $weight=$_GET['weight'];
    
    $bmi=round($weight / (($height/100)*($height/100)),1);

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
    <link rel="stylesheet" href="./style01.css">
</head>
<body class="main">
    <div class="content">
        <div class="left">
            <div class="left_img">
                <img src="./bmi.png" alt="" width="100px" height="100px">
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

            <label class="form_items" for="">Height</label>
            <input class="form_items" type="number" name="height" id="">
            <label class="form_items" for="">Weight</label>
            <input class="form_items" type="number" name="weight" id="">

            <input class="form_items" type="submit" value="Calculator">
        </form>
    </div>
</body>
</html>