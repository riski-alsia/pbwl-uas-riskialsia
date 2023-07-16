

<?php $__env->startSection('content'); ?>

<h2>Tambah Data Siswa</h2>

<form action="<?php echo e(url('/siswa')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="">Nisn</label>
        <input type="text" name="nisn" class="form-control" placeholder="Nisn">
    </div>
    <div class="mb-3">
        <label for="">Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Nama">
    </div>
    <div class="mb-3">
        <label for="">Alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="Alamat">
    </div>
    <div class="mb-3">
        <label for="">Telepon</label>
        <input type="text" name="no_telp" class="form-control" placeholder="Telepon">
    </div>
    <div class="mb-3">
        <label for="">Id Spp</label>
        <input type="text" name="id_spp" class="form-control" placeholder="ID SPP">
    </div>
    <div class="mb-3">
        <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
    </div>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas-pbwl-alsia\resources\views/siswa/create.blade.php ENDPATH**/ ?>