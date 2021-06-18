@extends('layout')
@section('content')

  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Input Foto Pendungkung Rumah</h6>
      </div>
	<form class="p-3" action="{{ route('updateimage')}}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
		    <input type="text" class="form-control" placeholder="Judul Yang Akan dilihat orang" name="id_produk" value="{{$rumah -> id}}" hidden>
		</div>
		<div class="form-group">
		    <label for="exampleFormControlFile1">Masukan Berupa file Image</label>
		    <input required type="file" class="form-control-file" name="image[]" multiple="true">
	  	</div>
		  <button type="submit" class="btn btn-success" name="submit">Submit</button>
	</form>

	<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>
@endsection