<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 include("config.php");
 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
	$a = $_POST['date'];
	$b = $_POST['item'];
	$c = $_POST['amount'];
	$d = $_POST['name'];
	
	
	
	$qry=mysql_query("INSERT INTO expense_info(exp_date,exp_item,exp_amount,exp_name)
	VALUES('$a','$b','$c','$d')");
	
	if($qry==true)
	{
		echo"<center>"." Detail successfully inserted"."</center>";
        header("location:index.php");
		}
		else{
		echo "request method is not POST";
		}
 }	
	
	
?>
</body>
</html>