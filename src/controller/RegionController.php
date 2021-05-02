<?php
	class RegionController extends controller
	{
		public function add()
		{
			return this->view->load(Region/add);
		}

		public function getAll()
		{
			return this->view->load(Region/getAll);
		}

		public function getRegionJson()
		{
			$r1 = array("id" =>1, "nom" =>"fatick");//{}
			$r2 = array("id" =>2, "nom" =>"thies");//{}

			$regions = array($r1, $r2);//[]
			echo json_encode($regions);
		}
	}
?>