@extends('layouts.app')
@section('title', 'Adam Ibnu | Blog')
@section('content')

<div class="container mx-auto px-4 pt-10 mb-10">
    <div class="text-sm breadcrumbs pt-10">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li> 
            <li><a href="{{ route('blog') }}">Blogs</a></li> 
            <li>{{ $detail['title'] }}</li>
        </ul>
    </div>
 
        <div class="container px-6 pt-10 pb-6 mx-auto text-center">
            <div class="max-w-lg mx-auto">
                <h1 class="text-3xl font-bold  md:text-4xl">{{ $detail['title'] }}</h1>
                <p class="mt-3 text-sm">{{ \Carbon\Carbon::parse($detail['published_timestamp'])->format('d M Y')}} | {{ $detail['reading_time_minutes'] }} Minutes</p>
            </div>
            @if ( $detail['cover_image'] !== null )
            <div class="flex justify-center mt-6">
                <img src="{{ $detail['cover_image'] }}" class="w-full h-64 rounded-xl md:w-4/5">
            </div>
            @else
            <div class="flex justify-center mt-6">
                <img src="https://images.squarespace-cdn.com/content/v1/5b57c77f45776e84ca9708ea/1579152465015-ENY9DK9VH23I31EDODZK/fill-color.gif" class="w-full h-64 rounded-xl md:w-4/5">
            </div>
            @endif
        </div>
        
        <div class="container px-6 py-16 mx-auto">
            <div class="bg-base-100 p-5 rouded-xl break-words">
                @if ( $detail['body_html'] !== "" )
                     {!! $detail['body_html'] !!}
                @else
                    <center>
                       <h1 class="font-bold">Konten Belum Tersedia !</h1>
                    </center>
                @endif
               
            </div>
            <div class="flex items-center bg-base-100 justify-between">
                <a href="#" class=""></a>

                <div class="flex items-center mx-5 mb-2">
                    <img class="hidden object-cover  w-10 h-10 mx-4 rounded-full sm:block" src="{{ asset('images/nu.png') }}" alt="avatar">
                    <a class="font-bold">Adam Ibnu</a>
                </div>
            </div>
            <hr>
            <script id="dsq-count-scr" src="//personal-blog-baru.disqus.com/count.js" async></script>
            <div id="disqus_thread" class="bg-base-100 p-5"></div>
            <script>
                /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                /*
                var disqus_config = function () {
                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };
                */
                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://personal-blog-baru.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
  
            <!-- Back to top button -->
            <button
            type="button"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light"
            class="p-3 bg-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-inherit hover:shadow-lg focus:bg-inherit focus:shadow-lg focus:outline-none focus:ring-0 active:bg-inherit active:shadow-lg transition duration-150 ease-in-out hidden bottom-5 right-5 fixed"
            id="btn-back-to-top"
            >
            <svg
                aria-hidden="true"
                focusable="false"
                data-prefix="fas"
                class="w-4 h-4"
                role="img"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"
            >
                <path
                fill="currentColor"
                d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"
                ></path>
            </svg>
            </button>

        </div>
    </div>
    <script>
        // Get the button
        let mybutton = document.getElementById('btn-back-to-top');

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
        scrollFunction();
        };

        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = 'block';
        } else {
            mybutton.style.display = 'none';
        }
        }
        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener('click', backToTop);

        function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
    </script>
@endsection


