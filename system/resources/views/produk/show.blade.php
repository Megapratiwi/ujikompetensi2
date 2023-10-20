@extends('template.index')
@section('mega')
    <div class="body-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h6 class="mt-2 text-muted">Images</h6>
                    <div class="card mb-4">
                        <a href=""data-bs-toggle="modal" data-bs-target="#Modalfotokeluhan">
                            <img class="img-thumbnail rounded" src="{{ url("public/$produk->foto") }}"
                                style="height: 100%">
                        </a>                        
                        <div class="card-body">
                            @csrf
                            <dt class="col-sm-3">Nama Produk</dt>
                            <dd class="col-sm-9"> : {{ $produk->nama_produk }}</dd>

                            <p class="card-text">
                                {{ $produk->jenis }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="Modalfotokeluhan" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Foto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="{{ url("public/$produk->foto") }}" style="height: auto; max-width: 100%;"
                        alt="foto">
                </div>
            </div>
        </div>
    </div>
@endsection
