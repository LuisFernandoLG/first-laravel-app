<x-layouts.app title="Login" description="This is our login page">
    <h1>Login</h1>


    <form action="{{ route('login') }}" method="POST">
        @csrf


        <div class="field">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="{{ old('email') }}">
            @error('email')
                <small class="error-msg">{{ $message }}</small>
            @enderror
        </div>

        <div class="field">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" value="{{ old('password') }}">
            @error('password')
                <small class="error-msg">{{ $message }}</small>
            @enderror
        </div>

        {{-- remember me checkbox --}}
        <div class="field">
            <label for="remember">Remember me</label>
            <input type="checkbox" name="remember" id="remember" value="{{ old('remember') }}">
        </div>


        <button class="btn edit-btn" type="submit">Login</button>
    </form>

</x-layouts.app>
