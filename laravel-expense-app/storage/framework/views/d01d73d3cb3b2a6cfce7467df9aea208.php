<link rel="stylesheet" href="/css/style.css">

<h1>経費一覧</h1>

<a href="<?php echo e(route('expenses.create')); ?>">＋ 新規登録</a>

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

    <?php $__currentLoopData = $expenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($expense->id); ?></td>
        <td><?php echo e($expense->title); ?></td>
        <td><?php echo e($expense->amount); ?></td>
        <td><?php echo e($expense->category); ?></td>
        <td><?php echo e($expense->date); ?></td>

        <!-- ★ ステータスを日本語に変換 -->
        <td>
            <?php if($expense->status === 'pending'): ?>
                未承認
            <?php elseif($expense->status === 'approved'): ?>
                承認済み
            <?php else: ?>
                不明
            <?php endif; ?>
        </td>

        <td>
            <!-- ★ 編集ボタン -->
            <form action="/expenses/<?php echo e($expense->id); ?>/edit" method="GET" style="display:inline;">
                <button type="submit">編集</button>
            </form>

            <form action="<?php echo e(route('expenses.approve', $expense->id)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <button type="submit">承認</button>
            </form>

            <form action="<?php echo e(route('expenses.destroy', $expense->id)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit">削除</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php /**PATH C:\Users\shoko\Desktop\プログラミング学習\LaravelApps\expenseApp\resources\views/expenses/index.blade.php ENDPATH**/ ?>