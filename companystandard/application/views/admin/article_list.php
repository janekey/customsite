<div>
    <a class="btn btn-success" href="/admin/article/add"> 新增文章</a>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-list"></i> 文章列表</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>标题</th>
                        <th>所属栏目</th>
                        <th>最后修改时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($data)): ?>
                        <?php foreach ($data as $article): ?>
                            <tr>
                                <td><?= $article->id ?></td>
                                <td class="center"><?= $article->title ?></td>
                                <td class="center"><?= $article->category_name ?></td>
                                <td class="center"><?php echo date("Y-m-d H:i:s", strtotime($article->update_time)); ?></td>
                                <td class="center">
                                    <a class="btn btn-success"
                                       href="/admin/article/detail?id=<?= $article->id ?>">
                                        <i class="glyphicon glyphicon-zoom-in icon-white"></i> View
                                    </a>
                                    <a class="btn btn-info"
                                       href="/admin/article/edit?id=<?= $article->id ?>">
                                        <i class="glyphicon glyphicon-edit icon-white"></i> Edit
                                    </a>
                                    <a class="btn btn-danger" title="文章删除后将被放入回收站中" data-toggle="tooltip"
                                       href="/admin/article/disable?id=<?= $article->id ?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                </table>
                <?php echo page_html($page, $totalPage) ?>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->