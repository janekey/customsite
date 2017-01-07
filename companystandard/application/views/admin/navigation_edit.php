<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 修改导航</h2>
            </div>
            <div class="box-content">
                <?php if (isset($error)) : ?>
                    <code><?= $error ?></code>
                <?php else : ?>
                    <form role="form" action="/admin/navigation/edit" method="post">
                        <input type="hidden" name="id" value="<?= $navigation->id ?>"/>
                        <div class="form-group">
                            <label for="naviName">导航名称</label>
                            <input type="text" class="form-control" id="naviName" name="naviName"
                                   value="<?= $navigation->navi_name ?>" placeholder="请输入导航名称">
                        </div>
                        <div class="form-group">
                            <label for="address">地址</label>
                            <input type="text" class="form-control" id="address" name="address"
                                   value="<?= $navigation->address ?>" placeholder="请输入导航地址">
                        </div>
                        <div class="form-group">
                            <label class="checkbox-inline">
                                <input type="checkbox" id="newWindow" name="newWindow"
                                       value="1" <?php if ($navigation->new_window == '1') echo "checked"; ?>>
                                是否新开窗口
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">保存</button>
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