<div class="card">
    <div class="card-body card-block">
    <form id="form_news" action="/news" method="post" class="form-modal" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nf-title" class="form-control-label">Title</label>
                <input type="text" id="nf-title" name="title" placeholder="Enter Title.." class="form-control {{ $errors->has('title') ? 'is-danger' : '' }}"> {{ $errors->has('title') ? "<span class='help-block'>Please enter news title</span>" : '' }}
            </div>
            <div class="form-group">
                <label for="nf-body" class="form-control-label">Body</label>
                <textarea class="form-control {{ $errors->has('body') ? 'is-danger' : '' }}" id="nf-body"  placeholder="Enter news body.." name="body" rows="3">{{ $errors->has('body') ? "<span class='help-block'>Please enter news body</span>" : '' }}</textarea>
            </div> 
        </form>
    </div>
    <div class="card-footer">
    <button type="submit" class="add_news btn btn-primary btn-sm">
			<i class="fas fa-dot-circle"></i> Submit
         </button>
        <button type="reset" class="reset_field btn btn-danger btn-sm">
			<i class="fas fa-ban"></i> Reset
        </button>
    </div>
</div>

