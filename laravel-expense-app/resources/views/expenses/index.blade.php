<link rel="stylesheet" href="/css/style.css">

<h1>経費一覧</h1>

<a href="{{ route('expenses.create') }}">＋ 新規登録</a>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>タイトル</th>
        <th>金額</th>
        <th>カテゴリ</th>
        <th>日付</th>
        <th>ステータス</th>
        <th>操作</th>
    </tr>

    @foreach ($expenses as $expense)
    <tr>
        <td>{{ $expense->id }}</td>
        <td>{{ $expense->title }}</td>
        <td>{{ $expense->amount }}</td>
        <td>{{ $expense->category }}</td>
        <td>{{ $expense->date }}</td>

        <!-- ★ ステータスを日本語に変換 -->
        <td>
            @if ($expense->status === 'pending')
                未承認
            @elseif ($expense->status === 'approved')
                承認済み
            @else
                不明
            @endif
        </td>

        <td>
            <!-- ★ 編集ボタン -->
            <form action="/expenses/{{ $expense->id }}/edit" method="GET" style="display:inline;">
                <button type="submit">編集</button>
            </form>

            <form action="{{ route('expenses.approve', $expense->id) }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit">承認</button>
            </form>

            <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">削除</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
