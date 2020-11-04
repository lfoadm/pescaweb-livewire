<div>
    Show Fishes

    <h1> {{ $content }}</h1>

    <form action="" method="post" wire:submit.prevent="create">
        <input type="text" name="content" id="content" wire:model="content">
        <button type="submit">Criando Registro</button>
    </form>

    <hr>

    @foreach ($fishes as $fish)
        {{ $fish->user->name }} ------ {{ $fish->content }} <br>
    @endforeach
</div>
