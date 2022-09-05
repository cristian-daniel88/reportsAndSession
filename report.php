<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
	$executionStartTime = microtime(true);	
	include("config.php");
	header('Content-Type: application/json; charset=UTF-8');
	$conn = new mysqli($cd_host, $cd_user, $cd_password, $cd_dbname, $cd_port, $cd_socket);
	if (mysqli_connect_errno()) {	
		$output['status']['code'] = "300";
		$output['status']['name'] = "failure";
		$output['status']['description'] = "database unavailable";
		$output['status']['returnedIn'] = (microtime(true) - $executionStartTime) / 1000 . " ms";
		$output['data'] = [];
		mysqli_close($conn);
		echo json_encode($output);
		exit;
	};
	$query = $conn->prepare('INSERT INTO report (custPoNumber, gbePoNumber, partNumber, serialNumRange, serialNumStart, serialNumEnd, date, workmanshipQual, tested, customerId, orderQty, declaredQty, unitsInspected, builtById, operator1Id, operator2Id, operator3Id, operator4Id, qcInspectorId, approvedById, packedById, checkedById, passLabelChk, orderNumChk, quantityChk, productDetailsChk, kitSuppliedChk) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
	$query->bind_param("sssssssssiiiiiiiiiiiiiiiiii", $_POST['custPoNumber'],$_POST['gbePoNumber'],$_POST['partNumber'], $_POST['serialNumRange'], $_POST['serialNumStart'], $_POST['serialNumEnd'], $_POST['date'], $_POST['workmanshipQual'], $_POST['tested'], $_POST['customerId'], $_POST['orderQty'], $_POST['declaredQty'], $_POST['unitsInspected'], $_POST['builtById'], $_POST['operator1Id'], $_POST['operator2Id'], $_POST['operator3Id'] , $_POST['operator4Id'], $_POST['qcInspectorId'], $_POST['approvedById'], $_POST['packedById'], $_POST['checkedById'], $_POST['passLabelChk'], $_POST['orderNumChk'], $_POST['quantityChk'], $_POST['productDetailsChk'], $_POST['kitSuppliedChk']);
	$query->execute();
	if (false === $query) {
		$output['status']['code'] = "400";
		$output['status']['name'] = "executed";
		$output['status']['description'] = "query failed";	
		$output['data'] = [];
		mysqli_close($conn);
		echo json_encode($output); 
		exit;
	};
	$output['status']['code'] = "200";
	$output['status']['name'] = "ok";
	$output['status']['description'] = "success";
	$output['status']['returnedIn'] = (microtime(true) - $executionStartTime) / 1000 . " ms";
	$output['data'] = [];	
	mysqli_close($conn);
	echo json_encode($output);?>