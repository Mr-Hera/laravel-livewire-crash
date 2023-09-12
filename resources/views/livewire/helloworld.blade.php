<div>
    Hello & Welcome!
    {{ $quote }} <br />
    {{-- {{ strtoupper($quote) }} <br /> --}}

    {{-- <button wire:click="$set('quote', 'Livewire Bandit on the loose!!!')">Change Quote</button> --}}
    {{-- <button wire:click="resetQuote">Change Quote</button> --}}
    {{-- <button wire:click="resetQuote('Livewire Bandit on the loose!!!')">Change Quote</button> --}}
    {{-- <button wire:mouseenter="resetQuote">Change Quote</button> --}}

    <form action="#" wire:submit="resetQuote('Livewire Bandit on the loose!!!')">
        <button>Change Quote</button>
    </form>

    {{-- <form action="#" wire:submit.prevent="resetQuote('Livewire Bandit on the loose!!!')">
        <button>Change Quote</button>
    </form> --}}

    <br /><hr />

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
