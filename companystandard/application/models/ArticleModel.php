<?php

/**
 * User: cangfeng.zq
 * Date: 16/12/27 上午1:27
 */
class ArticleModel extends CI_Model
{
    function getListPage($pageNo = 1, $pageSize = 10)
    {
        $offset = ($pageNo - 1) * $pageSize;
        $limit = $pageSize;
        $this->db->order_by("update_time", "desc");
        $query = $this->db->get_where('article', array('status' => 0), $limit, $offset);
        $data = $query->result();

        $this->db->from('article');
        $this->db->where(array('status' => 0));
        $count = $this->db->count_all_results();

        return array(
            'count' => $count,
            'data' => $data,
        );
    }

    function insert($title, $subTitle, $categoryId, $content)
    {
        $array = array(
            'title' => $title,
            'sub_title' => $subTitle,
            'category_id' => $categoryId,
            'content' => $content,
            'create_time' => date("Y-m-d H:i:s"),
            'update_time' => date("Y-m-d H:i:s"),
        );
        $this->db->set($array);
        $this->db->insert('article');
    }

    function get($id)
    {
        $query = $this->db->get_where('article', array('id' => $id));
        $result = $query->result();
        return empty($result) ? null : $result[0];
    }

    function update($id, $title, $subTitle, $categoryId, $content)
    {
        $array = array(
            'title' => $title,
            'sub_title' => $subTitle,
            'category_id' => $categoryId,
            'content' => $content,
            'update_time' => date("Y-m-d H:i:s"),
        );
        $this->db->where(array(
            'id' => $id,
        ));
        $this->db->update('article', $array);
    }

    function disable    ($id)
    {
        $this->db->where(array(
            'id' => $id,
        ));
        $this->db->update('article', array(
            'status' => 1,
        ));
    }
}