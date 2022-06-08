
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
			<a href="{{route('index')}}"><img class="img-fluid for-light" src="{{ (!empty($logo_add->image))?
                asset('storage/uploads/logo/'.$logo_add->image):asset('storage/uploads/No-image.jpg') }}"
                style="width:120px; height:80px;" alt="">
                <img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}" alt=""></a>
			<div class="back-btn"><i class="fa fa-angle-left"></i></div>
			<div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
		</div>
		<div class="logo-icon-wrapper">
            <a href="{{route('index')}}"><img class="img-fluid" src="{{ (!empty($logo_add->image))?
            asset('storage/uploads/logo/'.$logo_add->image):asset('storage/uploads/No-image.jpg') }}" alt="" style="height:40px;width:60px;"></a>
        </div>
		<nav class="sidebar-main">
			<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
			<div id="sidebar-menu">
				<ul class="sidebar-links" id="simple-bar">

					<li class="back-btn">
						<a href=""><img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}" alt=""></a>
						<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
					</li>


                    <br>
					<li class="sidebar-main-title">
						<div>
                            <a href="{{route('index')}}">
							<h6 class="lan-3">{{ trans('lang.Dashboards') }} </h6>
                     		<p class="lan-2">{{ trans('lang.Dashboards,widgets & layout.') }}</p>
                        </a>
						</div>
					</li>
                    {{-- ==== G O TO WEBSITE ===  --}}

					<li class="sidebar-list">
						{{-- <label class="badge badge-danger">{{ trans('lang.New') }}</label> --}}
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/' ? 'active' : '' }}" target="_blank" href="{{ route('home') }}">
							<i data-feather="box"></i><span>{{ trans('Go to Website') }} </span>
							{{-- <div class="according-menu"></div> --}}
						</a>
					</li>

                     {{-- ==== C M S Testimonial WORK ===  --}}

					<li class="sidebar-list">
						{{-- <label class="badge badge-danger">{{ trans('lang.New') }}</label> --}}
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/project' ? 'active' : '' }}" href="#">
							<i data-feather="layout"></i><span>{{ trans('CMS') }} </span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/project' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/project' ? 'block;' : 'none;' }}">
		                    {{-- <li><a href="{{route('projects')}}" class="{{ Route::currentRouteName()=='projects' ? 'active' : '' }}">{{ trans('Testimonial') }}</a></li> --}}
		                    <li><a href="{{route('logo')}}" class="{{ Route::currentRouteName()=='logo' ? 'active' : '' }}">Logo Management</a></li>
                            <li><a href="{{route('PageName')}}" class="{{ Route::currentRouteName()=='PageName' ? 'active' : '' }}">Page Name</a></li>
                            <li><a href="{{route('PageContent')}}" class="{{ Route::currentRouteName()=='PageContent' ? 'active' : '' }}">Page Content</a></li>
                            <li><a href="{{route('projects')}}" class="{{ Route::currentRouteName()=='projects' ? 'active' : '' }}">Sponsor Management</a></li>
                            <li><a href="{{route('privacy')}}" class="{{ Route::currentRouteName()=='privacy' ? 'active' : '' }}">{{ trans('Privacy Policy') }}</a></li>
                            <li><a href="{{route('terms')}}" class="{{ Route::currentRouteName()=='terms' ? 'active' : '' }}">{{ trans('Terms and Conditions') }}</a></li>
		                </ul>
					</li>


                    {{-- ==== Gallery B L O G WORK ===  --}}

                    <li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/blog' ? 'active' : '' }}" href="#"><i data-feather="image"></i><span>{{ trans('Blog Management') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/blogs' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{request()->route()->getPrefix() == '/blog' ? 'block' : 'none;' }};">
							<li><a href="{{route('blogs')}}"  class="{{ Route::currentRouteName()=='blog' ? 'active' : '' }}">Blogs</a></li>
						</ul>
					</li>

                    {{-- ==== Video  WORK ===  --}}

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/video' ? 'active' : '' }}" href="#"><i data-feather="video"></i><span>{{ trans('Video Management') }}</span>
                            <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/video' ? 'down' : 'right' }}"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: {{request()->route()->getPrefix() == '/video' ? 'block' : 'none;' }};">
                            <li><a href="{{route('video')}}" class="{{ Route::currentRouteName()=='video' ? 'active' : '' }}">Manage video</a></li>
                            <li><a href="{{route('BackAudio')}}" class="{{ Route::currentRouteName()=='BackAudio' ? 'active' : '' }}">Background Audio</a></li>

                        </ul>
                    </li>

                        {{-- ==== Audio  WORK ===  --}}

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/audio' ? 'active' : '' }}" href="#"><i data-feather="music"></i><span>{{ trans('Audio Management') }}</span>
                                <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/audio' ? 'down' : 'right' }}"></i></div>
                            </a>
                            <ul class="sidebar-submenu" style="display: {{request()->route()->getPrefix() == '/audio' ? 'block' : 'none;' }};">
                                <li><a href="{{route('audio')}}" class="{{ Route::currentRouteName()=='audio' ? 'active' : '' }}">Manage Audio</a></li>

                            </ul>
                        </li>



                    {{-- ==== A D M I N Management WORK ===  --}}

                            {{-- @if (Auth::user()->type == '1')
                                    <li class="sidebar-list">
                                        <a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/admin' ? 'active' : '' }}" href="#">
                                            <i data-feather="user-check"></i><span>{{ trans('Admin Management') }} </span>
                                            <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/admin' ? 'down' : 'right' }}"></i></div>
                                        </a>
                                        <ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/admin' ? 'block;' : 'none;' }}">
                                            <li><a href="{{route('admin')}}" class="{{ Route::currentRouteName()=='admin' ? 'active' : '' }}">{{ trans('Admins List') }}</a></li>
                                        </ul>
                                    </li>
                            @endif --}}

                    {{-- ==== Package Management WORK ===  --}}

                    <li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/Package' ? 'active' : '' }}" href="#">
							<i data-feather="package"></i> <span> {{ trans('Package Management') }} </span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/Package' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/Package' ? 'block;' : 'none;' }}">
		                    <li><a href="{{route('Package')}}" class="{{ Route::currentRouteName()=='Package' ? 'active' : '' }}">{{ trans('Package List') }}</a></li>
		                </ul>
					</li>

                     {{-- ==== U S E R Management WORK ===  --}}

                     <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/user' ? 'active' : '' }}" href="#">
                            <i data-feather="users"></i><span> {{ trans('Users Management') }} </span>
                            <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/user' ? 'down' : 'right' }}"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/user' ? 'block;' : 'none;' }}">
                            <li><a href="{{route('user')}}" class="{{ Route::currentRouteName()=='user' ? 'active' : '' }}">{{ trans('Users List') }}</a></li>
                        </ul>
                    </li>

                        {{-- ==== G E N E R A L WORK ===  --}}

                        <li class="sidebar-list">
                            {{-- <label class="badge badge-danger">{{ trans('lang.New') }}</label> --}}
                            <a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/general' ? 'active' : '' }}" href="#">
                                <i data-feather="settings"></i><span>{{ trans('General Setting') }} </span>
                                <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/general' ? 'down' : 'right' }}"></i></div>
                            </a>
                            <ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/general' ? 'block;' : 'none;' }}">
                                <li><a href="{{route('social')}}" class="{{ Route::currentRouteName()=='social' ? 'active' : '' }}">{{ trans('Social Links') }}</a></li>
                                <li><a href="{{route('congfigration')}}" class="{{ Route::currentRouteName()=='congfigration' ? 'active' : '' }}">Congfigration</a></li>
                            </ul>
                        </li>



                    {{-- ==== Subscription Management WORK ===  --}}

                    {{-- <li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/Subcription' ? 'active' : '' }}" href="#">
							<i data-feather="plus-square"></i> <span>{{ trans('Subscription') }} </span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/Subcription' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/Subcription' ? 'block;' : 'none;' }}">
		                    <li><a href="{{route('Subcription')}}" class="{{ Route::currentRouteName()=='Subcription' ? 'active' : '' }}">{{ trans('Subscription List') }}</a></li>
		                </ul>
					</li> --}}


                    {{-- ==== I N Q U I R Y WORK ===  --}}

                    {{-- <li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/Inquiry' ? 'active' : '' }}" href="#"><i data-feather="phone-forwarded"></i><span>{{ trans('Inquiry') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/Inquiry' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{request()->route()->getPrefix() == '/Inquiry' ? 'block' : 'none;' }};">
							<li><a href="{{route('Inquiry')}}" class="{{ Route::currentRouteName()=='Inquiry' ? 'active' : '' }}">Inquiry Details</a></li>

						</ul>
					</li> --}}

					{{-- ==== F A Q Management WORK ===  --}}

					{{-- <li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/FAQ' ? 'active' : '' }}" href="#">
							<i data-feather="list"></i><span>{{ trans('FAQ Management') }} </span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/FAQ' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/FAQ' ? 'block;' : 'none;' }}">
		                    <li><a href="{{route('FAQ')}}" class="{{ Route::currentRouteName()=='FAQ' ? 'active' : '' }}">{{ trans('FAQ List') }}</a></li>
		                </ul>
					</li> --}}

				</ul>
			</div>
			<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
		</nav>
	</div>
</div>
