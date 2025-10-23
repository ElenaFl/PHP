<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="wcolor: zinc; font-size: 21px; font-style: italic; margin: 50px;">
    <form method="POST">
        <lable for="row">Введите количество строк:</lable>
        <input type="number" id="row" name="row" min="1" max="10"><br><br>
        <lable for="col">Введите количество столбцов:</lable>
        <input type="number" id="col" name="col" min="1" max="20"><br><br>
        <button style="font-size: 18px; padding: 5px 10px; border: 1px solid gray; color: zinc; border-radius: 5px;">Получить</button><br><br>
    </form>   
    <table>
        <tbody>
            <?php 
                if(isset($_POST['row']) && isset($_POST['col'])) {
                    $row = $_POST['row']; 
                    $col = $_POST['col']; $row;?>
                    <table style = "border: 3px solid #ff9999;">
                    <?php
                    for($i = 0; $i < $row; $i++) { 
                        $i % 2 === 0 ? $bc = '#ff9999': $bc = '#ff6666';
                    ?>
                        <tr style = "width: 100px; height: 50px; background-color: <?php echo $bc?>">
                            <?php for($y = 0; $y < $col; $y++) { ?>
                                <td style = "width: 50px; height: 50px;"></td>
                            <?php }?>
                        </tr>
                    <?php }
                }?>
            </tbody>
    </table>
</body>
</html> 