@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Kurun Waktu 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('waktu.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('mulai') ? ' has-error' : '' }}">
			  			<label class="control-label"> Mulai</label>	
			  			<input type="date" name="mulai" class="form-control"  required>
			  			@if ($errors->has('mulai'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mulai') }}</strong>
                            </span>
                        @endif
			  		</div>
                      <div class="form-group {{ $errors->has('berakhir') ? ' has-error' : '' }}">
			  			<label class="control-label"> Berakhir</label>	
			  			<input type="date" name="berakhir" class="form-control"  required>
			  			@if ($errors->has('berakhir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('berakhir') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<br><br>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>
		</div>
	</div>
</div>
@endsection
