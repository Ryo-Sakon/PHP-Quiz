<head>
<link rel="stylesheet" href="style.css">
</head>


<?php $name = $_POST['my_name']; ?>
<p>お疲れ様です<?=$name ?>さん</p>

<form action="answer.php" method="post">
<h2>①マークアップ言語はどれ？</h2>
<?php 
  $port_number = ["HTML","PHP","MySQL","JavaScript"];
  foreach ($port_number as $value) {?>
  <input type="radio" name="port_number" value="<?=$value;?>"><?=$value; } ?>    
  <h2>②Webページを作成するための言語は？</h2>
<?php 
  $language = ["PHP","Python","JAVA","HTML"];
  foreach ($language as $value) {?>
  <input type="radio" name="language" value="<?=$value;?>"><?=$value; } ?>    
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<?php 
  $command = ["join","select","insert","update"];
  foreach ($command as $value) {?>
  <input type="radio" name="command" value="<?=$value;?>"><?=$value; } ?>
  <br>
  <input type="hidden" name="my_name" value="<?=$name; ?>">
  <input type="submit" value="回答する">

</form>