<?php $__env->startSection('title', 'Daftar Mahasiswa'); ?>


<?php $__env->startSection('container'); ?>
    <div class="container">
        <div class="row">
            <div class="col-10">

                <h1 class="mt-3">Daftar Mahasiswa</h1>

                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NPM</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($loop->iteration); ?></th>
                            <td><?php echo e($mhs -> nama); ?></td>
                            <td><?php echo e($mhs -> npm); ?></td>
                            <td><?php echo e($mhs -> email); ?></td>
                            <td><?php echo e($mhs -> jurusan); ?></td>
                            <td>
                                <a href="" class="btn btn-success">EDIT</a>
                                <a href="" class="btn btn-danger">DELETE</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LatihanMagang1\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>