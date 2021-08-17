<?php 
	require_once "model/databaseModel.php";
	class customerModel extends databaseModel
	{
		public $Id_Customer;
		public $Name_Customer;
		public $Gender;
		public $DoB;
		public $PhoneNum;
		public $Email;

		public function getAll()
		{
			$con = $this->open();
			$sql = "SELECT * FROM customer";
			$result = mysqli_query($con, $sql);

			$this->close($con);

			$customerArray = [];
			foreach ($result as $each) {
				$customer = new customerModel();
				$customer->Id_Customer = $each['Id_Customer'];
				$customer->Name_Customer = $each['Name_Customer'];
				$customer->DoB = $each['DoB'];
				$customer->Phone_Num = $each['Phone_Num'];
				$customer->Gender = $each['Gender'];
				$customer->Email = $each['Email'];

				array_push($customerArray, $customer);
			}
			return $customerArray;
		}

		public function insert()
		{
			$con = $this->open();
			$sql = "INSERT INTO customer (Name_Customer, DoB, Phone_Num, Gender, Email ) 
					VALUES ('$this->Name_Customer','$this->DoB', '$this->Phone_Num', '$this->Gender', '$this->Email' )";

			mysqli_query($con, $sql);
			$this->close($con);
		}
	}
?>