@extends('layouts.admin')

@section('title')
    User
@endsection

@section('content')
<!-- Section Content -->
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">User</h2>
            <p class="dashboard-subtitle">
             Edit "{{ $item->name}}"User
            </p>
        </div>
        <div class="dashboard-content">
           <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($error->all() as $error)
                            <li>{{ $error}}</li>
                        @endforeach
                    </ul>
                </div>
                    
                @endif
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('user.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama User</label>
                                        <input type="text" name="name" class="form-control" value="{{ $item->name }}" required />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Email User</label>
                                      <input type="text" class="form-control" name="email" value="{{ $item->email }}" required />
                                    </div>
                                  </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Password User</label>
                                        <input type="text" class="form-control" name="password"/>
                                        <small>Kosongkan Jika tidak ingin mengganti password</small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Roles</label>
                                        <select name="roles" required class="form-control">
                                            <option value="{{ $item->roles}}" selected>Tidak diganti</option>
                                            <option value="ADMIN">Admin</option>
                                            <option value="PENJUAL">Penjual</option>
                                            <option value="PEMBELI">Pembeli</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-rigt">
                                    <button type="submit" class="btn btn-primary px-5">
                                        Save Now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           </div>
        </div>
    </div>
</div>  
@endsection