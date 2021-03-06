<?php $__env->startSection('title', 'Daftar Mahasiswa'); ?>


<?php $__env->startSection('container'); ?>
    <div class="container">
        <div class="row">
            <div class="col-7">

                <h1 class="mt-3">Detail Mahasiswa</h1>

                <div class="card w-50">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo e($student->nama); ?></h5>
                      <h6 class="card-subtitle mb-2 text-muted"><?php echo e($student->npm); ?></h6>
                      <p class="card-text"><?php echo e($student->jurusan); ?></p>
                      <p class="card-text"><?php echo e($student->email); ?></p>

                      <a href="<?php echo e($student->id); ?>/edit" class="btn btn-primary">Edit</a>

                      <form action="/students/<?php echo e($student->id); ?>" method="post" class="d-inline">
                          <?php echo method_field('delete'); ?>
                          <?php echo csrf_field(); ?>
                          <button type="submit" class="btn btn-danger">Delete</button>
                      </form>

                      <br>
                      <a href="/students" class="card-link">Kembali</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LatihanMagang1\resources\views/students/show.blade.php ENDPATH**/ ?>