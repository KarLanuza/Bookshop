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
                <input type="text" class="form-control @error('lastname') is-invalid @enderror" value="{{ old('lastname') }}" id="lastname" name="lastname">
                @error('lastname')
                    <p class="help text-danger">{{ $errors->first('lastname') }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="inputTitle">Initials:</label>
                <input type="text" class="form-control @error('initials') is-invalid @enderror" value="{{ old('initials') }}" id="initials" name="initials" aria-describedby="isbn">
                @error('initials')
                    <p class="help text-danger">{{ $errors->first('initials') }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="inputTitle">Age:</label>
                <input type="texxt" class="form-control @error('age') is-invalid @enderror" id="age" name="age" value="{{ old('age') }}">
                @error('age')
                    <p class="help text-danger">{{ $errors->first('age') }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="inputPages">Country:</label>
                <input type="texxt" class="form-control  @error('country') is-invalid @enderror" id="country" name="country" value="{{ old('country') }}">
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
  </section>   
</div>
 
  

@endsection