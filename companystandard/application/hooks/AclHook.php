<?php

/**
 * User: cangfeng.zq
 * Date: 16/12/10 下午10:29
 */
class AclHook
{
    function __construct()
    {
        $this->CI = &get_instance();
    }

    function filter()
    {
        $url = $_SERVER['PHP_SELF'];
        if (stripos($url, "index.php/admin")) {
            $admin = $this->CI->session->userdata('admin');
            if ($admin) {
                // set active menu
                $splitUrlArr = explode("/", $url);
                if (!isset($splitUrlArr[3])) {
                    $this->CI->config->set_item('menu', 'index');
                }
                if (!empty($splitUrlArr[3])) {
                    $this->CI->config->set_item('menu', $splitUrlArr[3]);

                    $crumbs = null;
                    $mod = $splitUrlArr[3];
                    switch ($mod) {
                        case 'category':
                            $crumbs['url'] = '/admin/category';
                            $crumbs['name'] = '栏目列表';
                            break;
                        case 'navigation':
                            $crumbs['url'] = '/admin/navigation';
                            $crumbs['name'] = '导航列表';
                            break;
                        case 'article':
                            $crumbs['url'] = '/admin/article';
                            $crumbs['name'] = '文章列表';
                            break;
                        case 'image':
                            $crumbs['url'] = '/admin/image';
                            $crumbs['name'] = '图集列表';
                            break;
                        case 'page':
                            $crumbs['url'] = '/admin/page';
                            $crumbs['name'] = '页面列表';
                            break;
                        case 'message':
                            $crumbs['url'] = '/admin/message';
                            $crumbs['name'] = '留言板';
                            break;
                    }
                    $this->CI->config->set_item('crumbs', $crumbs);
                }

                // load head view
                $this->CI->load->view('common/admin_head');
            } else {
                redirect("/login");
            }
        }
    }
}