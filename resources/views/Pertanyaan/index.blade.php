@extends('adminlte.master')

@section('content')
<div class="mt-3 ml-3 ">
	<div class="card">
              <div class="card-header">
                <h3 class="card-title">Pertanyaan Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                	@if (session('success'))
                	<div class="alert alert-success">
                {{session('success')}}
            		</div>
        		@endif
        		<a class="btn btn-danger" href="/pertanyaan/create" style="margin-bottom: 1.25rem;">Buat Pertanyaan Baru</a>
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Title</th>
                      <th>Body</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($pertanyaan as $key => $pertanyaan)
                    <tr>
                    	<td> {{ $key + 1 }} </td>
                    	<td> {{ $pertanyaan->judul }} </td>
                    	<td> {{ $pertanyaan->isi }} </td>
                    	<td style="display: flex;">
                    		<a href="/pertanyaan/{{$pertanyaan->id}}" class="btn btn-info btn-sm">show</a>
                    		<a href="/pertanyaan/{{$pertanyaan->id}}/edit" class="btn btn-default btn-sm">edit</a>
                    		<form action="/pertanyaan/{{$pertanyaan->id}}" method="post">
                    			@csrf
                    			@method('DELETE')
                    			<input type="submit" value="delete" class="btn btn-danger btn-sm">
                    		</form>
                    	</td>
                    </tr>
                    @empty
                    <tr>
                    	<td colspan="4" align="center"> No Posts</td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
       </div>
		</div>
@endsection