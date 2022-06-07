<?php
$logo_add = App\Models\LogoManager::where('title', 'footer')->first();

// dd($logo_add);
?>
<header class="header">
    <div class="container">
        <div class="row mainRow">
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 col-xs-12">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <div class="nav-logo">
                            <img src="{{ asset('storage/uploads/logo/' . $logo_add->image) }}" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-8 col-8 menu-large-screen">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-8 col-8 menu-large-screen">
                <span>Dashboard</span>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8 col-8 menu-large-screen">
                <div class="header-nav">
                    <ul>
                        <li>
                            <a class="link_header" href="{{ route('FrontendUser_logout') }}"><button
                                    class="log-out-button"><i class="fa fa-sign-out" aria-hidden="true"></i>LOG
                                    OUT</button></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
        case 'info':
        toastr.info(" {{ Session::get('message') }} ");
        break;
        case 'success':
        toastr.success(" {{ Session::get('message') }} ");
        break;
        case 'warning':
        toastr.warning(" {{ Session::get('message') }} ");
        break;
        case 'error':
        toastr.error(" {{ Session::get('message') }} ");
        break;
        }
        @endif
    </script> --}}
</header>
