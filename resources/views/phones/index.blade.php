<x-layouts.app title="Phones" description="This is the phones page">
    <h1>Phones</h1>
    <p>Phones page content</p>

    <a href="{{ route('phones.create') }}">Create phone</a>

    <ul>
        @foreach ($phones as $phone)
            <li>
                <a href="{{ route('phones.show', $phone) }}">
                    {{ $phone->name }}
                </a>
            </li>
        @endforeach
</x-layouts.app>
