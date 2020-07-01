@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row pb-2">
        <div class="d-flex align-items-center col-6 offset-3">
            <div class="pr-3">
                <a href="/{{ $post->user->username }}">
                    <img src="{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 40px;">
                </a>
            </div>
            <div>
                <div class="font-weight-bold">
                    <a href="/{{ $post->user->username }}">
                        <span class="text-dark">
                            {{ $post->user->username }}
                        </span>
                    </a>
                </div>
            </div>
            <div class="pl-1">•</div>

            <a href="#" class="pl-1 font-weight-bold">Follow</a>
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3">
            <a href="/{{ $post->user->username }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
    </div>
    <div class="row pt-2 pb-4">
        <div class="col-6 offset-3">
            <div>
                <pre style="font-family: 'Open Sans';"><span class="font-weight-bold"><a href="/{{ $post->user->username }}"><span class="text-dark">{{ $post->user->username }}</span></a></span> {{ $post->caption }}</pre>
            </div>
            <hr>
        </div>
    </div>
    @endforeach
</div>
@endsection