
<!-- Modal -->
<div class="modal fade"  id="modalDelete-{{ $account->id }}"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure you want to delete account {{ $account->title }}?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {!! Form::open(['route' => ['account_destroy', $account->id]]) !!}
          {!! Form::submit('Delete Account', ['class'=>'btn btn-danger']) !!}
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
