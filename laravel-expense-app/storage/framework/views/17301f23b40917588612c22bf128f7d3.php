<link rel="stylesheet" href="/css/style.css">

<h1>経費の編集</h1>

<div class="form-container">
    <form action="<?php echo e(route('expenses.update', $expense->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label>タイトル：</label>
            <input type="text" name="title" value="<?php echo e($expense->title); ?>" required>
        </div>

        <div class="form-group">
            <label>金額：</label>
            <input type="number" name="amount" value="<?php echo e($expense->amount); ?>" required>
        </div>

        <div class="form-group">
            <label>カテゴリ：</label>
            <input type="text" name="category" value="<?php echo e($expense->category); ?>">
        </div>

        <div class="form-group">
            <label>日付：</label>
            <input type="date" name="date" value="<?php echo e($expense->date); ?>">
        </div>

        <div class="form-group">
            <label>備考：</label>
            <textarea name="note" rows="4"><?php echo e($expense->note); ?></textarea>
        </div>

        <button type="submit" class="submit-btn">更新する</button>
    </form>
</div>

<a href="<?php echo e(route('expenses.index')); ?>" class="back-link">← 一覧に戻る</a>
<?php /**PATH C:\Users\shoko\Desktop\プログラミング学習\LaravelApps\expenseApp\resources\views/expenses/edit.blade.php ENDPATH**/ ?>