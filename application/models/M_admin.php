<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{

    public function get_all()
    {
        $query = $this->db->get('tb_user')->result_array();

        return $query;
    }
    public function ambil_detail($id)
    {
        $hasil = $this->db->where('id_user', $id)->get('tb_user');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }
    public function insertAdmin()
    {
        $insert = array(
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),

        );
        $result = $this->db->insert('tb_user', $insert);
        return $result;
    }

    public function deleteAdmin($id)
    {
        $this->db->where('id_user', $id);
        $result = $this->db->delete('tb_user');
        return $result;
    }
}                        
                        


/* End of file M_komentar_model.php and path \application\models\M_komentar_model.php */
