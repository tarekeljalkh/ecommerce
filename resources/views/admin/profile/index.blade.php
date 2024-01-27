@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, {{ auth()->user()->name }}!</h2>
            <p class="section-lead">
                Change information about yourself on this page.
            </p>

            <div class="row mt-sm-4">

                {{-- Profile Section --}}
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form method="post" action="{{ route('admin.profile.update') }}" class="needs-validation"
                            novalidate="" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="card-header">
                                <h4>Update Profile</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="form-group col-12">
                                        <div class="mb-3">
                                            <img width="100px" src="{{ asset(auth()->user()->image) }}" />

                                        </div>
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control" />
                                    </div>


                                    <div class="form-group col-md-6 col-12">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ auth()->user()->name }}" required />
                                    </div>

                                    <div class="form-group col-md-6 col-12">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control"
                                            value="{{ auth()->user()->email }}" required />
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- End Profile Section --}}


                {{-- Password Section --}}
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form method="post" action="{{ route('admin.password.update') }}" class="needs-validation"
                            novalidate="" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="card-header">
                                <h4>Update Password</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">


                                    <div class="form-group col-12">
                                        <label>Current Password</label>
                                        <input type="password" name="current_password" class="form-control" />
                                    </div>

                                    <div class="form-group col-12">
                                        <label>New Password</label>
                                        <input type="password" name="password" class="form-control" />
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control" />
                                    </div>



                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Update Password</button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- End Password Section --}}

            </div>
        </div>
    </section>
@endsection
