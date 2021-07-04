
@extends('layouts.main_layout')

@section('content')
@include('layouts.popups.create_transaction')



<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
 
  <div class="mt-8 text-2xl">
    <div class="d-flex justify-content-between">
      Transactions
      {{-- <a href="{{ route('transaction_create') }}" class="btn btn-primary pull-right">Add Transaction</a> --}}
      <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Add Transaction</a>
    </div>
      

     
  </div>

  <div class="mt-6 text-gray-500">
    <table class="table table-striped table-bordered" id="table_transaction">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">User Created</th>
          <th scope="col">Financial Accounts</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Amount</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>  
      @foreach ($transactions as $transaction)
          <tr>
              <th scope="row">{{ $transaction -> id }}</th>
              <td>{{ $transaction ->  user ->name }}</td>
              <td>{{ $transaction -> account ?  $transaction ->  account ->name : 'Undefined'}}</td>
              <td><a href="{{ route('transaction_edit', $transaction->id) }}">{{ $transaction -> title }}</a></td>
              <td >{{ $transaction -> body }}</td>
              <td>{{ $transaction -> amount }}</td>
              <td>
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Action
                </button>
                <div class="dropdown-menu">
                    
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalShow-{{ $transaction->id }}"> <i class="fa fa-eye"  ></i> &nbsp;View</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalEdit-{{ $transaction->id }}"> <i class="fa fa-pencil-square-o"  ></i> &nbsp;Edit</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalDelete-{{ $transaction->id }}"> <i class="fa fa-trash-o"  ></i> &nbsp;Delete</a>
                </div>
              </td>
          </tr>
          
      @endforeach
        
      </tbody>
    </table>
  </div>
</div>
@foreach ($transactions as $transaction )
@include('layouts.popups.edit_transaction', $transaction)
@endforeach

@foreach ($transactions as $transaction )
@include('layouts.popups.delete_transaction', $transaction)
@endforeach

@foreach ($transactions as $transaction )
@include('layouts.popups.show_transaction', $transaction)
@endforeach

{{-- <script type="text/javascript" language="javascript" src="../../../public/js/jquery-3.5.1.js"></script>
<script type="text/javascript" language="javascript" src="../../../public/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="../../../public/js/dataTables.bootstrap4.min.js"></script> --}}

<script type="text/javascript">

$(document).ready(function() {
    $('#table_transaction').DataTable();
} );
</script>
@endsection

