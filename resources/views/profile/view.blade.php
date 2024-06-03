<!DOCTYPE html>
<html>
<head>
    <title>View Profile</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        .profile-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .profile-header {
            background-color: #f7fafc;
            border-bottom: 1px solid #e2e8f0;
            padding: 20px;
            text-align: center;
        }
        .profile-body {
            padding: 20px;
        }
        .profile-body img {
            border-radius: 50%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            margin-left: 200px;
        }
        .profile-body p {
            margin-bottom: 10px;
            font-size: 18px;
            line-height: 1.6;
        }
        .profile-body p strong {
            font-weight: 600;
        }
        .profile-card a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            color: #ffffff;
            background-color: #4299e1;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .profile-card a:hover {
            background-color: #3182ce;
        }
    </style>
</head>
<body class="bg-gray-100">
@extends('layouts.userdash')

@section('content')
    <div class="min-h-screen">
        <div class="max-w-3xl mx-auto py-10 px-6 mt-10 profile-card">
            <div class="profile-header">
                <h1 class="text-3xl font-semibold mb-2">Profile</h1>
                <p class="text-lg">Welcome, {{ Auth::user()->name }}</p>
            </div>
            <div class="profile-body text-center">
                @if ($profile)
                    @if ($profile->profile_image)
                        <img src="{{ asset('storage/' . $profile->profile_image) }}" alt="{{ $profile->name }}" class="w-32 h-32">
                    @endif
                    <p><strong>Name:</strong> {{ $profile->name }}</p>
                    <p><strong>Email:</strong> {{ $profile->email }}</p>
                    <p><strong>Phone:</strong> {{ $profile->phone }}</p>
                    <p><strong>Address:</strong> {{ $profile->address }}</p>
                @else
                    <p>You have not created a profile yet. <a href="{{ route('profile.create') }}" class="text-blue-600 hover:text-blue-800">Create Profile</a></p>
                @endif
            </div>
        </div>
    </div>
@endsection

   
