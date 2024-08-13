<div class="container p-12 mx-auto ">
    <!-- LOGO -->
    <a href="/">
        <img src="/images/logo/logo.png" class="w-16" />
    </a>
    <!-- LOGIN SECTION -->
     <section class="mt-20 max-w-xl mx-auto border  shadow rounded-3xl p-10">
        <h1 class="text-4xl font-bold text-center text-blue-500">LOGIN</h1>
        <form wire:submit="login" class="space-y-6 mt-6">
            @if (session()->has('error'))
                <div class="text-red-500 bg-red-200 p-3 rounded-xl flex items-center gap-4">
                    <i class="fa fa-exclamation-triangle"></i>
                    {{ session('error') }}
                </div>
            @endif
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
            <div class="text-sm text-blue-500">
                <a href="/forget-password">Forget Password</a>
            </div>
        
            <button type="submit" class="flex w-full py-3 rounded-2xl bg-blue-500 text-white items-center justify-center gap-2">
                <i class="fa fa-sign-in"></i> Login
            </button>
            <!-- <div class="text-center">
                <button type="button" wire:click="redirectToGoogle" class="flex w-full py-3 rounded-2xl  border border-blue-500 hover:bg-blue-500 hover:text-white text-blue-500 items-center justify-center gap-2" >
                    <i class="fab fa-google"></i> Login with Google
                </button>
            </div> -->
            <div class="text-center">
                Don't you have an account? <a class="text-blue-500" href="/register">Register</a>
            </div>
        </form>
     </section>
    <!-- LOGIN SECTION END -->
</div>
