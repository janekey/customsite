<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 新增导航</h2>
            </div>
            <div class="box-content">
                <form role="form" action="/admin/navigation/add" method="post">
                    <div class="form-group">
                        <label for="naviName">导航名称</label>
                        <input type="text" class="form-control" id="naviName" name="naviName"
                               placeholder="请输入导航名称">
                    </div>
                    <div class="form-group">
                        <label for="address">地址</label>
                        <input type="text" class="form-control" id="address" name="address"
                               placeholder="请输入导航地址">
                    </div>
                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="newWindow" name="newWindow" value="1">
                            是否新开窗口
                        </label>
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