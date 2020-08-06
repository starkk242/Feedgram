@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-4">
            <img src="https://instagram.famd1-1.fna.fbcdn.net/v/t51.2885-19/s320x320/70657146_2594672687281264_5113886992341401600_n.jpg?_nc_ht=instagram.famd1-1.fna.fbcdn.net&_nc_ohc=wXBF_WY_cjYAX-qi6eN&oh=21f60c075403eaf51f083783fc49540b&oe=5F50EE27" class="rounded-circle" style="height: 180px">
        </div>
        <div class="col-9 p-4">
            <div class="d-flex justify-content-between align-items-baseline">
                <h2>{{ $user->username }}</h2>
                <a href="/p/create">Add New Post</a>
            </div>
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
                <img src="/storage/{{ $posts->image }}" class="w-100">
            </div>
        @endforeach
    </div>
</div>
@endsection
