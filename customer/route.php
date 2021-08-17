<?php 
	require_once "controller/homeController.php";
	require_once "controller/customerController.php";

	$controller = '';
	if(isset($_GET["controller"])){
		$controller = $_GET["controller"];
	}

	$action = isset($_GET['action']) ? $_GET['action'] : '';

	switch ($controller) {
		case '':
		case 'home':
				homeController::viewHome();
				break;	
			break;
		case 'customer':
				switch ($action) {
					case '':
						customerController::viewCustomer();
							break;	
					case 'insert':
						customerController::viewInsert();
							break;		
					case 'insertprocess':
						customerController::insertProcess();
							break;	
					default:
						echo "......";
						break;
				}
				break;	
		default:
			echo "none";
			break;
	}
 ?>