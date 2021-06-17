  <td>
    <form action="/todo/delete" method="post">
      @csrf
      <input type="hidden" name="id" value="{{ $item->id }}">
      <input type="hidden" name="content" value="{{ $item->content }}">
      <button class="button-delete">削除</button>
    </form>
  </td>