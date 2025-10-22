<x-app>
    <x-slot:title>
        Login
    </x-slot>

    <div 
        class="bg-cover bg-center bg-no-repeat min-h-screen flex items-center justify-center font-sans" 
        style="background-image: linear-gradient(rgba(250, 250, 250, 0.937), rgba(8, 52, 117, 0.942)), url('/img/img.jpg');"
    >

        <div class="bg-white bg-opacity-80 rounded-lg shadow-lg max-w-4xl w-full mx-4 flex flex-col md:flex-row overflow-hidden">
        
            <!-- Left Panel -->
    <div class="md:w-1/2 p-10 flex flex-col justify-center items-center text-center bg-gradient-to-br from-white via-blue-50 to-blue-100 text-gray-800 relative">
      <img src="/img/sms.png" alt="School Logo" class="w-32 h-32 mb-6 rounded-full shadow-lg border-4 border-white" />

      <h1 class="text-4xl md:text-5xl font-extrabold mb-3 tracking-tight text-blue-900">Welcome to</h1>
      <h2 class="text-5xl font-extrabold mb-4 text-blue-700 drop-shadow-md">School Management System</h2>
      <p class="text-gray-700 mb-8 max-w-md leading-relaxed font-medium">
        Empowering education through a unified academic management system that enhances learning, streamlines processes, and connects the academic community.
      </p>
      <a
        href="#"
        class="bg-blue-700 hover:bg-blue-800 text-white font-extrabold px-6 py-3 rounded-lg shadow-md transition-all duration-300"
      >
        Learn More
      </a>
    </div>


        <!-- Right panel -->

        
        <div class="md:w-1/2 bg-white p-10 flex flex-col justify-center">
            <h3 class="text-2xl font-bold text-blue-900 mb-6 text-center">
                Log in to your account
            </h3>
            
            <form id="loginForm" action="{{ route('login') }}" method="POST" class="space-y-6">
                @csrf
                <x-form.text name="email" label="Email" required />
                <x-form.password name="password" label="Password" required />

                @if ($errors->has('email'))
                    <div class="mb-4 text-red-600 text-sm">
                        {{ $errors->first('email') }}
                    </div>
                @endif

                <div>
                    <button
                        type="submit"
                        class="w-full bg-blue-700 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-800 transition duration-300"
                    >
                        Log In
                    </button>
                </div>
            </form>

                <div class="mt-4 text-center">
                    <a href="{{ route('password.request') }}" class="text-blue-700 hover:underline text-sm">Forgot Password?</a>
                </div>

                <p class="mt-6 text-center text-gray-600 text-sm">
                    New Student?
                    <a href="/register" class="text-blue-700 hover:underline">Register Here</a>
                    <span style="display: none;">test</span>
                </p>
        </div>
    </div>

  </div>
</x-app>