@extends('admin.layouts.template')

@section('content')
    <!--**********************************
                                                                                                                                                                                                                                                                                                                                    Content body start
                                                                                                                                                                                                                                                                                                                                       ***********************************-->

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row invoice-card-row ">

                @foreach ($kandidats as $item)
                    <form action="/vote/create" method="POST">
                        @csrf
                        <div class=" row-xl-3 col-xxl-3 col-sm-6">
                            <div class="card bg-blue invoice-card">
                                <div class="card-body d-flex">
                                    <div class="icon me-3">
                                        <input type="hidden" name="nama" value="{{ Auth::user()->nama }}">
                                        <!-- Ganti dengan nama voter sebenarnya -->
                                        <input type="hidden" name="kelas_id" value="{{ $item->id }}">
                                        <!-- Ganti dengan kelas_id sebenarnya -->
                                        <input type="hidden" name="kandidat_id" value="{{ $item->id }}">
                                        <input type="hidden" name="tanggal" value="{{ date('Y-m-d') }}">
                                        <img src="{{ asset('pendaftar/' . $item->foto_kandidat) }}" width="60"
                                            height="60" style="border-radius: 50%; margin-right: 20px; "
                                            alt="Candidate Image">
                                    </div>


                                    <div>
                                        <h2 class="text-white invoice-num">{{ $item->nama_kandidat }}</h2>
                                        <span class="text-white fs-18">{{ $item->calon_kandidat }}</span><br>
                                        <span class="text-white fs-18">Total Suara : {{ $item->suaras_count }}</span> <br>
                                        <button type="submit" class=" "
                                            style="font-size: 20px  ; color: black;  padding: 10px 20px; background-color: none; border: none;">Vote
                                            Sekarang</button>
                                        {{-- <span class="text-white fs-18">Vote Sekarang </span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- <h4 class="card-title">Total Pemilih {{ $total }}</h4> --}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th style="width: 80px"><strong>#</strong></th>
                                            <th><strong>Calon Kandidat</strong></th>
                                            <th><strong>Foto Kandidat</strong></th>
                                            <th><strong>Visi</strong></th>
                                            <th><strong>Misi</strong></th>

                                            {{-- <th><strong>Vote</strong></th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($suara as $item)
                                            <tr>
                                                <td><strong>{{ $loop->iteration }}</strong></td>
                                                <td>{{ $item->calon_kandidat }}</td>
                                                <td>
                                                    <img src="{{ asset('pendaftar/' . $item->foto_kandidat) }}"
                                                        width="60" height="60"
                                                        style="border-radius: 50%; margin-right: 20px; "
                                                        alt="Candidate Image">
                                                </td>
                                                <td>{{ $item->visi }}</td>
                                                <td>{{ $item->misi }}</td>
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
    <!--**********************************
                                                                                                                                                                                                                                                                                                                                                                                                                Content body end
                                                                                                                                                                                                                                                                                                                                                                                                            ***********************************-->
@endsection
