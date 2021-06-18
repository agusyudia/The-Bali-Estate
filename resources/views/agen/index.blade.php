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
          <h6 class="m-0 font-weight-bold text-primary">Table Property agen</h6> <a href="{{ route('agenadd') }}" class="float-end btn btn-success">Tambah Data</a>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                         <th>No</th>
                          <th>Nama Agen</th>
                          <th>No Telp</th>
                          <th>Jenis Kelamin</th>
                          <th>Lokasi</th>
                          <th>Email</th>
                          <th>Perusahaan</th>
                          <th>Foto Profil</th>
                          <th>Keterangan</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($agen as $agen)
                          <tr>
                            <th scope="row">{{$loop -> iteration}}</th>
                            <td class="nama_penjual">{{$agen -> nama_agen}}</td>
                            <td class="judul">{{$agen -> no_tlp}}</td>
                            <td class="judul">{{$agen -> gender}}</td>
                            <td class="status">{{$agen -> lokasi}}</td>
                            <td class="status">{{$agen -> email}}</td>
                            <td class="status">{{$agen -> perusahaan}}</td>
                            <td><img src="{{ asset('image/agen/' . $agen->image) }}" style="width: 100%;" /></td>
                            <td class="status">{{$agen -> keterangan}}</td>
                            <td>
                              <a href="{{ route('agenedit',$agen->id) }}" class="btn btn-success btn-sm"><span class="fas fa-pen"></span></a>
                              	<form action="{{route('agendelete',$agen->id)}}" method="post">
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

