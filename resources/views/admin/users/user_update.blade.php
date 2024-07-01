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
                                <form class="needs-validation" action="" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="visi">Visi
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <textarea class="form-control" name="visi" id="visi" rows="5" placeholder="........." required></textarea>
                                                    <div class="invalid-feedback">
                                                        Please enter a Vision statement.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="misi">Misi
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <textarea class="form-control" name="misi" id="misi" rows="5" placeholder="........." required></textarea>
                                                    <div class="invalid-feedback">
                                                        Please enter a Mission statement.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom05">Pilih
                                                    Kandidat:
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select name="users_id" class="default-select wide form-control"
                                                        id="validationCustom05" required>
                                                        <option data-display="Select">Please select</option>
                                                        @foreach ($users as $item)
                                                            <option value="{{ $item->id }}"
                                                                {{ $item->id == $kandidat->users_id ? 'selected' : '' }}>
                                                                {{ $item->name_user }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select one.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom01">
                                                    Gambar
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <img src="{{ asset('pendaftar/' . $kandidat->gambar) }}" width="60"
                                                        style="border-radius: 5px; margin-bottom: 10px;" alt="">
                                                    <input type="file" class="form-control" name="gambar"
                                                        id="validationCustom01">
                                                    <div class="invalid-feedback">
                                                        Hanya mendukung format gambar: jpg, png, svg
                                                    </div>
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
