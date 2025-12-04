<!DOCTYPE html>
<html>
<head>
    <title>Blog Posts</title>
</head>
<body>

<h1>Blog Posts</h1>

<a href="/create">Create New Post</a>

@if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif

<ul>
    @foreach ($posts as $post)
        <li>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
        </li>
    @endforeach
</ul>

</body>
</html>
