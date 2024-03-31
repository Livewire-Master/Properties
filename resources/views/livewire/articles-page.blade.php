<div>
    <h1>
        Articles
    </h1>
    <p>
        {{ $description }}
    </p>
    <hr>
    @if($isTimerOn)
        <p wire:poll.1000ms>
            Timer is <strong>ON</strong>
            <br>
            time is: {{ time() }}
        </p>
    @else
        <p>
            Timer is <strong>OFF</strong>
        </p>
    @endif
</div>
