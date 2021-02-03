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
            <div class="col-lg-8" style="margin: auto; width:100%">
                <img class="card-img-top" src="/assets/index.png" alt="image" width="21%">
                <div class="card-body">

                    <blockquote class="blockquote">
                        <p class="mb-0">درس پروژه <br>
                            استاد راهنما : سرکار خانم دکتر پور کبیریان<br>
                            گردآورنده : آرمان شفیعی<br>
                            شماره دانشجویی : ۹۵۲۰۹۳۵۲۸<br>
                            نیمسال : ۹۹ - ۰۰
                        </p>
                        <footer class="blockquote-footer">

                            <a href="index.php" class="btn btn-primary">صفحه اصلی</a>
                        </footer>
                    </blockquote>
                </div>

                <!-- /.panel -->
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