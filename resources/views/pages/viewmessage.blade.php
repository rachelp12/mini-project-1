@extends('layouts.default')

@section('content')
    <div class="my-3 p-3 bg-white rounded box-shadow">
        <h3 class="border-bottom border-gray pb-2 mb-0">Recent messages</h3>

        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
                <a href="/viewmessage/1"><strong class="d-block text-gray-dark">Hello, this is Tom</strong></a>
                <button class="btn btn-danger btn-sm" href="">Delete</button>
            </div>
            <span class="d-block">From: Tom</span>
        </div>

        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
                <a href="/viewmessage/2"><strong class="d-block text-gray-dark">Thanks for the reply</strong></a>
                <button class="btn btn-danger btn-sm" href="">Delete</button>
            </div>
            <span class="d-block">From: Mark</span>
        </div>

        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
                <a href="/viewmessage/3"><strong class="d-block text-gray-dark">Your confirmation email</strong></a>
                <button class="btn btn-danger btn-sm" href="">Delete</button>
            </div>
            <span class="d-block">From: Rachel</span>
        </div>

        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
                <a href="/viewmessage/4"><strong class="d-block text-gray-dark">How is everything going!</strong></a>
                <button class="btn btn-danger btn-sm" href="">Delete</button>
            </div>
            <span class="d-block">From: Amy</span>
        </div>
    </div>
@endsection