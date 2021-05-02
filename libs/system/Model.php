<?php
	namespace libs\system;

	class Model
	{
		protected $entityManager;
		
		public function __construct()
		{
			require_once "bootstrapp.php";
			$this -> entityManager = $entityManager;
		}
	}
?>