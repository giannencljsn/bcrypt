<?php 

defined('BASEPATH') OR exit('No direct script access allowed'); 

class Account extends CI_Controller {
	
	public function index()
	{
		$this->load->view('account/index');
	}

	public function login()
{
    // Check if username and password are set
    if(isset($_POST['username']) && isset($_POST['password'])){
        if($this->AccountModel->login($_POST['username'], $_POST['password'] )== NULL){
            $data['error'] = 'Invalid Account';
            $this->load->view('account/index', $data);
        } else{
            $_SESSION['username'] = $_POST['username'];
            $this->load->view('account/welcome');
        }
    }
}

	public function signup()
	{
		$this->load->view('account/signup');
	}

	public function save()
	{
		// Check if password is set
		if(isset($_POST['password']) && !empty($_POST['password'])){
			$_POST['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);
			$this->AccountModel->signup($_POST);
		}
	}
}
