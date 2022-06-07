<!-- Copyright (C) VoidwyrmAPI - All Rights Reserved
   Unauthorized copying of this file, via any medium is strictly prohibited
   Proprietary and confidential
   Written by Bloody ARK Team <support@voidwyrmapi.com>, June 2021
   -->
   <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Voidwyrm API</title>
      <link rel="icon" href="https://voidwyrmapi.com/favicon.ico" type="image/x-icon" />
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <!-- Styles -->
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
      
      <!-- Swiper JS -->
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-MMGY4CKS92"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'G-MMGY4CKS92');
      </script>
          <!-- Demo styles -->
   </head>
   <body class="antialiased scrollbar-thin scrollbar-thumb-red-600 scrollbar-track-gray-900" style="background: url(https://bloody-ark.com/assets/images/navbar.png) rgb(31, 33, 39);">
      <nav class="bg-gray-800 fixed w-full z-50" style="background-color: #161616;">
         <div class="mx-auto flex h-20 w-full justify-between px-4">
            <div class="flex items-center">
                <a href="/" class="flex items-center">
               <img src="https://voidwyrmapi.com/assets/VoidwyrmIco.png" class="h-14 sm:h-14">
               <p class="text-gray-100 text-2xl ml-3 font-extrabold">Voidwyrm</p>
</a>
            </div>
            <div class="flex items-center">
               <button class="hidden lg:block px-4 text-white">Forum</button>
               <a href="/workshop" class="hidden lg:block px-4 text-white">Workshop</a>
               <a href="/docs/v2.0" class="hidden lg:block px-4 text-white">Documentation</a>
               <a href="https://www.paypal.com/paypalme/tekkdragon" class="hidden lg:block px-4 text-white">Donate</a>
               <button class="hidden lg:block px-4 text-white">Downloads</button>
               <!--<a href="https://discord.gg/5p5fKTQ9gN" class="hidden lg:block px-4 text-white">Discord</a>-->
               @if(Auth::guest())
               <hr class="w-px h-6 bg-gray-600 border-gray-600 ml-4 mr-4">
               <a href="/login" class="px-4 text-white">Log In</a>
               <a href="/register" class="mr-10 bg-gradient-to-r from-red-800 to-red-700  text-white rounded shadow-md px-4 py-1">Sign Up</a>
               @else
               <div class="flex items-center" x-data="{isOpen: false}">
                  <hr class="w-px h-6 bg-gray-600 border-gray-600 ml-4 mr-4">
                  <div class="relative inline-flex mr-10">
                     <button @click="isOpen = !isOpen" @keydown.escape="isOpen = false"  class="inline-flex justify-center items-center group" aria-haspopup="true" aria-expanded="false" style="outline: none;">
                        <div class="w-8 h-8 rounded-full" style="" alt="User"></div>
                        <div class="flex items-center truncate">
                           <span class="flex truncate ml-2 text-sm font-medium group-hover:text-gray-400 text-gray-100">
                              {{Auth::user()->name}}
                              <svg class="w-3 h-3 ml-1 mt-0.5 fill-current text-gray-400" viewBox="0 0 12 12">
                                 <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                              </svg>
                           </span>
                        </div>
                     </button>
                  </div>
                  <div x-show.transition.in="isOpen === true" @click.away="isOpen = false" class="shadow-lg float-right w-72 m-10 mt-5 origin-top-right z-10 absolute top-full right-0 rounded overflow-hidden exit-done" style="display: none;background-color: #161616;">
                     <div>
                        @if(Auth::user()->profile_banner == null)
                        <div class="h-28 w-full" style="background-color:#29313c;"></div>
                        @else
                        <div class="h-28 w-full bg-gray-700" ></div>
                        @endif
                        <div class="flex justify-center">
                           <div class="h-24 w-24 md rounded-full relative avatar min-w-max -top-16">
                              <div class="h-24 w-24 md rounded-full relative border-4 border-black"></div>
                              <h2 class="text-2xl text-gray-100 text-center font-semibold">{{Auth::user()->name}}</h2>
                           </div>
                        </div>
                     </div>
                     <div>
                        <ul style="margin-top:-25px;">
                            <li>
                              <a href="/dashboard" class="flex items-center px-3 py-3 hover:bg-gray-900">
                              <i class="fas fa-home text-gray-600 h-4 w-4 text-center"></i>
                                 <span class="ml-3 text-gray-400">Dashboard</span>
                              </a>
                           </li>
                           <li>
                              <a href="/profile/{{Auth::user()->id}}" class="flex items-center px-3 py-3 hover:bg-gray-900">
                                 <i class="fas fa-user text-gray-600 h-4 w-4 text-center"></i>
                                 <span class="ml-3 text-gray-400">Account</span>
                              </a>
                           </li>
                           <li class="border-b border-gray-700">
                              <a href="/settings" class="flex items-center px-3 py-3 hover:bg-gray-200">
                                <i class="fas fa-cog text-gray-600 h-4 w-4 text-center"></i>
                                 <span class="ml-3 text-gray-400">Settings</span>
                              </a>
                           </li>
                           <li>
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf
                              <button class="w-full flex items-center px-3 py-3 hover:bg-gray-200"  onclick="event.preventDefault(); this.closest('form').submit();">
                              <i class="fas fa-sign-out-alt text-gray-600 h-4 w-4 text-center"></i>
                                 <span class="ml-4 text-gray-400">Logout</span>
                              </button>
                              </form>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!--<div class="h-10 w-10 md rounded-full relative" style="background:url({{Auth::user()->profile_picture}});background-size: cover;background-position: center;" alt=""></div>
                  <h2 class=" text-gray-100 text-center ml-2">{{Auth::user()->name}}</h2>-->
               @endif
            </div>
         </div>
      </nav>
      <div class="pt-20">

      </div>
   </body>
</html>