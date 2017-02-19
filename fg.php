
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php

/*
$con=mysqli_connect('localhost','root','root','tblog');
mysql_query("SET NAMES 'utf-8'");
mysql_query('SET CHARACTER SET utf-8');
mysqli_query($con,"INSERT INTO ...(...) VALUE ('...')");
mysqli_query($con,"SELECT * FROM ...");
mysqli_query($con,"SELECT * FROM ... WHERE ... = ...");
mysqli_query($con,"SELECT ... FROM ...");
mysqli_query($con,"SELECT ... FROM ... WHERE ... = ...");
mysqli_query($con,"DELETE FROM ... WHERE ... = ...");
mysqli_query($con,"UPDATE ... SET ... = ... WHERE ...=...");
mysqli_query($con,"SELECT * FROM ... LIMIT ...,...");
mysqli_num_rows(mysqli_query(...));
mysqli_fetch_array(mysqli_query(...));
mysqli_fetch_assoc(mysqli_query(...));
mysqli_fetch_object(mysqli_query(...));
mysqli_free_result(mysqli_query(...));
mysqli_close($con);
ASC|DESC
*/



/**************
Start of class
By MedoNinja
**************/
define('SITEROOT', '/mgla/');
// define(name,value,case_insensitive) ; $_SERVER['HTTP_HOST']

class medo {

   private $dbHost = 'localhost';
   private $dbUser = 'root';
   private $dbPwd = 'root';
   private $database = 'MG-AS';

function insert($table,$cell,$value) {
	$con=mysqli_connect($this->dbHost, $this->dbUser, $this->dbPwd,$this->database);	
	mysqli_set_charset($con, "utf8");
	$insert=mysqli_query($con,"INSERT INTO ".$table."(".$cell.") VALUE ( ' " .$value. "  ')");
	return $insert;
	//insert("ewo","...,...,...,...,...,....",  ("$... ',' $...','$...','$...','$...','$..."));
}

function selecta($table0,$value8){
	if(!empty($value8)){$value8="ORDER BY ".$value8;}else{$value8 = "";}
	$con=mysqli_connect($this->dbHost, $this->dbUser, $this->dbPwd,$this->database);
	mysqli_set_charset($con, "utf8");
	$selecta=mysqli_query($con,"SELECT * FROM ".$table0." ".$value8."");
	return $selecta;
}

function selectw($table1,$value1,$value2){
	$con=mysqli_connect($this->dbHost, $this->dbUser, $this->dbPwd,$this->database);
	mysqli_set_charset($con, "utf8");
	$selectw=mysqli_query($con,"SELECT * FROM ".$table1." WHERE ".$value1." = '".$value2."'");
	return $selectw;
}

function selects($cell0,$table2,$value20){
	if(!empty($value20)){$value20="ORDER BY ".$value20;}else{$value20 = "";}
	$con=mysqli_connect($this->dbHost, $this->dbUser, $this->dbPwd,$this->database);
	mysqli_set_charset($con, "utf8");
	$selects=mysqli_query($con,"SELECT ".$cell0." FROM ".$table2." ".$value20."");
	return $selects;
}

function selectsw($cell1,$table3,$value3,$value4){
	$con=mysqli_connect($this->dbHost, $this->dbUser, $this->dbPwd,$this->database);
	mysqli_set_charset($con, "utf8");
	$selectsw=mysqli_query($con,"SELECT ".$cell1." FROM ".$table3." WHERE ".$value3." = '".$value4."'");
	return $selectsw;
}

function delete($table4,$value5,$value6){
	$con=mysqli_connect($this->dbHost, $this->dbUser, $this->dbPwd,$this->database);
	mysqli_set_charset($con, "utf8");
	$delete=mysqli_query($con,"DELETE FROM ".$table4." WHERE ".$value5."=".$value6."");
	return $delete;
}

function update($table5,$value7,$value9,$value10){
	$con=mysqli_connect($this->dbHost, $this->dbUser, $this->dbPwd,$this->database);
	mysqli_set_charset($con, "utf8");
	$update=mysqli_query($con,"UPDATE ".$table5." SET ".$value7." WHERE ".$value9."=".$value10."");
	return $update;
}

function limit($table6,$value11,$value12,$value21,$value22){
	if(!empty($value21)){$value21="ORDER BY ".$value21;}else{$value21 = "";}
	$value22= !empty($value22) ? "WHERE ".$value22 : "";
	$con=mysqli_connect($this->dbHost, $this->dbUser, $this->dbPwd,$this->database);
	mysqli_set_charset($con, "utf8");
	$limit=mysqli_query($con,"SELECT * FROM ".$table6." ".$value22." ".$value21." LIMIT ".$value11.",".$value12."");
	return $limit;
}

function num($value13){
	$num=mysqli_num_rows($value13);
	mysqli_free_result($value13);
	return $num;
}

function farrayn($value14){
	$farrayn=mysqli_fetch_array($value14,MYSQLI_NUM);
	return $farrayn;
}

function farraya($value15){
	$farraya=mysqli_fetch_array($value15,MYSQLI_ASSOC);
	return $farraya;
}

function fassoc($value16){
	$fassoc=mysqli_fetch_assoc($value16);
	return $fassoc;
}

function fobject($value17){
	$fobject=mysqli_fetch_object($value17);
	return $fobject;
}

function freenum($value18){
	$freenum=mysqli_free_result($value18);
	return $freenum;
}

function close(){
	$con=mysqli_connect($this->dbHost, $this->dbUser, $this->dbPwd,$this->database);
	mysqli_close($con);
}

function safeput($value19) {
   $con=mysqli_connect($this->dbHost, $this->dbUser, $this->dbPwd,$this->database);
   $value19 = trim($value19);
   $value19 = stripslashes($value19);
   $value19 = mysqli_real_escape_string($con,$value19);
   $value19 = htmlspecialchars($value19);
   $value19 = strip_tags($value19);
   return $value19;
}

}
/************
End of class
By MedoNinja
************/

?>