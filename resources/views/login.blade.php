<div>
<form method="post" action="{{ route('login') }}">

    @csrf


    <input type="text" name="username" id="username" value="{{ old('username') }}">
    <input type="password" name="password" id="password">

    <button type="submit">Enviar</button>

</form>

</div>
