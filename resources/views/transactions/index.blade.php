@extends('layouts.main_layout')

<h2>Transaction</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">User Created</th>
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
            <td>{{ $transaction -> title }}</td>
            <td>{{ $transaction -> body }}</td>
            <td>{{ $transaction -> amount }}</td>
        </tr>
        
    @endforeach
      
    </tbody>
  </table>