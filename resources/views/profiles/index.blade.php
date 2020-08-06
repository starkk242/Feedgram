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
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>74 </strong>posts</div>
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
        <div class="col-4">
            <img src="https://instagram.famd1-2.fna.fbcdn.net/v/t51.2885-15/e35/c0.72.576.576a/s240x240/83195858_857747871323857_8210076430913120365_n.jpg?_nc_ht=instagram.famd1-2.fna.fbcdn.net&_nc_cat=101&_nc_ohc=rbQo5nXZyLUAX8hTjuU&oh=4715e0e9c4e35cd58f0a2c848656928d&oe=5F56146E" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.famd1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.90.720.720a/s640x640/82622861_184740766225673_2087472483487760349_n.jpg?_nc_ht=instagram.famd1-2.fna.fbcdn.net&_nc_cat=105&_nc_ohc=xK135EYlquwAX8CY2XV&oh=d0bcb11e2207000c7f56cdfa24ffc2e6&oe=5F562F2A" class="w-100 ">
        </div>
        <div class="col-4">
            <img src="https://instagram.famd1-2.fna.fbcdn.net/v/t51.2885-15/e35/s320x320/81788395_133179731120335_641500342849710168_n.jpg?_nc_ht=instagram.famd1-2.fna.fbcdn.net&_nc_cat=107&_nc_ohc=lEtYpQxpaL4AX8YxnMP&oh=238a018a61dfb80ee565edf1585bb1ef&oe=5F56D0B0" class="w-100">
        </div>
    </div>
</div>
@endsection
