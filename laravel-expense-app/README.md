# 経費管理アプリ（Expense Manager）

このアプリは、日々の業務で発生する **経費の登録・編集・承認・削除** を  
シンプルに管理できる Laravel 製の経費管理システムです。

「入力ミス防止」「承認フローの簡略化」「履歴の一元管理」を目的として開発しました。

---

## 🚀 主な機能

### ■ 経費管理（CRUD）
- 経費一覧表示（最新日付順）
- 経費の新規登録
- 経費の編集
- 経費の削除

### ■ 承認フロー
- ステータス：未承認 / 承認済み
- 一覧画面からワンクリックで承認可能

### ■ UI/UX
- CSS によるシンプルで見やすい UI
- 入力フォームはカード風デザインで視認性を向上
- ステータスは日本語表記（未承認 / 承認済み）

---

## 🖼 画面キャプチャ
- 経費一覧  
  <img width="1919" height="866" alt="image" src="https://github.com/user-attachments/assets/48fc5bc4-e3ca-4ff4-88ef-8c59ab15a745" />


- 新規登録画面  
  <img width="1919" height="873" alt="image" src="https://github.com/user-attachments/assets/15e79296-855c-463f-ba98-1f179bef5214" />


- 編集画面  
  <img width="1919" height="872" alt="image" src="https://github.com/user-attachments/assets/93bd02eb-5031-4ccd-966d-c65e65ce8665" />


---

## 💡 工夫したポイント

- **実務で使われる経費精算フローを意識**
  - ステータス管理（未承認 / 承認済み）
  - 日付・カテゴリ・備考など必要最低限の項目に絞って設計

- **UI の統一感**
  - 一覧とフォームで同じ CSS を使用
  - カード風フォームで入力しやすさを重視

- **コードのシンプルさ**
  - Controller / Model / View の役割を明確に分離
  - Laravel のリソース構造に沿った読みやすいコード

---

## 🛠 使用技術

- PHP 8  
- Laravel 10  
- SQLite  
- Blade  
- CSS（独自スタイル）

---

## 📦 セットアップ方法

```bash
# リポジトリを clone
git clone <your-repo-url>

# プロジェクトへ移動
cd laravel-expense-app

# 依存関係をインストール
composer install

# 環境ファイルを作成
cp .env.example .env

# アプリキー生成
php artisan key:generate

# SQLite DB 作成
touch database/database.sqlite

# マイグレーション実行
php artisan migrate

# 開発サーバー起動
php artisan serve
```

ブラウザで以下にアクセス：
http://127.0.0.1:8000/expenses

---

## 🔮 今後の改善案
- 領収書画像アップロード機能
- カテゴリのプルダウン化
- ページネーション
- 月別集計（ダッシュボード）
- ログイン機能（Laravel Breeze / Fortify）

---

## 📘 ライセンス
このプロジェクトは自由に利用・改変できます。


