@extends('includes.layout')
@section('content')


<div class="content">
    <!-- Main content -->
    <section class="content">

    @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
    @endif

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="panel-body with-border">
            <button href="#addnewBook" data-toggle="modal" class="btn btn-dark btn-outline-secondary btn-sm btn-flat"><i class="fa fa-plus"></i> New</button>
          </div>
          <div class="tableFixHead">
            <table class=" table-hover table-bordered">
              <thead>
                <tr>
                  <th class="text-center">ISBN #</th>
                  <th class="text-center">Title</th>
                  <th class="text-center">Author</th>
                  <th class="text-center">Number of Pages</th>
                </tr>
              </thead>
              <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->isbn }}</td>
                        <td><a href="/books/{{$book->id}}">{{ $book->title }}</a></td>
                        <td>{{ $book->authors->initials }}</td>
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
    {{ $books->links('pagination::bootstrap-4') }}
</div>

@endsection