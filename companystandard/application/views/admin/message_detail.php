<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-font"></i> 留言详情</h2>
            </div>
            <div class="box-content">
                <?php if (isset($msg)) : ?>
                    <code><?= $msg ?></code>
                <?php else : ?>
                    <div class="form-group">
                        <label>姓名：</label>
                        <label><?= $message->name ?></label>
                    </div>
                    <div class="form-group">
                        <label>邮箱：</label>
                        <label><?= $message->email ?></label>
                    </div>
                    <div class="form-group">
                        <label>电话：</label>
                        <label><?= $message->phone ?></label>
                    </div>
                    <div class="form-group">
                        <label>时间：</label>
                        <label><?php echo date("Y-m-d H:i:s", strtotime($message->create_time)); ?></label>
                    </div>
                    <div class="form-group">
                        <label>内容：</label>
                        <label><?= $message->content ?></label>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <!--/span-->
</div>