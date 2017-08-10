<li class="media list-group-item p-4">
    <article class="d-flex w-100">
        <a class="font-weight-bold text-inherit ForestGreen" href="user">
            <img class="media-object d-flex align-self-start mr-3" src="{{ asset('images/no-thumb.png') }}">
        </a>
        <div class="media-body">
            <div class="mb-2">
                <time class="float-right small text-muted">6時間</time>
                <a class="text-inherit" href="user">
                    <strong>{{$tweet->user_id}}</strong>
                </a>
            </div>

            <p>
                {{ $tweet->body }}

            </p>
        </div>
    </article>
</li>
