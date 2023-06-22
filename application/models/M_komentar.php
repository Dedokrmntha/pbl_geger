<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_komentar extends CI_Model 
{
    
    public function get_all()
    {
        $query = $this->db->get('tb_komentar')->result_array();
        
        return $query;
    }
    public function ambil_detail($id)
    {
        $hasil = $this->db->where('id_komentar', $id)->get('tb_komentar');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }
    public function insertKomentar()
    {
        $insert = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'pesan' => $this->input->post('pesan'),
            'balas' => $this->input->post('balas'),

            );
        $result = $this->db->insert('tb_komentar', $insert);
        return $result;
    }

    public function deleteKomentar($id)
    {
        $this->db->where('id_komentar', $id);
        $result = $this->db->delete('tb_komentar');
        return $result;
    }
    public function getDetailKomentar($id)
    {
        $this->db->where('id_komentar', $id);
        $result = $this->db->get('tb_komentar');
        return $result;
    }
    public function editKomentar()
    {
        $edit = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'pesan' => $this->input->post('pesan'),
            'balas' => $this->input->post('balas'),
           

        );
        $this->db->where('id_komentar', $this->input->post('id_komentar'));
        $result = $this->db->update('tb_komentar', $edit);
        return $result;
    }
}                        
                        


/* End of file M_komentar_model.php and path \application\models\M_komentar_model.php */
