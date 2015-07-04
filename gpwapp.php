<?php
/*
 * gpwapp.php
 * 
 * Author: Erik Collett
 * 
 * TASKS:
 * Connect to MongoDB, Display Content
 * 
 */

$db = "gpwapp";
$collectionname = "character";

$m = new MongoClient(); // connect

print $m->$db ."<br/>";
print $m->$db->$collectionname ."<br/>";

$collection = $m->$db->$collectionname;

$cursor = $collection->findOne(array('_id' => 1));

print_r($cursor);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Gamepoint Worlds</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.24" />
</head>

<body>
	
</body>

</html>
