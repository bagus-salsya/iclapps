@extends('layout.user', ['role' => 'staff', 'title' => 'Staff'])

@section('content')
  @include('layout.complaint.create', ['role' => 'staff'])
@endsection