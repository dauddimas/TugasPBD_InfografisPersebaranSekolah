<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE) {
			redirect('Login');
		}
		$this->load->model('User_model');
	}

	function index() {
		if($this->session->userdata('level')==='3') {

			$x['data'] = $this->User_model->show_datasekolah();
			$this->load->view('user_view',$x);

		} else {
			echo "Access Denied!";
		}
	}

	function showmap() {
		$this->load->view('user_view_map');
	}

	public function export() {
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';

		$csv = new PHPExcel();

		$csv->getProperties()->setCreator('Daud Dimas Prasetyo')
							 ->setLastModifiedBy('Daud Dimas Prasetyo')
							 ->setTitle("Data Persebaran Sekolah")
							 ->setSubject("Sekolah")
							 ->setDeskription("Data Persebaran Sekolah Kota Semarang")
							 ->setKeywords("Data Sekolah");


		$csv->setActiveSheetIndex(0)->mergeCells('A1:A2');
		$csv->getActiveSheet()->getCell('A1')->setValue('No');
	    $csv->setActiveSheetIndex(0)->mergeCells('B1:B2');
		$csv->getActiveSheet()->getCell('B1')->setValue('Kecamatan');
	    $csv->setActiveSheetIndex(0)->mergeCells('C1:C2');
		$csv->getActiveSheet()->getCell('C1')->setValue('Jumlah');
		$csv->setActiveSheetIndex(0)->mergeCells('D1:F1');
		$csv->getActiveSheet()->getCell('D1')->setValue('SD');
		$csv->setActiveSheetIndex(0)->mergeCells('G1:I1');
		$csv->getActiveSheet()->getCell('G1')->setValue('SMP');
		$csv->setActiveSheetIndex(0)->mergeCells('J1:L1');
		$csv->getActiveSheet()->getCell('J1')->setValue('SMA');
		$csv->setActiveSheetIndex(0)->mergeCells('M1:O1');
		$csv->getActiveSheet()->getCell('M1')->setValue('SMK');
		$csv->setActiveSheetIndex(0)->mergeCells('P1:R1');
		$csv->getActiveSheet()->getCell('P1')->setValue('SLB');
	    $csv->setActiveSheetIndex(0)->setCellValue('D2', "Jumlah");
	    $csv->setActiveSheetIndex(0)->setCellValue('E2', "Negeri");
	    $csv->setActiveSheetIndex(0)->setCellValue('F2', "Swasta");
	    $csv->setActiveSheetIndex(0)->setCellValue('G2', "Jumlah");
	    $csv->setActiveSheetIndex(0)->setCellValue('H2', "Negeri");
	    $csv->setActiveSheetIndex(0)->setCellValue('I2', "Swasta");
	    $csv->setActiveSheetIndex(0)->setCellValue('J2', "Jumlah");
	    $csv->setActiveSheetIndex(0)->setCellValue('K2', "Negeri");
	    $csv->setActiveSheetIndex(0)->setCellValue('L2', "Swasta");
	    $csv->setActiveSheetIndex(0)->setCellValue('M2', "Jumlah");
	    $csv->setActiveSheetIndex(0)->setCellValue('N2', "Negeri");
	    $csv->setActiveSheetIndex(0)->setCellValue('O2', "Swasta");
	    $csv->setActiveSheetIndex(0)->setCellValue('P2', "Jumlah");
	    $csv->setActiveSheetIndex(0)->setCellValue('Q2', "Negeri");
	    $csv->setActiveSheetIndex(0)->setCellValue('R2', "Swasta");
	    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
	    
	    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
	    $numrow = 3; // Set baris pertama untuk isi tabel adalah baris ke 2
	    foreach($data->result_array() as $ds) {
	    
	      $csv->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
	      $csv->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $ds->kecamatan);
	      $csv->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $ds->sd_negeri + $ds->sd_swasta + $ds->smp_negeri + $ds->smp_swasta + $ds->sma_negeri + $ds->sma_swasta + $ds->smk_negeri + $ds->smk_swasta + $ds->slb_negeri + $ds->slb_swasta);
	      $csv->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $ds->sd_negeri + $ds->sd_swasta);
	      $csv->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $ds->sd_negeri);
	      $csv->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $ds->sd_swasta);
	      $csv->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $ds->smp_negeri + $ds->smp_swasta);
	      $csv->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $ds->smp_negeri);
	      $csv->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $ds->smp_swasta);
	      $csv->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $ds->sma_negeri + $ds->sma_swasta);
	      $csv->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $ds->sma_negeri);
	      $csv->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $ds->sma_swasta);
	      $csv->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $ds->smk_negeri + $ds->smk_swasta);
	      $csv->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $ds->smk_negeri);
	      $csv->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $ds->smk_swasta);
	      $csv->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $ds->slb_negeri + $ds->slb_swasta);
	      $csv->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $ds->slb_negeri);
	      $csv->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $ds->slb_swasta);
	      
	      $no++; // Tambah 1 setiap kali looping
	      $numrow++; // Tambah 1 setiap kali looping
	    }
	    // Set orientasi kertas jadi LANDSCAPE
	    $csv->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
	    // Set judul file excel nya
	    $csv->getActiveSheet(0)->setTitle("Data Persebaran Sekolah");
	    $csv->setActiveSheetIndex(0);
	    // Proses file excel
	    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	    header('Content-Disposition: attachment; filename="Data Sekolah.csv"'); // Set nama file excel nya
	    header('Cache-Control: max-age=0');
	    $write = new PHPExcel_Writer_CSV($csv);
	    $write->save('php://output');

	}
}