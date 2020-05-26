<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_artikel extends CI_Model
{

    function artikel($id)
    {
        $this->db->select('*');
        $this->db->from('g_artikel');
        $this->db->order_by('REC_ID','DESC');
        $this->db->where('ARTIKEL_ID', $id);
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
