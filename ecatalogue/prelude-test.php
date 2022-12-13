<?php

$rand_res = rand(1000000000, 2147483647);

echo($rand_res."<br>");

$db = new SQLite3('/home/ubuntu/storage/test-2.sqlite');

if(!$db) {
  echo $db->lastErrorMsg();
} else {
  echo "Open database success...\n";
}

// $db->close();

echo realpath("test-2.sqlite.sqlite")."\n";

$sql = "INSERT INTO a_operands (substance) VALUES (".$rand_res.")";
echo ($sql);
echo ("<br>");

$ret = $db->exec($sql);
if(!$ret){
  echo $db->lastErrorMsg();
} else {
  echo "Insert data is success...\n";
}

$db->close();
