<?php

/**
 * User: cangfeng.zq
 * Date: 16/12/27 上午1:27
 */
class NavigationModel extends CI_Model
{
    function getList() {
        $this->db->order_by("update_time", "desc");
        $query = $this->db->get('navigation');
        $data = $query->result();
        return array(
            'data' => $data,
        );
    }

    function getListPage($pageNo = 1, $pageSize = 10)
    {
        $offset = ($pageNo - 1) * $pageSize;
        $limit = $pageSize;
        $this->db->order_by("update_time", "desc");
        $query = $this->db->get('navigation', $limit, $offset);
        $data = $query->result();

        $this->db->from('navigation');
        $count = $this->db->count_all_results();

        return array(
            'count' => $count,
            'data' => $data,
        );
    }

    function get($id)
    {
        $query = $this->db->get_where('navigation', array('id' => $id));
        $result = $query->result();
        return empty($result) ? null : $result[0];
    }

    function insert($naviName, $address, $newWindow)
    {
        $array = array(
            'navi_name' => $naviName,
            'address' => $address,
            'new_window' => $newWindow,
            'create_time' => date("Y-m-d H:i:s"),
            'update_time' => date("Y-m-d H:i:s"),
        );
        $this->db->set($array);
        $this->db->insert('navigation');
    }

    function delete($id)
    {
        $this->db->delete('navigation', array('id' => $id));
    }

    function edit($naviName, $address, $newWindow, $id)
    {
        echo "test:" + $naviName + $address + $newWindow + $id;
        $array = array(
            'navi_name' => $naviName,
            'address' => $address,
            'new_window' => $newWindow,
            'update_time' => date("Y-m-d H:i:s"),
        );
        $this->db->where(array(
            'id' => $id,
        ));
        $this->db->update('navigation', $array);
    }
}