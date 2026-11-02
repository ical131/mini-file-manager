@extends('layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard') 
@section('content')

     <div class="space-y-8">

        <div>
            <h2 class="text-2xl font-bold text-slate-800">
                Welcome back!
            </h2>

            <p class="text-slate-500 mt-1">
                Here's an overview of your files and storage.
            </p>
        </div>

        @include('dashboard.partials.statistics')
        @include('dashboard.partials.folder-overview')
        @include('dashboard.partials.recent-files')

    </div>
@endsection