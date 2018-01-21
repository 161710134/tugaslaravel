@extends('template.master')
@section('konten')

<table class="table table-bordered"><tr>
	<th>
		tokoh
	</th>
	<th>
		tempat lahir
	</th>
	<th>
		tanggal lahir
	</th>
</tr>
@foreach($silat as $data)
<tr>
	<th>
		{{$data->tokoh}}
	</th>
	<th>
		{{$data->tempat_lahir}}
	</th>
	<th>
		{{$data->tanggal_lahir}}
	</th>
</tr>
@endforeach
</table>

@endsection