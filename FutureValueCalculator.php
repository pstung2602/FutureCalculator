<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
    <style>
        input[type=number] {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }

    </style>
</head>
<body>
<br/>
<h3>Simple Calculator</h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    So tien ban dau
    <input type="number" name="search1"/><br>
    Lai suat
    <input type="number" name="search2"/><br>
    So nam
    <input type="number" name="search3"/><br>
    <input type="submit" id="submit" value="Calculate"/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $money = $_POST["search1"];
    $rate = $_POST["search2"]/100;
    $year = $_POST["search3"];
    echo($money*((1+$rate))**$year);


}
?>
</body>
</html>