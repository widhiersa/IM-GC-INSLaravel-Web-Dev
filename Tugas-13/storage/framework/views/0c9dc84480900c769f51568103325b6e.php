<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 22 | Widhi Ersa Pratiwi </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('./AdminLte/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('./AdminLte/dist/css/adminlte.min.css')); ?>">

  <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="<?php echo e(asset('./AdminLte/dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 22</span>
    </a>
    <!--  ini punya Habbilpermana -->

    <!-- Sidebar -->
    <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $__env->yieldContent('title'); ?></h1>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?php echo $__env->yieldContent('subtitle'); ?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- /.card-body -->
     
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; Garuda Cyber Indonesia <a href="">Widhiep</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo e(asset('/AdminLte/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('/AdminLte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('/AdminLte/dist/js/adminlte.min.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('/AdminLte/dist/js/demo.js')); ?>"></script>
<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Tugas-13\resources\views/layouts/master.blade.php ENDPATH**/ ?>