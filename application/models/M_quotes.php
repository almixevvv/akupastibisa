<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_quotes extends CI_Model
{

    function randomQuotes()
    {
        
        $this->db->select('*');
        $this->db->distinct();
        $this->db->from('g_quotes');
        $this->db->order_by('CONTENT','RANDOM');
        $this->db->limit(1);

        $query = $this->db->get();

        return $query;
    }
}
