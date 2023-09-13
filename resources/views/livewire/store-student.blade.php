<div>
    <h2>Store Student Data</h2>

    <form action="#" wire:submit.prevent="saveData">
        <div class="">
            <label for="name">Name</label>
            <input type="text" name="name" wire:model="name" />
        </div>
        <div class="">
            <label for="email">Email</label>
            <input type="email" name="email" wire:model="email" />
        </div>
        <div class="">
            <label for="image">Image</label>
            <input type="file" name="image" wire:model="image" />
        </div>
        <div class="">
            <button>Submit</button>
        </div>
    </form>
</div>
