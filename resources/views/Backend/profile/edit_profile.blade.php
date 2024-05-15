@extends('backend.app')
@section('content')
@include('backend.profile.index')
<div class="card">
    <div class="card-body pt-3">
        <div class="tab-pane fade show active profile-overview" id="profile-edit" style="width: 76vw;">
            <!-- Profile Edit Form -->
            <form action="{{route('update_profile')}}" id="edit_profile_form" method="post">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="nama_perusahaan" class="col-md-4 col-lg-3 col-form-label">Nama Perusahaan</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="nama_perusahaan"
                            value="{{(old('nama_perusahaan'))?old('nama_perusahaan'):$user->nama_perusahaan}}"
                            type="text" class="form-control" id="nama_perusahaan">
                        @if($errors->any('nama_perusahaan'))
                        <span class="text-danger">{{$errors->first('nama_perusahaan')}}</span>
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="alamat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="alamat_perusahaan"
                            value="{{(old('alamat_perusahaan'))?old('alamat_perusahaan'):$user->alamat_perusahaan}}"
                            type="text" class="form-control" id="alamat_perusahaan">
                        @if($errors->any('alamat'))
                        <span class="text-danger">{{$errors->first('alamat')}}</span>
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="no_telp" class="col-md-4 col-lg-3 col-form-label">No Telepon</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="no_telp" value="{{(old('no_telp'))?old('no_telp'):$user->no_telp}}" type="text"
                            class="form-control" id="no_telp">
                        @if($errors->any('no_telp'))
                        <span class="text-danger">{{$errors->first('no_telp')}}</span>
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class=" col-md-4 col-lg-3 col-form-label">Email</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="email" value="{{(old('email'))?old('email'):$user->email}}" type="email"
                            class="form-control" id="email">
                        @if($errors->any('email'))
                        <span class="text-danger">{{$errors->first('email')}}</span>
                        @endif
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-purple" style="font-weight: 700">Simpan Profile</button>
                </div>
                <div id="loading-overlay" style="display: none;">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </form><!-- End Profile Edit Form -->

        </div>
    </div>
</div>
<script>
</script>
@endsection