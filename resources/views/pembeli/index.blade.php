@extends('layout')
@section('content')
<!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Table Pembeli</h6>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                         <th>No</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>No Tlp</th>
                          <th>Email</th>
                          <th>No KTP</th>
                          <th>No KK</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($pembeli as $beli)
                          <tr>
                            <th scope="row">{{$loop -> iteration}}</th>
                            <td>{{$beli -> nama}}</td>
                            <td>{{$beli -> alamat}}</td>
                            <td>{{$beli -> no_tlp}}</td>
                            <td>{{$beli -> email}}</td>
                            <td>{{$beli -> no_nik}}</td>
                            <td>{{$beli -> no_kk}}</td>
                            <td>
                              <a href="" class="btn btn-success btn-sm"><span class="fas fa-pen"></span></a>
                              <a href="" class="btn btn-danger btn-sm"><span class="fas fa-trash"></span></a>
                            </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
@endsection