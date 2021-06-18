@extends('layout')
@section('content')

<!-- DataTales Example -->
@if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
@endif
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Table Pemilik Property</h6> <a href="{{ route('pemilikadd') }}" class="float-end btn btn-success">Tambah Data</a>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                         <th>No</th>
                          <th>Nama Pemilik</th>
                          <th>Alamat Pemilik</th>
                          <th>Nomer HP</th>
                          <th>Email</th>
                          <th>Nik</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($pemilik as $pemilik)
                          <tr>
                            <th scope="row">{{$loop -> iteration}}</th>
                            <td class="nama_penjual">{{$pemilik -> nama_pemilik}}</td>
                            <td class="judul">{{$pemilik -> alamat}}</td>
                            <td class="status">{{$pemilik -> no_tlp}}</td>
                            <td class="status">{{$pemilik -> email}}</td>
                            <td class="status">{{$pemilik -> nik}}</td>
                            <td>
                              <a href="{{ route('pemilikedit',$pemilik->id) }}" class="btn btn-success btn-sm"><span class="fas fa-pen"></span></a>
                              	<form action="{{route('pemilikdelete',$pemilik->id)}}" method="post">
                                  @csrf
	                              	@method('delete')
	                              	<button class="btn btn-danger btn-sm" type="submit"><span class="fas fa-trash"></span></button>
                              	</form>
                            </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>

@endsection

