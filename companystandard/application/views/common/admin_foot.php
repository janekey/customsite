</div><!-- content ends -->
</div><!--/fluid-row-->
<hr>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">��</button>
                <h3>Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
            </div>
        </div>
    </div>
</div>

<footer class="row">
    <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; Jackey Site 2012 - 2015</p>

</footer>

</div><!--/.fluid-container-->

<!-- external javascript -->
<script src="/assets/components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="/assets/js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='/assets/components/moment/min/moment.min.js'></script>
<script src='/assets/components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='/assets/js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="/assets/components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="/assets/components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="/assets/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="/assets/components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="/assets/components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="/assets/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="/assets/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="/assets/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="/assets/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="/assets/js/jquery.history.js"></script>
<?php
$jsFiles = $this->config->item('jsFiles');
if (isset($jsFiles)) {
    foreach ($jsFiles as $js) {
        echo '<script src="/assets/js/admin/' . $js . '"></script>';
    }
}
?>

</body>
</html>