<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 ">
    <x-alert />
    <div wire:loading>
        <div class="flex justify-center items-center">
            <x-spinner :status="'Loading'" />
        </div>
    </div>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm shadow-md p-10">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-4 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Primewiz Wallet</h2>
        </div>
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-4 text-center text-xl font-bold leading-9 tracking-tight text-gray-600">Sign Up</h2>
        </div>
        <form class="space-y-6" wire:submit='check' method="POST">
            @csrf
            @method('POST')
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                <div class="mt-2">
                    <input id="email" wire:model='email' name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6">
                </div>
                <div class="text-red-500">
                    @error('email')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    <div class="text-sm">
                        <a href="#" class="font-semibold text-gray-600 hover:text-gray-500">Forgot password?</a>
                    </div>
                </div>
                <div class="mt-2">
                    <input id="password" wire:model='password' name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6">
                </div>
                <div class="text-red-500">
                    @error('password')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-gray-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Sign in</button>
            </div>
        </form>

        <p class="mt-10 text-center text-sm text-gray-500">
            Not a member?
            <a href="{{route('user.signup')}}" class="font-semibold leading-6 text-gray-600 hover:text-gray-500">signup</a>
        </p>
    </div>
</div>
