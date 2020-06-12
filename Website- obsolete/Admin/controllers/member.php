<?php
class Member extends Controller{
	protected function Index(){
		$viewmodel = new MemberModel();
		$this->returnView($viewmodel->Index(), true);
	}

	protected function add(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'member');
		}
		$viewmodel = new MemberModel();
		$this->returnView($viewmodel->add(), true);
	}
}