<?php
require_once 'config/connect.php';
$goods = mysqli_query($connect, "SELECT * FROM `goods`");
$goods = mysqli_fetch_all($goods);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div>
    <h3>продукты</h3>
    <table>
        <tr>
            <th>№</th>
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>price</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        <?php
foreach($goods as $key => $item){
    ?>
    <tr>
    <td><?=$key+1?></td>
    <td><?=$item[0]; ?></td>
    <td><?=$item[1]; ?></td>
    <td><?=$item[2]; ?></td>
    <td><?=$item[3]; ?></td>
    <td><a href="update.php?id=<?=$item[0]; ?>">&#9998;</a></td>
    <td><a href="action/delete.php?id=<?=$item[0]; ?>">&#10060;</a></td>
   </tr>
   <?php
}
 ?>
       
    </table>


    <h3>добавить товар</h3>
    <form action="action/create.php" method="post">
    <input type="text" name="title"  placeholder="название товара">
    <textarea name="description"  placeholder="описание товара"></textarea>
    <input type="number" name="price"  placeholder="цена">
    <button type="submit">add</button>
    </form>
   

    </div>
</body>
</html>