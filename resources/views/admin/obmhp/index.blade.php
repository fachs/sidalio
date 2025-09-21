@extends('layouts.simple.master')

@section('title', 'Obat & BMHP')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Obat & BMHP</h3>
                </div>
                <div class="col-sm-6">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            {{-- <div class="col-xxl-6 box-col-12">
                <div class="card role-management">
                    <div class="card-body">
                        <div class="blog-card">
                            <div class="blog-card-content">
                                <div class="role-details">
                                    @php
                                        $image = auth()->user()->getFirstMedia('image');
                                    @endphp

                                    @isset($image)
                                        <div class="role-profile">
                                            <img src="{{ $image?->getUrl() }}" alt="Image">
                                        </div>
                                    @else
                                        <div class="role-profile">
                                            <img src="{{ asset('assets/images/dashboard/user/user.png') }}" alt="Image">
                                        </div>
                                    @endisset
                                    <div class="role-profile-details">
                                        <h3>Welcome back {{ \Illuminate\Support\Str::title(auth()->user()->first_name ?? '') }} {{ \Illuminate\Support\Str::title(auth()->user()->last_name ?? '') }} !</h3>
                                    </div>
                                </div>
                                <div class="blog-tags">
                                    <div class="tags-icon bg-primary">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-blog') }}"></use>
                                        </svg>
                                    </div>
                                    <div class="tag-details">
                                        <h2 class="total-num counter">{{ \App\Models\Blog::all()->count() }}</h2>
                                        <p>Total Blogs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card-image">
                            <img src="{{ asset('assets/images/user-management.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-xxl-3 col-sm-6 box-col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="btn-light1-primary b-r-15">
                            <div class="upcoming-box">
                                <div class="upcoming-icon bg-primary">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#tags') }}"></use>
                                    </svg>
                                </div>
                                <p>Tag</p>
                                <a href="{{ route('admin.obmhp.create') }}" class="btn btn-primary">{{ __('Add Tag') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('admin.obmhp.create') }}" class="btn btn-primary">{{ __('Tambah Data') }}</a>
                        <div class="pb-3"></div>
                        <div class="table-responsive custom-scrollbar">
                            {!! $dataTable->table() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <!-- calendar js-->
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    {!! $dataTable->scripts() !!}
@endsection
