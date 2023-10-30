        
<ul class="flex flex-col py-4 space-y-1">
    <li class="px-5">
        <div class="flex flex-row items-center h-8 border-b-2 border-white mt-6">
        <div class="font-bold tracking-wide text-gray-200">
            @if (session()->has('current_role_name'))
                {{ strtoupper(session('current_role_name')) }}
            @else
                {{ __('YOUR ROLE NAME') }}
            @endif
        </div>
        </div>
    </li>
    <li>
        <a href="/home" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-white hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
        <span class="inline-flex justify-center items-center ml-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
        </span>
        <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
        </a>
    </li>
    @foreach ($menu as $mg)
        <li class="px-5">
            <div class="flex flex-row items-center h-8 border-b-2 border-white mt-6">
                <div class="font-bold tracking-wide text-gray-200">
                    {{ $mg['menugroup_label'] }}
                </div>
            </div>
        </li>
        @foreach ($mg['menus'] as $m)
            <li>
                <a href="{{ $m['route'] }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-white hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                    <?=$m['menu_icon']; ?>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">{{ $m['menu_label'] }}</span>
                </a>
            </li>
        @endforeach
    @endforeach
    <li>
        <a href="/api-docs" target="_blank" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-white hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
        <span class="inline-flex justify-center items-center ml-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
            </svg>              
        </span>
        <span class="ml-2 text-sm tracking-wide truncate">Api Docs</span>
        </a>
    </li>
    
    </ul>