<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 新增栏目</h2>
            </div>
            <div class="box-content">
                <form role="form" action="/admin/category/add" method="post">
                    <div class="form-group">
                        <label for="categoryName">栏目名称</label>
                        <input type="text" class="form-control" id="categoryName" name="categoryName"
                               placeholder="请输入栏目名称">
                    </div>
                    <button type="submit" class="btn btn-default">提交</button>
                    <?php if (isset($msg)): ?>
                        <code><?= $msg ?></code>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->