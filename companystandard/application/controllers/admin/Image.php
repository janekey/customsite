<?php
/**
 * User: cangfeng.zq
 * Date: 16/12/30 下午8:28
 */
class Image extends CI_Controller
{
    function index()
    {
        $result = null;
        $this->load->view('admin/image_list', $result);
        $this->config->set_item('jsFiles', array('image.js'));
    }
}