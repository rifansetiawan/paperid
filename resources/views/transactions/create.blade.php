@extends('layouts.main_layout')

<h1>Create Transaction</h1>

<div class="card">
    <div class="card-header text-center font-weight-bold">
      Laravel 8 - Add Blog Post Form Example
    </div>
    <div class="card-body">
      {{-- <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('transaction/store')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" id="title" name="title" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <textarea name="description" class="form-control" required=""></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form> --}}

      {{-- {!! Form::open(['url' => 'transaction/store']) !!} --}}
      {!! Form::open(['method'=>'POST', 'action'=>['TransactionController@store']]) !!}
      {{-- {!! Form::open(['method'=>'POST', 'action'=>['TransactionController@store']]) !!} --}}
      <div class="form-group">
        {!! Form::label('title', 'Title: ')  !!}
        {!! Form::text('title', null, ['class'=>'form-control'])  !!}
      </div>
      <div class="form-group">
        {!! Form::label('account_id', 'Account: ')  !!}
        {!! Form::select('account_id', $accounts, null, ['class'=>'form-control'])  !!}
      </div>
      {{-- <div class="form-group">
        {!! Form::label('photo_id', 'Photo: ')  !!}
        {!! Form::file('photo_id', ['class'=>'form-control'])  !!}
      </div> --}}
      <div class="form-group">
        {!! Form::label('body', 'Descriptions: ')  !!}
        {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=> 3])  !!}
      </div>
      <div class="form-group">
        {!! Form::label('amount', 'Amount: ')  !!}
        {!! Form::text('amount', null, ['class'=>'form-control'])  !!}
      </div>
      {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
      {!! Form::submit('Add Transaction', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}
      
    </div>
  </div>