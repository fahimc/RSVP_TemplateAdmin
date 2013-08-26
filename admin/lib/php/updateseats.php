<?php

//Various excel formats supported by PHPExcel library
$excel_readers = array(
    'Excel5' , 
    'Excel2003XML' , 
    'Excel2007'
);
/** Include PHPExcel */
require_once '../com/ibm/PHPExcel.php';
Class RSVP
{
	private $rsvpDropdown;
	private $rsvpcode;
	public function init()
	{
		if(isset($_POST['rsvpcode2'])||stripcslashes($_POST['rsvpcode2'])!="")
		{
			$this->rsvpcode=stripcslashes($_POST['rsvpcode2']);
			$this->rsvpDropdown=stripcslashes($_POST['rsvpseats']);
			//get filename
			$this->loadFileName();
		}else{
			$this->callback("-4");
		}
	}
	private function loadFileName()
	{
		$filename = file_get_contents("guestlist/filename.txt");
		$this->getExcel($filename);
	}
	private function getExcel($filename)
	{
		$reader = PHPExcel_IOFactory::createReader( 'Excel2007');
		$excel = $reader->load($filename);
		$worksheet =$excel->getActiveSheet();
		
		foreach ($worksheet->getRowIterator() as $row) {
		
		$cellIterator = $row->getCellIterator();
		$cellIterator->setIterateOnlyExistingCells(true); // Loop all cells, even if it is not set
			if(trim($worksheet->getCell('C'.$row->getRowIndex()))==trim($this->rsvpcode))
			{
				$worksheet->setCellValue('D'.$row->getRowIndex() , $this->rsvpDropdown);
				$writer = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
				$writer->save($filename);
				$this->callback("2");
			}
		
		}
	}
	private function callback($msg)
	{
		echo "<script type='text/javascript'>window.parent.response('".$msg."');</script>";
	}
}
$rsvp=new RSVP();
$rsvp->init();
?>