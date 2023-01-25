@extends('home')
@include('includes.sidebar')
<div id="content" class="pl-5">
    @include('includes.navbar')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center text-uppercase">{{ Auth::user()->name }}</h3>
                        {{-- {{ trans('profile.showProfileTitle',['username' => $user->name]) }} --}}
                    </div>
                    <div class="card-body">

                        {{-- <img src="@if ($user->profile->avatar_status == 1) {{ $user->profile->avatar }} @else {{ Gravatar::get($user->email) }} @endif" alt="{{ $user->name }}" class="user-avatar"> --}}

                        <dl class="user-info">
                            <dt>
                                {{ __('User email:')}}
                            </dt>
                            <dd>
                                {{ Auth::user()->email }}
                            </dd>

                            <dt>
                                {{ __('Name:')}}
                            </dt>
                            <dd>
                                {{ Auth::user()->name }}
                            </dd>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection