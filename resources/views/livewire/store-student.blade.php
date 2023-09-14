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

    <table border="1px">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>

        
        @foreach ($student as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td class="">
                    <img src="{{ Storage::url($student->image) }}" height="200" width="300" alt="">
                </td>
                <td>
                    <button style="cursor: pointer" wire:click="deleteStudent({{ $student->id }})">Delete</button>
                </td>
            </tr>
        @endforeach
    </table>
</div>
