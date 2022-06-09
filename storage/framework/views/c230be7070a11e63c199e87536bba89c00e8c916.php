<?php $__env->startSection('title', 'Project List'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/owlcarousel.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/rating.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Pages</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Page </li>
    <li class="breadcrumb-item active">list </li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <!-- Individual column searching (text inputs) Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">

                        <div class="row">
                            <div class="col-md-8">
                                <h5>Page list</h5>
                            </div>
                            <div class="col-md-4" align="right">
                                <a type="button" class="btn btn-primary for-font-color" href="<?php echo e(route('PageContent_create')); ?>"> Create</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive product-table">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Page Name</th>
                                        
                                        <th>Image</th>
                                        <th>Image2</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $getCMS; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                        <tr>
                                           <td><?php echo e($key+1); ?></td>
                                           <td><?php echo e($value->getPageName->page_name); ?></td>
                                           
                                           <td>
                                            <?php if($value->image != null): ?>
                                            <img src="<?php echo e(asset('storage/uploads/cms/' . $value->image)); ?>" alt="image" style="width:120px; height:80px;">
                                            <?php else: ?>
                                            <img src="<?php echo e((!empty($Value->image))?
                                                asset('storage/uploads/cms/'.$Value->image):asset('storage/uploads/No-image.jpg')); ?>"
                                                style="width:120px; height:80px;">
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if($value->image2 != null): ?>
                                            <img src="<?php echo e(asset('storage/uploads/cms/' . $value->image2)); ?>" alt="image" style="width:120px; height:80px;">
                                            <?php else: ?>
                                            <img src="<?php echo e((!empty($Value->image2))?
                                                asset('storage/uploads/cms/'.$Value->image2):asset('storage/uploads/No-image.jpg')); ?>"
                                                style="width:120px; height:80px;">
                                            <?php endif; ?>
                                        </td>
                                            
                                            
                                            
                                            <td>
                                                
                                                <button class="btn btn-success btn-xs for-font-color" type="button" data-original-title="btn btn-danger btn-xs" title=""> <a href="<?php echo e(route('PageContent_edit', $value->id)); ?>">Edit</a></button>
                                             </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Individual column searching (text inputs) Ends-->
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/rating/jquery.barrating.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/rating/rating-script.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/owlcarousel/owl.carousel.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/ecommerce.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/product-list-custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/pagecontent/index.blade.php ENDPATH**/ ?>