@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Deposit') }}</div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                 
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"align="center">Deposite Money</div>
                        <div class="form-group">
                            <label>Amount</label>
                            <input type="text" class="form-control" placeholder="Enter Deposite Amount" name="depmoney" id="depmoney" value=""></input>
                        </div>
                        <button type="submit" class="btn btn-danger">Deposite Your Amount</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection