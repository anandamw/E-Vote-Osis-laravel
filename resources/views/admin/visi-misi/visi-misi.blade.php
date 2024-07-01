@extends('admin.layouts.template')

@section('content')
    <div class="content-body">
        <div class="container-fluid">

            <!-- row -->

            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h4 class="card-title">Profile Datatable</h4>

                            <a href="/visi-misi/create" class="btn btn-warning">Tambah Kandidat</a>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kandidat</th>
                                            <th>Visi</th>
                                            <th>Misi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($visimisi as $get)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $get->nama_kandidat }}</td>
                                                <td>{{ $get->visi }}</td>
                                                <td>{{ $get->misi }}</td>
                                                {{-- <td>{{ $get->foto_kandidat }}</td> --}}

                                                <td>
                                                    <div class="d-flex">
                                                        <a href="/visi-misi/{{ $get->id }}/update"
                                                            class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                                class="fas fa-pencil-alt"></i></a>
                                                        <button type="button" class="btn btn-danger shadow btn-xs sharp"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModalCenter{{ $get->id }}"><i
                                                                class="fa fa-trash"></i></button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModalCenter{{ $get->id }}">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Modal title</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal">
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Cras mattis consectetur purus sit amet fermentum.
                                                                            Cras justo
                                                                            odio, dapibus ac facilisis in, egestas eget
                                                                            quam. Morbi leo
                                                                            risus, porta ac consectetur ac, vestibulum at
                                                                            eros.</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger light"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a href="/visi-misi/{{ $get->id }}/delete"
                                                                            class="btn btn-primary">Hapus</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
