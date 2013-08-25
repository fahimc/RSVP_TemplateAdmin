<?php
Class Login
{
	private $username="";
	private $password="";
	public function init()
	{
		$loginDetails = file_get_contents("../../admin.txt");
		$arr= explode("\n", $loginDetails);
		$this->username= trim($arr[0]);
		$this->password= trim($arr[1]);
		$this->checkPOST();
	}
	private function checkPOST()
	{
		if(isset($_POST['username']) && isset($_POST['pass']))
		{
			$u = trim(stripslashes($_POST['username']));
			$p =  trim(stripslashes($_POST['pass']));
			
			if($u==$this->username && $p == $this->password)
			{
				session_start();
				$_SESSION['username'] = $this->username;
				echo $this->callback("1");
			}else{
				echo $this->callback("-2");
			}
		}else{
			echo $this->callback("-1");
		}
	}
	private function callback($msg)
	{
		echo "<script type='text/javascript'>window.parent.response(".$msg.");</script>";
	}
	
}
$login = new Login();
$login->init();
?>