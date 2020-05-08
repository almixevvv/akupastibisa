<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_courses extends CI_Model
{

    function getSingleCourse($id)
    {
        $this->db->select('*');
        $this->db->from('v_g_courses');
        $this->db->where('COURSE_ID', $id);

        $query = $this->db->get();

        return $query;
    }

    function getCoursesList($url)
    {
        $this->db->select('*');
        $this->db->from('g_course_categories');
        $this->db->where('CATEGORY_URL', $url);

        $query = $this->db->get();

        return $query;
    }

    function getCurrentTopCourse($url)
    {
        $this->db->select('*');
        $this->db->from('v_g_courses');
        $this->db->where('COURSE_URL', $url);
        $this->db->order_by('COURSE_RATING', 'DESC');
        $this->db->limit(1);

        $query = $this->db->get();

        return $query;
    }

    function getCourseFromUrl($url)
    {
        $this->db->select('*');
        $this->db->from('v_g_courses');
        $this->db->where('COURSE_URL', $url);

        $query = $this->db->get();

        return $query;
    }

    function topCourse()
    {
        $this->db->select('*');
        $this->db->from('v_g_courses');
        $this->db->order_by('COURSE_RATING', 'DESC');
        $this->db->limit(4);

        $query = $this->db->get();

        return $query;
    }

    function navbarCategory()
    {
        $this->db->select('*');
        $this->db->from('g_course_categories');
        $this->db->order_by('REC_ID', 'ASC');

        $query = $this->db->get();

        return $query;
    }

    function topTrainer()
    {
        $this->db->select('*');
        $this->db->from('g_trainer');
        $this->db->order_by('RAND()');
        $this->db->limit(4);

        $query = $this->db->get();

        return $query;
    }
}
