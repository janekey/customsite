<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 修改栏目</h2>
            </div>
            <div class="box-content">
                <?php if (isset($error)) : ?>
                    <code><?= $error ?></code>
                <?php else : ?>
                    <form role="form" action="/index.php/admin/category/edit" method="post">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?= $category->id ?>"/>
                            <label for="categoryName">栏目名称</label>
                            <input type="text" class="form-control" id="categoryName" name="categoryName"
                                   value="<?= $category->category_name ?>"
                                   placeholder="请输入栏目名称">
                        </div>
                        <button type="submit" class="btn btn-default">提交</button>
                        <?php if (isset($msg)): ?>
                            <code><?= $msg ?></code>
                        <?php endif; ?>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->