@extends('layouts.main_layout')

<h1>Create Transaction</h1>

<div class="card">
    <div class="card-header text-center font-weight-bold">
     
    </div>
    <div class="card-body">
        {{-- {!! Form::open(['url' => 'transaction/update/'.$transaction->id]) !!} --}}
      {{-- {!! Form::model(['method'=>'POST',['route' => 'transaction_update'] ]) !!} --}}
      {!! Form::open(['route' => ['transaction_update', $transaction->id]]) !!}
      <div class="form-group">
        {!! Form::label('title', 'Title: ')  !!}
        {!! Form::text('title', $transaction->title, ['class'=>'form-control'])  !!}
      </div>
      <div class="form-group">
        {!! Form::label('account_id', 'Account: ')  !!}
        {!! Form::select('account_id', $accounts, $transaction->account_id, ['class'=>'form-control'])  !!}
      </div>
      {{-- <div class="form-group">
        {!! Form::label('photo_id', 'Photo: ')  !!}
        {!! Form::file('photo_id', ['class'=>'form-control'])  !!}
      </div> --}}
      <div class="form-group">
        {!! Form::label('body', 'Descriptions: ')  !!}
        {!! Form::textarea('body', $transaction->body, ['class'=>'form-control', 'rows'=> 3])  !!}
      </div>
      <div class="form-group">
        {!! Form::label('amount', 'Amount: ')  !!}
        {!! Form::text('amount', $transaction->amount, ['class'=>'form-control'])  !!}
      </div>
      {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
     <div class="row">

        <div class="form-group">
          {!! Form::submit('Edit Transaction', ['class'=>'btn btn-primary']) !!}
        </div>
          
        
      {!! Form::close() !!}
      &nbsp;
      <div class="form-group">
        {!! Form::open(['route' => ['transaction_destroy', $transaction->id]]) !!}
        {!! Form::submit('Delete Transaction', ['class'=>'btn btn-danger']) !!}
        {!! Form::close() !!}
      </div>
     </div>
    </div>
  </div>