<x-guest-layout>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="my-5 border-0 shadow-lg card o-hidden">
                    <div class="p-0 card-body">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="mb-4 text-gray-900 h4">Login Admin</h1>
                                    </div>
                                        <x-jet-validation-errors class="mb-4" />

                                        @if (session('status'))
                                            <div class="mb-4 text-sm font-medium text-green-600">
                                                {{ session('status') }}
                                            </div>
                                        @endif

                                        <form method="POST" action="{{ route('login') }}" class="user">
                                            @csrf

                                            <div class="form-group">
                                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                                <x-jet-input id="email" class="form-control form-control-user" type="email" name="email" :value="old('email')" required autofocus />
                                            </div>

                                            <div class="form-group">
                                                <x-jet-label for="password" value="{{ __('Password') }}" />
                                                <x-jet-input id="password" class="form-control form-control-user" type="password" name="password" required autocomplete="current-password" />
                                            </div>

                                            <div class="form-group">
                                                <label for="remember_me" class="flex items-center">
                                                    <x-jet-checkbox id="remember_me" name="remember" />
                                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                                </label>
                                            </div>

                                            <div>
                                                <x-jet-button class="btn btn-primary btn-user btn-block">
                                                    {{ __('Log in') }}
                                                </x-jet-button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
</x-guest-layout>
