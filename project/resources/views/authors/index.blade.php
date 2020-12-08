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
            <div class="box-body">
              <table id="example1" class="table table-hover table-bordered">
                <thead>
                  <th>#</th>
                  <th>Initials</th>
                  <th>Age</th>
                  <th>Origin of Country</th>
                </thead>
                <tbody>
                  @foreach($author as $auth)
                  <tr>
                    <td>{{ $auth->id }}</td>
                      <td><a href="/authors/{{ $auth->id }}">{{ $auth->initials }}</a></td>
                      <td>{{ $auth->age }}</td>
                      <td>{{ $auth->country }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

              {{ $author->links()}}
         
            </div>
          </div>
        </div>
      </div>
      @include('authors.modals')
    </section>      
  </div>
@endsection
