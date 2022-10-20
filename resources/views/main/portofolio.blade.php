@extends('layouts.app')
@section('title', 'Adam Ibnu | Portofolio')
@section('content')
<div class="container-sm py-24 flex px-4 justify-center">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($entries as $entries)
        <div class="card w-96 bg-base-100 shadow-xl">
            <figure class="px-10 pt-10">
                <img src="{{ $entries['image'] }}" alt="API" class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center">
                <h2 class="card-title">{{ $entries['title'] }}</h2>
                <p>{{ $entries['desc'] }}</p>
                <div class="card-actions">
                @if ( $entries['link'] != null )
                    <a href="{{ $entries['link'] }}" target="_blank">
                        <button class="btn btn-md btn-primary">Lihat</button>
                    </a>
                @endif
                @if ( $entries['github'] != null )
                    <a href="{{ $entries['github'] }}" target="_blank">
                        <button class="btn btn-md btn-primary">GitHub</button>
                    </a>
                @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection