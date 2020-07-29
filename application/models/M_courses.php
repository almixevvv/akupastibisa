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

    function getAllCourse()
    {
        $this->db->select('*');
        $this->db->from('v_g_courses');

        $query = $this->db->get();

        return $query;
    }

    function getInstructorCourse($id)
    {
        $this->db->select('*');
        $this->db->from('v_g_courses');
        $this->db->where('COURSE_TRAINER_ID', $id);

        $query = $this->db->get();

        return $query;
    }

    function getCourseContentTitle($id)
    {
        $this->db->select('*');
        $this->db->from('g_course_content');
        $this->db->where('COURSE_ID', $id);
        $this->db->where('COURSE_SECTION_PARENT', '0');
        $this->db->where('COURSE_TYPE', 'TITLE');

        $query = $this->db->get();

        return $query;
    }

    function countCourseDuration($id)
    {
        $this->db->select('SEC_TO_TIME(SUM(TIME_TO_SEC(COURSE_SECTION_DURATION))) AS "COURSE_DURATION", COUNT(*) AS "COURSE_AMOUNT"');
        $this->db->from('g_course_content');
        $this->db->where('COURSE_ID', $id);
        $this->db->where('COURSE_SECTION_PARENT', '0');
        $this->db->where('COURSE_TYPE', 'TITLE');

        $query = $this->db->get();

        return $query;
    }

    function getCourseWYG($id)
    {
        $this->db->select('*');
        $this->db->from('v_g_course_wyg');
        $this->db->where('COURSE_ID', $id);

        $query = $this->db->get();

        return $query;
    }

    function getCourseContentTotal($id)
    {
        $this->db->select('*');
        $this->db->from('g_course_content');
        $this->db->where('COURSE_ID', $id);

        $query = $this->db->get();

        return $query;
    }

    function getChildCourseContent($id)
    {
        $this->db->select('*');
        $this->db->from('g_course_content');
        $this->db->where('COURSE_SECTION_PARENT', $id);

        $query = $this->db->get();

        return $query;
    }

    function getWYG()
    {
        $this->db->select('*');
        $this->db->from('m_course_wyg');
        $this->db->where('REC_ID !=', '1');

        $query = $this->db->get();

        return $query;
    }

    function getContentType()
    {
        $this->db->select('*');
        $this->db->from('m_course_categories');
        $this->db->where('CATEGORY_STATUS', 'ACTIVE');

        $query = $this->db->get();

        return $query;
    }

    function getCoursesList($url)
    {
        $this->db->select('*');
        $this->db->from('m_course_categories');
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

    function gettopCourse()
    {
        $this->db->select('*');
        $this->db->from('v_g_courses');
        $this->db->order_by('COURSE_RATING', 'DESC');
        $this->db->where('COURSE_STATUS', 'ACTIVE');
        $this->db->limit(4);

        $query = $this->db->get();

        return $query;
    }

    function getsearchCourse($query)
    {
        $this->db->select('*');
        $this->db->from('v_g_courses');
        $this->db->like('COURSE_NAME', $query);
        $this->db->or_like('COURSE_DESCRIPTION', $query);
        $this->db->order_by('REC_ID', 'DESC');

        $query = $this->db->get();

        return $query;
    }

    function getnavbarCategory()
    {
        $this->db->select('*');
        $this->db->from('m_course_categories');
        $this->db->order_by('REC_ID', 'ASC');
        $this->db->where('CATEGORY_PARENT_ID', '0');

        $query = $this->db->get();

        return $query;
    }

    function navbarChild($id)
    {
        $this->db->select('*');
        $this->db->from('m_course_categories');
        $this->db->order_by('REC_ID', 'ASC');
        $this->db->where('CATEGORY_PARENT_ID', $id);

        $query = $this->db->get();

        return $query;
    }

    function gettopTrainer()
    {
        $this->db->select('*');
        $this->db->from('g_trainer');
        $this->db->order_by('RAND()');
        $this->db->where('TRAINER_STATUS !=', 'NEW');
        $this->db->limit(4);

        $query = $this->db->get();

        return $query;
    }

    function gettopTrainer_all()
    {
        $this->db->select('*');
        $this->db->from('g_trainer');
        $this->db->order_by('TRAINER_NAME', 'ASC');
        $this->db->where('TRAINER_STATUS !=', 'NEW');

        $query = $this->db->get();

        return $query;
    }

    function getcourseAll($trainer_id)
    {
        $this->db->select('*');
        $this->db->from('g_courses');
        $this->db->where('COURSE_TRAINER_ID', $trainer_id);

        $query = $this->db->get();

        return $query;
    }

    function postCourses($data)
    {
        $query = $this->db->insert('g_courses', $data);

        return $query;
    }

    function postCourseWYG($data)
    {
        $query = $this->db->insert('g_course_wyg_tag', $data);

        return $query;
    }

    function postCourseRelated($data)
    {
        $query = $this->db->insert('g_course_related_tag', $data);

        return $query;
    }
}
