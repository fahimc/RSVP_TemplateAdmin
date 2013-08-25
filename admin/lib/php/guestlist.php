<?php
//Various excel formats supported by PHPExcel library
$excel_readers = array(
    'Excel5' , 
    'Excel2003XML' , 
    'Excel2007'
);
/** Include PHPExcel */
require_once '../com/ibm/PHPExcel.php';
$reader = PHPExcel_IOFactory::createReader( 'Excel2007');
//$reader->setReadDataOnly(true);
 
$path = 'guests.xlsx';
$excel = $reader->load($path);
 

$worksheet =$excel->getActiveSheet();
	

	foreach ($worksheet->getRowIterator() as $row) {
		//echo '    Row number - ' , $row->getRowIndex() ;

		$cellIterator = $row->getCellIterator();
		$cellIterator->setIterateOnlyExistingCells(true); // Loop all cells, even if it is not set
		foreach ($cellIterator as $cell) {
			if (!is_null($cell)) {
			//	echo '        Cell - ' , $cell->getCoordinate() , ' - ' , $cell->getCalculatedValue() ;
			}
		}
		$worksheet->setCellValue('C'.$row->getRowIndex() , GUID() );
	}
function GUID()
{
    if (function_exists('com_create_guid') === true)
    {
        return trim(com_create_guid(), '{}');
    }

    return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
}

$writer = PHPExcel_IOFactory::createWriter($excel, 'CSV');
$writer->save('../../resource/sitedata/data.csv');
 
// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="guestlist_codes.xlsx"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
$objWriter->save('php://output');
exit;
?>