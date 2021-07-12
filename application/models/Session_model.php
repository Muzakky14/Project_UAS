<?php

class Session_model extends CI_Model{

    public function _getsession_() {
        $data['user'] = $this->db->get_where ('user'), 
        ['username'=> $this-> session -> userdata('username')])->row_array();
        $this->load->view('include/header',$data);
        $this->load->view('include/footer',$data);

    }

}
?>