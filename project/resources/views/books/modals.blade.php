<!-- Add -->
<div class="modal fade" id="addnewBook">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Add New Book</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">ISBN #:</label>
                  <input type="text" class="form-control" id="isbn" name="isbn" required>
                </div>
                <div class="form-group">
                  <label for="lastname" class="col-form-label">Title</label>
                  <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                  <label for="lastname" class="col-form-label">Author</label>
                  <select class="form-control" id="author_id" name="author_id">
                    <option value="">--Select Author--</option>
                    @foreach($authors as $author)
                      <option value="{{ $author->id }}"> {{ $author->initials }} </option> 
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="voters_id" class="col-form-label">Number of Pages</label>
                  <input type="text" class="form-control" id="pages" name="pages" required>
                </div>
               
            </div>
            @csrf
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>