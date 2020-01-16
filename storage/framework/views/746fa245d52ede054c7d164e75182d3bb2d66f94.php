

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <?php echo $__env->make('admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">ContentPublikasi <?php echo e($contentpublikasi->id); ?></div>
                    <div class="card-body">

                        <a href="<?php echo e(url('/ContentPublikasi/content-publikasi')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="<?php echo e(url('/ContentPublikasi/content-publikasi/' . $contentpublikasi->id . '/edit')); ?>" title="Edit ContentPublikasi"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        <?php echo Form::open([
                            'method'=>'DELETE',
                            'url' => ['ContentPublikasi/contentpublikasi', $contentpublikasi->id],
                            'style' => 'display:inline'
                        ]); ?>

                            <?php echo Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete ContentPublikasi',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            )); ?>

                        <?php echo Form::close(); ?>

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td><?php echo e($contentpublikasi->id); ?></td>
                                    </tr>
                                    <tr><th> Id Publikasi </th><td> <?php echo e($contentpublikasi->id_publikasi); ?> </td></tr><tr><th> Judul </th><td> <?php echo e($contentpublikasi->judul); ?> </td></tr><tr><th> Deskripsi </th><td> <?php echo e($contentpublikasi->deskripsi); ?> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>