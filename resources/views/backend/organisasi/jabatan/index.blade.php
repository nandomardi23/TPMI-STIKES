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
<section class="section">
    <div class="card">
        <div class="card-header">
            List Jabatan
        </div>
        <div class="card-body">
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
        <div class="card-footer">
            <button class="btn btn-primary btn-sm">Submit</button>
        </div>
    </div>
</section>
@endsection