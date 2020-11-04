<div>
    Show Fishes

    <h1> {{ $content }}</h1>

    <input type="text" name="content" id="content" wire:model="content">

    <hr>

    @foreach ($fishes as $fish)
        {{ $fish->user->name }} ------ {{ $fish->content }} <br>
    @endforeach
</div>
