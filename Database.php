<?php 
Class database{

	protected $db_host = 'localhost';
	protected $db_user = 'root';
	protected $db_pass = '';
	protected $db_name = 'tandtweb';
	

	protected $conn = null;
	protected $result = null;


	public function connect(){
		$this->conn = mysqli_connect($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
		if ($this->conn) {
			mysqli_query($this->conn,"SET NAMES 'utf8'");
		}else{
			echo "Can't connect to Database";
		}

	}
	public function freeResult(){
		if ($this->result) {
			mysqli_free_result($this->result);
		}
	}
	public function query($sql){
		$this->freeResult();
		$this->result=mysqli_query($this->conn,$sql);
	}
	public function fetch(){
		$row=null;
		if ($this->result) {
			$row= mysqli_fetch_array($this->result);
		}
		return $row;
	}
	public function numRows(){
		$rows=null;
		if ($this->result) {
			$rows=mysqli_num_rows($this->result);
		}
		return $rows;
	}
}

// $database = new database;
// $database->connect();
// $database->query("SELECT * FROM users");
// while ($data=$database->fetch()){
// 	echo $data['user_name'];
// }
// echo $database->numRows()
 ?>