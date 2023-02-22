@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Account Statements') }}</div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
  <div><h3>Your Statement Details {{$registers->date}} TO {{$registers->date}}</h3></div>
<table class="table">                
  <thead>
    <tr>
      <th scope="col">Id No</th>
      <th scope="col">Date & Time</th>
      <th scope="col">Amountt</th>
      <th scope="col">Type</th>
      <th scope="col">Details</th>
      <th scope="col">Balances</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($registers as $data)
    <tr>
    <td>{{$data->id_no}}</td>
      <td>{{$data->date}} {{$data->time}}</td>
      <td>{{$data->credit_amount}}{{$data->debit_amount}}</td>
      <td>{{$data->type}}</td>
      <td>{{$data->details}}</td>
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