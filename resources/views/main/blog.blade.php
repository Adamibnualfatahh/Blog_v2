@extends('layouts.app')
@section('title', 'Blogs')
@section('content')
<div class="container mx-auto px-4 pt-28 pb-10">
    @foreach ($request as $request)

    <div class="flex  justify-center py-2">
        <div class="flex card-side flex-col md:flex-row rounded-lg bg-base-100 shadow-xl">

            @if ( $request->cover_image !== null )
            <img class=" md: w-full h-96 md:h-auto object-cover md:w-1/4 rounded-t-lg md:rounded-none md:rounded-l-lg" src="{{ $request['cover_image'] }}" alt="{{ $request['title'] }}"/>
            @else
            <img class=" md: w-full h-96 md:h-auto object-cover md:w-1/4 rounded-t-lg md:rounded-none md:rounded-l-lg" src="https://images.squarespace-cdn.com/content/v1/5b57c77f45776e84ca9708ea/1579152465015-ENY9DK9VH23I31EDODZK/fill-color.gif"/>
            @endif
            <div class="card-body md:w-3/4 break">

                <div class="tooltip md:tooltip-left z-10" data-tip="{{ $request['reading_time_minutes'] }} Minutes For Reading">
                    <a href="/content{{ $request['path'] }}"><h2 class="card-title hover:underline break-all">{{ $request['title'] }}</h2></a>
                </div>
                <h3>{{ $request['description'] }}</h3>
                <div class=" justify-self-start"> 
                    <div class="badge badge-secondary">{{ \Carbon\Carbon::parse($request['published_timestamp'])->format('d-m-Y') }}</div>
                </div>
                <h3>{{ $request['page_views_count'] }} <i class="fa-solid fa-eye"></i></h3>     
                @if ($request['tag_list'] != null)
                <div class="card-actions md:justify-end">
                   @foreach ($request['tag_list'] as $item)
                    <a href="https://dev.to/t/{{  $item }}"><button class="btn ">{{ $item }}</button></a>
                   @endforeach
                </div> 
                @endif

            </div>
        </div>
    </div>
     @endforeach
</div>
@endsection


