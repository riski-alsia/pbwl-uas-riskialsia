

<?php $__env->startSection('content'); ?>

<h2>Data Pembayaran</h2>
<a class="btn btn-success" href="<?php echo e(url('pembayaran/create')); ?>">Tambah Data</a>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nisn</th>
        <th>Tanggal Bayar</th>
        <th>Bulan Bayar</th>
        <th>Tahun Bayar</th>
        <th>Id Spp</th>
        <th>Jumlah Bayar</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($row->id_pembayaran); ?></td>
        <td><?php echo e($row->nisn); ?></td>
        <td><?php echo e($row->tgl_bayar); ?></td>
        <td><?php echo e($row->bulan_bayar); ?></td>
        <td><?php echo e($row->tahun_bayar); ?></td>
        <td><?php echo e($row->id_spp); ?></td>
        <td><?php echo e($row->jumlah_bayar); ?></td>
        <td><a class="btn btn-success" href="<?php echo e(url('pembayaran/edit/'. $row->id_pembayaran )); ?>">Edit</a>
        </td>
        <td><form action="<?php echo e(url('pembayaran/' .$row->id_pembayaran)); ?>" method="post">
            <?php echo method_field('DELETE'); ?>
            <?php echo csrf_field(); ?>
            <button class="btn btn-success" onclick="return confirm('Apakah yakin ingin dihapus')">Delete</button>
        </form></td>
    </tr> 
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas-pbwl-alsia\resources\views/pembayaran/index.blade.php ENDPATH**/ ?>