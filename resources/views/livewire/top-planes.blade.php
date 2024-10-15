<div>
    <h1>Top planes</h1>
    <div>
        <ul>
            @foreach($planes as $plane)
                <li>{{ $plane->code }} {{{ $plane->flights_count }}}</li>
            @endforeach
        </ul>

        <div>
            <button wire:click="subOne">-</button>
            {{ $counter }}
            <button wire:click="addOne">+</button>
        </div>

        <div>
            Añadir un nuevo avión

            <form wire:submit="handleSubmit">
                <input type="text" name="code" wire:model="newCode">
                @error('newCode') {{ $message }} @enderror

                <input type="submit">
            </form>
        </div>
    </div>
</div>
