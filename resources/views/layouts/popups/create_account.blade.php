
<!-- Modal -->
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
               
           

                
        
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {!! Form::submit('Add Financial Account', ['class'=>'btn btn-primary']) !!}
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
