<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Jabatan</div>

                <div class="panel-body">
                    <a href="<?php echo e(url('/jabat')); ?>" class="btn btn-success">Kembali</a><br>
                    <?php echo Form::open(['url'=>'jabat']); ?>

                    <div class="form-group">
                        <?php echo Form::label('Kode Jabatan','Kode Jabatan'); ?>

                        <?php echo Form::text('kode_jabatan',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Nama Jabatan','Nama Jabatan'); ?>

                        <?php echo Form::text('nama_jabatan',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Besaran Uang','Besaran Uang'); ?>

                        <?php echo Form::text('besaran_uang',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::submit('save',['class'=>'btn btn-success form-control']); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>