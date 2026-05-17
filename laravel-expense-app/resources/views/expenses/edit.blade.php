<link rel="stylesheet" href="/css/style.css">

<h1>経費の編集</h1>

<div class="form-container">
    <form action="{{ route('expenses.update', $expense->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>タイトル：</label>
            <input type="text" name="title" value="{{ $expense->title }}" required>
        </div>

        <div class="form-group">
            <label>金額：</label>
            <input type="number" name="amount" value="{{ $expense->amount }}" required>
        </div>

        <div class="form-group">
            <label>カテゴリ：</label>
            <input type="text" name="category" value="{{ $expense->category }}">
        </div>

        <div class="form-group">
            <label>日付：</label>
            <input type="date" name="date" value="{{ $expense->date }}">
        </div>

        <div class="form-group">
            <label>備考：</label>
            <textarea name="note" rows="4">{{ $expense->note }}</textarea>
        </div>

        <button type="submit" class="submit-btn">更新する</button>
    </form>
</div>

<a href="{{ route('expenses.index') }}" class="back-link">← 一覧に戻る</a>
