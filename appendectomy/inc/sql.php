<?php

#connect_to_db()	建立資料庫連線
#connect_valid()	檢驗連線是否正常

#----------------------------------------------------------------------------------------------------------------------------
//建立資料庫連線//
#----------------------------------------------------------------------------------------------------------------------------
function connect_to_db()
{
	if($link = mysql_pconnect("59.125.43.46", DBName, PASSWORD)
	{
		mysql_query("SET NAMES 'utf8'");
		if(mysql_select_db("appendectomy", $link))
			return true;
		else
			return false;
	}
}

#----------------------------------------------------------------------------------------------------------------------------
//檢驗連線是否正常
#----------------------------------------------------------------------------------------------------------------------------
function connect_valid()
{

	if(connect_to_db())
		return true;
	else
	{
		echo "<font color=red>Connection Abnormal!";
		return false;
	}

}

php?>
