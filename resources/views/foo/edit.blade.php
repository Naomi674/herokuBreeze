<div class="content">
    <p>
    <form action="{{ route('foos.update',$foo) }}" method="POST">
        @csrf
        @method('PUT')
        <strong>Name</strong><br/><input type="text" name="name"
                                         id="name" value="{{ $foo->name }}"><br/>
        @error('name')
        <p>{{ $message }}</p>
        @enderror
        <strong>Description</strong><br/><input type="text" name="description"
                                           id="description" value="{{ $foo->wombat }}"><br/>
        @error('description')
        <p>{{ $message }}</p>
        @enderror
        <button type="submit">Submit</button>
    </form>
    <form method="POST" action="{{ route('foos.destroy', $foo) }}">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE!!!!</button>
    </form>
    </p>
</div>
