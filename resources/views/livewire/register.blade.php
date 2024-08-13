<div class="container p-12 mx-auto ">
    <!-- LOGO -->
    <a href="/">
        <img src="/images/logo/logo.png" class="w-16" />
    </a>
    <!-- LOGIN SECTION -->
     <section class="mt-20 max-w-xl mx-auto border  shadow rounded-3xl p-10">
        <h1 class="text-4xl font-bold text-center text-blue-500">REGISTER</h1>
        <form wire:submit="save" class="space-y-6">
            <div class="space-y-2">
                <label for="email">Name</label>
                <input class="w-full px-4 py-2 border rounded-xl focus:outline focus:outline-blue-500" type="text" wire:model="name" placeholder="Your Name">
                <div class="text-red-400">
                    @error('name') <span class="error">{{ $message }}</span> @enderror 
                </div>
            </div>
            <div class="space-y-2">
                <label for="email">Email</label>
                <input class="w-full px-4 py-2 border rounded-xl focus:outline focus:outline-blue-500" type="email" wire:model="email" placeholder="Your Email">
                <div class="text-red-400">
                    @error('email') <span class="error">{{ $message }}</span> @enderror 
                </div>
            </div>
            <div class="space-y-2">
                <label for="password">Password</label>
                <div class="relative" x-data="{show: false}">
                    <input class="w-full px-4 py-2 border rounded-xl focus:outline focus:outline-blue-500" :type="show ? 'text' : 'password'" wire:model="password" placeholder="Your Password">
                    <button type="button" class="absolute top-0 right-0 h-full w-12 border-l" @click="show = !show">
                        <i :class="show ? 'fa fa-eye-slash' : 'fa fa-eye'"></i>
                    </button>
                </div>
                <div class="text-red-400">
                    @error('password') <span class="error">{{ $message }}</span> @enderror 
                </div>
            </div>
           
        
            <button type="submit" class="flex w-full py-3 rounded-2xl bg-blue-500 text-white items-center justify-center gap-2">
                <i class="fa fa-user"></i> Register
            </button>

            <!-- <div class="text-center">
                <button type="button" wire:click="redirectToGoogle" class="flex w-full py-3 rounded-2xl  border border-blue-500 hover:bg-blue-500 text-blue-500 hover:text-white  items-center justify-center gap-2" >
                    <i class="fab fa-google"></i> Register with Google
                </button>
            </div> -->
            <div class="text-center">
                Do you have an account? <a class="text-blue-500" href="/login">Login</a>
            </div>
        </form>
     </section>
    <!-- LOGIN SECTION END -->
</div>
