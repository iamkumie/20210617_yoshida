@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<form action="/todo/create" method="post" class="flex between mb-30">
  @csrf
  <input type="text" name="content" class="input-add" value="{{old('content')}}">
  <input type="submit" class="button-add" value="追加">
</form>