<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>MOU</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="{{asset('guest/css/style.css')}}">

  
</head>

<body>

  <section>
  <!--for demo wrap-->
  <h1>Daftar Mou</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Instansi</th>
          <th>Bentuk Kerjasama</th>
          <th>Kurun Waktu Mulai</th>
		  <th>Kurun Waktu Berakhir</th>
		  <th>Manfaat Yang Telah Diperoleh</th>
        </tr>
      </thead>
    </table>
  </div>
  <?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
	
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
	 			  		@foreach($Instansi as $data)
        <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $data->instansi }}</td>
          <td>{{ $data->kerjasama }}</td>
          <td>{{ $data->mulai }}</td>
		  <td>{{ $data->berakhir }}</td>
		  <td>{{ $data->manfaat }}</td>
        </tr>
       
@endforeach
      </tbody>
    </table>
  </div>
</section>

<!-- follow me template -->
<div class="made-with-love">
  Made with
  <i>♥</i> by
  <a target="_blank" href="https://codepen.io/nikhil8krishnan">Nikhil Krishnan</a>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="{{asset('guest/js/index.js')}}"></script>




</body>

</html>
