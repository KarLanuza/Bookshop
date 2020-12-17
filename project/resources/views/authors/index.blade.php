@extends('includes.layout')
@section('content')

<div class="content">
  <section class="content">
    <div class="col-md-12 offset-md-3">
      @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <p>{{ $message }}</p>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @elseif ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <p>{{ $errors }}</p>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
      <div class="d-flex justify-content-center">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <p>Total number of Authors</p>
              <h3>{{ $author->total() }}</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <p>Average Age of Authors</p>
              <h3>{{ round($averageAge) }}</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <p>Books per Author</p>
              <h3>{{ round($booksPerAuthor) }}</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <p>Countries of Origin</p>
              <h3>{{ $totalCountries }}</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header with-border">
                <a class="btn btn-light btn-outline-secondary btn-sm btn-flat" role="button" href="/authors/add">New Author</a>
            </div>
            <div class="center">
              <table class="table table-hover table-striped table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="text-center">Author ID</th>
                    <th scope="col" class="text-center">Name</th>
                    <th scope="col" class="text-center">Age</th>
                    <th scope="col" class="text-center">Origin of Country</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($author as $auth)
                  <tr>
                    <td>{{ $auth->id }}</td>
                    <td><a href="/authors/{{ $auth->id }}">{{ $auth->initials }} {{ $auth->lastname }}</a></td>
                    <td>{{ $auth->age }}</td>
                    <td>{{ $auth->country }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        {{ $author->links('pagination::bootstrap-4')}}
      </div>
    </div>
    @include('authors.modals')
  </section>      
</div>
@endsection
