@extends('layouts.app')

@section('content');
<table>
    <thead>
        <tr>
            <th>Post Title</th>
            <th>Post Author</th>
            <th>Post Category</th>
            <th>Tags</th>
        </tr>
    </thead>
    <tbody>

        @foreach($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->user->name }}</td>
            <td>{{ $post->category->title }}</td>
            <td>
                @foreach ($post->tags as $tag)
                {{ $tag->name }}
                @endforeach
            </td>
            <td>
                <a href="{{ route('posts.show', $post) }}">Details</a>
            </td>
            {{-- <td><a href="{{ route('posts.edit', $post) }}">Aggiorna</a></td> --}}
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
