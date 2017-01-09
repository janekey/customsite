<?php

/**
 * User: cangfeng.zq
 * Date: 17/1/8 下午9:14
 */
class MessageModel extends CI_Model
{
    function getListPage($pageNo = 1, $pageSize = 10)
    {
        $offset = ($pageNo - 1) * $pageSize;
        $limit = $pageSize;
        $this->db->order_by("update_time", "desc");
        $query = $this->db->get('message', $limit, $offset);
        $data = $query->result();

        $this->db->from('message');
        $count = $this->db->count_all_results();

        return array(
            'count' => $count,
            'data' => $data,
        );
    }

    function delete($id)
    {
        $this->db->delete('message', array('id' => $id));
    }

    function get($id)
    {
        $query = $this->db->get_where('message', array('id' => $id));
        $result = $query->result();
        return empty($result) ? null : $result[0];
    }
}