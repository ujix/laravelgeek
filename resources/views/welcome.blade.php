@extends('layouts.main')
@section('content')
<div class="container">
    <h1>Data Mahasiswa</h1>

    <table class="table">
        <thead class="zad-header-kolom" style="background-color:background-color: #f1fffe !important">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($parasiswa as $siswa)


            <tr>
                <th scope="row">{{ $siswa->id }}</th>
                <td>{{ $siswa->firstname }}</td>
                <td>{{ $siswa->lastname }}</td>
                <td>{{ $siswa->email }}</td>
                <td>{{ $siswa->phone }}</td>
                <td>

                    {{-- MODAL --}}
                    <!-- Central Modal Medium Warning -->
                    <div class="modal fade" id="centralModalWarning" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-notify modal-warning" role="document">
                            <!--Content-->
                            <div class="modal-content">
                                <!--Header-->
                                <div class="modal-header">
                                    <p class="heading lead">Peringatan</p>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" class="white-text">&times;</span>
                                    </button>
                                </div>

                                <!--Body-->
                                <div class="modal-body">
                                    <div class="text-center">
                                        <i class="fas fa-trash-alt fa-4x mb-3 animated rotateIn"></i>
                                        <p>Yakin data ini akan dihapus ?</p>
                                    </div>
                                </div>

                                <!--Footer-->
                                <div class="modal-footer justify-content-center">
                                    <a type="button" class="btn btn-warning"
                                        onclick="
                                                                                      event.preventDefault();
                                                                                      document.getElementById('delete-form-{{ $siswa->id }}').submit();">Ya</a>
                                    <a type="button" class="btn btn-outline-warning waves-effect"
                                        data-dismiss="modal">Jangan</a>
                                </div>
                            </div>
                            <!--/.Content-->
                        </div>
                    </div>
                    <!-- Central Modal Medium Warning-->


                    {{-- END MODAL --}}

                    <a href="{{ route('edit', $siswa->id) }}"
                        class="btn-sm btn-outline-default waves-effect btn-rounded">
                        <i class="fas fa-edit" data-toggle="tooltip" title="Ubah Data"></i>
                    </a>

                    <form id="delete-form-{{ $siswa->id }}" action="{{ route('delete', $siswa->id) }}" method="POST"
                        style="display: none">

                        {{ csrf_field() }}
                        {{ method_field('delete') }}

                    </form>


                    <a class="btn-sm btn-outline-warning waves-effect btn-rounded" data-toggle="modal"
                        data-target="#centralModalWarning">
                        <i class=" far fa-trash-alt " data-toggle="tooltip" title="Hapus Data"></i>

                    </a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $parasiswa->links() }}
</div>
@endsection