@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-4">
            <img src="/storage/{{ $user->profile->profileImage() }}" class="rounded-circle w-100" style="height: 180px">
        </div>
        <div class="col-9 p-4">
            <div class="d-flex justify-content-between align-items-baseline">
                <h2>{{ $user->username }}</h2>
                @can('update', $user->profile)
                <a href="/p/create">Add New Post</a>
                @endcan
            </div>
            @can('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }} </strong>posts</div>
                <div class="pr-5"><strong>386 </strong>followers</div>
                <div class="pr-5"><strong>665 </strong>following</div>
            </div>
            <div class="pt-3">
                <strong>{{ $user->profile->title }}</strong>
            </div>
            <div class="pt-1">
                {{ $user->profile->description }}
            </div>
            <div class="pt-1">
                <a href="#">{{ $user->profile->url }}</a>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($user->posts as $posts)
            <div class="col-4 pb-4">
                <a href="/p/{{ $posts->id }}">
                    <img src="/storage/{{ $posts->image }}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
