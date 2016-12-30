<?php

/**
 * User: cangfeng.zq
 * Date: 16/12/27 上午12:45
 */
class Navigation extends CI_Controller
{
    function index()
    {
        $result = $this->NavigationModel->getListPage();
        $this->load->view('admin/navigation_list', $result);
    }

    function add()
    {
        $data = null;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $naviName = $this->input->post('naviName');
            $address = $this->input->post('address');
            $newWindow = $this->input->post('newWindow');
            if (!empty($naviName) && !empty($address)) {
                if (empty($newWindow) || $newWindow != '1') {
                    $newWindow = '0';
                }
                $this->NavigationModel->insert($naviName, $address, $newWindow);
                redirect('/admin/navigation');
            } else {
                $data['msg'] = 'navigation Name or address is null';
            }
        }
        $this->load->view('admin/navigation_add', $data);
    }

    function delete()
    {
        $id = $this->input->get('id');
        if (!empty($id)) {
            $this->NavigationModel->delete($id);
        }
        redirect('/admin/navigation');
    }

    function edit()
    {
        $data = null;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $this->input->post('id');
            $naviName = $this->input->post('naviName');
            $address = $this->input->post('address');
            $newWindow = $this->input->post('newWindow');
            if (!empty($id) && !empty($naviName) && !empty($address)) {
                if (empty($newWindow) || $newWindow != '1') {
                    $newWindow = '0';
                }
                $this->NavigationModel->edit($naviName, $address, $newWindow, $id);
                redirect('/admin/navigation');
            } else {
                $data['navigation'] = (object)[
                    'id' => $id,
                    'navi_name' => $naviName,
                    'address' => $address,
                    'new_window' => $newWindow,
                ];
                $data['msg'] = 'navigation Name or address is null';
            }
        } else {
            $id = $this->input->get('id');
            if (!empty($id)) {
                $navigation = $this->NavigationModel->get($id);
                if (isset($navigation)) {
                    $data['navigation'] = $navigation;
                } else {
                    $data['error'] = 'navigation not exist';
                }
            } else {
                $data['error'] = 'navigation id is empty';
            }
        }
        $this->load->view('admin/navigation_edit', $data);
    }
}