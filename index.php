<?php
define('BASE_PATH', realpath(dirname(__FILE__)));
require 'Loader.php';
$loader = new Loader();
$router = new router();
$rout = $router->start();
?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="js.js"></script>
</head>
<body>

<div class="home1">
    <div class="text" align="center"><b>База даних обліку академічної успішності студентів ВУЗу<br>ИТ.мз-52с Діденко І. С.</b></div>
    <div class="home1_1"><a href="add">Вхідні дані</a></div>
    <div class="home1_2"><a href="data_all">Відомість</a></div>
</div>

<div class="home2" align="center">
<?= $rout; ?>
</div>

</body>
</html>