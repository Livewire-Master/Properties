<div>
    <form wire:submit.prevent="add">
        <label for="input-todo">
            Todo<span style="color: red">*</span>
        </label>
        <br>
        <input
            wire:model="title"
            id="input-todo"
            name="todo"
            type="text"
            placeholder="e.g: go shopping..."
        >

        <button type="submit">
            ADD
        </button>

        <button type="button" wire:click.prevent="resetTasks">
            RESET
        </button>
    </form>
    <hr>
    @if(count($tasks) > 0)
        <h4>
            Your Tasks:
        </h4>
        <ul>
            @foreach($tasks as $task)
                <li wire:key="task-{{ $loop->index }}">
                    #{{ $loop->iteration }} {{ $task }}
                </li>
            @endforeach
        </ul>
    @endif
</div>
