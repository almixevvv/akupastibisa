<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_profile extends CI_Model
{

    function loginEmail($data)
    {
        $this->db->select('EMAIL');
        $this->db->from('g_member');
        $this->db->where('EMAIL', $data);

        $query = $this->db->get();

        return $query;
    }

    function loginPassword($data)
    {
        $this->db->select('*');
        $this->db->from('g_member');
        $this->db->where('PASSWORD', $data);

        $query = $this->db->get();

        return $query;
    }

    function accountRegister($data)
    {
        if ($this->db->insert('g_member', $data)) {
            return true;
        } else {
            return false;
        }
    }
}
