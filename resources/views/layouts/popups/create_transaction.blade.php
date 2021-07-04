<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="mt-6 text-gray-500">
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
        
           
            
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
  