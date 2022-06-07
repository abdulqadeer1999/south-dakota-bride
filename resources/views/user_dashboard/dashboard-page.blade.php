@extends('user_dashboard.layouts.user-master')
@section('content')

<div class="for-content-tabs">
    <div class="tab-content" id="v-pills-tabContent">

        <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

            <div class="row">
                <div class="col-lg-12">
                    <h1>User-profile</h1>
                </div>
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="text" placeholder="First Name">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="text" placeholder="last Name">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="email" placeholder="Email">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="password" placeholder="Password">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="password" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="col-lg-12 mt8 for-removed-margin">
                    <div class="d-flex justify-content-end mt2">
                        <a href="checkout.html" class="black-btn-width"><button
                                class="black-btn">Update</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel"
            aria-labelledby="v-pills-profile-tab">
            @if(Session::has('message'))
                <p class="alert
                {{ Session::get('alert-class', 'alert-success') }}">{{Session::get('message') }}</p>
                @endif
                {{-- {{ route('FrontendUser_update', $edit_data->id) }} --}}
            <form action="{{ route('FrontendUser_update', $edit_data->id) }}" enctype="multipart/form-data"
                method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tabs-main-heading mt3 mb3">
                            <h1>User-Profile</h1>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="login-content2 placeholder-white">
                            <input type="text" name="name" id="" value="{{ $edit_data->name }}"
                                placeholder="First Name">
                        </div>
                        @error('name')
                            <p class="help-block" style="color: red">
                                {{ $errors->first('name') }}
                            </p>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <div class="login-content2 placeholder-white">
                            <input type="text" name="last_name" value="{{ $edit_data->last_name }}" id=""
                                placeholder="last Name">
                        </div>
                        @error('last_name')
                            <p class="help-block" style="color: red">
                                {{ $errors->first('last_name') }}
                            </p>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <div class="login-content2 placeholder-white">
                            <input type="email" name="email" value="{{ $edit_data->email }}"
                                placeholder="Email">
                        </div>
                        @error('email')
                            <p class="help-block" style="color: red">
                                {{ $errors->first('email') }}
                            </p>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <div class="login-content2 placeholder-white">
                            <input type="text" name="address" value="{{ $edit_data->address }}"
                                placeholder="Address">
                        </div>
                        @error('address')
                            <p class="help-block" style="color: red">
                                {{ $errors->first('address') }}
                            </p>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <div class="login-content2 placeholder-white">
                            <input type="text" name="contact" value="{{ $edit_data->contact }}"
                                placeholder="Contact">
                        </div>
                        @error('contact')
                            <p class="help-block" style="color: red">
                                {{ $errors->first('contact') }}
                            </p>
                        @enderror
                    </div>
                    <div class="col-lg-12 mt8 for-removed-margin">
                        <div class="d-flex justify-content-end mt2">
                            <a href="checkout.html" class="black-btn-width"><button
                                    class="black-btn" onClick="window.location.reload();">Update</button></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
            aria-labelledby="v-pills-messages-tab">
            <form action="{{ route('FrontendUser_password', $edit_data->id) }}" enctype="multipart/form-data"
                method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tabs-main-heading mt3 mb3">
                            <h1>User-Password</h1>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="login-content2 placeholder-white">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        @error('password')
                            <p class="help-block" style="color: red">
                                {{ $errors->first('password') }}
                            </p>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <div class="login-content2 placeholder-white">
                            <input type="password" name="confirm_password" placeholder="Confirm Password">
                        </div>
                        @error('confirm_password')
                            <p class="help-block" style="color: red">
                                {{ $errors->first('confirm_password') }}
                            </p>
                        @enderror
                    </div>
                    <div class="col-lg-12 mt8 for-removed-margin">
                        <div class="d-flex justify-content-end mt2">
                            <a type="submit" class="black-btn-width"><button
                                    class="black-btn">Update</button></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
            aria-labelledby="v-pills-settings-tab">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="text" placeholder="First Name">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="text" placeholder="last Name">
                    </div>
                </div>
                <div class="col-lg-12 mt8 for-removed-margin">
                    <div class="d-flex justify-content-end mt2">
                        <a type="submit"  href="checkout.html" class="black-btn-width"><button
                                class="black-btn">Update</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
            aria-labelledby="v-pills-settings-tab">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="text" placeholder="First Name">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="text" placeholder="last Name">
                    </div>
                </div>
                <div class="col-lg-12 mt8 for-removed-margin">
                    <div class="d-flex justify-content-end mt2">
                        <a type="submit"  href="checkout.html" class="black-btn-width"><button
                                class="black-btn">Update</button></a>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>

@endsection
