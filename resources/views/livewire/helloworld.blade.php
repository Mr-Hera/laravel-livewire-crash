<div>
    Hello & Welcome!
    {{ $quote }} <hr />

    <input type="text" wire:model.live.lazy="quote" />

    <input type="checkbox" wire:model.live="isCheck" />

    @if ($isCheck)
        <p>True & Showing!!!</p>
    @endif

    <hr />

    <select wire:model.live="talk" multiple>
        <option>Goodbye!</option>
        <option>See you again!</option>
        <option>Have a muy bonito day!</option>
    </select>

    @if ($talk)
        <p>{{ implode(' | ', $talk) }}</p>
    @endif
</div>
