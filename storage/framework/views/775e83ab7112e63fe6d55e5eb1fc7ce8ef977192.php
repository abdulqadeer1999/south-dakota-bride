<?php $__env->startSection('title','South-Dakota-Bride | Payment'); ?>
<?php $__env->startSection('content'); ?>
<body class="body">
<section class="signin-section pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 pt-4 mx-auto">
                <h1 class="forget-password-text pt-5 text">Payment Details</h1>
                <div class="col-lg-8 mb-4 mt-5 mx-auto pt-3">
                    <input class="Artical-input" type="email" placeholder="Card Number">
                </div>
                <div class="col-lg-8 mb-4 mt-5 mx-auto pt-3">
                    <input placeholder="Expire date" class="textbox-n" type="text" onfocus="(this.type='date')"
                        onblur="(this.type='text')" id="date">
                </div>
                <div class="col-lg-8 mb-4 mt-5 mx-auto pt-3">
                    <input placeholder="CV code" class="textbox-n" type="text">
                </div>
                <div class="col-lg-8 mx-auto mt-5 text-center">
                    <div class="paymentWrap d-flex justify-content-center">
                        <div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
                            <label class="btn paymentMethod">
                                <a href="javascript:void(0)">
                                    <div class="method visa"></div>
                                    <input type="radio" name="options" checked>
                                </a>
                            </label>
                            <label class="btn paymentMethod">
                                <a href="javascript:void(0)">
                                    <div class="method master-card"></div>
                                    <input type="radio" name="options">
                                </a>
                            </label>
                            <label class="btn paymentMethod">
                                <a href="javascript:void(0)">
                                    <div class="method amex"></div>
                                    <input type="radio" name="options">
                                </a>
                            </label>
                            <label class="btn paymentMethod">
                                <a href="javascript:void(0)">
                                    <div class="method vishwa"></div>
                                    <input type="radio" name="options">
                                </a>
                            </label>
                            <!-- <label class="btn paymentMethod">
                                <div class="method ez-cash"></div>
                                <input type="radio" name="options">
                            </label> -->

                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-8 mx-auto mt-5 text-center">
                    <a href=""><button class="change-pwd"> Pay</button></a>
                 </div> -->
                <div class="col-lg-6 mx-auto mt-4 text-center">
                    <a href="javascript:void(0)"><button class="change-pwd">final Payment</button></a>
                </div>
            </div>
        </div>
    </div>

</section>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/website/payment.blade.php ENDPATH**/ ?>