@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">

                <div class="card-header">All Books
                    <div class="pull-right">
                        <form action="/search" method="get">
                            <div class="input-group">
                                <input type="search" name="search" class="form-control">
                                <span class="input-group-prepend">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </span>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Author</th>
                                <th scope="col">Image</th>
                                <th scope="col">Owner</th>
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
                                        <td scope="col"> {{ $book->owner->name }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <td><h3 style="color:red">Kitap Bulunamadı.</h3></td>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
