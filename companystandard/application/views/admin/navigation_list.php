<div>
    <a class="btn btn-success" href="/admin/navigation/add"> 新增导航</a>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-align-justify"></i> 导航列表</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                    <thead>
                    <tr>
                        <th>导航名称</th>
                        <th>地址</th>
                        <th>是否新开窗口</th>
                        <th>最后修改时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($data)): ?>
                        <?php foreach ($data as $navigation): ?>
                            <tr>
                                <td class="center"><?= $navigation->navi_name ?></td>
                                <td class="center"><?= $navigation->address ?></td>
                                <td class="center">
                                    <?php if ($navigation->new_window == '1'): ?>是<?php else: ?>否<?php endif; ?>
                                </td>
                                <td class="center"><?php echo date("Y-m-d H:i:s", strtotime($navigation->update_time)); ?></td>
                                <td class="center">
                                    <a class="btn btn-info"
                                       href="/admin/navigation/edit?id=<?= $navigation->id ?>">
                                        <i class="glyphicon glyphicon-edit icon-white"></i> Edit
                                    </a>
                                    <a class="btn btn-danger"
                                       href="/admin/navigation/delete?id=<?= $navigation->id ?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

<!-- content ends -->