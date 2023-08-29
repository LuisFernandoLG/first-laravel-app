<x-layouts.app title="register" description="This is our register page">
    <h1>register</h1>


    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="field">
            <label for="name">Name</label>
            <input autofocus="autofocus" type="text" name="name" id="name" value="{{ old('name') }}">
            @error('name')
                <small class="error-msg">{{ $message }}</small>
            @enderror
        </div>


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
        <div class="field">
            <label for="password_confirmation">Password</label>
            <input type="text" name="password_confirmation" id="password_confirmation"
                value="{{ old('password_confirmation') }}">
            @error('password_confirmation')
                <small class="error-msg">{{ $message }}</small>
            @enderror
        </div>




        <button class="btn edit-btn" type="submit">Registrarse</button>
    </form>

</x-layouts.app>
