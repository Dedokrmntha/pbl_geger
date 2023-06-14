<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_komentar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('M_komentar');
        
    }

    public function index()
    {
        $data = [
            'komentar' => $this->M_komentar->get_all(),
        ];
        $this->load->view('vw_user/header');
        $this->load->view('vw_user/navbar');
        $this->load->view('vw_user/komentar/v_komentar', $data);
        $this->load->view('vw_user/footer');
    }
    public function tambah()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('contact/body');
        $this->load->view('layout/footer');
    }

    public function add()
    {
        $this->M_komentar->insertKomentar();
        redirect('index');
    }

    public function delete($id)
    {
        $this->M_komentar->deleteKomentar($id);
        redirect('C_komentar');
    }


    // public function tambah()
    // {
    //     $this->load->model('M_komentar');
    //     $data = [
    //         'tb_komentar' => $this->M_komentar-->get_all()
    //     ];
    //     $this->load->view('template/header');
    //     $this->load->view('barang/tambah_barang', $data);
    //     $this->load->view('template/footer');
    // }

    // public function add()
    // {

    //     $rules = $this->M_barang->validation();

    //     $this->form_validation->set_rules($rules);

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->model('M_kategori');
    //         $data = [
    //             'kategori' => $this->M_kategori->get_all()
    //         ];
    //         $this->load->view('template/header');
    //         $this->load->view('barang/tambah_barang', $data);
    //         $this->load->view('template/footer');
    //     } else {

    //         $this->M_barang->insertBarang();
    //         redirect('C_barang');
    //     }
    // }
    // public function ubah($id)
    // {
    //     $data['barang'] = $this->M_barang->getDetailBarang($id);
    //     $this->load->view('template/header');
    //     $this->load->view('barang/edit_barang', $data);
    //     $this->load->view('template/footer');
    // }

    // public function edit($id)
    // {
    //     $rules = $this->M_barang->validation();

    //     $this->form_validation->set_rules($rules);

    //     if ($this->form_validation->run() == FALSE) {
    //         $data['barang'] = $this->M_barang->getDetailBarang($id);
    //         $this->load->view('template/header');
    //         $this->load->view('barang/edit_barang', $data);
    //         $this->load->view('template/footer');
    //     } else {
    //         $this->M_barang->editBarang();
    //         redirect('C_barang');
    //     }
    // }

    // public function delete($id)
    // {
    //     $this->M_barang->deleteBarang($id);
    //     redirect('C_barang');
    // }

    // public function addCart($id)
    // {
    //     $this->load->library('cart');
    //     $this->db->where('id_barang', $id);
    //     $barang = $this->db->get('tb_barang')->result_array();
    //     $data = array(
    //         'id' => $barang[0]['id_barang'],
    //         'qty' => 1,
    //         'price' => $barang[0]['harga'],
    //         'name' => $barang[0]['nama_barang'],
    //         'options' => array('description' => $barang[0]['deskripsi'])
    //     );
    //     $this->cart->insert($data);
    //     redirect('Toko/dashboard');
    // }


    // public function keranjang()
    // {
    //     $this->load->view('template/header2');
    //     $this->load->view('barang/keranjang');
    //     $this->load->view('template/footer');
    // }

    // public function deleteall()
    // {
    //     $this->cart->destroy();
    //     redirect('Toko/Dashboard');
    // }


    // public function checkout()
    // {
    //     $this->load->view('template/header2');
    //     $this->load->view('barang/checkout');
    //     $this->load->view('template/footer');
    // }

    // public function tambahCheckout()
    // {
    //     $insert = array(
    //         'nama_pelanggan' => $this->input->post('nama_pelanggan'),
    //         'alamat' => $this->input->post('alamat'),
    //         'jenis_pembayaran' => $this->input->post('jenis_pembayaran'),
    //         'total_checkout' => $this->cart->total()

    //     );
    //     $this->db->insert('tb_checkout', $insert);
    //     redirect('Toko/Dashboard');
    // }
}

/* End of file C_komentar.php and path \application\controllers\C_komentar.php */
