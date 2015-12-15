<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Toggle button</title>
<meta name=viewport content="width=device-width, initial-scale=1">
<script src=main.js></script>
<style>
body { font-family: sans-serif; }
table {
  border-collapse: collapse;
  width: 100%;
}
td.check { background-color: pink; }
th { text-align: left; }
label { display: block; }
</style>
</head>
<body>

<table>
<caption>Registered home owners</caption>
<thead>
<tr>
<th></th>
<th>Arm</th>
<th>Name</th>
</tr>
</thead>
<tbody>
<?php foreach (array("1111", "2222", "3333") as $id) { ?>
<tr <?php echo ((file_exists("mute/$id") ? "class=muted" : "")); ?>>
<td>⚠</td>
<td class=check><label><input type=checkbox></label></td>
<td><?=$id?></td>
</tr>
<?php } ?>
</tbody>
</table>

<p><a href="https://github.com/kaihendry/ajaxtoggle">Source code</a></p>
</body>
</html>
