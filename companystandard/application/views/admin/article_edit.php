<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 修改文章</h2>
            </div>
            <div class="box-content">
                <?php if (isset($error)) : ?>
                    <code><?= $error ?></code>
                <?php else : ?>
                    <form role="form" action="/admin/article/edit" method="post">
                        <input type="hidden" name="id" value="<?= $article->id ?>"/>
                        <div class="form-group">
                            <label for="title">文章标题</label>
                            <input type="text" class="form-control" id="title" name="title"
                                   value="<?= $article->title ?>" placeholder="请输入文章标题">
                        </div>
                        <div class="form-group">
                            <label for="title">副标题</label>
                            <input type="text" class="form-control" id="subTitle" name="subTitle"
                                   value="<?= $article->sub_title ?>" placeholder="请输入副标题">
                        </div>
                        <div class="form-group">
                            <label for="articleName">栏目ID</label>
                            <input type="text" class="form-control" id="categoryId" name="categoryId"
                                   value="<?= $article->category_id ?>" placeholder="请输入栏目ID">
                        </div>
                        <div class="form-group">
                            <script id="articleContent" name="articleContent"
                                    type="text/plain"><?= $article->content ?></script>
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
<script type="text/javascript" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript">
    UE.getEditor('articleContent');
</script>