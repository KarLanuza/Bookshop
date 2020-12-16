@extends('includes.layout')
@section('content')


<div class="container">
    <!-- Main content -->
    <div class="container-fluid">
      <section class="content">

        <div class="row">
          <div class="col-12">
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
          </div>
          <div class="col-12">
            <div class="box">
              <div class="panel-body with-border">
                <button href="#addnewBook" data-toggle="modal" class="btn btn-light btn-outline-secondary btn-sm btn-flat"><i class="fa fa-plus"></i> New</button>
              </div>
              <div class="center">
                <table class="table table-hover table-striped table-bordered">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col" class="text-center">ISBN #</th>
                      <th scope="col" class="text-center">Title</th>
                      <th scope="col" class="text-center">Author</th>
                      <th scope="col" class="text-center">Number of Pages</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td>{{ $book->isbn }}</td>
                        <td><a href="/books/{{$book->id}}">{{ $book->title }}</a></td>
                        <td>{{ $book->author->initials }} {{ $book->author->lastname }}</td>
                        <td>{{ $book->pages }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        @include('books.modals')
      </section>
    </div>
    {{ $books->links('pagination::bootstrap-4') }}
</div>

@endsection