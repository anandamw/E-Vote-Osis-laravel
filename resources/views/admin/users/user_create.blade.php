@extends('admin.layouts.template')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Validation</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Validation</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="needs-validation" action="/user/create" method="POST"
                                    enctype="multipart/form-data" novalidate>
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">

                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom01">Nama
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="nama"
                                                        id="validationCustom01" placeholder="Enter a nama.." required>
                                                    <div class="invalid-feedback">
                                                        Please enter a nama.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom01">Email
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="email"
                                                        id="validationCustom01" placeholder="Enter a email.." required>
                                                    <div class="invalid-feedback">
                                                        Please enter a email.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom01">Password
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="password" class="form-control" name="password"
                                                        id="validationCustom01" placeholder="Enter a password.." required>
                                                    <div class="invalid-feedback">
                                                        Please enter a password.
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-xl-6">
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom05">Pilih Kelas
                                                    
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select name="users_id" class="default-select wide form-control"
                                                        id="validationCustom05">
                                                        <option data-display="Select">Please select</option>

                                                        @foreach ($kelass as $item)
                                                            <option value="{{ $item->id }}">{{ $item->nama_kelas }}
                                                            </option>
                                                        @endforeach

                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select a one.
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom05">Pilih
                                                    Osis Untuk dijadikan Kandidat
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select name="kelas_id" class="default-select wide form-control"
                                                        id="validationCustom05">
                                                        <option selected>Please select</option>

                                                        <option value="admin">Admin
                                                        </option>
                                                        <option value="siswa">Siswa
                                                        </option>

                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select a one.
                                                    </div>
                                                </div>
                                            </div> --}}









                                            <div class="mb-3 row">
                                                <div class="col-lg-8 ms-auto">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
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
    </div>
@endsection
