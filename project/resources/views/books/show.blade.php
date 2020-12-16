@extends('includes.layout')
@section('content')



<div class="container-fluid">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Book
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-body">


            <form method="POST" action="">
              <div class="form-group">
                <label for="inputISBN">ISBN #</label>
                <input type="text" class="form-control" id="isbn" name="isbn" value="{{ $books->isbn }}" placeholder="ISBN">
              </div>
              <div class="form-group">
                <label for="inputTitle">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $books->title }}" placeholder="Title">
              </div>
              <!-- <div class="form-group">
                  <label for="inputAuthor">Author</label>
                  <input type="text" class="form-control" id="author" value="{{ $books->authors_id }}" placeholder="Author">
                </div> -->
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
                  </div>
                  <div class="form-group">
                    <label for="inputPages">Number of Pages</label>
                    <input type="text" class="form-control" id="pages" name="pages" value="{{ $books->pages }}" placeholder="No of Pages">
                  </div>

                  @csrf

                  <div class="modal-footer">
                    <a class="btn btn-default btn-flat pull-left" href="/books">Cancel</a>
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
