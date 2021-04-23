@extends('layouts.principal')



@section('content')

	<table class="table">
  <thead>
    <tr>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">email</th>
      <th scope="col">firstname</th>
      <th scope="col">lasttname</th>
      <th scope="col">course1</th>
      <th scope="col">city</th>
      <th scope="col">country</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($users as $usuarios)
    <tr>
      <td>{{$usuarios->usuarioCurso}}</td>
      <td>{{$usuarios->passCurso}}</td>
      <td>{{$usuarios->emailCurso}}</td>
      <td>{{$usuarios->nombres}}</td>
      <td>{{$usuarios->apellidos}}</td>
      <td>{{$usuarios->curso}}</td>
      <td>{{$usuarios->ciudad}}</td>
      <td>{{$usuarios->pais}}</td>
    </tr>
     @endforeach 
  </tbody>
</table>

<p>asd</p>

@endsection