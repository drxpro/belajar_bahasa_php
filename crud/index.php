<?php
include 'conn.php';
include 'conf.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>PDO CRUDSRUD</title>
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div class="top-gray"></div>
<div class="header">
<div class="big-logo">Latihan CRUDSRUD</div>
<?php include 'menu.php';?>
</div>
<div class="content">
<div class="container">
<?php
if(!is_null(get('p'))){
switch (get('p')) {
case 'home':
inc('home');
break;
case 'sekolah':
switch (get('m')) {
case 'home':
inc('all');
break;
case 'add':
inc('add');
break;
case 'edit':
inc('edit');
break;
default:
inc('all');
break;
}
break;
default:
inc('home');
break;
}
}else{ inc('home'); } ?>
</div>
</div>
</body>
</html>