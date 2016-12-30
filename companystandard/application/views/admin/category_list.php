<div>
    <a class="btn btn-success" href="/index.php/admin/category/add"> 新增栏目</a>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th"></i> 栏目列表</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>栏目名称</th>
                        <th>最后修改时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($data)): ?>
                        <?php foreach ($data as $category): ?>
                            <tr>
                                <td><?= $category->id ?></td>
                                <td class="center"><?= $category->category_name ?></td>
                                <td class="center"><?php echo date("Y-m-d H:i:s", strtotime($category->update_time)); ?></td>
                                <td class="center">
                                    <a class="btn btn-info" href="/index.php/admin/category/edit?id=<?= $category->id ?>">
                                        <i class="glyphicon glyphicon-edit icon-white"></i> Edit
                                    </a>
                                    <a class="btn btn-danger" href="/index.php/admin/category/delete?id=<?= $category->id ?>">
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

<!-- content ends -->