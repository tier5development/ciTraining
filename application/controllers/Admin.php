<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('AdminModel');
		$this->load->library('session');
	}
	
	public function index()
	{
		if ($this->session->userdata('adminid'))
		{
			$this->load->view('adminview');
		}
		
		else
		{
			echo "session does not exist";
			header("location:".base_url()."index.php/Dashboard");
		}
		
	}


	public function showAllEmployee()
	{
		$add=$this->AdminModel->ShowEmployee();

		foreach ($add as $row) 
		{
			echo "ID ".$row->id." NAME ".$row->name." EMAIL ".$row->email."</br>";
		}
	}

	public function addEmp()
	{	
		/*extract($_POST);
		if (isset($btn)) 
		{
		echo "hi";
		}*/
		//$this->load->view('html/addRec');
		extract($_POST);
		if (isset($btn)) 
		{
			$data['name']=$name;
			//echo "$name";
			$data['email']=$email;
			//echo "$email";
			$data['password']=$pass;
			//echo "$pass";
			
			$add=$this->AdminModel->addEmployee($data);
			if ($add) 
			{
				echo "Employee Added Sucessfully";
			}
			else
			{
				echo "oops! Cant Add. Email already exists!!";

			}
		}
		else
		{
			$this->load->view('html/adminview');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('adminid');

		header("location:".base_url()."index.php/Dashboard");
	}


}