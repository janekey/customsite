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
        $isAdmin = $this->CI->uri->segment(1);
        if (isset($isAdmin) && $isAdmin == 'admin') {
            $admin = $this->CI->session->userdata('admin');
            if ($admin) {
                // set active menu
                $menu = $this->CI->uri->segment(2, 'index');
                $this->CI->config->set_item('menu', $menu);

                $crumbs = null;
                switch ($menu) {
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

                // load head view
                $this->CI->load->view('common/admin_head');
            } else {
                redirect("/login");
            }
        }
    }
}