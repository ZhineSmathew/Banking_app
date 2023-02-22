@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
  <div><h3>Welcome {{$registers->Name}}</h3></div>
<table class="table">                
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email_id</th>
      <th scope="col">Your Current Balances </th>
    </tr>
  </thead>
  <tbody>
    @foreach ($registers as $data)
    <tr>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->currentbalancesamount}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
            </div>
        </div>
    </div>
</div>
@endsection