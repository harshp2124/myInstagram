@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 40px;">
                    </div>
                    <div>
                        <div class="font-weight-bold"><a href="/{{ $post->user->username }}"><span class="text-dark">{{ $post->user->username }}</span></a></div>
                    </div>
                    <div class="pl-1">•</div>
                    
                    <a href="#" class="pl-1 font-weight-bold">Follow</a>
                </div>
                <hr>

                <pre style="font-family: 'Open Sans';"><span class="font-weight-bold"><a href="/{{ $post->user->username }}"><span class="text-dark">{{ $post->user->username }}</span></a></span> {{ $post->caption }}</pre>
            </div>
        </div>
    </div>
</div>
@endsection