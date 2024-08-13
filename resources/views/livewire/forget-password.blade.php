<div class="container p-12 mx-auto ">
    <!-- LOGO -->
    <a href="/">
        <img src="/images/logo/logo.png" class="w-16" />
    </a>
    <!-- LOGIN SECTION -->
     <section class="mt-20 max-w-xl mx-auto border  shadow rounded-3xl p-10">
        <h1 class="text-4xl font-bold text-center text-blue-500 uppercase">Forget Password</h1>
        <form wire:submit="save" class="space-y-6 mt-4">
            <div class="space-y-2">
                <label for="email">Email</label>
                <input class="w-full px-4 py-2 border rounded-xl focus:outline focus:outline-blue-500" type="email" wire:model="email" placeholder="Your Email">
                <div class="text-red-400">
                    @error('email') <span class="error">{{ $message }}</span> @enderror 
                </div>
            </div>
           
            <div class="text-sm text-blue-500">
                <a href="/login">Go back to login</a>
            </div>
        
            <button type="submit" class="flex w-full py-3 rounded-2xl bg-blue-500 text-white items-center justify-center gap-2">
                <i class="fa fa-key"></i> Reset Password
            </button>
        </form>
     </section>
    <!-- LOGIN SECTION END -->
</div>
   