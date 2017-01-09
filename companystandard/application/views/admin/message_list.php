<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-list"></i> 留言列表</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                    <thead>
                    <tr>
                        <th>姓名</th>
                        <th>邮箱</th>
                        <th>电话</th>
                        <th>留言时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($data)): ?>
                        <?php foreach ($data as $message): ?>
                            <tr>
                                <td class="center"><?= $message->name ?></td>
                                <td class="center"><?= $message->email ?></td>
                                <td class="center"><?= $message->phone ?></td>
                                <td class="center"><?php echo date("Y-m-d H:i:s", strtotime($message->create_time)); ?></td>
                                <td class="center">
                                    <a class="btn btn-success"
                                       href="/admin/message/detail?id=<?= $message->id ?>">
                                        <i class="glyphicon glyphicon-zoom-in icon-white"></i> View
                                    </a>
                                    <a class="btn btn-danger" title="留言信息删除后将无法恢复" data-toggle="tooltip"
                                       href="/admin/message/delete?id=<?= $message->id ?>">
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