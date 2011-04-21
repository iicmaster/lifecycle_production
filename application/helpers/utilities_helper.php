<?php 

function check_query_error($query, $sql = NULL)
{
	if(!$query)
	{
		echo "<p>";
		echo $sql;
		echo "<hr />";
		echo (mysql_errno() ? "Error no. " . mysql_errno() . " : " : "") . mysql_error();
		echo "</p>";
		exit();
	}
	else
	{
		return TRUE;
	}
}
	
function change_date_format($date, $separator = " / ", $format = "dd-mm-yyyy")
{	
	if($format == "dd-mm-yyyy")
	{
		$newDate = explode("-", $date);
		$newDate = array_reverse($newDate);
		$newDate = implode($separator, $newDate);
	}
	return $newDate;
}

function print_array($arr)
{
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
	exit();
}

function comma_to_array($text)
{
	return explode(',', $text);
}

function array_to_comma($arr)
{
	return implode(',', $arr);
}

/* End of file utilities_helper.php */
/* Location: ./application/helpers/utilities_helper.php */