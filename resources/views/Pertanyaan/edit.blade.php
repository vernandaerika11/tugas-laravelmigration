@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
	<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Pertanyaan {{$tanya->id}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan/{{$tanya->id}}" method="POST">
              	@csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Title</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $tanya->judul) }}"placeholder="Enter Title">
                  @error('judul')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" id="isi" name="isi" value="{{old('isi', $tanya->isi)}}"placeholder="Pertanyaan">
                   @error('isi')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
            </div>
</div>
@endsection