
<?php


$logo_add = App\Models\LogoManager::where('title','logo')->first();

// dd($logo_add);
?>

<style>
/* width */
sidebar-wrapper::-webkit-scrollbar {
  width: 10px;
}

/* Track */
sidebar-wrapper::-webkit-scrollbar-track {
  background: grey;
}

/* Handle */
sidebar-wrapper::-webkit-scrollbar-thumb {
  background: grey;
}

/* Handle on hover */
sidebar-wrapper::-webkit-scrollbar-thumb:hover {
  background: #555;
}
</style>
<div class="sidebar-wrapper">
	<div>
		<div class="logo-wrapper">
			<a href="<?php echo e(route('index')); ?>"><img class="img-fluid for-light" src="<?php echo e((!empty($logo_add->image))?
                asset('storage/uploads/logo/'.$logo_add->image):asset('storage/uploads/No-image.jpg')); ?>"
                style="width:120px; height:80px;" alt="">
                <img class="img-fluid for-dark" src="<?php echo e(asset('assets/images/logo/logo_dark.png')); ?>" alt=""></a>
			<div class="back-btn"><i class="fa fa-angle-left"></i></div>
			<div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
		</div>
		<div class="logo-icon-wrapper">
            <a href="<?php echo e(route('index')); ?>"><img class="img-fluid" src="<?php echo e((!empty($logo_add->image))?
            asset('storage/uploads/logo/'.$logo_add->image):asset('storage/uploads/No-image.jpg')); ?>" alt="" style="height:40px;width:60px;"></a>
        </div>
		<nav class="sidebar-main">
			<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
			<div id="sidebar-menu">
				<ul class="sidebar-links" id="simple-bar">

					<li class="back-btn">
						<a href=""><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a>
						<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
					</li>


                    <br>
					<li class="sidebar-main-title">
						<div>
                            <a href="<?php echo e(route('index')); ?>">
							<h6 class="lan-3"><?php echo e(trans('lang.Dashboards')); ?> </h6>
                     		<p class="lan-2"><?php echo e(trans('lang.Dashboards,widgets & layout.')); ?></p>
                        </a>
						</div>
					</li>
                    

					<li class="sidebar-list">
						
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/' ? 'active' : ''); ?>" target="_blank" href="<?php echo e(route('home')); ?>">
							<i data-feather="box"></i><span><?php echo e(trans('Go to Website')); ?> </span>
							
						</a>
					</li>

                     

					<li class="sidebar-list">
						
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/project' ? 'active' : ''); ?>" href="#">
							<i data-feather="layout"></i><span><?php echo e(trans('CMS')); ?> </span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/project' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/project' ? 'block;' : 'none;'); ?>">
		                    
		                    <li><a href="<?php echo e(route('logo')); ?>" class="<?php echo e(Route::currentRouteName()=='logo' ? 'active' : ''); ?>">Logo Management</a></li>
                            <li><a href="<?php echo e(route('PageName')); ?>" class="<?php echo e(Route::currentRouteName()=='PageName' ? 'active' : ''); ?>">Page Name</a></li>
                            <li><a href="<?php echo e(route('PageContent')); ?>" class="<?php echo e(Route::currentRouteName()=='PageContent' ? 'active' : ''); ?>">Page Content</a></li>
                            <li><a href="<?php echo e(route('projects')); ?>" class="<?php echo e(Route::currentRouteName()=='projects' ? 'active' : ''); ?>">Sponsor Management</a></li>
                            <li><a href="<?php echo e(route('privacy')); ?>" class="<?php echo e(Route::currentRouteName()=='privacy' ? 'active' : ''); ?>"><?php echo e(trans('Privacy Policy')); ?></a></li>
                            <li><a href="<?php echo e(route('terms')); ?>" class="<?php echo e(Route::currentRouteName()=='terms' ? 'active' : ''); ?>"><?php echo e(trans('Terms and Conditions')); ?></a></li>
		                </ul>
					</li>


                    

                    <li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/blog' ? 'active' : ''); ?>" href="#"><i data-feather="image"></i><span><?php echo e(trans('Blog Management')); ?></span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/blogs' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/blog' ? 'block' : 'none;'); ?>;">
							<li><a href="<?php echo e(route('blogs')); ?>"  class="<?php echo e(Route::currentRouteName()=='blog' ? 'active' : ''); ?>">Blogs</a></li>
						</ul>
					</li>

                    

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/video' ? 'active' : ''); ?>" href="#"><i data-feather="video"></i><span><?php echo e(trans('Video Management')); ?></span>
                            <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/video' ? 'down' : 'right'); ?>"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/video' ? 'block' : 'none;'); ?>;">
                            <li><a href="<?php echo e(route('video')); ?>" class="<?php echo e(Route::currentRouteName()=='video' ? 'active' : ''); ?>">Manage video</a></li>
                            <li><a href="<?php echo e(route('BackAudio')); ?>" class="<?php echo e(Route::currentRouteName()=='BackAudio' ? 'active' : ''); ?>">Background Audio</a></li>

                        </ul>
                    </li>

                        

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/audio' ? 'active' : ''); ?>" href="#"><i data-feather="music"></i><span><?php echo e(trans('Audio Management')); ?></span>
                                <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/audio' ? 'down' : 'right'); ?>"></i></div>
                            </a>
                            <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/audio' ? 'block' : 'none;'); ?>;">
                                <li><a href="<?php echo e(route('audio')); ?>" class="<?php echo e(Route::currentRouteName()=='audio' ? 'active' : ''); ?>">Manage Audio</a></li>

                            </ul>
                        </li>



                    

                            

                    

                    <li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/Package' ? 'active' : ''); ?>" href="#">
							<i data-feather="package"></i> <span> <?php echo e(trans('Package Management')); ?> </span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/Package' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/Package' ? 'block;' : 'none;'); ?>">
		                    <li><a href="<?php echo e(route('Package')); ?>" class="<?php echo e(Route::currentRouteName()=='Package' ? 'active' : ''); ?>"><?php echo e(trans('Package List')); ?></a></li>
		                </ul>
					</li>

                     

                     <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/user' ? 'active' : ''); ?>" href="#">
                            <i data-feather="users"></i><span> <?php echo e(trans('Users Management')); ?> </span>
                            <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/user' ? 'down' : 'right'); ?>"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/user' ? 'block;' : 'none;'); ?>">
                            <li><a href="<?php echo e(route('user')); ?>" class="<?php echo e(Route::currentRouteName()=='user' ? 'active' : ''); ?>"><?php echo e(trans('Users List')); ?></a></li>
                        </ul>
                    </li>

                        

                        <li class="sidebar-list">
                            
                            <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/general' ? 'active' : ''); ?>" href="#">
                                <i data-feather="settings"></i><span><?php echo e(trans('General Setting')); ?> </span>
                                <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/general' ? 'down' : 'right'); ?>"></i></div>
                            </a>
                            <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/general' ? 'block;' : 'none;'); ?>">
                                <li><a href="<?php echo e(route('social')); ?>" class="<?php echo e(Route::currentRouteName()=='social' ? 'active' : ''); ?>"><?php echo e(trans('Social Links')); ?></a></li>
                                <li><a href="<?php echo e(route('congfigration')); ?>" class="<?php echo e(Route::currentRouteName()=='congfigration' ? 'active' : ''); ?>">Congfigration</a></li>
                            </ul>
                        </li>



                    

                    


                    

                    

					

					

				</ul>
			</div>
			<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
		</nav>
	</div>
</div>
<?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/layouts/simple/sidebar.blade.php ENDPATH**/ ?>