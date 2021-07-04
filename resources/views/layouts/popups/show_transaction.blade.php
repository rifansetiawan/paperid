<div class="modal fade" id="modalShow-{{ $transaction->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Transaction with Id {{ $transaction->id }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="mt-6 text-gray-500">
              <div class="form-group">
                {!! Form::label('title', 'Title: ')  !!}
                <h1><strong>{{ $transaction->title }}</strong></h1>
              </div>
              <div class="form-group">
                {!! Form::label('account_id', 'Account: ')  !!}
                <h1><strong>{{ $transaction->account->name }}</strong></h1>
              </div>
              <div class="form-group">
                {!! Form::label('body', 'Descriptions: ')  !!}
                <h1><strong>{{ $transaction->body }}</strong></h1>
              </div>
              <div class="form-group">
                {!! Form::label('amount', 'Amount: ')  !!}
                <h1><strong>{{ $transaction->amount }}</strong></h1>
              </div>
             
        
           
            
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
  