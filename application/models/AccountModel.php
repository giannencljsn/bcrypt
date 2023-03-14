<?php

defined('BASEPATH') OR exit('No direct script access allowed'); 

class AccountModel extends CI_Model {
	public function signup($account)
	{
		$this->db->insert('account', $account);
	}

	public function login($username, $password)
	{
		$this->db->where('username', $username);
		$account = $this->db->get('account')->row();
		print_r($account);
		// if($account !=NULL){
		// 	if(password_verify($_POST['password'], $account->password)){
		// 		return $account;
				
		// 	} else{
		// 		return NULL;
		// 	}
		// 	return NULL;
		// }
	}
}
