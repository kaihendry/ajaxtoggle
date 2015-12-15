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
  width: 80%;
}
th { text-align: left; }
label { display: block; }
td { position: relative; }
input[type=checkbox]:checked + label::before {
  content: "";
  position: absolute;
  top: 0; bottom: 0; left: 0; right: 0;
	background-color: pink;
  z-index: -1;
}
</style>
</head>
<body>

<table>
<thead>
<tr>
<th></th>
<th>Arm</th>
<th>Name</th>
</tr>
</thead>
<tbody>
<?php foreach (array("1111", "2222", "3333") as $id) { ?>
<tr>
<td>⚠</td>
<td><input id="<?=$id?>" <?php echo (file_exists("arm/$id") ? "checked" : ""); ?> type=checkbox><label for="<?=$id?>">&nbsp;</label></td>
<td><?=$id?></td>
</tr>
<?php } ?>
</tbody>
</table>

<p><a href="https://github.com/kaihendry/ajaxtoggle">Source code</a></p>
</body>
</html>
