@extends('home')

@section('content')
<div class="row">
<br>
<h3 aling="center">Student Data</h3>
<br>
@if($message = Session::get('success'))
<div class="alert alert-success">
<p>{{$message}}</p>
</div>
@endif
<div aling="right">
<a href="{{route('student.create')}}" class="btn btn-primary">Add</a>
<br>
<br>
</div>
<table class="table table-bordered">
<tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>
@foreach($students as $row)
<tr>
<td>{{$row['first_name']}}</td>
<td>{{$row['last_name']}}</td>
<td><a href="{{action('StudentController@edit', $row['id'])}}">Edit</a></td>
<td></td>
</tr>
@endforeach
</table>
</div>
@endsection