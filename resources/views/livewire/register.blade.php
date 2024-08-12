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
                <input class="w-full px-4 py-2 border rounded-xl focus:outline focus:outline-blue-500" type="password" wire:model="password" placeholder="Your Password">
                <div class="text-red-400">
                    @error('password') <span class="error">{{ $message }}</span> @enderror 
                </div>
            </div>
           
        
            <button type="submit" class="flex w-full py-3 rounded-2xl bg-blue-500 text-white items-center justify-center gap-2">
                <i class="fa fa-user"></i> Register
            </button>
            <div class="text-center">
                Do you have an account? <a class="text-blue-500" href="/login">Login</a>
            </div>
        </form>
     </section>
    <!-- LOGIN SECTION END -->
</div>
