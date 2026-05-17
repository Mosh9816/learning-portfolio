<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    // 経費一覧
    public function index()
    {
        $expenses = Expense::orderBy('date', 'desc')->get();
        return view('expenses.index', compact('expenses'));
    }

    // 新規登録フォーム
    public function create()
    {
        return view('expenses.create');
    }

    // 登録処理
    public function store(Request $request)
    {
        Expense::create($request->all());
        return redirect()->route('expenses.index');
    }

    // ★ 編集フォーム
    public function edit($id)
    {
        $expense = Expense::findOrFail($id);
        return view('expenses.edit', compact('expense'));
    }

    // ★ 更新処理（今回追加）
    public function update(Request $request, $id)
    {
        $expense = Expense::findOrFail($id);
        $expense->update($request->all());

        return redirect()->route('expenses.index');
    }

    // 承認処理
    public function approve($id)
    {
        $expense = Expense::findOrFail($id);
        $expense->status = 'approved';
        $expense->save();

        return redirect()->route('expenses.index');
    }

    // 削除処理
    public function destroy($id)
    {
        Expense::findOrFail($id)->delete();
        return redirect()->route('expenses.index');
    }
}
