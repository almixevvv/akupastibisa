<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_artikel extends CI_Model
{

    function artikel()
    {
        $this->db->select('*');
        $this->db->from('g_artikel');
        $this->db->limit(1);

        $query = $this->db->get();

        return $query;
    }

    function artikel_all()
    {
        $this->db->select('*');
        $this->db->from('g_artikel');

        $query = $this->db->get();

        return $query;
    }
}
