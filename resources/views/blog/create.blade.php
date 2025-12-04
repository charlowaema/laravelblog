<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>

<h1>Create New Post</h1>

<form action="/blog" method="POST">
    @csrf
    <label>Title:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Content:</label><br>
    <textarea name="content" rows="5" required></textarea><br><br>

    <button type="submit">Save Post</button>
</form>

<a href="/blog">Back to Blog</a>

</body>
</html>
