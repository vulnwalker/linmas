<?php $__env->startSection('title'); ?>
  Data  Lokasi
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
    Data  Lokasi
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">


            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="row">
                        <div class="col-md-9">
                          <h4 class="card-title">Data Lokasi</h4>
                          <p class="card-category"></p>
                        </div>
                        <div class="col-md-3" style="text-align:right;">
                          <a href="<?php echo e(url('/lokasi/lokasi/create')); ?>" class="btn btn-success btn-lg" title="Add New Kecamatan" style="border-radius:  50%;">
                              <i class="fa fa-plus" aria-hidden="true"></i>
                          </a>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">

                        <?php echo Form::open(['method' => 'GET', 'url' => '/lokasi/lokasi', 'class' => 'form-inline  float-left', 'role' => 'search']); ?>

                        <div class="input-group no-border">
                                        <input type="text" name="search" class="form-control" placeholder="Search..." value="<?php echo e(request('search')); ?>">
                                        <div class="input-group-append">
                                          <div class="input-group-text">
                                            <i class="nc-icon nc-zoom-split"></i>
                                          </div>
                                        </div>
                        </div>

                        <?php echo Form::close(); ?>



                        <div>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Id Kecamatan</th><th>Id Kelurahan</th><th>Nama</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $lokasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></td>
                                        <td><?php echo e($item->id_kecamatan); ?></td><td><?php echo e($item->id_kelurahan); ?></td><td><?php echo e($item->nama); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('/lokasi/lokasi/' . $item->id)); ?>" title="View Poskamling"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="<?php echo e(url('/lokasi/lokasi/' . $item->id . '/edit')); ?>" title="Edit Poskamling"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            <?php echo Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/lokasi/lokasi', $item->id],
                                                'style' => 'display:inline'
                                            ]); ?>

                                                <?php echo Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Poskamling',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )); ?>

                                            <?php echo Form::close(); ?>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> <?php echo $lokasi->appends(['search' => Request::get('search')])->render(); ?> </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>