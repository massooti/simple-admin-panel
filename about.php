<?php
session_start();
require_once './config/config.php';
require_once './helpers/counter.php';
require_once 'includes/auth_validate.php';

//Get DB instance. function is defined in config.php
$db = getDbInstance();

//Get Dashboard information
$numCustomers = $db->getValue("customers", "count(*)");

include_once('includes/header.php');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">داشبورد</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row" style="text-align: center !important; ">
        <div class="row ">
            <h1> درباره نرم افزار</h1>
            <div class="col-lg-8" style="margin: auto; width:100%">
                <textarea name="textabout" id="" cols="100" rows="25">



              متن خود را اینجا وارد کنید


               </textarea>
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-4">

                <!-- /.panel .chat-panel -->
            </div>
            <!-- /.col-lg-4 -->
        </div>
    </div>
    <div class="col-lg-3 col-md-6">

    </div>
    <div class="col-lg-3 col-md-6">

    </div>
</div>
<!-- /.row -->
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

<?php include_once('includes/footer.php'); ?>