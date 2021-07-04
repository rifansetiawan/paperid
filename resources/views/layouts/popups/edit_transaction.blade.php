
<!-- Modal -->
<div class="modal fade" id="modalEdit-{{ $transaction->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                {!! Form::open(['route' => ['transaction_update', $transaction->id]]) !!}
                <div class="form-group">
                    {!! Form::label('title', 'Title: ')  !!}
                    {!! Form::text('title', $transaction->title, ['class'=>'form-control'])  !!}
                </div>
                <div class="form-group">
                    {!! Form::label('account_id', 'Account: ')  !!}
                    {!! Form::select('account_id', $accounts, $transaction->account_id, ['class'=>'form-control'])  !!}
                </div>
                <div class="form-group">
                    {!! Form::label('body', 'Descriptions: ')  !!}
                    {!! Form::textarea('body', $transaction->body, ['class'=>'form-control', 'rows'=> 3])  !!}
                </div>
                <div class="form-group">
                    {!! Form::label('amount', 'Amount: ')  !!}
                    {!! Form::text('amount', $transaction->amount, ['class'=>'form-control'])  !!}
                </div>

                
        
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {!! Form::submit('Edit Transaction', ['class'=>'btn btn-primary']) !!}
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
