<h1>Danh sách bài viết</h1>

<a href="/posts/create">Thêm bài viết</a>
<hr>

@foreach($posts as $post)
    <h3>
        <a href="/posts/{{ $post->id }}">
            {{ $post->title }}
        </a>
    </h3>
@endforeach