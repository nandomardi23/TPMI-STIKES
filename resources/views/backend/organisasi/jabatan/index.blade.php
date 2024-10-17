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
                        <button class="btn btn-sm btn-primary" onclick="openAddmodal()"><i
                                class="bi bi-plus"></i><span>Tambah</span></a>
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
    <section>
        <!-- Modal -->
        <div class="modal fade" id="addModal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Form Jabatan</h1>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" id=AddAction>
                        @csrf
                        <div class="modal-body">
                            <div class="">
                                <label for="" class="form-label">Masukan Nama Jabatan</label>
                                <input type="text" class="form-control" placeholder="Silahkan Masukan Jabatan ....">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" onclick="submitData">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('script')
    <script>
        $(document).ready(function() {


            // $.ajax({
            //     type: "method",
            //     url: "url",
            //     data: "data",
            //     dataType: "dataType",
            //     success: function(response) {

            //     }
            // });

            // function openAddmodal() {
            //     // $('#addForm')[0].reset();
            //     // var addAction = '{{ route('jabatan.store') }}'
            //     // $('#addModal').show()
            //     console.log('halo');

            // }
        })

        function openAddmodal() {
            // console.log('halo')
            $('#addModal').modal('show')
        }

        // $('#addForm').submit(function() {

        // })
    </script>
@endpush
