<!DOCTYPE html>
<html>
<head>
    <title>Show Post</title>
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <a href="{{ route('posts.index') }}">Back</a>
</body>
</html>
