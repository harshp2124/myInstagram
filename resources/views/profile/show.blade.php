@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.famd4-1.fna.fbcdn.net/v/t51.2885-19/s320x320/104214292_1124497261256342_5995623851880189325_n.jpg?_nc_ht=instagram.famd4-1.fna.fbcdn.net&_nc_ohc=epm3uqw6e0IAX85tAgm&oh=7e8be6eb5fc9f0a6739db54c56e50db8&oe=5F225CB2" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{ $user->username }}</h1>
            </div>
            <div class="d-flex">
                <div><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pl-5"><strong>100</strong> followers</div>
                <div class="pl-5"><strong>312</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div>
                <a href="{{ $user->profile->url }}">
                    {{ $user->profile->url }}
                </a>
                <br>
                <a href="">
                    Edit Profile
                </a>
                <br>
                <a href="/p/create">
                    Add New Post
                </a>
            </div>
        </div>
    </div>
    <hr>

    <div class="row">
        @foreach($user->posts as $post)
        <div class="col-4 pt-4">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        @endforeach
    </div>
</div>
@endsection