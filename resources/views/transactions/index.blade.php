@extends('layouts.main_layout')
@section('content')

<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
 
  <div class="mt-8 text-2xl">
    <div class="d-flex justify-content-between">
      Transactions
      <a href="{{ route('transaction_create') }}" class="btn btn-primary pull-right">Add Transaction</a>
    </div>
      

     
  </div>

  <div class="mt-6 text-gray-500">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">User Created</th>
          <th scope="col">Financial Accounts</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Amount</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($transactions as $transaction)
          <tr>
              <th scope="row">{{ $transaction -> id }}</th>
              <td>{{ $transaction ->  user ->name }}</td>
              <td>{{ $transaction -> account ?  $transaction ->  account ->name : 'Undefined'}}</td>
              <td><a href="{{ route('transaction_edit', $transaction->id) }}">{{ $transaction -> title }}</a></td>
              <td>{{ $transaction -> body }}</td>
              <td>{{ $transaction -> amount }}</td>
          </tr>
          
      @endforeach
        
      </tbody>
    </table>
  </div>
</div>

@endsection

