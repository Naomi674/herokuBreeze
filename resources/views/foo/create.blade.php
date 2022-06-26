<div class="content">
    <p>
    <form action="{{ route('foos.store') }}" method="POST">
        @csrf
        <strong>Name</strong><br/><input type="text" name="name" value="{{ old('name') }}"
                                         id="name"><br/>
        @error('name')
        <p>{{ $message }}</p>
        @enderror
        <strong>description</strong><br/><input type="text" name="description" value="{{ old('description') }}"
                                           id="description"><br/>
        @error('description')
        <p>{{ $message }}</p>
        @enderror
        <button type="submit">Submit</button>
    </form>
    </p>
</div>
