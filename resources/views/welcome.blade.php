@extends('layouts.app')

@section('content')
    <div class="py-3 flex bg-gray-100 border-b border-gray-300">
        <div class="container mx-auto flex justify-between">
            <div class="flex">
                <router-link class="pr-2" to="/" exact>Home</router-link>
                <router-link to="/about">About</router-link>
            </div>
            <div class="flex">
                <router-link class="pr-2" to="/login" exact>Login</router-link>
                <router-link to="/register">Register</router-link>
            </div>
        </div>
    </div>
    <div class="container mx-auto pt-4">
        <router-view></router-view>
    </div>
@endsection