@extends('layouts.app')
@section('content')

<div class="container">
	<center><h3>Edit Data </h3></center>
	<form action="{{ url('/album/' . $row->id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf

	<table width="300px" border="2" cellpadding="10" cellspacing="10" bgcolor="#D8BFD8" align="center">
		<tr>
			<td>PHOTO ID</td>
			<td><input type="text" name="album_pho_id" value="{{ $row->album_pho_id}}"></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="album_name" value="{{ $row->album_name}}"></td>
		</tr>

		<tr>
			<td>KETERANGAN</td>
			<td><input type="text" name="album_text" value="{{ $row->album_text}}"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" value="UPDATE"></td> 
		</tr>
	</table>
	</form>
</div>
@endsection