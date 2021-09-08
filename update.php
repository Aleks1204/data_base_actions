<?php
require_once 'config/connect.php';
$goods_id = $_GET['id'];
$good = mysqli_query($connect, "SELECT * FROM `goods` WHERE `id`='$goods_id'");
$good = mysqli_fetch_assoc($good);
print_r($good);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>edite</title>
</head>
<body>
    <div>
    <h3>обновить товар</h3>
    <form action="action/update.php" method="post">
    <input type="hidden" name="id" value="<?=$goods_id ?>">
    <input type="text" name="title"  value="<?=$good['title'] ?>">
    <textarea name="description"><?=$good['discription'] ?></textarea>
    <input type="number" name="price"  value="<?=$good['price'] ?>">
    <button type="submit">edite</button>
    </form>
    </div>
</body>
</html>