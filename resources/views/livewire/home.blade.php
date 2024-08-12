<div>
    <!-- COVER SECTION -->
    <section class="w-full relative" id="HOME">
        <img src="/images/cover.webp" class="w-full" alt="cover image" />
    </section>
    <!-- COVER SECTION END -->
     <!-- SERVICE SECTION -->
    <section class="container px-6 mx-auto w-full mt-10 lg:mt-16"  id="SERVICE">
        <h1 class="text-center text-3xl lg:text-5xl font-semibold ">Our <span class="text-blue-500">Features & Services. </span> </h1>
        <div class="mt-10 lg:mt-8 grid grid-cols-1 lg:grid-cols-3 gap-4">
            @foreach($services as $service)
                <div class="rounded-3xl p-5 shadow-lg space-y-4 text-center">
                    <img src="{{ $service['image'] }}" class="w-full" alt="{{ $service['title'] }}" />
                    <h4 class="text-center font-bold text-2xl text-blue-500">{{ $service['title'] }}</h4>
                    <p>{{ $service['description'] }}</p>
                    <button class="px-8 py-2 rounded-3xl bg-blue-500 hover:bg-blue-700 text-white">MORE</button>
                </div>
            @endforeach
        </div>
    </section>
     <!-- SERVICE SECTION END -->
    <!-- SERVICE SECTION -->
    <section class="container px-6 mx-auto w-full mt-10 lg:mt-16"  id="WORK">
        <h1 class="text-center text-3xl lg:text-5xl font-semibold ">Our <span class="text-blue-500">Works</span> </h1>
        <div class="mt-10 lg:mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($works as $work)
            <div class="group rounded-2xl overflow-hidden aspect-square relative cursor-pointer">
                <img src="{{$work['image']}}" alt="{{ $work['title'] }}" class="w-full h-full object-cover object-center" />
                <div class="absolute bottom-[-100%] left-0 w-full p-5 text-center text-white bg-gray-950 bg-opacity-30 font-bold text-lg transition-all duration-300 group-hover:bottom-0">
                    {{ $work['title'] }}
                </div>
            </div>
            @endforeach
        </div>
    </section>
     <!-- SERVICE SECTION END -->

     <!-- BLOG SECTION -->
    <section class="container px-6 mx-auto w-full mt-10 lg:mt-16"  id="BLOG">
        <h1 class="text-center text-3xl lg:text-5xl font-semibold ">Our <span class="text-blue-500">Blog</span> </h1>
        <div class="mt-10 lg:mt-8 space-y-6">
            @foreach($blogs as $blog)
            <div class="flex {{ $loop->index % 2 == 0 ? 'max-lg:flex-col' : 'max-lg:flex-col flex-row-reverse' }} justify-between items-center gap-6 lg:gap-12">
                <img src="{{$blog['image']}}" alt="{{ $blog['title'] }}" class="object-cover object-center w-full lg:w-1/2 rounded-3xl" />
                <div class="space-y-3">
                    <h4 class="text-2xl font-bold">{{ $blog['title'] }}</h4>    
                    <p>{{ $blog['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>
     <!-- BLOG SECTION END -->

     <!-- BLOG SECTION -->
     <section class="container px-6 mx-auto w-full mt-10 lg:mt-16"  id="TEAM">
        <h1 class="text-center text-3xl lg:text-5xl font-semibold ">Our <span class="text-blue-500">Team</span> </h1>
        <div class="mt-10 lg:mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($members as $member)
            <div class="relative cursor-pointer space-y-4  px-6 py-10 rounded-3xl {{ $loop->index == 1 ? 'bg-blue-300' : '' }}">
                <img src="{{$member['image']}}" alt="{{ $member['name'] }}" class="w-3/5 object-cover object-center aspect-square rounded-3xl mx-auto" />
                <h4 class="text-center text-2xl font-bold text-blue-500">{{ $member['role'] }}</h4>
                <h5 class="text-center text-lg font-bold">{{ $member['name'] }}</h5>
                <p class="text-center max-w-[75%] mx-auto">{{ $member['description'] }}</p>
                <div class="flex justify-center items-center gap-4">
                    <a href="{{ $member['contact']['linked_in'] }}">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="{{ $member['contact']['telegram'] }}">
                        <i class="fab fa-telegram"></i>
                    </a>
                    <a href="{{ $member['contact']['gmail'] }}">
                        <i class="fas fa-envelope"></i>
                    </a>
                    <a href="{{ $member['contact']['discord'] }}">
                        <i class="fab fa-discord"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
     <!-- BLOG SECTION END -->
      
</div>
