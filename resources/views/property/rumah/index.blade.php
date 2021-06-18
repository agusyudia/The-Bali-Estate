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
          <h6 class="m-0 font-weight-bold text-primary">Table Property Rumah</h6> <a href="{{ route('rumahadd') }}" class="float-end btn btn-success">Tambah Data</a>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                         <th>No</th>
                          <th>Nama Penjual</th>
                          <th>Judul</th>
                          <th>Tipe Property</th>
                          <th>Sertifikat</th>
                          <th>IMB</th>
                          <th>Lokasi</th>
                          <th>Luas</th>
                          <th>Surat Tanah</th>
                          <th>Jumlah Kamar</th>
                          <th>Jumlah Kamar Mandi</th>
                          <th>Keterangan Produk</th>
                          <th>Foto</th>
                          <th>Status</th>
                          <th>Harga</th>
                          <th>Agen</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($rumah as $rumah)
                          <tr>
                            <th scope="row">{{$loop -> iteration}}</th>
                            <td class="nama_penjual">{{$rumah -> nama_penjual}}</td>
                            <td class="judul">{{$rumah -> judul}}</td>
                            <td class="sertifikat">{{$rumah -> jenis_property}}</td>
                            <td class="sertifikat">{{$rumah -> sertifikat}}</td>
                            <td class="imb">{{$rumah -> imb}}</td>
                            <td class="lokasi">{{$rumah -> lokasi}}</td>
                            <td class="luas">{{$rumah -> luas}}</td>
                            <td class="surat_tanah">{{$rumah -> surat_tanah}}</td>
                            <td class="jml_kamar">{{$rumah -> jml_kamar}}</td>
                            <td class="jml_wc">{{$rumah -> jml_wc}}</td>
                            <td class="text ket_produk">{{$rumah -> ket_produk}}</td>
                            <td><img src="{{ asset('image/rumah/' . $rumah->image) }}" style="width: 100%;" /></td>
                            <td class="status">{{$rumah -> status}}</td>
                            <td class="harga">@currency($rumah -> harga)</td>
                            <td class="harga">{{$rumah -> id_agen}}</td>
                            <td>
                              <a href="{{ route('rumahedit',$rumah->id) }}" class="btn btn-success btn-sm"><span class="fas fa-pen"></span></a>
                              <a href="{{ route('imageadd',$rumah->id) }}" class="btn btn-success btn-sm"><span class="fas fa-plus"></span></a>
                                <form action="{{route('rumahdelete',$rumah->id)}}" method="post">
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

