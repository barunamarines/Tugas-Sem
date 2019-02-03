<?php 
	defined('BASEPATH') OR exit ('No direct script access allowed');

	class Bar_model extends CI_Model {

		//memasukan ke database tabel penjualan
		public function input_data($result)
	{
		$this->db->insert('penerimaan', $result);
		return TRUE;
	}

	//input database dari halaman user_penjualan
	public function simpan_data()
	{
		$post = $this->input->post();
		$this->tanggal = $post['tanggal'];
		$this->barang = $post['barang'];
		$this->kuantitas = $post['kuantitas'];
		$this->harga_barang = $post['harga_barang'];

		$this->db->insert($this->penjualan, $this);
	}

		//input data berasal dari tabel database hasil BPW
	    public function tampil_data()
	    {
	    	$this->db->select("jenis_benang,jenis_celup,no_box,no_inisial_benang,shift,panjang_penarikan,jumlah_cones,no_party,no_mixing,SUM(kilogram) as berat,SUM(no_id) as no_id,tanggal_hasil");
	    
        	$this->db->group_by("jenis_benang,jenis_celup,no_box,no_party,no_mixing,tanggal_hasil");
        
        //varibel data_stok/input_data berasal dari tabel hasil_bpw
        $tampil_data=$this->db->get('hasil_bpw');
        return $tampil_data->result();
    	}

    	//tampilkan data hasil BPW secara detail
    	public function panggil_fungsi($where)
	    {
	        $this->db->where($where);
	        // $this->db->where('status=0');
	        //varibel data_stok/input_data berasal dari tabel input data banyak
	        $tampil_data=$this->db->get('hasil_bpw');
	        return $tampil_data->result();
    	}

	}

	





 ?>