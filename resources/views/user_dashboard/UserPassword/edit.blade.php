@extends('user_dashboard.layouts.user-master')
@section('content')

<div class="for-content-tabs">
    <div class="tab-content" id="v-pills-tabContent">

        @if(Session::has('message'))
        <p class="alert
        {{ Session::get('alert-class', 'alert-success') }}">{{Session::get('message') }}</p>
        @endif
        {{-- $edit_data->id)  --}}
        <form action="{{ route('User_Password_update', $edit_data->id) }}" enctype="multipart/form-data"
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

</div>

@endsection
