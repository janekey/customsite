<?php
/**
 * User: cangfeng.zq
 * Date: 16/12/30 下午10:49
 */
class Message extends CI_Controller
{
    function index()
    {
        $page = $this->input->get('p');
        $size = $this->input->get('size');
        if (!isset($page)) {
            $page = 1;
        }
        if (!isset($size)) {
            $size = 10;
        }
        $result = $this->MessageModel->getListPage($page, $size);
        $result['page'] = $page;
        $result['totalPage'] = intval(($result['count'] + $size - 1) / $size);
        $this->load->view('admin/message_list', $result);
        $this->config->set_item('jsFiles', array('message.js'));
    }

    function delete()
    {
        $id = $this->input->get('id');
        if (!empty($id)) {
            $this->MessageModel->delete($id);
        }
        redirect('/admin/message');
    }

    function detail()
    {
        $data = null;
        $id = $this->input->get('id');
        if (empty($id)) {
            $data['msg'] = '留言ID为空';
        } else {
            $message = $this->MessageModel->get($id);
            if (isset($message)) {
                $data['message'] = $message;
            } else {
                $data['msg'] = '该留言不存在';
            }
        }
        $this->load->view('admin/message_detail', $data);
    }
}