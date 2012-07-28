<?php

class Pages extends CI_Controller {

	public function print_pdf($page = 'home')
	{
		// Load CI Library
		$this->load->library('fpdf');

		$filename =  somefile;
		$content = 'My Content';
		$basepath = getcwd;

		// Create PDF
		$this->fpdf->fpdf('P','mm','A4');
		$this->fpdf->AddPage();
		$this->fpdf->SetFont('Arial','B',16);
		$this->fpdf->Cell(40, 10, $content);
		$this->fpdf->Output($basepath.'/pdf/'.$filename.'.pdf');   // print to the filesystem, save for future download
		$this0>fpdf->Output($filename.'.pdf', 'D');                // send to browser and force download, not saved on filesystem
	}

}

?>