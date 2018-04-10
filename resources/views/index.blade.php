@extends('default')

@section('title', 'Skype_BBS')

@section('content')
<p>記事一覧</p>
        <dl>
            @forelse ($users as $user)
            <dt>
                <p>name:{{ $user->name }}</p>
                <p>skype:{{ $user->skype }}</p>
            </dt>
            <dd>
                <ul>
                    @foreach ( $tags as $tag )
                    @if ($tag->entry_id === $user->id)
                    <li>{{ $tag->tag }}</li>
                    @endif
                    @endforeach
                </ul>
                <p>title: {{ $user->title }}</p>
                <p>body: {{ $user->body }}</p>
            </dd>
            @empty
            <p>まだ投稿はありません。</p>
            @endforelse
        </dl>
@endsection
