@extends('includes.layout')
@section('content')

<div class="content">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
                <button href="#addNewAuthor" data-toggle="modal" class="btn btn-dark btn-outline-secondary btn-sm btn-flat"><i class="fa fa-plus"></i> New</button>
            </div>
            <div class="row">
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
                    <h3>{{ ceil($averageAge) }}</h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                  <div class="inner">
                    <p>Books per Author</p>
                    <h3>{{$booksPerAuthor}}</h3>
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
            <div class="tableFixHead">
              <table class="table-hover table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Origin of Country</th>
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
      </div>
    @include('authors.modals')
  </section>
  {{ $author->links('pagination::bootstrap-4')}}      
</div>
@endsection
