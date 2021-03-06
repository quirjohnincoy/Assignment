<div class='card-body card-block'>
    <label for='nf-description' class='form-control-label'>Are you sure you wish to {{ $data->is_active === 1 ? "delete" : "restore" }} this User?</label>
</div>
<div class='card-footer'>
    <button data-token='{{ csrf_token() }}' href='/user/{{ $data->id }}' type='submit' class='{{ $data->is_active === 1 ? "delete_user" : "restore_user" }} btn btn-primary btn-sm'> 
        <i class='{{ $data->is_active === 1 ? "far fa-trash-alt" : "fas fa-recycle" }}'> </i> {{ $data->is_active === 1 ? "Delete" : "Restore" }} </button>
</div>  