<?php $__env->startSection('title', 'Daftar Mahasiswa'); ?>


<?php $__env->startSection('container'); ?>
    <div class="container">
        <div class="row">
            <div class="col-7">

                <h1 class="mt-3">Daftar Mahasiswa</h1>

                <a href="/students/create" class="btn btn-primary my-3">Tambah data mahasiswa</a>

                <?php if(session('pesan')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('pesan')); ?>

                    </div>
                <?php endif; ?>

                <div class="list-group">
                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $std): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="/students/<?php echo e($std->id); ?>" class="list-group-item list-group-item-action">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><?php echo e($std->nama); ?></h5>
                        <small class="text-muted">Detail</small>
                      </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LatihanMagang1\resources\views/students/index.blade.php ENDPATH**/ ?>