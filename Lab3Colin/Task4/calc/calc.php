<html>
<head><title>Calculation Result</title></head>
<body>
<?php
if(is_numeric($_GET['val1'])&& is_numeric($_GET['val2']))
{
if($_GET['calc']!=null)
{
switch($_GET['calc'])
{
case"add":$result=$_GET['val1']+$_GET['val2'];break;
case"sub":$result=$_GET['val1']-$_GET['val2'];break;
case"mul":$result=$_GET['val1']*$_GET['val2'];break;
case"div":$result=$_GET['val1']/$_GET['val2'];break;
}
echo("Calculation result:$result");
}
}
else
{echo("Invalid entry-please retry");}
?>
</body></html>