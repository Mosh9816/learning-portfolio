<link rel="stylesheet" href="/css/style.css">

<h1>経費の新規登録</h1>

<div class="form-container">
    <form action="<?php echo e(route('expenses.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="form-group">
            <label>タイトル：</label>
            <input type="text" name="title" required>
        </div>

        <div class="form-group">
            <label>金額：</label>
            <input type="number" name="amount" required>
        </div>

        <div class="form-group">
            <label>カテゴリ：</label>
            <input type="text" name="category">
        </div>

        <div class="form-group">
            <label>日付：</label>
            <input type="date" name="date">
        </div>

        <div class="form-group">
            <label>備考：</label>
            <textarea name="note" rows="4"></textarea>
        </div>

        <button type="submit" class="submit-btn">登録する</button>
    </form>
</div>

<a href="<?php echo e(route('expenses.index')); ?>" class="back-link">← 一覧に戻る</a>
<?php /**PATH C:\Users\shoko\Desktop\プログラミング学習\LaravelApps\expenseApp\resources\views/expenses/create.blade.php ENDPATH**/ ?>