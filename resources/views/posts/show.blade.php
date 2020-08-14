@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" class="w-100" >
            </div>

            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                            <img src="{{ $post->user->profile->image }}" class="rounded-circle w-100" style="max-width: 50px">
                        </div>
                        <div>
                            <h5><strong><a href="/profile/{{ $post->user->id }}"><span class="text-dark">{{ $post->user->username }}</span></a></strong></h5>
                        </div>
                        <div class="pl-2 pb-2">
                            <a href="#">Follow</a>
                        </div>
                    </div>
                    <hr>
                    <p><strong><a href="/profile/{{ $post->user->id }}"><span class="text-dark">{{ $post->user->username }}</span></a></strong> {{ $post->caption }}</p>
                </div>
            </div>

        </div>
    </div>
@endsection
