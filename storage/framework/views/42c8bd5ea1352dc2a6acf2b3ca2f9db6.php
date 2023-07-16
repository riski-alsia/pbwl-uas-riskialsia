

<?php $__env->startSection('content'); ?>

<h2>Tambah Data Spp</h2>

<form action="<?php echo e(url('/spp')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="">Tahun</label>
        <input type="text" name="tahun" class="form-control" placeholder="Tahun">
    </div>
    <div class="mb-3">
        <label for="">Nominal</label>
        <input type="text" name="nominal" class="form-control" placeholder="Nominal">
    </div>
    <div class="mb-3">
        <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
    </div>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas-pbwl-alsia\resources\views/spp/create.blade.php ENDPATH**/ ?>