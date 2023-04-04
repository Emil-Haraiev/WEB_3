<?php
 include('connection.php');
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div class="wrapper1">
    <form action="profit.php" method="get">
        <p><strong>Выберите дату чтоб узнать доход с проката</strong>

            <input name="selected_date" type=date>
            <input class="buttons"  type="submit" value="Узнать" />

    </form>


    <form method="get" action="vendor.php">
        <p><strong>Выберите производителя, для просмотра его машин</strong>

            <select name='vend'>
                <option>Производители</option>

                <?php
        $sql = "SELECT * FROM lb_pdo_rent.vendors";

        foreach($dbh->query($sql) as $row)
                {
                $name_vend = $row['Name'];
                echo "<option value = '$name_vend'> $name_vend</option>";
                }
                ?>
        </p>
        </select>

        <input class="buttons" type="submit" value="Посмотреть">
    </form>
    <form method="get" action="avaible_car.php">
        <p><strong>Выберите дату чтоб получить доступные авто</strong>

            <input name="selected_date" type=date >
            <input class="buttons" type="submit" value="Получить" />
        </p>
    </form>
</div>


</body>

</html>