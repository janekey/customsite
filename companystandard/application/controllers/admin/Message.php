<?php
/**
 * User: cangfeng.zq
 * Date: 16/12/30 下午10:49
 */
class Message extends CI_Controller
{
    function index()
    {
        $result = null;
        $this->load->view('admin/message_list', $result);
    }
}