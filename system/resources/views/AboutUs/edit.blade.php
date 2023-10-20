@extends('template.index')
@section('mega')
    <div class="col-xxl">
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Edit</h5>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/UpdateAboutUs', $AboutUs->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Judul</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                            <input type="text" name="judul" value="{{ $AboutUs->judul }}" id="basic-icon-default-company" class="form-control" aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Isi</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                            <input type="text" name="isi" value="{{ $AboutUs->isi }}" id="basic-icon-default-company" class="form-control" aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Foto</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i class='bx bx-photo-album'></i></span>
                            <input type="file" name="foto" accept=".jpg, .jpeg, .png" id="basic-icon-default-company" class="form-control" aria-describedby="basic-icon-default-company2" />
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>    
@endsection