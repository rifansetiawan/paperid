@extends('layouts.main_layout')

@section('content')
<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    @include('layouts.popups.create_account')
    <div class="mt-8 text-2xl">
      <div class="d-flex justify-content-between">
        Financial Account
        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Add New Account</a>
      </div>
        
  
       
    </div>
  
    <div class="mt-6 text-gray-500">
            
        <div class="row" style="margin: 5px;">
            {{-- <div class="col-sm-6">
                {!! Form::open(['method'=>'POST', 'action'=>['FinancialAccountsController@store']]) !!}
                    <div class="form-group">
                        <div>
                            {!! Form::label('name', 'Name: ')  !!}
                            {!! Form::text('name', null, ['class'=>'form-control'])  !!}
                        </div>
                       
                    </div>
                    <div class="form-group">
                        <div>
                            {!! Form::label('type', 'Type: ')  !!}
                            {!! Form::text('type', null, ['class'=>'form-control'])  !!}
                        </div>
                       
                    </div>

                    <div class="form-group">
                        <div>
                            {!! Form::label('description', 'Description: ')  !!}
                            {!! Form::text('description', null, ['class'=>'form-control'])  !!}
                        </div>
                       
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Add Financial Account', ['class'=>'btn btn-primary']) !!}
                    </div>
                {!! Form::close() !!}
            </div> --}}
            <div class="col-sm-12">
                @if ($financial_accounts)
                <table class="table  table-striped table-bordered" id="table_account">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>type</th>
                            <th>description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($financial_accounts as $account )     
                            <tr>
                                <td>{{ $account->id }}</td>
                                <td>{{ $account->name }}</td>
                                {{-- <td>{{ $account->created_at ? $account->created_at ->diffForHumans() : 'Undefined'}}</td> --}}
                                <td>{{ $account->type ? $account->type  : 'Undefined'}}</td>
                                <td>{{ $account->type ? $account->description  : 'Undefined'}}</td>
                            
                                <td>
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu">
                                        
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalShow-{{ $account->id }}"> <i class="fa fa-eye"  ></i> &nbsp;View</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalEdit-{{ $account->id }}"> <i class="fa fa-pencil-square-o"  ></i> &nbsp;Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalDelete-{{ $account->id }}"> <i class="fa fa-trash-o"  ></i> &nbsp;Delete</a>
                                    </div>
                                    </td>
                                
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
  @foreach ($financial_accounts as $account )
@include('layouts.popups.edit_account', $account)
@endforeach

@foreach ($financial_accounts as $account )
@include('layouts.popups.delete_account', $account)
@endforeach

@foreach ($financial_accounts as $account )
@include('layouts.popups.show_account', $account)
@endforeach
  
    <script type="text/javascript">

    $(document).ready(function() {
        $('#table_account').DataTable();
    } );
    </script>
  @endsection
  
{{-- @foreach ($financial_accounts as $account)

<p>{{ $account->name }}</p>
    
@endforeach --}}