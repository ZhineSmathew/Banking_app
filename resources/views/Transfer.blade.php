@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Withdraw') }}</div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" align="center">Transfer Money</div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" class="form-control" name="transferamount" placeholder="Enter transfer Amount" id="transferamount" value=""></input>
                        </div>
                        <div class="form-group">
                            <label>Enter Transfer Amount</label>
                            <input type="text" class="form-control" name="transferamount" placeholder="Enter transfer Amount" id="transferamount" value=""></input>
                        </div>
                        <button type="submit" class="btn btn-danger">Submit To Transfer Amount</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection