@extends('layouts.main_layout')

@section('content')
<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
 
    <div class="mt-8 text-2xl">
      <div class="d-flex justify-content-between">
        Financial Account
      </div>
        
  
       
    </div>
  
    <div class="mt-6 text-gray-500">
            
        <div class="row" style="margin: 5px;">
            <div class="col-sm-6">
                {!! Form::open(['method'=>'POST', 'action'=>['FinancialAccountsController@store']]) !!}
                    <div class="form-group">
                        <div>
                            {!! Form::label('name', 'Title: ')  !!}
                            {!! Form::text('name', null, ['class'=>'form-control'])  !!}
                        </div>
                        <div>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Add Financial Account', ['class'=>'btn btn-primary']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
            <div class="col-sm-6">
                @if ($financial_accounts)
                <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>created</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($financial_accounts as $account )     
                            <tr>
                                <td>{{ $account->id }}</td>
                                <td>{{ $account->name }}</td>
                                <td>{{ $account->created_at ? $account->created_at ->diffForHumans() : 'Undefined'}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                    <p>Financial Account was not added</p>
                @endif

                
            </div>
        </div>

    </div>
  </div>
  
  @endsection
  
{{-- @foreach ($financial_accounts as $account)

<p>{{ $account->name }}</p>
    
@endforeach --}}