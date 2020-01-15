@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                    <a href="/addbook">Add a book!</a>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Books that you have</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Author</th>
                            <th scope="col">Image</th>
                            <th scope="col">Owner of Book</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                        $count = 1;
                        @endphp
                        @if(!empty($books))
                            @foreach($books as $book)
                                <tr>
                                    <td scope="col">{{ $count++ }}</td>
                                    <td scope="col">{{ $book->name }}</td>
                                    <td scope="col">{{ $book->author }}</td>
                                    <td scope="col"><img src="{{ $book->image_url }}" width="30px"></td>
                                    <td scope="col">{{ $book->owner->name }}</td>
                                </tr>
                            @endforeach
                        @else
                            <h3 style="color:red">Kitap Bulunamadı.</h3>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
