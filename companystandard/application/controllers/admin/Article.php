<?php

/**
 * User: cangfeng.zq
 * Date: 16/12/17 下午11:44
 */
class Article extends CI_Controller
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
        $result = $this->ArticleModel->getListPage($page, $size);
        if (!empty($result['data'])) {
            $categoryIdList = array();
            foreach ($result['data'] as $article) {
                if (!empty($article->category_id)) {
                    array_push($categoryIdList, $article->category_id);
                }
                $article->category_name = '';
            }
            if (!empty($categoryIdList)) {
                $categoryMap = $this->CategoryModel->getBatch($categoryIdList);
                foreach ($result['data'] as $article) {
                    $categoryId = $article->category_id;
                    if (!empty($categoryId) && isset($categoryMap[$categoryId])) {
                        $article->category_name = $categoryMap[$categoryId];
                    }
                }
            }
        }
        $result['page'] = $page;
        $result['totalPage'] = intval(($result['count'] + $size - 1) / $size);
        $this->load->view('admin/article_list', $result);
        $this->config->set_item('jsFiles', array('article.js'));
    }

    function add()
    {
        $data = array(
            'title' => '',
            'subTitle' => '',
            'categoryId' => '',
            'articleContent' => '',
        );
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $this->input->post('title');
            $subTitle = $this->input->post('subTitle');
            $categoryId = $this->input->post('categoryId');
            $articleContent = $this->input->post('articleContent');

            if (empty($title)) {
                $data['msg'] = '文章标题为空';
            } elseif (empty($articleContent)) {
                $data['msg'] = '文章内容为空';
            } else {
                if (!empty($categoryId)) {
                    $category = $this->CategoryModel->get($categoryId);
                    if (!isset($category)) {
                        $data['msg'] = '该栏目ID不存在';
                    }
                }
            }

            if (!isset($data['msg'])) {
                $this->ArticleModel->insert($title, $subTitle, $categoryId, $articleContent);
                redirect('/admin/article');
            }
            $data['title'] = $title;
            $data['subTitle'] = $subTitle;
            $data['articleContent'] = $articleContent;
            $data['categoryId'] = $categoryId;
        }
        $this->load->view('admin/article_add', $data);
    }

    function edit()
    {
        $data = null;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $this->input->post('id');
            $title = $this->input->post('title');
            $subTitle = $this->input->post('subTitle');
            $categoryId = $this->input->post('categoryId');
            $articleContent = $this->input->post('articleContent');

            if (empty($id)) {
                $data['msg'] = '文章ID为空';
            } elseif (empty($title)) {
                $data['msg'] = '文章标题为空';
            } elseif (empty($articleContent)) {
                $data['msg'] = '文章内容为空';
            } else {
                if (!empty($categoryId)) {
                    $category = $this->CategoryModel->get($categoryId);
                    if (!isset($category)) {
                        $data['msg'] = '该栏目ID不存在';
                    }
                }
            }

            if (!isset($data['msg'])) {
                $this->ArticleModel->update($id, $title, $subTitle, $categoryId, $articleContent);
                redirect('/admin/article');
            } else {
                $data['article'] = (object)[
                    'id' => $id,
                    'title' => $title,
                    'sub_title' => $subTitle,
                    'category_id' => $categoryId,
                    'content' => $articleContent,
                ];
            }
        } else {
            $id = $this->input->get('id');
            if (!empty($id)) {
                $article = $this->ArticleModel->get($id);
                if (isset($article)) {
                    $data['article'] = $article;
                } else {
                    $data['error'] = '该文章不存在';
                }
            } else {
                $data['error'] = '文章ID为空';
            }
        }
        $this->load->view('admin/article_edit', $data);
    }

    function detail()
    {
        $data = null;
        $id = $this->input->get('id');
        if (empty($id)) {
            $data['msg'] = '文章ID为空';
        } else {
            $article = $this->ArticleModel->get($id);
            if (isset($article)) {
                $data['article'] = $article;
            } else {
                $data['msg'] = '该文章不存在';
            }
        }
        $this->load->view('admin/article_detail', $data);
    }

    function disable() {
        $id = $this->input->get('id');
        if (!empty($id)) {
            $this->ArticleModel->disable($id);
        }
        redirect('/admin/article');
    }
}