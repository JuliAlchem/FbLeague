@extends('layouts.app')
@section('content')
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    <h1 class="text-white p-2"> {{ auth()->user()->name }} </h1> 
                </div>

             
            </div>
        </header>
        <!--/Header-->

        <div class="flex flex-1">
            <!--Sidebar-->
            <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">
                <ul class="list-reset flex flex-col">
                    
                <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
                        <a href="{{ route('admin.users.index') }}"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="far fa-user float-left mx-2"></i>
                            Users
                            <span><i class="fas fa-angle-right float-right"></i></span>
                        </a>
                    </li>
               
                    <li class="w-full h-full py-3 px-2">
                        <a href="{{ route('admin.players.index') }}"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="far fa-user float-left mx-2"></i>
                            Players
                            <span><i class="fa fa-angle-down float-right"></i></span>
                        </a>
                        <ul class="list-reset -mx-2 bg-white-medium-dark">
                            <li class="border-t mt-2 border-light-border w-full h-full px-2 py-3">
                                <a href="{{ route('admin.teams.index') }}"
                                   class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                    Teams
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                            <li class="border-t border-light-border w-full h-full px-2 py-3">
                                <a href="{{ route('admin.games.index') }}"
                                   class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                    Games
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <!--/Sidebar-->


            <!--Main-->
            <main class="bg-white-300 flex-1 p-3 overflow-hidden">
                
            @yield('crud')
            
            </main>
            <!--/Main-->
        </div>


        <!--Footer-->
        <footer class="bg-grey-darkest text-white p-2">
            <div class="flex flex-1 mx-auto">&copy; 2022</div>
            <div class="flex flex-1 mx-auto"><a href="https://therichpost.com/" target=" _blank">FbLeague</a></div>
        </footer>
        <!--/footer-->
    </div>
</div>
@endsection