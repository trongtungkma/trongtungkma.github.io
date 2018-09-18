<?php 
include_once('Database.php');

Class users extends database{

	protected $user_id = null;
	protected $user_full = null;
	protected $user_name = null;
	protected $user_mail = null;
	protected $user_pass = null;
	protected $user_sex = null;
	protected $user_date = null;
	protected $user_month=null;
	protected $user_year=null;
	

	function __construct(){
		$this->connect();
	}

	public function setUserId($user_id){
		$this->user_id=$user_id;
	}

	public function getUserId(){
		return $this->user_id;
	}
	
	//
	public function setUserFull($user_full){
		$this->user_full=$user_full;
	}

	public function getUserFull(){
		return $this->user_full;
	}
	//
	public function setUserName($user_name){
		$this->user_name=$user_name;
	}

	public function getUserName(){
		return $this->user_name;
	}
	//
	public function setUserMail($user_mail){
		$this->user_mail = $user_mail;
	}

	public function getUserMail(){
		return $this->user_mail;
	}
	//
	public function setUserPass($user_pass){
		$this->user_pass=$user_pass;
	}

	public function getUserPass(){
		return $this->user_pass;
	}
	//
	public function setUserSex($user_sex){
		$this->user_sex=$user_sex;
	}

	public function getUserSex(){
		return $this->user_sex;
	}
	//
	public function setUserDate($user_date){
		$this->user_date=$user_date;
	}

	public function getUserDate(){
		return $this->user_date;
	}
	//
	public function setUserMonth($user_month){
		$this->user_month=$user_month;
	}

	public function getUserMonth(){
		return $this->user_month;
	}
	//
	public function setUserYear($user_year){
		$this->user_year=$user_year;
	}

	public function getUserYear(){
		return $this->user_year;
	}
	//
	public function login(){
		$sql="SELECT * FROM users WHERE user_mail='$this->user_mail'AND user_pass='$this->user_pass'";
		$this->query($sql);
		if ($this->numRows()>0) {
			$_SESSION['user_mail']= $this->user_mail;
			$_SESSION['user_pass']=$this->user_pass;
			return 'pass';

		} 
		else{
			return 'fail';
		}

	}
	//
	public function add(){
		$sql="SELECT * FROM users WHERE user_mail='$this->user_id'AND user_name='$this->user_name'";
		$this->query($sql);
		if ($this->numRows()>0) {
			return'fail';
		}
		else{
			$sql="INSERT INTO users(user_full,user_name,user_mail,user_pass,user_sex,user_date,user_month,user_year) VALUES('$this->user_full','$this->user_name','$this->user_mail','$this->user_pass','$this->user_sex','$this->user_date','$this->user_month','$this->user_year')";
			$this->query($sql);

		}
	}
	//
	public function edit(){
		$sql="SELECT *FROM users WHERE user_mail='$this->user_mail' AND user_id!='$this->user_id'";
		$this->query($sql);
		if ($this->numRows()>0) {
			return 'fail';
		}
		else{
			$sql="UPDATE users 
			SET  user_full='$this->user_full',
				 user_mail='$this->user_mail',
				 user_pass='$this->user_pass',
				 user_sex='$this->user_sex'	,
				 user_date='$this->user_date',
				 user_month='$this->user_month',
				 user_year='$this->user_year',
			WHERE user_id='$this->user_id'	";
			$this->query($sql);
		}
	}
	//
	public function del(){
		$sql="DELETE users WHERE user_id='$this->user_id'";
		$this->query($sql);
	}

}


 ?>