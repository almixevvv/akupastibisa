<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_profile extends CI_Model
{
    function getSalt($table, $selectColumn, $column, $data)
    {
        $this->db->select($selectColumn);
        $this->db->from($table);
        $this->db->where($column, $data);

        $query = $this->db->get();

        return $query;
    }

    function getLoginDetail($table, $columnEmail, $columnPassword, $email, $password)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($columnEmail, $email);
        $this->db->where($columnPassword, $password);

        $query = $this->db->get();

        return $query;
    }

    function checkMemberEmail($email)
    {
        $this->db->select('EMAIL');
        $this->db->from('g_member');
        $this->db->where('EMAIL', $email);

        $query = $this->db->get();

        return $query;
    }

    function checkTrainerEmail($email)
    {
        $this->db->select('TRAINER_EMAIL');
        $this->db->from('g_trainer');
        $this->db->where('TRAINER_EMAIL', $email);

        $query = $this->db->get();

        return $query;
    }

    function registerAccount($table, $data)
    {
        if ($this->db->insert($table, $data)) {
            return true;
        } else {
            return false;
        }
    }
}
