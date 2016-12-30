<?php

/**
 * User: cangfeng.zq
 * Date: 16/12/17 下午11:51
 */
class PostAdminHook
{
    function __construct()
    {
        $this->CI = &get_instance();
    }

    function post_controller()
    {
        $url = $_SERVER['PHP_SELF'];
        if (stripos($url, "index.php/admin")) {
            $admin = $this->CI->session->userdata('admin');
            if ($admin) {
                $this->CI->load->view('common/admin_foot');
            }
        }

    }
}