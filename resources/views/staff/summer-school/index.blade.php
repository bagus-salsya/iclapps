@extends('layout.user', ['role' => 'staff', 'title' => 'Staff'])

@section('content')
  @include('layout.summer-school.index', ['role' => 'staff'])
@endsection