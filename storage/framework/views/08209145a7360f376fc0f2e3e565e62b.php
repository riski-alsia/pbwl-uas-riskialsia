

<?php $__env->startSection('content'); ?>

<h2>Tambah Data Pembayaran</h2>

<form action="<?php echo e(url('/pembayaran')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="">Nisn</label>
        <input type="text" name="nisn" class="form-control" placeholder="Nisn">
    </div>
    <div class="mb-3">
        <label for="">Tanggal Bayar</label>
        <input type="text" name="tgl_bayar" class="form-control" placeholder="Tanggal Bayar">
    </div>
    <div class="mb-3">
        <label for="">Bulan Bayar</label>
        <input type="text" name="bulan_bayar" class="form-control" placeholder="Bulan Bayar">
    </div>
    <div class="mb-3">
        <label for="">Tahun Bayar</label>
        <input type="text" name="tahun_bayar" class="form-control" placeholder="Tahun Bayar">
    </div>
    <div class="mb-3">
        <label for="">Id Spp</label>
        <input type="text" name="id_spp" class="form-control" placeholder="ID SPP">
    </div>
    <div class="mb-3">
        <label for="">Jumlah Bayar</label>
        <input type="text" name="jumlah_bayar" class="form-control" placeholder="Jumlah Bayar">
    </div>
    <div class="mb-3">
        <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
    </div>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas-pbwl-alsia\resources\views/pembayaran/create.blade.php ENDPATH**/ ?>