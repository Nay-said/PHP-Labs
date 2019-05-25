<html>
<head>
	<link href="task5.css" rel="stylesheet" type="text/css"/>
	<title>Study hours result</title>
</head>

<body>
<?php
	$intStudyHours = 0;
	$intCreditHours = 0;
	$intWeeklyHours = 0;
	$intDaysToStudy = 0;
	$intDailyStudyHours = 0;
	
	$strTitle = $_POST["strTitle"];
	echo "<br /><b>Paper:</b>$strTitle";
	
	$strCredit = $_POST["strCredit"];
	echo "<br /><b>Avaialable credits:</b>$strCredit";
	
	$intCreditHours = $strCredit*10;
	
	$strWeeks = $_POST["strWeeks"];
	echo "<br /><b>Paper duration:</b>$strWeeks";
	$intWeeklyHours = $intCreditHours/$strWeeks;
	
	$strProgramme = $_POST["strProgramme"];
	echo "<br /><b>Programme of study:</b>$strProgramme";
	
	if(isset($_POST["strMon"])){
		$strMon = $_POST["strMon"];
		$intDaysToStudy ++;
	}else{
		$strMon = "";
	}
	
	if(isset($_POST["strTue"])){
		$strTue = $_POST["strTue"];
		$intDaysToStudy ++;
	}else{
		$strTue = "";
	}

	if(isset($_POST["strWed"])){
		$strWed = $_POST["strWed"];
		$intDaysToStudy ++;
	}else{
		$strWed = "";
	}

	if(isset($_POST["strThur"])){
		$strThur = $_POST["strThur"];
		$intDaysToStudy ++;
	}else{
		$strThur = "";
	}	

	if(isset($_POST["strFri"])){
		$strFri = $_POST["strFri"];
		$intDaysToStudy ++;
	}else{
		$strFri = "";
	}

	if(isset($_POST["strSat"])){
		$strSat = $_POST["strSat"];
		$intDaysToStudy ++;
	}else{
		$strSat = "";
	}	

	if(isset($_POST["strSun"])){
		$strSun = $_POST["strSun"];
		$intDaysToStudy ++;
	}else{
		$strSun = "";
	}	
	
	$intDailyStudyHours = $intWeeklyHours/$intDaysToStudy;
	//var_dump($intDailyStudyHours);
	//echo $intDailyStudyHours;
	if($strSun=="" AND $strSat=="" AND $strFri=="" AND $strThur=="" AND $strWed=="" AND $strTue=="" AND $strMon=="")
		
			echo"<br/><b>Error! You have not selected study day</b>";
		else
			echo"<br/><b>Your study days are:</b> $strMon $strTue $strWed $strThur $strFri $strSat $strSun";

		echo"<hr>Based on information provided,<b>\"$strTitle\"<b>requires minimum of <strong><font color=\"red\"> $intCreditHours</font></strong> study hours for this semester.";

		echo"<br>This is equivalant to<strong><font color=\"red\">".
			round($intWeeklyHours)."</font></strong>hours per week";
		echo"or<strong><font color=\"red\">".
			round($intDailyStudyHours)."</font></strong>hours per day because you are available to study<b><font color=\"green\">$intDaysToStudy</font></b>times weeks";
		
			echo"($strMon $strTue $strWed $strThur $strFri $strSat $strSun)";
?>
</body>
</html>