<div class="modal fade" id="modalShow-{{ $account->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Account with Id {{ $account->id }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="mt-6 text-gray-500">
              <div class="form-group">
                {!! Form::label('name', 'Name: ')  !!}
                <h3><strong>{{ $account->name }}</strong></h3>
              </div>
              <div class="form-group">
                {!! Form::label('type', 'Type: ')  !!}
                <h3><strong>{{ $account->type}}</strong></h3>
              </div>
              <div class="form-group">
                {!! Form::label('description', 'Descriptions: ')  !!}
                <h3><strong>{{ $account->description }}</strong></h3>
              </div>
            
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
  