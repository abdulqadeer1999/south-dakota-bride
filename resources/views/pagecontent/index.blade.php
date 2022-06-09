@extends('layouts.simple.master')
@section('title', 'Project List')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/rating.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Pages</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Page </li>
    <li class="breadcrumb-item active">list </li>
@endsection

@section('content')
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
                                <a type="button" class="btn btn-primary for-font-color" href="{{ route('PageContent_create') }}"> Create</a>
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
                                        {{-- <th>Title1</th>
                                        <th>Title2</th>
                                        <th>Title3</th>
                                        <th>Title4</th> --}}
                                        <th>Image</th>
                                        <th>Image2</th>
                                        {{-- <th>Content</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getCMS as $key => $value)
                                    {{-- @foreach ($value->getPageName as $item)
                                    {{$item}}
                                    @endforeach --}}
                                        <tr>
                                           <td>{{ $key+1 }}</td>
                                           <td>{{ $value->getPageName->page_name }}</td>
                                           {{-- <td>{{ $value->getPageName }}</td>
                                           <td>{{ $value->title2 }}</td>
                                           <td>{{ $value->title3 }}</td>
                                           <td>{{ $value->title4 }}</td> --}}
                                           <td>
                                            @if ($value->image != null)
                                            <img src="{{ asset('storage/uploads/cms/' . $value->image) }}" alt="image" style="width:120px; height:80px;">
                                            @else
                                            <img src="{{ (!empty($Value->image))?
                                                asset('storage/uploads/cms/'.$Value->image):asset('storage/uploads/No-image.jpg') }}"
                                                style="width:120px; height:80px;">
                                            @endif
                                        </td>
                                        <td>
                                            @if ($value->image2 != null)
                                            <img src="{{ asset('storage/uploads/cms/' . $value->image2) }}" alt="image" style="width:120px; height:80px;">
                                            @else
                                            <img src="{{ (!empty($Value->image2))?
                                                asset('storage/uploads/cms/'.$Value->image2):asset('storage/uploads/No-image.jpg') }}"
                                                style="width:120px; height:80px;">
                                            @endif
                                        </td>
                                            {{-- <td>{!!substr($value->content,0,20)!!}.....</td> --}}
                                            {{-- <td>{{$value->content}}</td> --}}
                                            {{-- <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td> --}}
                                            <td>
                                                {{-- <button class="btn btn-danger btn-xs for-font-color" type="button" data-original-title="btn btn-danger btn-xs" title=""><a  href="{{ route('PageContent_destroy', $value->id) }}" id="delete">Delete</a></button> --}}
                                                <button class="btn btn-success btn-xs for-font-color" type="button" data-original-title="btn btn-danger btn-xs" title=""> <a href="{{ route('PageContent_edit', $value->id) }}">Edit</a></button>
                                             </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Individual column searching (text inputs) Ends-->
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/rating/jquery.barrating.js') }}"></script>
    <script src="{{ asset('assets/js/rating/rating-script.js') }}"></script>
    <script src="{{ asset('assets/js/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/ecommerce.js') }}"></script>
    <script src="{{ asset('assets/js/product-list-custom.js') }}"></script>
@endsection
