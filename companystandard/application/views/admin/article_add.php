<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 新增文章</h2>
            </div>
            <div class="box-content">
                <form role="form" action="/index.php/admin/article/add" method="post">
                    <div class="form-group">
                        <label for="title">文章标题</label>
                        <input type="text" class="form-control" id="title" name="title"
                               value="<?= $title ?>" placeholder="请输入文章标题">
                    </div>
                    <div class="form-group">
                        <label for="title">副标题</label>
                        <input type="text" class="form-control" id="subTitle" name="subTitle"
                               value="<?= $subTitle ?>" placeholder="请输入副标题">
                    </div>
                    <div class="form-group">
                        <label for="articleName">栏目ID</label>
                        <input type="text" class="form-control" id="categoryId" name="categoryId"
                               value="<?= $categoryId ?>" placeholder="请输入栏目ID">
                    </div>
                    <div class="form-group">
                        <script id="articleContent" name="articleContent"
                                type="text/plain"><?= $articleContent ?></script>
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
<script type="text/javascript" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript">
    UE.getEditor('articleContent');
</script>