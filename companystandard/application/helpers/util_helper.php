<?php
/**
 * User: cangfeng.zq
 * Date: 16/12/29 下午9:45
 */
if (!function_exists('page_html')) {
    /**
     * page html
     */
    function page_html($page, $totalPage)
    {
        $html = '';
        if ($totalPage > 1) {
            $html .= '<ul class="pagination pagination-centered">';
            if ($page > 1) {
                $html .= '<li><a href="?p=' . ($page - 1) . '">Prev</a></li>';
            }

            if ($page < 4) {
                for ($i = 1; $i < $page; $i++) {
                    $html .= '<li><a href="?p=' . $i . '">' . $i . '</a></li>';
                }
            } else {
                for ($i = $page - 3; $i < $page; $i++) {
                    $html .= '<li><a href="?p=' . $i . '">' . $i . '</a></li>';
                }
            }
            $html .= '<li class="active" ><a href = "?p=' . $page . '" >' . $page . '</a></li>';

            for ($i = $page + 1; $i < $page + 4 && $i <= $totalPage; $i++) {
                $html .= '<li><a href="?p=' . $i . '">' . $i . '</a></li>';
            }

            if ($totalPage > $page) {
                $html .= '<li><a href="?p=' . ($page + 1) . '">Next</a></li>';
            }
            $html .= '</ul>';
        }
        return $html;
    }
}