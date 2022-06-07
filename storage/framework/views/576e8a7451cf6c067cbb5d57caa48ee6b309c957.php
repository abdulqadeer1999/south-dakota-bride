<?php $__env->startSection('content'); ?>
<header class="header">
    <div class="container-fluid">
        <div class="row mainRow">
            <div class="col-lg-1 col-md-1 col-sm-1">

            </div>
            <div class="col-lg-2 col-md-5 col-sm-4 col-5">
                <div class="logo">
                    <a href="./index.html">
                        <img src="./assets_theme/images/logo.png" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-6 col-sm-8  menu_large_screen">
                <div class="header-nav">
                    <ul>
                        <li>
                            <a href="javascript:void(0)" class="link_header">Home</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="link_header">Weddings</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="link_header">Engagements</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="link_header">Vendors</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="link_header">Planner</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="link_header">Articles</a>
                        </li>
                        <li>
                            <a href="./index.html" class="link_header">Events</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="link_header">Sign In</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="link_header">Sign Up</a>
                        </li>
                        <li>
                            <button>Register</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-8 col-md-5 col-sm-6 col-7 menu_small_screen">
                <div class="toggle-small-screen">
                    <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop"
                        aria-controls="offcanvasWithBackdrop">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="offcanvas offcanvas-start mobile_menu_offcanvas" tabindex="-1"
                    id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
                    <div class="offcanvas-header">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="./assets_theme/images/logo.png" alt="logo">
                            </a>
                        </div>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="menus-offcanvas">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)">Home</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Weddings</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Engagements</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Vendors</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Planner</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Articles</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Events</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Sign In</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</header>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/website/index.blade.php ENDPATH**/ ?>