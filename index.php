<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Toggle button</title>
<meta name=viewport content="width=device-width, initial-scale=1">
<script src=https://code.jquery.com/jquery-2.1.4.min.js></script>
<script src=main.js></script>
</head>
<body>
<ul>
<?php foreach (array("1111", "2222") as $id) { ?>
<li><?=$id;?><button data-id=<?=$id;?>><?php echo (file_exists("mute/$id") ? 'Unmute' : 'Mute'); ?></button></li>
<?php } ?>
</ul>
</body>
</html>
