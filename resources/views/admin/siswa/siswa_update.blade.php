@extends('admin.layouts.template')
@section('content')
    <div class="content-body">
        <div class="container-fluid">

            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Validation</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="needs-validation" action="/osis/{{ $allUsers->id }}/update" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">

                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom01">Nis
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="nis"
                                                        value="{{ $allUsers->nis }}" id="validationCustom01" required>
                                                    <div class="invalid-feedback">
                                                        Please enter a Nis.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom01">Nama
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="name_user" class="form-control"
                                                        id="validationCustom01" value="{{ $allUsers->name_user }}" required>
                                                    <div class="invalid-feedback">
                                                        Please enter a name.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom01">Jurusan
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        name="jurusan" value="{{ $allUsers->jurusan }}" required>
                                                    <div class="invalid-feedback">
                                                        Please enter a Jurusan.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">

                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom01">Email
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="email" class="form-control" name="email"
                                                        id="validationCustom01" value="{{ $allUsers->email }}" required>
                                                    <div class="invalid-feedback">
                                                        Please enter a Email.
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom01">
                                                    Gambar
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <img src="{{ asset('pendaftar/' . $allUsers->gambar) }}" width="60"
                                                        style="border-radius: 5px; margin-bottom: 10px;" alt="">
                                                    <input type="file" class="form-control" name="gambar"
                                                        id="validationCustom01">
                                                    <div class="invalid-feedback">
                                                        Hanya mendukung format gambar: jpg, png, svg
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom01">Password
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="password"
                                                        id="validationCustom01" required>
                                                    <div class="invalid-feedback">
                                                        Please enter a Password.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom05">Pilih Role:
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select name="role"
                                                        class="form-control @error('role') is-invalid @enderror"
                                                        id="validationCustom05" required>
                                                        <option value="">Please select</option>
                                                        <option value="osis"
                                                            {{ $allUsers->role === 'osis' ? 'selected' : '' }}>Osis</option>
                                                        <option value="siswa"
                                                            {{ $allUsers->role === 'siswa' ? 'selected' : '' }}>Siswa
                                                        </option>
                                                        <option value="kandidat"
                                                            {{ $allUsers->role === 'kandidat' ? 'selected' : '' }}>Kandidat
                                                        </option>
                                                    </select>
                                                    @error('role')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>





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
