<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_galeri extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('M_galeri');
        
    }
    public function index()
    {
        $data = [
            'galeri' => $this->M_galeri->get_all(),
        ];
        $this->load->view('vw_user/header');
        $this->load->view('vw_user/navbar');
        $this->load->view('vw_user/galeri/v_galeri', $data);
        $this->load->view('vw_user/footer');
    }
    public function tambah()
    {
        $this->load->model('M_galeri');
        $data = [
            'galeri' => $this->M_galeri->get_all()
        ];
        $this->load->view('vw_user/header');
        $this->load->view('vw_user/navbar');
        $this->load->view('vw_user/galeri/v_tambah_galeri',$data);
        $this->load->view('vw_user/footer');
    }

    
    public function add()
    {
        if ($_FILES["filegambar"]["error"] == 0) {
            //tempat gambar beserta nama filenya disimpan
            $nama = $_FILES['filegambar']['name'];
            $tempdir = './galeri/';

            $target_path = $tempdir . $nama;

            //ekstensi file yang diperbolehkan
            $ekstensi_diperbolehkan = array('png', 'jpg');


            //mengambil ekstensi
            $x = explode('.', $nama);
            $ekstensi = strtolower(end($x));

            if (in_array($ekstensi, $ekstensi_diperbolehkan) === false) {
                $data_session = array(
                    'alert_home' => 'File harus PNG / JPG'
                );

                $this->session->set_userdata($data_session);
                redirect(base_url("AdminVilla/fasilitas"));
            } else {
                move_uploaded_file($_FILES['filegambar']['tmp_name'], $target_path);
                //echo 'Simpan data berhasil';

                $insert = array(
                    'judul_gambar' => $this->input->post('judul_gambar'),
                    'gambar' => $nama,
                    'deskripsi' => $this->input->post('deskripsi'),

                );
                $this->db->insert('tb_gambar', $insert);

                $data_session = array(
                    'alert_home' => 'Tambah fasilitas berhasil'
                );

                $this->session->set_userdata($data_session);
                redirect(base_url("C_galeri"));
            }
        } else {
            $data_session = array(
                'alert_home' => 'Upload gagal, gambar kosong'
            );

            $this->session->set_userdata($data_session);
            redirect(base_url("AdminVilla/datavilla"));
        }
    }

   
    public function ubah($id)
    {
        $data['galeri'] = $this->M_galeri->getDetailGaleri($id);
        $this->load->view('vw_user/header');
        $this->load->view('vw_user/navbar');
        $this->load->view('vw_user/galeri/v_ubah_galeri', $data);
        $this->load->view('vw_user/footer');
    }

    public function edit($id)
    {
        $rules = $this->M_galeri->validation();

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $data['galeri'] = $this->M_galeri->getDetailGaleri($id);
            $this->load->view('vw_user/header');
            $this->load->view('vw_user/navbar');
            $this->load->view('vw_user/galeri/v_ubah_galeri', $data);
            $this->load->view('vw_user/footer');
        } else {
            $this->M_galeri->editGaleri();
            redirect('C_galeri');
        }
    }

    public function delete($id)
    {
        $this->M_galeri->deleteGaleri($id);
        redirect('C_galeri');
    }

    // public function upload()
    // {
    //     $config['upload_path'] = './uploads/';
    //     $config['allowed_types'] = 'gif|jpg|jpeg|png';
    //     $config['max_size'] = 2048; // maksimal 2MB
    //     $config['encrypt_name'] = TRUE;

    //     $this->load->library('upload', $config);

    //     if (!$this->upload->do_upload('gambar')) {
    //         $error = array('error' => $this->upload->display_errors());
    //         $this->load->view('upload_form', $error);
    //     } else {
    //         $data = $this->upload->data();
    //         $gambar_data = file_get_contents($data['full_path']);
    //         $this->M_galeri->simpan_gambar($data['file_name'], $gambar_data);
    //         redirect('gambar');
    //     }
    // // }
    // public function upload_image()
    // {
    //     // Konfigurasi upload gambar
    //     $config['upload_path'] = './galeri';  // Ubah sesuai dengan direktori upload gambar
    //     $config['allowed_types'] = 'gif|jpg|jpeg|png';
    //     $config['max_size'] = 2048;  // Ukuran maksimum gambar dalam kilobita (2MB)

    //     $this->load->library('upload', $config);

    //     if (!$this->upload->do_upload('gambar')) {
    //         // Jika proses upload gagal, tangani error
    //         $error = $this->upload->display_errors();
    //         // Lakukan tindakan yang sesuai, seperti menampilkan pesan kesalahan
    //     } else {
    //         // Jika proses upload berhasil, dapatkan informasi gambar yang diunggah
    //         $image_data = $this->upload->data();
    //         // Lakukan tindakan yang sesuai, seperti menyimpan informasi gambar ke database
    //         redirect('C_galeri');
    //     }
    // }

    public function show_image($image_id)
    {
        // Dapatkan data gambar dari database berdasarkan ID atau informasi lain yang unik
        $image = $this->db->get_where('tb_gambar', ['id_gambar' => $image_id])->row();

        // Cek apakah data gambar ditemukan
        if ($image) {
            // Mendapatkan informasi gambar
            $image_path = './galeri' . $image->image_filename;  // Ubah sesuai dengan direktori penyimpanan gambar

            // Set header dan tampilkan gambar
            header('Content-Type: image/jpeg/jpg');  // Ganti tipe MIME sesuai format gambar yang tersimpan
            readfile($image_path);
        } else {
            // Tangani jika data gambar tidak ditemukan, misalnya dengan menampilkan gambar placeholder atau pesan kesalahan
        }
    }

}