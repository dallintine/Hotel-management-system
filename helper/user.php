<?php
function profile($value)
{
	$email = $_SESSION['email'];
	$result = getAll('*', 'buyeco', "email='$email'");
	while ($row = mysqli_fetch_array($result)) 
	{
		$id = $row['id'];
		$name = $row['name'];
		$email = $row['email'];
		$phone = $row['phone'];
		$pm_unit = $row['pm_unit'];
		$total = $row['total'];
		//$total = $row['bitAdd'];
		$accountname = $row['accountname'];
		$accountnumber = $row['accountnumber'];
		$Method = $row['Method'];
		$type= $row['type'];
		$Ref_no= $row['Ref_no'];
	}

	return $$value;
}

function profile1($value)
{
	$email = $_SESSION['email'];
	$result = getAll('*', 'buyeco', "email='$email'");
	while ($row = mysqli_fetch_array($result)) 
	{
		$id = $row['id'];
		$name = $row['name'];
		$email = $row['email'];
		$phone = $row['phone'];
		$pm_unit = $row['pm_unit'];
		$total = $row['total'];
		$bitAdd = $row['bitAdd'];
		$Method = $row['Method'];
		$type= $row['type'];
		$Ref_no= $row['Ref_no'];
	}

	return $$value;
}

function price1($value)
{
	//$email = $_SESSION['email'];
	$result = getAll('spricebtc', 'users', "email='admin@betaexchangeng.com'");
	while ($row = mysqli_fetch_array($result)) 
	{
		$spricebtc = $row['spricebtc'];
		
		
	}

	return $$value;
}
function price2($value)
{
	//$email = $_SESSION['email'];
	$result = getAll('bpricebtc', 'users',"email='admin@betaexchangeng.com'");
	while ($row = mysqli_fetch_array($result)) 
	{
		$bpricebtc = $row['bpricebtc'];
		
		
	}

	return $$value;
}
function price3($value)
{
	//$email = $_SESSION['email'];
	$result = getAll('bpricepm', 'users',"email='admin@betaexchangeng.com'");
	while ($row = mysqli_fetch_array($result)) 
	{
		$bpricepm = $row['bpricepm'];
		
		
	}

	return $$value;
}
function price4($value)
{
	//$email = $_SESSION['email'];
	$result = getAll('spricepm', 'users',"email='admin@betaexchangeng.com'");
	while ($row = mysqli_fetch_array($result)) 
	{
		$spricepm = $row['spricepm'];
		
		
	}

	return $$value;
}