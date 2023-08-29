<x-layouts.app title="Create Phone" description="This is the create phone page">
    <h1>Create Phone</h1>
    <p>Create phone page content</p>
    <form method="POST" action="{{ route('phones.store') }}">
        {{ csrf_field() }}


        <div class="div">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ @old('name') }}" placeholder="Enter name">
            @error('name')
                <small class="error"> {{ $message }} </small>
            @enderror
        </div>

        <div class="div">
            <label for="model">Model</label>
            <input type="text" name="model" id="model" value="{{ @old('model') }}" placeholder="Enter model">
            @error('model')
                <small class="error"> {{ $message }} </small>
            @enderror
        </div>

        <div class="div">
            <label for="year">Year</label>
            <input type="text" name="year" id="year" value="{{ @old('year') }}" placeholder="Enter year">
        </div>

        <div class="div">
            <label for="url">Url</label>
            <input type="text" name="url" id="url" value="{{ @old('url') }}" placeholder="Enter url">
            @error('url')
                <small class="error"> {{ $message }} </small>
            @enderror
        </div>

        {{-- submit button --}}
        <div class="div">
            <button type="submit">Create</button>
        </div>


    </form>
</x-layouts.app>
