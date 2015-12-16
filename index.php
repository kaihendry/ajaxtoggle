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

td { position: relative; }
// CSS mastery by @cheeaun https://twitter.com/cheeaun/status/676737126973632516
label{
  display: block;
  border: 1px solid pink;
  border-radius: 5px;
  padding: 10px;
  margin: 10px;
  position: relative;
}
input[type=checkbox]:checked:after{
  content: '';
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: lightblue;
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
<td><label><input id="<?=$id?>" <?php echo (file_exists("arm/$id") ? "checked" : ""); ?> type=checkbox></label></td>
<td><?=$id?></td>
</tr>
<?php } ?>
</tbody>
</table>

<p><a href="https://github.com/kaihendry/ajaxtoggle">Source code</a></p>
</body>
</html>
