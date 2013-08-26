<?php
Class RSVP
{
	private $codes;
	private $rsvpcode;
	public function init()
	{
		if(isset($_POST['rsvpcode'])||stripcslashes($_POST['rsvpcode'])!="")
		{
			$this->rsvpcode=stripcslashes($_POST['rsvpcode']);
			//load codes
			$this->codes = file_get_contents('../../resource/sitedata/data.csv');
			if(!$this->codes)
			{
				$this->callback("-2");
			}else{
				$this->parseCodes();
			}
		}else{
			$this->callback("-1");
		}
	}
	private function parseCodes()
	{
		$lines = preg_split("/\r\n|\n|\r/", $this->codes);
		$found =false;
		for($a=0;$a<count($lines);$a++)
		{
			$lines[$a]=str_replace("\"","",$lines[$a]);
			$arr= explode(",",$lines[$a]);
			
			if(trim($arr[2])==$this->rsvpcode)
			{
				$this->callback("seats:".$arr[1].",code:".$this->rsvpcode);
				$found=true;
			}
			
		}
		if(!$found)$this->callback("-3");
	}
	private function callback($msg)
	{
		echo "<script type='text/javascript'>window.parent.response('".$msg."');</script>";
	}
}
$rsvp=new RSVP();
$rsvp->init();
?>