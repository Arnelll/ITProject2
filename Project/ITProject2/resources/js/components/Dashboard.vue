<template>
    <div class="container">
        <section class="content-header">
            <h1>
                Dashboard
                <small>1. (Update as of 03/18/2019)</small>
            </h1>
            <!-- <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home/</a></li>
                <li class="active">Dashboard</li>
            </ol> -->
        </section>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fas fa-traffic-light text-blue"></i></span>

                <div class="info-box-content">
                <span class="info-box-text">Inventory Space</span>
                <span class="info-box-number">90<small>%</small></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fas fa-heart text-red"></i></span>

                <div class="info-box-content">
                <span class="info-box-text">Products in-stock</span>
                <span class="info-box-number">41,410</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <!-- <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fas fa-shopping-cart text-green"></i></span>

                <div class="info-box-content">
                <span class="info-box-text">Sales</span>
                <span class="info-box-number">760</span>
                </div>
                
            </div>
            
            </div>
            /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="fas fa-child text-indigo"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">New Customers</span>
                    <span class="info-box-number">2,000</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            //do something
        }
    }
</script>
