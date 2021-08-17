<?php 
	require_once "model/customerModel.php";
	class customerController
	{
		static function viewCustomer()
		{
			$customer = new customerModel();
			$listCustomer = $customer->getAll();

			require_once "views/customer/list_customer.php";
		}

		static function viewInsert()
		{
			require_once "views/customer/insert_customer.php";
		}

		static function insertProcess()
		{
			$Name_Customer = $_POST['Name_Customer'];
			$DoB = $_POST['DoB'];
			$Gender = $_POST['Gender'];
			$Phone_Num = $_POST['Phone_Num'];
			$Email = $_POST['Email'];

			$customer = new customerModel();
			$customer->Name_Customer = $Name_Customer;
			$customer->DoB = $DoB;
			$customer->Phone_Num = $Phone_Num;
			$customer->Email = $Email;

			$customer->insert();

			header ('Location: ?controller=customer');
		}

		
	}
 ?>