@extends('backend.layouts.main')

@section('main')
<div class="pagetitle">
    <h1>Jabatan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Jabatan</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->
<section class="section h-25">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div class="">
                    <h4>List Jabatan</h4>
                </div>
                <div class="">
                    <a class="btn btn-sm btn-primary" href="{{route('jabatan.create')}}"><i class="bi bi-plus"></i><span>Tambah</span></a>
                </div>
            </div>
        </div>
        <div class="card-body mt-3">
            <div class="table-responsive">
                <table class=" table table-bordered">
                    <tr>
                        <th>no</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>anda</td>
                        <td>test</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>anda</td>
                        <td>test</td>
                    </tr>
                </table>
            </div>
            
        </div>
    </div>
</section>
@endsection