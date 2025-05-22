<x-layout>
    <article>
        <article>
            <h1>
                {!! $post->title !!}
            </h1>
            <div>
                {!! $post->body !!}
            </div>
        </article>
    </article>

    <a href="/">Go back</a>
</x-layout>
