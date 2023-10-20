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
                                    <th class="wd-15p">Aksi</th>
                                    <th class="wd-15p">Judul Kegiatan</th>
                                    <th class="wd-15p">Kegiatan</th>
                                    <th class="wd-15p">Tanggal Kegiatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_galeri as $galeri)
                                    <tr>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-success btn-block mg-b-10"
                                                    href="{{ "showgaleri/$galeri->id" }}">
                                                    Lihat
                                                </a>
                                            </div>
                                            <div class="btn-group">
                                                <a class="btn btn-warning btn-block mg-b-10"
                                                    href="{{ "editgaleri/$galeri->id" }}">
                                                    Edit
                                                </a>
                                            </div>
                                        </td>
                                        <td>{{ $galeri->judul }}</td>
                                        <td>{{ $galeri->kegiatan }}</td>
                                        <td>{{ $galeri->tanggal }}</td>
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
                        <form action="{{ url('admin/storegaleri') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Judul Kegiatan</label>
                                    <input type="text" class="form-control" name="judul" placeholder="....."
                                        required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Kegiatan</label>
                                    <input type="text" class="form-control" name="kegiatan" placeholder="....."
                                        required />
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Tanggal Kegiatan</label>
                                    <input type="date" class="form-control" name="tanggal" placeholder="....."
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
