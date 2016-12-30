<?php

/**
 * User: cangfeng.zq
 * Date: 16/12/27 上午1:35
 */
class Category extends CI_Controller
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
        $result = $this->CategoryModel->getListPage($page, $size);
        $result['page'] = $page;
        $result['totalPage'] = intval(($result['count'] + $size - 1) / $size);
        $this->load->view('admin/category_list', $result);
    }

    function add()
    {
        $data = null;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $categoryName = $this->input->post('categoryName');
            if (!empty($categoryName)) {
                $this->CategoryModel->insert($categoryName);
                redirect('/admin/category');
            }
            $data['msg'] = 'category name is null';
        }
        $this->load->view('admin/category_add', $data);
    }

    function delete()
    {
        $id = $this->input->get('id');
        if (!empty($id)) {
            $this->CategoryModel->delete($id);
        }
        redirect('/admin/category');
    }

    function edit()
    {
        $data = null;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $this->input->post('id');
            $categoryName = $this->input->post('categoryName');
            if (!empty($id) && !empty($categoryName)) {
                $this->CategoryModel->edit($categoryName, $id);
                redirect('/admin/category');
            } else {
                $data['category'] = (object)[
                    'id' => $id,
                    'category_name' => $categoryName,
                ];
                $data['msg'] = 'category name is null';
            }
        } else {
            $id = $this->input->get('id');
            if (!empty($id)) {
                $category = $this->CategoryModel->get($id);
                if (isset($category)) {
                    $data['category'] = $category;
                } else {
                    $data['error'] = 'category not exist';
                }
            } else {
                $data['error'] = 'category id is empty';
            }
        }
        $this->load->view('admin/category_edit', $data);
    }
}