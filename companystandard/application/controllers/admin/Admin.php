<?php

/**
 * User: cangfeng.zq
 * Date: 16/12/10 下午6:15
 */
class Admin extends CI_Controller
{
    function index()
    {
        $this->load->view('admin/index');
    }
}