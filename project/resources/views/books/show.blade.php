@extends('includes.layout')
@section('content')



<div class="container-fluid">
  <section class="content">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card card-outline-secondary">
          <div class="card-header">
            <h3 class="mb-0">Book Details</h3>
          </div>
          <div class="card-body">
            <form method="POST" action="">
              <div class="form-group">
                <label for="inputISBN">ISBN #</label>
                <input type="text" class="form-control @error('isbn') is-invalid @enderror" id="isbn" name="isbn" value="{{ $books->isbn }}" placeholder="ISBN">
                @error('isbn')
                    <p class="text-danger">{{ $errors->first('isbn') }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="inputTitle">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $books->title }}" placeholder="Title">
                @error('title')
                    <p class="text-danger">{{ $errors->first('title') }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label>Author</label>
                <select class="form-control"  name="authors_id" id="authors_id">
                  <option>--Select Author--</option>
                  @foreach($authors as $author)
                  <option value="{{ $author->id }}" 
                    @if($author->id === $books->author->id)
                    selected
                    @endif
                    >{{ $author->initials }} </option>
                    @endforeach
                </select>
                @error('author_id')
                    <p class="text-danger">{{ $errors->first('author_id') }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="inputPages">Number of Pages</label>
                <input type="text" class="form-control" id="pages" name="pages" value="{{ $books->pages }}" placeholder="No of Pages">
              </div>

              @csrf

              <div class="modal-footer">
                <a class="btn btn-default btn-light btn-flat pull-left" href="/books">Cancel</a>
                <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </section>   
</div>
    @endsection
