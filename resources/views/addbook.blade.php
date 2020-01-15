@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ url()->previous() }}">Go Back</a><br>
                    Add a Book (All fields are Required)</div>
                <div class="card-body">
                        <form method="post">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="book-name" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input name="book-name" type="text" class="form-control" id="book-name"
                                           placeholder="Book Name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="book-author" class="col-sm-3 col-form-label">Author</label>
                                <div class="col-sm-9">
                                    <input name="book-author" type="text" class="form-control" id="book-author"
                                           placeholder="Author" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="book-image-url" class="col-sm-3 col-form-label">Image Url</label>
                                <div class="col-sm-9">
                                    <input name="book-image-url" type="text" class="form-control" id="book-image-url"
                                           placeholder="Image Url" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="book-owner-id" class="col-sm-3 col-form-label">Owner ID</label>
                                <div class="col-sm-9">
                                    <input name="book-owner-id" type="text" class="form-control" id="book-owner-id"
                                           placeholder="##Test Ediliyor##" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="temp-book-owner-id" class="col-sm-3 col-form-label">Temp Owner ID</label>
                                <div class="col-sm-9">
                                    <input name="temp-book-owner-id" type="text" class="form-control" id="temp-book-owner-id"
                                           placeholder="##Test Ediliyor##" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-3 col-sm-9">
                                    <button type="submit" class="btn btn-primary">Add it!</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection
