<div>
    <h1 class="text-xl">All my planes</h1>
    <ul>
    @foreach($planes as $plane)
        <li>{{ $plane->code }}</li>
    @endforeach
    </ul>

    <h2 class="text-2xl">Planes with m in their name</h2>
    <ul>
        @foreach($this->planesWithM as $plane)
            <li>{{ $plane->code }}</li>
        @endforeach
    </ul>
</div>
