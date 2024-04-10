<div>
    <h1>
        Title: {{ $title }}
    </h1>
    <label>
        <input
            wire:model="title"
            type="text"
        >
    </label>
    <br>
    <br>
    <q>
        A good traveler has no fixed plans and is not intent upon arriving.
    </q>
    <br>
    <p>
        Customer details: {{ $customer->first_name }}
    </p>
    <p>
        time: {{ time() }}
    </p>
    <button wire:click.prevent="updateMe">
        Update Me
    </button>
</div>
