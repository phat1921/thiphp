<?php 
	class databaseModel
	{
		public function open()
		{
			$con = mysqli_connect("localhost", "root", "", "test");
			return $con;
		}

		public function close($con)
		{
			mysqli_close($con);
		}
	}
 ?>