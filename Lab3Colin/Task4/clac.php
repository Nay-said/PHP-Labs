<html>
<head>
<title>Calculation Result</title>
</head>

<body>
<?php
if(is_numeric($_GET['val1'])&& is_numeric($_Get['val2']))
	
	{
		if($GET['calc']!=null)
	}

	{
		switch($_GET['calc'])
	}
	
	{
		case"add":$result=$_GET['val1']+$_GET['val2'];break;
		case"sub":$result=$_GET['val1']-$_GET['val2'];break;
		case"mul":$result=$_GET['val1']*$_GET['val2'];break;
		case"div":$result=$_GRT['val1]/$_GET['val2'];break;
	}
	
	{
		echo("Calculation Result:$result");
	}