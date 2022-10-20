@extends('layouts.app')
@section('title', 'Adam | About')
@section('content')
<div class="container mx-auto px-4 pt-28 pb-10">

    {{-- <div class="mockup-code">
     <pre data-prefix=">"><code>Hi, This Page About Me! </code></pre>
    </div> --}}

    <div class="avatar mt-4 flex justify-center gap-4 mb-4">
        <div class="w-36 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
            <img src="{{ asset('images/nu.png') }}" />
        </div>
    </div>

    <div class="text font-semibold text-md mb-4">

        <p>Hello, my name is Adam Ibnu Alfatah.</p> 

       <p class="break"> I'm a Backend Programmer that passionate to build a clean, easy-to-use, and powerful service. I'm enthusiastic about technology since I was in elementary school. I always can't wait for computer class every week in school, from that now I'm interested in programming.</p>
       <p class="break"> I started to learn code using PHP, and build my first Point of Sale app. Currently, I'm specialized in the Laravel framework and create various projects.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 justify-center gap-4">
       
        {{-- card --}}

        <div class="col">
            <div class="p-4 max-w-sm bg-base-100 rounded-lg shadow-md sm:p-6 ">
                <h5 class="mb-3 text-base font-semibold">
                    Languange
                </h5>
                <ul class="my-4 space-y-3">
                    <li>
                        <a  class="flex items-center p-3 bg-neutral hover:bg-inherit text-neutral-content hover:text-inherit font-bold rounded-lg ">
                            <i class="fa-brands fa-php"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">PHP</span>                        
                        </a>
                    </li>
                     <li>
                        <a  class="flex items-center p-3 bg-neutral hover:bg-inherit text-neutral-content hover:text-inherit font-bold rounded-lg ">
                            <i class="fa-brands fa-java"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Java</span>                        
                        </a>
                    </li>
                     <li>
                        <a  class="flex items-center p-3 bg-neutral hover:bg-inherit text-neutral-content hover:text-inherit font-bold rounded-lg ">
                            <i class="fa-brands fa-js"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Javascript</span>                        
                        </a>
                    </li>
                     <li>
                        <a  class="flex items-center p-3 bg-neutral hover:bg-inherit text-neutral-content hover:text-inherit font-bold rounded-lg ">
                            <i class="fa-brands fa-html5"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">CSS & HTML</span>                        
                        </a>
                    </li>
                     <li>
                        <a  class="flex items-center p-3 bg-neutral hover:bg-inherit text-neutral-content hover:text-inherit font-bold rounded-lg ">
                            <i class="fa-solid fa-xmark-to-slot"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Visual Studio</span>                        
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col">
            <div class="p-4 max-w-sm bg-base-100 rounded-lg shadow-md sm:p-6 ">
                <h5 class="mb-3 text-base font-semibold">
                    Backend
                </h5>
                <ul class="my-4 space-y-3">
                    <li>
                        <a  class="flex items-center p-3 bg-neutral hover:bg-inherit text-neutral-content hover:text-inherit font-bold rounded-lg ">
                            <i class="fa-brands fa-laravel"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Laravel</span>                        
                        </a>
                    </li>
                     <li>
                        <a  class="flex items-center p-3 bg-neutral hover:bg-inherit text-neutral-content hover:text-inherit font-bold rounded-lg ">
                            <i class="fa-solid fa-fire-flame-curved"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Codeigniter</span>                        
                        </a>
                    </li>
                     <li>
                        <a  class="flex items-center p-3 bg-neutral hover:bg-inherit text-neutral-content hover:text-inherit font-bold rounded-lg ">
                            <i class="fa-solid fa-database"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">PostgreSQL</span>                        
                        </a>
                    </li>
                     <li>
                        <a  class="flex items-center p-3 bg-neutral hover:bg-inherit text-neutral-content hover:text-inherit font-bold rounded-lg ">
                            <i class="fa-solid fa-database"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">MySQL</span>                        
                        </a>
                    </li>
                     <li>
                        <a  class="flex items-center p-3 bg-neutral hover:bg-inherit text-neutral-content hover:text-inherit font-bold rounded-lg ">
                            <i class="fa-brands fa-node-js"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">NodeJS</span>                        
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="col">
            <div class="p-4 max-w-sm bg-base-100 rounded-lg shadow-md sm:p-6 ">
                <h5 class="mb-3 text-base font-semibold">
                    Frontend
                </h5>
                <ul class="my-4 space-y-3">
                    <li>
                        <a  class="flex items-center p-3 bg-neutral hover:bg-inherit text-neutral-content hover:text-inherit font-bold rounded-lg ">
                            <i class="fa-brands fa-css3-alt"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Tailwind CSS</span>                        
                        </a>
                    </li>
                     <li>
                        <a  class="flex items-center p-3 bg-neutral hover:bg-inherit text-neutral-content hover:text-inherit font-bold rounded-lg ">
                            <i class="fa-brands fa-bootstrap"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Bootstrap</span>                        
                        </a>
                    </li>
                     <li>
                        <a  class="flex items-center p-3 bg-neutral hover:bg-inherit text-neutral-content hover:text-inherit font-bold rounded-lg ">
                            <i class="fa-solid fa-browser"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Flutter</span>                        
                        </a>
                    </li>
                     <li>
                        <a  class="flex items-center p-3 bg-neutral hover:bg-inherit text-neutral-content hover:text-inherit font-bold rounded-lg ">
                            <i class="fa-brands fa-vuejs"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Vue JS</span>                        
                        </a>
                    </li>
                     <li>
                        <a  class="flex items-center p-3 ">
                            <svg class="h-4" ></svg>
                            <span class="flex-1 ml-3 whitespace-nowrap"></span>                        
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="col">
            <div class="p-4 max-w-sm bg-base-100 rounded-lg shadow-md sm:p-6 ">
                <h5 class="mb-3 text-base font-semibold">
                    Tools
                </h5>
                <ul class="my-4 space-y-3">
                    <li>
                        <a  class="flex items-center p-3 bg-neutral hover:bg-inherit text-neutral-content hover:text-inherit font-bold rounded-lg ">
                            <i class="fa-brands fa-git"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Git</span>                        
                        </a>
                    </li>
                     <li>
                        <a  class="flex items-center p-3 bg-neutral hover:bg-inherit text-neutral-content hover:text-inherit font-bold rounded-lg ">
                            <i class="fa-brands fa-figma"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Figma</span>                        
                        </a>
                    </li>
                     <li>
                        <a  class="flex items-center p-3 bg-neutral hover:bg-inherit text-neutral-content hover:text-inherit font-bold rounded-lg ">
                            <i class="fa-solid fa-elephant"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Laragon</span>                        
                        </a>
                    </li>
                     <li>
                        <a  class="flex items-center p-3 bg-neutral hover:bg-inherit text-neutral-content hover:text-inherit font-bold rounded-lg ">
                            <i class="fa-solid fa-xmark-to-slot"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Postman</span>                        
                        </a>
                    </li>
                     <li>
                        <a  class="flex items-center p-3 bg-neutral hover:bg-inherit text-neutral-content hover:text-inherit font-bold rounded-lg ">
                            <i class="fa-solid fa-xmark-to-slot"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Visual Studio Code</span>                        
                        </a>
                    </li>
                </ul>
            </div>
        </div>


    </div>
    

    <hr class="my-3 border">
    You can reach me out via email at <a href="mailto:adamibnu157@gmail.com" style="color: #0088cc">adamibnu157@gmail.com</a>, or via socials below:

    <div class="flex justify-center gap-4 mt-3">
        <a href="https://www.facebook.com/profile.php?id=100013124107382" class="btn rounded-md border-transparent hover:border-transparent hover:-translate-y-2 duration-500" style="background-color: #3b5998;"><i class="fa-brands fa-facebook-f"> </i>&nbsp; <p class="hidden md:block">Facebook</p> </a>

        <a href="https://www.instagram.com/adam_ibnu025/" class="btn rounded-md border-transparent hover:border-transparent hover:-translate-y-2 duration-500" style="background-color: #E1306C"><i class="fa-brands fa-instagram"></i>&nbsp; <p class="hidden md:block">Instagram</p></a>

        <a href="https://github.com/Adamibnualfatahh" class="btn rounded-md border-transparent hover:border-transparent hover:-translate-y-2 duration-500" style="background-color: #171515"><i class="fa-brands fa-github"></i>&nbsp; <p class="hidden md:block">Github</p></a>

        <a href="https://www.linkedin.com/in/adam-ibnu-alfatah-0563111b6/" class="btn rounded-md border-transparent hover:border-transparent hover:-translate-y-2 duration-500" style="background-color: #0e76a8"><i class="fa-brands fa-linkedin"></i>&nbsp; <p class="hidden md:block">LinkedIn</p></a>

        <a href="https://twitter.com/akuadamibnu" class="btn rounded-md border-transparent hover:border-transparent hover:-translate-y-2 duration-500" style="background-color: #00acee"><i class="fa-brands fa-twitter"></i>&nbsp; <p class="hidden md:block">Twitter</p></a>

        <a href="https://discordapp.com/users/719920442608975972" class="btn rounded-md border-transparent hover:border-transparent hover:-translate-y-2 duration-500" style="background-color: #5865F2"><i class="fa-brands fa-discord"></i>&nbsp; <p class="hidden md:block">Discord</p></a>
    </div>
        

</div>
@endsection



