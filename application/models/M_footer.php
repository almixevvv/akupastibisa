<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_footer extends CI_Model
{
    public function footerDetail($path)
    {
        $this->db->select('*');
        $this->db->from('g_footer');
        $this->db->where('PATH', $path);

        $query = $this->db->get();

        return $query;
    }
}
