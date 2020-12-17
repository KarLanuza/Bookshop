@extends('includes.layout')
@section('content')


<div class="container-fluid">
  <section class="content">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card card-outline-secondary">
          <div class="card-header">
            <h3 class="mb-0">Author Details</h3>
          </div>
          <div class="card-body">
            <form method="POST" action="">
              <div class="form-group">
                <label for="inputISBN">Last Name:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $authors->lastname }}" placeholder="Last Name">
                @error('lastname')
                    <p class="help text-danger">{{ $errors->first('lastname') }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="inputTitle">Initials:</label>
                <input type="text" class="form-control" name="initials" value="{{ $authors->initials }}" placeholder="Initials">
                @error('initials')
                    <p class="help text-danger">{{ $errors->first('initials') }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="inputTitle">Age:</label>
                <input type="text" class="form-control" id="age" name="age" value="{{ $authors->age }}" placeholder="Age">
                @error('age')
                    <p class="help text-danger">{{ $errors->first('age') }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="inputPages">Country:</label>
                <input type="text" class="form-control" id="country" name="country" value="{{ $authors->country }}" placeholder="Country">
                @error('country')
                    <p class="help text-danger">{{ $errors->first('country') }}</p>
                @enderror
              </div>

              @csrf

              <div class="modal-footer">
                <a class="btn btn-default btn-light btn-flat pull-left" href="/authors">Cancel</a>
                <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
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
  </section>   
</div>

  @endsection