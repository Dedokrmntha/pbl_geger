<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_galeri extends CI_Model
{

    public function get_all()
    {
        $query = $this->db->get('tb_gambar')->result_array();

        return $query;
    }
    public function ambil_detail($id)
    {
        $hasil = $this->db->where('id_gambar', $id)->get('tb_gambar');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }
    public function insertGaleri()
    {
        $insert = array(
            'judul_gambar' => $this->input->post('judul_gambar'),
            'gambar' => $this->input->post('gambar'),
            'deskripsi' => $this->input->post('deskripsi'),

        );
        $result = $this->db->insert('tb_gambar', $insert);
        return $result;
    }

    public function deleteGaleri($id)
    {
        $this->db->where('id_gambar', $id);
        $result = $this->db->delete('tb_gambar');
        return $result;
    }
}                        
                        


/* End of file M_komentar_model.php and path \application\models\M_komentar_model.php */
