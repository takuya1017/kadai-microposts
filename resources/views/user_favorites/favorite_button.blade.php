{{--
ログインユーザーがその投稿をお気に入りに入れているかどうか
Auth::user()
is_favorites()
$micropost->id
@if
--}}
　　@if (Auth::user()->is_favorites($micropost->id))
　　　　{!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
　　　　{!! Form::submit('Unfavorite', ['class' => "btn btn-secondary btn-sm"]) !!}
　　　　{!! Form::close() !!}
　　@else
　　　　{!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
　　　　{!! Form::submit('favorite', ['class' => "btn btn-primary btn-sm"]) !!}
　　　　{!! Form::close() !!}
　　@endif
