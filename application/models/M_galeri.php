<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_galeri extends CI_Model
{
    public function validation()
    {
        return [
            [
                'field' => 'judul_gambar',
                'label' => 'Judul Gambar',
                'rules' => 'required|max_length[32]'
            ],
            [
                'field' => 'gambar',
                'label' => 'Gambar',
                'rules' => 'required|max_length[32]'
            ],
            [
                'field' => 'deskripsi',
                'label' => 'Deskripsi',
                'rules' => 'required|max_length[32]'
            ],
            
        ];
    }
    public function get_all()
    {
        $query = $this->db->get('tb_gambar')->result_array();

        return $query;
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

    public function getDetailGaleri($id)
    {
        $this->db->where('id_gambar', $id);
        $result = $this->db->get('tb_gambar');
        return $result;
    }
    public function editGaleri()
    {
        $edit = array(
            'judul_gambar' => $this->input->post('judul_gambar'),
            'gambar' => $this->input->post('gambar'),
            'deskripsi' => $this->input->post('deskripsi'),
            
        );
        $this->db->where('id_gambar', $this->input->post('id_gambar'));
        $result = $this->db->update('tb_gambar', $edit);
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
