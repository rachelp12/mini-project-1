@extends('layouts.default')

@section('content')
    <div class="card mt-3 pl-2 pr-2">
        <div class="'card-title"><h1>Thanks for the reply</h1>
            <p class="lead">From: Mark</p></div>
        <div class="card-body">
            <div class="form-group">
                <label for="body">Message</label>
                <textarea name='body' class="form-control" id="body" rows="3">
                    Thanks for the reply. How is your class?
                </textarea>
            </div>
            <a href="/viewmessage" class="btn btn-primary mb-2">Back</a>
        </div>
    </div>

@endsection