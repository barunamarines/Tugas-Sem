<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bar_col extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//menetapkan tanggal hari ini
		if(empty($this->session->userdata('tanggal_terima')))
		{
			$this->session->set_userdata('tanggal_terima', date('Y-m-d'));
		}

		$this->load->view('home');
	}

	public function penerimaan()
	{
		$this->load->view('penerimaan');
	}

	//INPUT DATA KE DATABASE
	public function masuk_data()
	{
		$tanggal_terima = $this->input->post('tanggal_terima');
		$jenis_benang = $this->input->post('jenis_benang');
		$no_mixing = $this->input->post('no_mixing');
		$jumlah_cones = $this->input->post('jumlah_cones');
		$jumlah_kilogram = $this->input->post('jumlah_kilogram');

		$data = array(
			'tanggal_terima' => $tanggal_terima,
			'jenis_benang' => $jenis_benang,
			'no_mixing' => $no_mixing,
			'jumlah_cones' => $jumlah_cones,
			'jumlah_kilogram' => $jumlah_kilogram,
		);

		//FLASH (memberitahu user input data berhasil)
		$this->session->set_flashdata('pesan_input_data_berhasil', 'Input Data Berhasil');

		$this->session->set_userdata('tanggal', $data['tanggal']);
		
		$this->Bar_model->input_data($data,'penerimaan');
		redirect('Bar_col/index');



	}
	
	//panggil data dari database
	public function hasil_bpw()
	{

		//menetapkan tanggal hari ini, dari pengeluaran
		if(empty($this->session->userdata('tanggal_pengeluaran')))
		{
			$this->session->set_userdata('tanggal_pengeluaran', date('Y-m-d'));
		}

		//ambil data dari database
		$panggil_data = $this->db->get('jenis_celup');

		//siapkan data untuk dikirim ke view
		$data=array();
		$data['jenis_celup'] = $panggil_data;
 
		//tampilkan data ke view
		$this->load->view('hasil_bpw', $data);

	}

	public function hasil_bpw_dua()
	{
		$data=array();
		$data['tanggal_hasil']=$this->input->get('tanggal_hasil');
		$data['no_inisial_benang']=$this->input->get('no_inisial_benang');
		$data['jenis_benang']=$this->input->get('jenis_benang');
		$data['jenis_celup']=$this->input->get('jenis_celup');
		$data['no_mixing']=$this->input->get('no_mixing');
		$data['no_party']=$this->input->get('no_party');
		$data['shift']=$this->input->get('shift');
		$data['panjang_penarikan']=$this->input->get('panjang_penarikan');
		$data['no_id']=$this->input->get('no_id');
		$data['no_box']=$this->input->get('no_box');
		$data['jumlah_cones']=$this->input->get('jumlah_cones');
		$data['kilogram']=$this->input->get('kilogram');

		$this->load->view('hasil_bpw_dua',$data);
	}

	//masukan data ke databse
	public function memasukan_data()
	{
		$data['tanggal_hasil'] = $this->input->post('tanggal_hasil');
		$data['no_inisial_benang'] = $this->input->post('no_inisial_benang');
		$data['jenis_benang'] = $this->input->post('jenis_benang');
		$data['jenis_celup'] = $this->input->post('jenis_celup');
		$data['no_mixing'] = $this->input->post('no_mixing');
		$data['no_party'] = $this->input->post('no_party');
		$data['shift'] = $this->input->post('shift');
		$data['panjang_penarikan'] = $this->input->post('panjang_penarikan');
		$data['no_box'] = $this->input->post('no_box');
		$data['jumlah_cones'] = $this->input->post('jumlah_cones');

		$no_id_awal = $this->input->post('no_id_awal');
		

		//VARIABEL ARRAY
		/**
		$data['kilogram'] = $this->input->post('kilogram');
		$data['no_id'] = $this->input->post('no_id_isi');
		*/
		$array_kilogram = $this->input->post('kilogram');
		$array_no_id = $this->input->post('no_id_isi');

		// echo json_encode($array_kilogram);
		// exit();
		/**
		foreach ($data['no_id'] as $key => $value) {
			$id = $data['no_id_awal'].' '.$value;
		*/

		/** CARA 1 pakai foreach */
		$i = 0;
		foreach ($array_no_id as $key => $value) {
			//id gabungan hlm. 1 dan hlm. 2
			$id = $no_id_awal.' '.$value;
			
			//atur $data
			$data['no_id'] = $id;
			$data['kilogram'] = $array_kilogram[$i];

			//simpan ke db
			$this->db->insert('hasil_bpw', $data);

			$i++;
		}

		//redirect ke halaman utama
		redirect('Bar_col/index');

		/** CARA 2 pakai for */
		// for($i = 0; $i < count($array_no_id); $i++) {
		// 	//id gabungan hlm. 1 dan hlm. 2
		// 	$id = $no_id_awal.' '.$array_no_id[$i];
			
		// 	//atur $data
		// 	$data['no_id'] = $id;
		// 	$data['kilogram'] = $array_kilogram[$i];

		// 	//simpan ke db
		// 	$this->db->insert('hasil_bpw', $data);
		// }
		
		//insert ke database 
		
		// for ($i=0; $i < count($data['kilogram']); $i++) { 
		// 	$masuk_data = array(
		// 		//dikiri : nama kolomnya di database
		// 		//dikanan : data yg mau disimpannya + harus sama dengan variabel penampung diatas
		// 		//variabel array (*['jumlah_kilogram']) di belakangnya harus menggunakan variabel index (*$i)
		// 		'tanggal_hasil' => $data['tanggal_hasil'],
		// 		'no_inisial_benang' => $data['no_inisial_benang'],
		// 		'jenis_benang' => $data['jenis_benang'],
		// 		'jenis_celup' => $data['jenis_celup'],
		// 		'no_mixing' => $data['no_mixing'],
		// 		'no_party' => $data['no_party'],
		// 		'shift' => $data['shift'],
		// 		'panjang_penarikan' => $data['panjang_penarikan'],
		// 		'no_id' => $data['no_id'][$i],
		// 		'no_box' => $data['no_box'],
		// 		'jumlah_cones' => $data['jumlah_cones'],
		// 		'kilogram' => $data['kilogram'][$i],


		// 	);
		// 	$this->db->insert('hasil_bpw',$masuk_data);

			//FLASH (memberitahu user input data berhasil)
			//$this->session->set_flashdata('pesan_input_data_banyak_berhasil', 'Input Data Banyak Berhasil');
		//}

		//redirect ke halaman utama
		//redirect('Login_col/index');
	}

	public function pengeluaran()
	{
		//ambil data dari database
		//$panggil_data = $this->db->get('pengeluaran');

		// //siapkan data untuk dikirim ke view
		// $data=array();
		// $data['pengeluaran'] = $panggil_data;

		$this->load->view('pengeluaran');
	}

	//halaman 2
	public function pengeluaran_dua()
	{
		//siapkan data halaman
		 $data=array();
		// $data['pengeluaran_data']='Pengeluaran_data';

		//terima data dari halaman sebelumnya atau dari view bersangkutan
		$data['tanggal_pengeluaran'] = $this->input->get('tanggal');
		$data['tujuan'] = $this->input->get('tujuan');


		//jika session set_userdata(isi), harus sama dengan variabel di belakang
		//ATUR SESSION
		$this->session->set_userdata('tanggal_pengeluaran', $data['tanggal_pengeluaran']);
		$this->session->set_userdata('tujuan', $data['tujuan']);


		// //menetapkan tanggal yang sudah di submit
		// $this->session->set_userdata('tanggal', $data['tanggal']);

		//ambil data stok dari database

		//evaluasi
		$data['hasil_bpw'] = $this->Bar_model->tampil_data();

		 $this->load->view('pengeluaran_dua',$data);
		

	}

	//pengeluaran utk menampilkan database
	public function Pengeluaran_halaman_dua()
	{
		// //siapkan data halaman
		// $data=array();
		// $data['pengeluaran']='pengeluaran';

		//terima data dari halaman sebelumnya
		$data['tanggal'] = $this->input->get('tanggal');


		//ambil data hasil BPW dari database
		$data['hasil_bpw'] = $this->Bar_model->tampil_data();
		$this->load->view('pengeluaran_dua',$data);
	}

		//panggil data, ala gradi
		//HALAMAN 3 FIx
		public function pengeluaran_data()
	{
		$this->load->model('Bar_model');
		
		$data=array();
		$data['tanggal']=$this->input->get('tanggal_hasil');
		$data['jenis_benang']=$this->input->get('jenis_benang');
		$data['jenis_celup']=$this->input->get('jenis_celup');
		$data['no_box']=$this->input->get('no_box');
		$data['no_party']=$this->input->get('no_party');
		$data['shift']=$this->input->get('shift');
		$data['panjang_penarikan']=$this->input->get('panjang_penarikan');
		$data['no_inisial_benang'] = $this->input->get('no_inisial_benang');
		$data['no_id']=$this->input->get('no_id');
		$data['no_mixing']=$this->input->get('no_mixing');
		$data['jumlah_cones']=$this->input->get('jumlah_cones');
		$data['kilogram']=$this->input->get('kilogram');
		$data['tanggal_pengeluaran']=$this->input->get('tanggal_pengeluaran');
		$where=array(
			'tanggal_hasil' => $data['tanggal'],
			'jenis_benang'=> $data['jenis_benang'],
			'jenis_celup'=> $data['jenis_celup'],
			'no_box'=> $data['no_box'],
			'no_party'=> $data['no_party'],
			'no_mixing'=> $data['no_mixing']
	);
		//atur session	
		$this->session->set_userdata('no_inisial_benang', $data['no_inisial_benang']);
		$this->session->set_userdata('shift', $data['shift']);
		$this->session->set_userdata('panjang_penarikan', $data['panjang_penarikan']);
		$this->session->set_userdata('jumlah_cones', $data['jumlah_cones']);

		$data['hasil_bpw']=$this->Bar_model->panggil_fungsi($where);
		 $this->load->view('pengeluaran_checkbox',$data);

		

	}

	
	public function pengeluaran_checkbox()
	{

		
		
		$this->load->view('pengeluaran_checkbox');
	}

	//hal terakhir pengeluaran
	public function memasukan_data_pengeluaran()
	{
		$data['no_id'] = $this->input->post('no_id');
		$data['tujuan'] = $this->session->userdata('tujuan');


		//variabel array
		$data['kilogram'] = $this->input->post('kilogram');

		$data['input_data_id'] = $this->input->post('input_data_id');

		//jika sdh ada session, maka variabel this di isi dengan session di controler 1 (pengeluaran_dua)
		$data['tanggal_pengeluaran'] = $this->session->userdata('tanggal_pengeluaran');
		$data['no_inisial_benang'] = $this->session->userdata('no_inisial_benang');
		$data['shift'] = $this->session->userdata('shift');
		$data['panjang_penarikan'] = $this->session->userdata('panjang_penarikan');
		$data['jumlah_cones'] = $this->session->userdata('jumlah_cones');



		
		$where=array();
		//perulangan sebanyak input_data_id
		for ($i=0; $i < count($data['input_data_id']); $i++) { 
			//dari input_data_id, memproses data yang lain jenis_kapas dll
			$this->db->where('id', $data['input_data_id'][$i]);
			$input_data = $this->db->get('hasil_bpw'); //285-286 = menggunakan model utk tidak menggunakan db
			//hanya mengambil 1 baris dari tabel dan mengubah format hasil menjadi array
			$input_data = $input_data->row_array();

			
		$masuk_data = array(
				//dikiri : nama kolomnya di database
				//dikanan : data yg mau disimpannya + harus sama dengan variabel penampung diatas
				//variabel array (*['jumlah_kilogram']) di belakangnya harus menggunakan variabel index (*$i)
				'tanggal_pengeluaran' => $data['tanggal_pengeluaran'],
				'tujuan' => $data['tujuan'],
				'no_inisial_benang' => $data['no_inisial_benang'],
				'jenis_benang' => $input_data['jenis_benang'],
				'jenis_celup' => $input_data['jenis_celup'],
				'no_box' => $input_data['no_box'],
				'no_party' => $input_data['no_party'],
				'shift' => $data['shift'],
				'panjang_penarikan' => $data['panjang_penarikan'],
				'no_mixing' => $input_data['no_mixing'],
				'no_id' => $input_data['no_id'],
				'jumlah_cones' => $data['jumlah_cones'],
				'kilogram' => $input_data['kilogram']
			);
			//$where[]=array('id'=>$input_data['id'],'status'=>1);
			
			$this->db->insert('pengeluaran',$masuk_data);
			
			
		}

		// $update=$this->db->update_batch('hasil_bpw',$where,'id');

		// //FLASH (memberitahu user input data berhasil)
		// $this->session->set_flashdata('pengeluaran_data_berhasil', 'Pengeluaran Data Berhasil');


		//redirect ke halaman utama
		redirect('Bar_col/index');
	
	}
}
