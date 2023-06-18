<?php namespace App\Controllers;

class User extends BaseController
{
	public function index() 
	{
		echo view('login');
	}
	
	public function login()
	{
		echo "Login";
	}
    
    public function resetpass()
	{
		echo "Reset password";
	}
    
    public function faqs()
	{
		echo "Faqs page";
	}
}
