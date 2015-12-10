<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Toggle button</title>
<meta name=viewport content="width=device-width, initial-scale=1">
<script src=main.js></script>
</head>
<body>
<ul>
<?php foreach (array("1111", "2222") as $id) { ?>
<li><?=$id;?><button data-id=<?=$id;?>><?php echo (file_exists("mute/$id") ? 'Unmute' : 'Mute'); ?></button></li>
<?php } ?>
</ul>

<p><a href="https://github.com/kaihendry/ajaxtoggle">Source code</a></p>
</body>
</html>
