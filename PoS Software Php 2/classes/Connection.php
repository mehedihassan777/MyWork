<?php 
	class Connection
	{
		private $con = "";
		function connect()
		{
			$this->con = new mysqli("localhost","root","","pos_db");
			return $this->con;
		}
	}