<!DOCTYPE html> 
<html>
<head>
    <title></title>
</html>
<body>
    <h1>Posts</h1>
    <a href="{{ route('postingan.create') }}">Create Post</a>
    <ul>
        @foreach ($postingans as $postingan)
            <li>
                <a href="{{ route('postingan.show', $postingan->id) }}">{{ $postingan->title }}</a>
                <a href="{{ route('postingan.edit', $postingan->id) }}">Edit</a>
                <form action="{{ route('postingan.destroy', $postingan->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
