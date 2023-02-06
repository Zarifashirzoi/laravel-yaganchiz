<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Home Page</title>
      <script src="https://cdn.tailwindcss.com"></script>
      <link rel="icon" href="{{ asset('images/small-logo.png') }}">
      <style>
         .margin-top {
            margin-top: 0px !important;
         }
      </style>
   </head>
   <body>

      <!-- Header -->
      <header class="relative z-50 w-full flex-none text-sm font-semibold leading-6 text-slate-900">
         <nav aria-label="Global" class="mx-auto max-w-container px-4 sm:px-6 lg:px-8">
            <div class="relative flex items-center py-[2.125rem]">
               <a class="mr-auto flex-none text-slate-900" href="/">
               <img src="{{ asset('images/small-logo.png') }}" class="h-16">
               </a>
               <div class="hidden lg:flex lg:items-center">
                  <a href="/home">Home</a>
                  <a class="ml-8" href="/new-arrival">New Arrival</a>
                  <a class="ml-8" href="/about-us">About Us</a>
                  <a class="ml-8" href="/settings">Settings</a>
                  @if(auth()->user())
                  <a class="ml-8" href="/logout">Logout</a>

                  <a class="ml-8 " href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-user').submit();">
                    Logout
                  </a>

                  <form id="logout-user" class="hidden" action="{{ route('logout') }}" method="POST">
                     @csrf
                  </form>
                  @else
                  
                  <a class="ml-8" href="/login">Login</a>
                  @endif
               </div>
               <button type="button" class="-my-1 ml-8 flex h-8 w-8 items-center justify-center rounded-lg">
                  <span class="sr-only">Search components</span>
                  <svg fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-gray-900 hover:fill-gray-900">
                     <path d="M20.47 21.53a.75.75 0 1 0 1.06-1.06l-1.06 1.06Zm-9.97-4.28a6.75 6.75 0 0 1-6.75-6.75h-1.5a8.25 8.25 0 0 0 8.25 8.25v-1.5ZM3.75 10.5a6.75 6.75 0 0 1 6.75-6.75v-1.5a8.25 8.25 0 0 0-8.25 8.25h1.5Zm6.75-6.75a6.75 6.75 0 0 1 6.75 6.75h1.5a8.25 8.25 0 0 0-8.25-8.25v1.5Zm11.03 16.72-5.196-5.197-1.061 1.06 5.197 5.197 1.06-1.06Zm-4.28-9.97c0 1.864-.755 3.55-1.977 4.773l1.06 1.06A8.226 8.226 0 0 0 18.75 10.5h-1.5Zm-1.977 4.773A6.727 6.727 0 0 1 10.5 17.25v1.5a8.226 8.226 0 0 0 5.834-2.416l-1.061-1.061Z"></path>
                  </svg>
               </button>
               <button type="button" class="-my-1 ml-2 flex h-8 w-8 items-center justify-center rounded-lg">
                  <span class="sr-only">Search components</span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525" />
                  </svg>
               </button>
               <button type="button" class="-my-1 ml-2 flex h-8 w-8 items-center justify-center rounded-lg">
                  <span class="sr-only">Search components</span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                  </svg>
               </button>
            </div>
         </nav>
      </header>
      <div class="isolate bg-white">
         <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
            <svg class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
               <defs>
                  <linearGradient id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                     <stop stop-color="#9089FC"></stop>
                     <stop offset="1" stop-color="#FF80B5"></stop>
                  </linearGradient>
               </defs>
            </svg>
         </div>
         <main>

            <!-- Banner -->
            @if($banner)
            <div class="mx-auto max-w-7xl px-4">
               <div class="mx-auto max-w-2xl lg:max-w-none">
                  <div class="flex flex-col lg:flex-row items-center justify-between landing space-y-8 lg:space-y-0 text-center lg:text-left">
                     <div class="space-y-8 max-w-2xl xl:max-w-2xl">
                        <p class="text-base text-3xl font-semibold text-gray-800 pt-4">
                           @php 
                              $bannerName = explode('digital', $banner->name);
                           @endphp
                           {{ $bannerName[0] }} digital
                           <br>
                           {{ $bannerName[1] }}
                        </p>
                        <p class="pt-4 text-sm text-gray-600">
                           {{ $banner->description}}
                        </p>
                        <div class="py-8">
                           <span class="py-4 px-8 border border-indigo-800 rounded cursor-pointer">View More</span>
                        </div>
                     </div>
                     <div class="group relative">
                        <div class="float-right">
                           <img src="{{ asset($banner->image) }}" class="h-64" alt="Wood  with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endif

            <!-- Product List -->
            <div class="bg-gray-900">
               <div class="mx-auto max-w-7xl py-12 px-6 lg:px-8 lg:py-24">
                  <div class="space-y-12">
                     <ul class="space-y-4 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:grid-cols-4 lg:gap-8">
                        @foreach($products as $product)
                        <li class="rounded-lg bg-white pb-10 text-center xl:text-left">
                           <div class="space-y-6 xl:space-y-10">
                              <img class="" src="{{ $product->image }}" alt="{{ $product->name }}">
                              <div class="space-y-2 xl:flex xl:items-center xl:justify-between px-2 margin-top">
                                 <div class="space-y-1 text-lg font-medium leading-6">
                                    <h3 class="text-gray-800">{{ $product->name }}</h3>
                                 </div>

                                 <div class="flex text-gray-800 text-lx justify-center space-x-5">
                                    {{ $product->price }}$
                                 </div>
                              </div>
                              <p class="px-2 pt-3 text-left text-gray-800 margin-top">
                                 {{ substr_replace($product->description, "", 150) }}
                              </p>
                              <div class="space-y-2 xl:flex xl:items-center xl:justify-between px-2">
                                 <div class="space-y-1 text-lg font-medium leading-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-800">
                                       <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                 </div>

                                 <div class="flex text-gray-800 text-lx justify-center space-x-5 margin-top">
                                    @for($i = 1; $i <= $product->ranking; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                       <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                    </svg>
                                    @endfor
                                    @for($i = 1; $i < (6-$product->ranking); $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                       <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                    @endfor
                                 </div>
                              </div>
                           </div>
                           
                        </li>
                        @endforeach
                       
                     </ul>
                  </div>
               </div>
            </div>
          
            <!-- About Yaganchiz -->
            @if($about)
            <div class="mx-auto max-w-7xl px-4">
               <div class="mx-auto max-w-2xl lg:max-w-none">
                  <div class="flex flex-col lg:flex-row items-center justify-between landing space-y-8 lg:space-y-0 text-center lg:text-left">
                     <div class="space-y-8 max-w-2xl xl:max-w-2xl">
                        <p class="text-base text-3xl font-semibold text-gray-800 pt-4">
                           {{ $about->name }}
                        </p>
                        <p class="pt-4 text-sm text-gray-600">
                           {{ $about->description }}
                        </p>
                     </div>
                     <div class="group relative">
                        <div class="float-right">
                        <img src="{{ asset($about->image) }}" class="h-64" alt="Wood  with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endif
          
            <!-- Testimonials -->
            <div class="bg-gray-900 pt-4">
               <div class="">
               <h1 class="text-4xl text-white text-center">Testimonials</h1>
               <div class="mx-auto max-w-7xl py-12 px-6 lg:px-8 lg:py-24 mx:2 lg:mx-32 ">
                  <div class="space-y-12">
                     <ul class="space-y-4 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:grid-cols-2 lg:gap-8">
                        @foreach($testimonials as $testimonial)
                        <li class="rounded-lg bg-white pb-10 text-left xl:text-left mx-2 lg:mx-16">
                           <div class="space-y-6 xl:space-y-10">
                              <div class="mt-6 flex items-center px-2">
                                 <div class="flex-shrink-0">
                                 <a href="#">
                                    <span class="sr-only">{{ $testimonial->user->name }}</span>
                                    <img class="h-10 w-10 rounded-full" src="{{ $testimonial->user->image }}" alt="">
                                 </a>
                                 </div>
                                 <div class="ml-3">
                                 <p class="text-sm font-medium text-gray-900">
                                    <a href="#" class="hover:underline">{{ $testimonial->user->name }}</a>
                                 </p>
                                 <div class="flex space-x-1 text-sm text-gray-500">
                                    <time datetime="2020-02-12">{{ $testimonial->created_at->format("F d, Y") }}</time>
                                 </div>
                                 </div>
                              </div>
                              <div class="px-2">
                                 <q class="text-base text-3xl font-semibold text-gray-800 pt-4">Highly Recommented</q>
                                 <p class="pt-4 text-md text-gray-700">
                                   {{ $testimonial->description }}
                                 </p>
                                 <p class="mt-4 text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 inline ">
                                       <path fill-rule="evenodd" d="M11.47 4.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 6.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5zm.53 7.59l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 12.31z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="mr-4 text-sm">{{ $testimonial->comments}}</span>

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 inline">
                                    <path fill-rule="evenodd" d="M4.125 3C3.089 3 2.25 3.84 2.25 4.875V18a3 3 0 003 3h15a3 3 0 01-3-3V4.875C17.25 3.839 16.41 3 15.375 3H4.125zM12 9.75a.75.75 0 000 1.5h1.5a.75.75 0 000-1.5H12zm-.75-2.25a.75.75 0 01.75-.75h1.5a.75.75 0 010 1.5H12a.75.75 0 01-.75-.75zM6 12.75a.75.75 0 000 1.5h7.5a.75.75 0 000-1.5H6zm-.75 3.75a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5H6a.75.75 0 01-.75-.75zM6 6.75a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h3a.75.75 0 00.75-.75v-3A.75.75 0 009 6.75H6z" clip-rule="evenodd" />
                                    <path d="M18.75 6.75h1.875c.621 0 1.125.504 1.125 1.125V18a1.5 1.5 0 01-3 0V6.75z" />
                                    </svg>
                                 </p>
                              </div>
                           </div>
                        </li>
                        @endforeach
                     </ul>
                  </div>
               </div>
               <hr>
               </div>
            </div>
         </main>
      </div>

      <!-- Footer -->
      <footer class="pb-16 text-sm leading-6 bg-gray-900 text-white pt-4  mb-64 lg:mb-2">
         <div class="max-w-7xl mx-auto divide-y divide-slate-200 px-4 sm:px-6 md:px-8 dark:divide-slate-700">
            
            <div class="flex py-16">
               <div class="w-1/2 space-y-10 sm:space-y-8 lg:flex lg:space-y-0">
                  <div class="lg:flex-none lg:w-1/2">
                     <ul class="mt-3 space-y-2">
                        <li>
                           <a href="#" class="hover:text-slate-500 dark:hover:text-slate-400">
                              <span class="sr-only">GitHub</span>
                              <svg width="24" height="24" fill="currentColor">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M12.846 0c-6.63 0-12 5.506-12 12.303 0 5.445 3.435 10.043 8.205 11.674.6.107.825-.262.825-.585 0-.292-.015-1.261-.015-2.291-3.015.569-3.795-.754-4.035-1.446-.135-.354-.72-1.446-1.23-1.738-.42-.23-1.02-.8-.015-.815.945-.015 1.62.892 1.845 1.261 1.08 1.86 2.805 1.338 3.495 1.015.105-.8.42-1.338.765-1.645-2.67-.308-5.46-1.37-5.46-6.075 0-1.338.465-2.446 1.23-3.307-.12-.308-.54-1.569.12-3.26 0 0 1.005-.323 3.3 1.26.96-.276 1.98-.415 3-.415s2.04.139 3 .416c2.295-1.6 3.3-1.261 3.3-1.261.66 1.691.24 2.952.12 3.26.765.861 1.23 1.953 1.23 3.307 0 4.721-2.805 5.767-5.475 6.075.435.384.81 1.122.81 2.276 0 1.645-.015 2.968-.015 3.383 0 .323.225.707.825.585a12.047 12.047 0 0 0 5.919-4.489 12.537 12.537 0 0 0 2.256-7.184c0-6.798-5.37-12.304-12-12.304Z"></path>
                              </svg>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="hover:text-slate-500 dark:hover:text-slate-400">
                              <span class="sr-only">Twitter</span>
                              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current">
                                 <path d="M19.995 6.68799C20.8914 6.15208 21.5622 5.30823 21.882 4.31399C21.0397 4.81379 20.118 5.16587 19.157 5.35499C17.8246 3.94552 15.7135 3.60251 14.0034 4.51764C12.2933 5.43277 11.4075 7.37948 11.841 9.26999C8.39062 9.09676 5.17598 7.4669 2.99702 4.78599C1.85986 6.74741 2.44097 9.25477 4.32502 10.516C3.64373 10.4941 2.97754 10.3096 2.38202 9.97799C2.38202 9.99599 2.38202 10.014 2.38202 10.032C2.38241 12.0751 3.82239 13.8351 5.82502 14.24C5.19308 14.4119 4.53022 14.4372 3.88702 14.314C4.45022 16.0613 6.06057 17.2583 7.89602 17.294C6.37585 18.4871 4.49849 19.1342 2.56602 19.131C2.22349 19.1315 1.88123 19.1118 1.54102 19.072C3.50341 20.333 5.78739 21.0023 8.12002 21C11.3653 21.0223 14.484 19.7429 16.7787 17.448C19.0734 15.1531 20.3526 12.0342 20.33 8.78899C20.33 8.60299 20.3257 8.41799 20.317 8.23399C21.1575 7.62659 21.8828 6.87414 22.459 6.01199C21.676 6.35905 20.8455 6.58691 19.995 6.68799Z"></path>
                              </svg>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="hover:text-slate-500 dark:hover:text-slate-400">
                              <span class="sr-only">Instagram</span>
                              <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C9.55538 3 9.24938 3.01125 8.28975 3.054C7.33125 3.099 6.67875 3.24975 6.105 3.4725C5.51325 3.702 5.01038 4.01025 4.51087 4.51087C4.01025 5.01038 3.70087 5.51213 3.4725 6.105C3.24975 6.67875 3.09787 7.33125 3.054 8.28975C3.009 9.24938 3 9.55538 3 12C3 14.4446 3.01125 14.7506 3.054 15.7102C3.099 16.6687 3.24975 17.3224 3.4725 17.895C3.702 18.4868 4.01025 18.9896 4.51087 19.4891C5.01038 19.9897 5.51213 20.2991 6.105 20.5275C6.67875 20.7502 7.33125 20.9021 8.28975 20.946C9.24938 20.991 9.55538 21 12 21C14.4446 21 14.7506 20.9887 15.7102 20.946C16.6687 20.901 17.3224 20.7502 17.895 20.5275C18.4868 20.298 18.9896 19.9897 19.4891 19.4891C19.9897 18.9896 20.2991 18.4879 20.5275 17.895C20.7502 17.3213 20.9021 16.6687 20.946 15.7102C20.991 14.7506 21 14.4446 21 12C21 9.55538 20.9887 9.24938 20.946 8.28975C20.901 7.33125 20.7502 6.67762 20.5275 6.105C20.298 5.51325 19.9897 5.01038 19.4891 4.51087C18.9896 4.01025 18.4879 3.70087 17.895 3.4725C17.3213 3.24975 16.6687 3.09787 15.7102 3.054C14.7506 3.009 14.4446 3 12 3ZM12 4.62C14.403 4.62 14.6888 4.63125 15.6371 4.674C16.5146 4.7145 16.9905 4.86075 17.3077 4.9845C17.7285 5.14762 18.0278 5.34225 18.3427 5.65725C18.6577 5.97225 18.8524 6.2715 19.0155 6.69225C19.1392 7.0095 19.2855 7.48537 19.326 8.36287C19.3687 9.31238 19.3789 9.597 19.3789 12C19.3789 14.403 19.3676 14.6887 19.3226 15.6371C19.2776 16.5146 19.1314 16.9905 19.0076 17.3078C18.8389 17.7285 18.6476 18.0278 18.3326 18.3428C18.0176 18.6578 17.7139 18.8524 17.2976 19.0155C16.9826 19.1392 16.4989 19.2855 15.6214 19.326C14.6651 19.3687 14.3839 19.3789 11.9764 19.3789C9.56888 19.3789 9.28762 19.3676 8.33138 19.3226C7.45388 19.2776 6.97012 19.1314 6.65512 19.0076C6.22762 18.8389 5.93512 18.6476 5.62012 18.3326C5.30512 18.0176 5.10262 17.7139 4.94512 17.2976C4.82138 16.9826 4.67513 16.4989 4.63012 15.6214C4.59637 14.6764 4.58512 14.3839 4.58512 11.9876C4.58512 9.59138 4.59637 9.29887 4.63012 8.34262C4.67513 7.46513 4.82138 6.98137 4.94512 6.66637C5.10262 6.23887 5.30512 5.94637 5.62012 5.63137C5.93512 5.31638 6.22762 5.11387 6.65512 4.95638C6.97012 4.83263 7.44263 4.68638 8.32012 4.64137C9.27637 4.60763 9.55762 4.59637 11.9651 4.59637L12 4.62ZM12 7.3785C9.44625 7.3785 7.3785 9.4485 7.3785 12C7.3785 14.5538 9.4485 16.6215 12 16.6215C14.5538 16.6215 16.6215 14.5515 16.6215 12C16.6215 9.44625 14.5515 7.3785 12 7.3785ZM12 15.0004C10.3429 15.0004 8.99963 13.6571 8.99963 12C8.99963 10.3429 10.3429 8.99963 12 8.99963C13.6571 8.99963 15.0004 10.3429 15.0004 12C15.0004 13.6571 13.6571 15.0004 12 15.0004ZM17.8837 7.19625C17.8837 7.7925 17.4 8.27625 16.8038 8.27625C16.2075 8.27625 15.7238 7.7925 15.7238 7.19625C15.7238 6.6 16.2075 6.11625 16.8038 6.11625C17.4 6.11625 17.8837 6.6 17.8837 7.19625Z" fill="currentColor"></path>
                              </svg>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="lg:flex-none lg:w-1/2">
                     <ul class="mt-3 space-y-2">
                        <li><a class="hover:text-slate-900 dark:hover:text-slate-300" href="/docs/utility-first">Copyright 2022 - YaganChiz</a></li>
                        <li><a class="hover:text-slate-900 dark:hover:text-slate-300" href="/docs/hover-focus-and-other-states">yaganchiz@gmail.com</a></li>
                     </ul>
                  </div>
               </div>
               <div class="flex-none w-1/2 space-y-10 sm:space-y-8 lg:flex lg:space-y-0">
                  <div class="lg:flex-none lg:w-1/2">
                     <ul class="mt-3 space-y-2">
                        <li><a class="hover:text-slate-900 dark:hover:text-slate-300" href="/docs/configuration">About Us</a></li>
                        <li><a class="hover:text-slate-900 dark:hover:text-slate-300" href="/docs/content-configuration">Contact</a></li>
                        <li><a class="hover:text-slate-900 dark:hover:text-slate-300" href="/docs/theme">Address</a></li>
                     </ul>
                  </div>
                  <div class="lg:flex-none lg:w-1/2">
                     <h2 class="font-semibold text-white">Community</h2>
                     <ul class="mt-3 space-y-2">
                        <li><a class="hover:text-slate-900 dark:hover:text-slate-300" href="https://github.com/tailwindlabs/tailwindcss">Privacy Policy</a></li>
                        <li><a class="hover:text-slate-900 dark:hover:text-slate-300" href="/discord">Refund Policy</a></li>
                        <li><a class="hover:text-slate-900 dark:hover:text-slate-300" href="https://twitter.com/tailwindcss">Terms of Services</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>
   </body>
</html>