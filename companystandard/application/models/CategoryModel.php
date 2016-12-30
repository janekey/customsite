<?php

/**
 * User: cangfeng.zq
 * Date: 16/12/27 上午1:27
 */
class CategoryModel extends CI_Model
{
    function getListPage($pageNo = 1, $pageSize = 10)
    {
        $offset = ($pageNo - 1) * $pageSize;
        $limit = $pageSize;
        $this->db->order_by("update_time", "desc");
        $query = $this->db->get('category', $limit, $offset);
        $data = $query->result();

        $this->db->from('category');
        $count = $this->db->count_all_results();

        return array(
            'count' => $count,
            'data' => $data,
        );
    }

    function get($id)
    {
        $query = $this->db->get_where('category', array('id' => $id));
        $result = $query->result();
        return empty($result) ? null : $result[0];
    }

    function insert($categoryName)
    {
        $array = array(
            'category_name' => $categoryName,
            'create_time' => date("Y-m-d H:i:s"),
            'update_time' => date("Y-m-d H:i:s"),
        );
        $this->db->set($array);
        $this->db->insert('category');
    }

    function delete($id)
    {
        $this->db->delete('category', array('id' => $id));
    }

    function edit($categoryName, $id)
    {
        $array = array(
            'category_name' => $categoryName,
            'update_time' => date("Y-m-d H:i:s"),
        );
        $this->db->where(array(
            'id' => $id,
        ));
        $this->db->update('category', $array);
    }

    function getBatch($idList)
    {
        $this->db->where_in('id', $idList);
        $query = $this->db->get('category');
        $data = $query->result();
        if (!empty($data)) {
            $categoryMap = null;
            foreach ($data as $category) {
                $categoryMap[$category->id] = $category->category_name;
            }
            return $categoryMap;
        }
        return null;
    }
}