<ul>
@foreach($users as $user)
   <li style="display: flex; gap: 1em">
       <a href="/users/{{ $user->id }}">
           {{ $user->name }}
       </a>
       <a href="{{ route('users.show', $user->id) }}">
           {{ $user->name }}
       </a>
   </li>
@endforeach
</ul>

<div>
    <a href="{{ route('categoria.detail-page', ['mallorca', 'tiempo-20-agosto']) }}">
        Ver la noticia del tiempo de la categoría Mallorca
    </a>
</div>
