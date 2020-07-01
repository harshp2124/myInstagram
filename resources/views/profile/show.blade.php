@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-contents-between align-items-center">
                <div class="h3 pt-2 pr-3">{{ $user->username }}</div>
                <follow-button user-name="{{ $user->username }}" follows="{{ $follows }}"></follow-button>
            </div>
            <div class="d-flex">
                <div><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pl-5"><strong>{{ $user->profile->followers->count() }}</strong> followers</div>
                <div class="pl-5"><strong>{{ $user->following->count() }}</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>
                <pre style="font-family: 'Open Sans';">{{ $user->profile->description }}</pre>
            </div>
            <div>
                <a href="{{ $user->profile->url }}">
                    {{ $user->profile->url }}
                </a>
                <br>
                @can('update', $user->profile)
                <a href="/{{ $user->username }}/edit">
                    Edit Profile
                </a>
                <br>
                <a href="/p/create">
                    Add New Post
                </a>
                @endcan
            </div>
        </div>
    </div>
    <hr>

    <div class="row">
        @foreach($user->posts as $post)
        <div class="col-4 pt-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection