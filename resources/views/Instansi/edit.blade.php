@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Instansi 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('Instansi.update',$Instansi->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('instansi') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Instansi </label>	
			  			<input type="text" name="instansi" class="form-control" value="{{ $Instansi->instansi }}"  required>
			  			@if ($errors->has('instansi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		
                      <div class="form-group {{ $errors->has('kerjasama') ? ' has-error' : '' }}">
			  			<label class="control-label">Bentuk Kerjasama </label>	
			  			<input type="text" name="kerjasama" class="form-control" value="{{ $Instansi->kerjasama }}"  required>
			  			@if ($errors->has('kerjasama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kerjasama') }}</strong>
                            </span>
                        @endif
			  		
                      <div class="form-group {{ $errors->has('mulai') ? ' has-error' : '' }}">
			  			<label class="control-label">Kurun Waktu Mulai </label>	
			  			<input type="date" name="mulai" class="form-control" value="{{ $Instansi->mulai }}"  required>
			  			@if ($errors->has('mulai'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mulai') }}</strong>
                            </span>
                        @endif
			  		
                      <div class="form-group {{ $errors->has('berakhir') ? ' has-error' : '' }}">
			  			<label class="control-label">Kurun Waktu Berakhir</label>	
			  			<input type="date" name="berakhir" class="form-control" value="{{ $Instansi->berakhir }}"  required>
			  			@if ($errors->has('berakhir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('berakhir') }}</strong>
                            </span>
                        @endif
						<div class="form-group {{ $errors->has('manfaat') ? ' has-error' : '' }}">
			  			<label class="control-label">Manfaat Yang Telah Diperoleh</label>	
			  			<input type="text" name="manfaat" class="form-control" value="{{ $Instansi->manfaat }}"  required>
			  			@if ($errors->has('manfaat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('manfaat') }}</strong>
                            </span>
                        @endif
			  	
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
                  </div>
                  </div>
                  </div>
                  </div>    
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection