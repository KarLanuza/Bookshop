@extends('includes.layout')
@section('content')



<div class="content-fluid">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Authors
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-body">
            <form method="POST" action="">
              <!-- <div class="form-group">
                  <label for="inputISBN">First Name</label>
                  <input type="text" class="form-control" id="isbn" name="isbn" value="{{ $authors->isbn }}" placeholder="ISBN">
                </div> -->
                <div class="form-group">
                  <label for="inputTitle">Last Name</label>
                  <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $authors->lastname }}" placeholder="Last Name">
                </div>

                <div class="form-group">
                  <label for="inputTitle">Initials</label>
                  <input type="text" class="form-control" id="initials" name="initials" value="{{ $authors->initials }}" placeholder="Initials">
                </div>
                <div class="form-group">
                  <label for="inputTitle">Age</label>
                  <input type="text" class="form-control" id="age" name="age" value="{{ $authors->age }}" placeholder="Age">
                </div>

                <div class="form-group">
                  <label for="inputTitle">Country</label>
                  <input type="text" class="form-control" id="country" name="country" value="{{ $authors->country }}" placeholder="Country">
                </div>
                @csrf

                <div class="modal-footer">
                  <a class="btn btn-default btn-flat pull-left" href="/authors">Cancel</a>
                  <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
                </div>
              </form>

              <div class="form-group">
              <section class="content-header">
                  <h3>
                    Books Published
                  </h3>
                </section>
                <ul>
                  @foreach($booksOfAuthor as $booksOfAuthors)
                    <li>{{ $booksOfAuthors->title }}</li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>   
    
    
  </div>
  @endsection