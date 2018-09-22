@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary
			">
			  <div class="panel-heading"><b>Data Kurun Waktu</b>
			  	<div class="btn btn-primary pull-right"><a href="{{ route('waktu.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table table-bordered">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
                      <th>Kurun Waktu Mulai</th>
											<th>Kurun Waktu Berakhir</th>
												
			
					     <th colspan="2">Action</th>
					  </tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($waktu as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->mulai }}</td>
                        <td>{{ $data->berakhir }}</td>

				    	
				    	<td>
							<a class="btn btn-warning" href="{{ route('waktu.edit',$data->id) }}">Edit</a>
						</td>
						
						<td>
							<form method="post" action="{{ route('waktu.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection