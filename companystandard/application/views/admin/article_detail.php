<style type="text/css">
    .article-content * {color: black;}
</style>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-font"></i> 文章详情</h2>
            </div>
            <div class="box-content">
                <?php if (isset($msg)) : ?>
                    <code><?= $msg ?></code>
                <?php else : ?>
                    <div class="page-header">
                        <h1><?= $article->title ?>
                            <small><?= $article->sub_title ?></small>
                        </h1>
                    </div>
                    <div class="article-content">
                        <?= $article->content ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <!--/span-->
</div>