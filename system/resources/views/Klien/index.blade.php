@extends('template.index')
@section('mega')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="m-3">
                    <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal"
                        data-bs-target="#modalCenter">Tambah</button>
                </div>
                <div class="card pd-20 pd-sm-40">
                    <div class="table-wrapper">
                        <table id="datatable1" class="table display responsive nowrap">
                            <thead>
                                <tr>
                                    <th>Aksi</th>
                                    <th>Nama Klien</th>
                                    <th>Isi</th>
                                    <th>Pekerjaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_klien as $klien)
                                    <tr>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-success btn-block mg-b-15"
                                                    href="{{ "showklien/$klien->id" }}">
                                                    Lihat
                                                </a>
                                                <a class="btn btn-warning btn-block mg-b-10"
                                                    href="{{ "editklien/$klien->id" }}">
                                                    Edit
                                                </a>
                                            </div>
                                        </td>
                                        <td>{{ $klien->nama }}</td>
                                        <td>{{ $klien->isi }}</td>
                                        <td>{{ $klien->pekerjaan }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!-- table-wrapper -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('admin/storeklien') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Nama Klien</label>
                                    <input type="text" class="form-control" name="nama" placeholder="....."
                                        required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Isi</label>
                                    <input type="text" class="form-control" name="isi" placeholder="....."
                                        required />
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Pekerjaan</label>
                                    <input type="text" class="form-control" name="pekerjaan" placeholder="....."
                                        required />
                                </div>
                                <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Foto </label>
                                    <input type="file" class="form-control" name="foto" accept=".jpg, .jpeg, .png"
                                        placeholder="lampiran" required />
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
