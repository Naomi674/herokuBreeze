<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-full">
                <div class="content">

                    <div class="has-text-right">
                        <a href="{{route('foos.create')}}" class="button is-primary">Add a new foo...</a>
                    </div>

                    <div class="column is-12">
                        @foreach($foos as $foo)
                            <div class="panel" style="background-color: {{$foo->wombat ? '#1aa1ff' : 'white'}}">
                                <a class="panel-block" href="{{ route('foos.show', $foo) }}">
                                    <article class="media">
                                        <div class="media-content">
                                            <div class="content">
                                                <p>

                                                    <strong>Wombat: </strong>{{ $foo->name }}<br/>
                                                    <strong>Thud: </strong>{{ $foo->description }}<br/>

                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                </a>
                                <a href="{{ route('foos.edit',$foo) }}">Edit</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
</section>
