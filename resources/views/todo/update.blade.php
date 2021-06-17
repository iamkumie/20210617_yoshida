<td>{{ $item->created_at}}</td>
<form action="/todo/update" method="post">
  @csrf
  <td>
    <input type="hidden" name="id" value="{{ $item->id }}">
    <input type="text" name="content" class="input-update" value="{{ $item->content }}">
  </td>
  <td>
    <button class="button-update">更新</button>
  </td>
</form>