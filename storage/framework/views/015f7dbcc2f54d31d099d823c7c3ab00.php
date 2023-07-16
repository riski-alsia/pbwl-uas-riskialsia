

<?php $__env->startSection('content'); ?>

<h2>Edit Data Spp</h2>

<form action="<?php echo e(url('spp/'.$row->id_spp)); ?>" method="post">
    <input type="hidden" name="_method" value="PATCH">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="">Tahun</label>
        <input type="text" name="tahun" class="form-control" placeholder="Tahun" value="<?php echo e($row->tahun); ?>">
    </div>
    <div class="mb-3">
        <label for="">Nominal</label>
        <input type="text" name="nominal" class="form-control" placeholder="Nominal" value="<?php echo e($row->nominal); ?>">
    </div>
    <div class="mb-3">
        <input class="btn btn-primary" type="submit" name="" id="" value="Update">
    </div>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas-pbwl-alsia\resources\views/spp/edit.blade.php ENDPATH**/ ?>