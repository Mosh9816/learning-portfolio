# 顧客管理アプリ（CRM）

このアプリは、営業活動で必要となる **顧客情報・ステータス・次回アクション日** を一元管理できる  
シンプルで実務的な CRM（顧客管理システム）です。

営業の「抜け漏れ防止」「案件状況の可視化」「日々の業務効率化」を目的として開発しました。

---

## 🚀 主な機能

### ■ 顧客管理
- 顧客一覧表示
- 顧客の新規登録 / 編集 / 削除
- 顧客詳細画面（メモ・ステータス・次回アクション日を個別に更新可能）

### ■ ダッシュボード
- 今日のアクション数
- 期限切れ案件数（今日より前のアクション日）
- ステータス別件数（見込み / 商談中 / 成約 など）

### ■ 検索・絞り込み
- 名前・メール・ステータスで検索（部分一致）
- ステータス別フィルタ（見込み / 商談中 / 成約 など）
- 検索・絞り込み後のみ「一覧に戻る」ボタンを表示

### ■ UI/UX
- ステータスを色分けして視認性を向上
- 次回アクション日が **今日・過去の場合は赤字で強調**
- Bootstrap によるシンプルで見やすい UI

---

## 🖼 画面キャプチャ
- 顧客一覧
  <img width="1872" height="430" alt="image" src="https://github.com/user-attachments/assets/a03fd43a-ec2b-46db-806f-878cb16464fc" />
 
- ダッシュボード
  <img width="1885" height="726" alt="image" src="https://github.com/user-attachments/assets/ad25fd21-3ee5-4754-a392-78ba2a687023" />

- 顧客詳細
  <img width="1857" height="698" alt="image" src="https://github.com/user-attachments/assets/7da10a11-b3e0-4064-958f-f32d4b40499e" />
  <img width="1849" height="546" alt="image" src="https://github.com/user-attachments/assets/b8c64bad-0b7c-4f50-acff-553dbed15ef1" />


- 編集画面  
  <img width="1860" height="648" alt="image" src="https://github.com/user-attachments/assets/60fbf01e-74e5-455b-9c50-26682b37931e" />

---

## 💡 工夫したポイント

- **実務で使われる CRM を意識して設計**
  - ステータス管理、次回アクション日、メモなど営業に必要な項目を厳選
- **次回アクション日の強調表示**
  - 今日・過去の日付を赤字にし、対応漏れを防止
- **検索とステータス絞り込みを両立**
  - 直感的に使える UI を意識
- **メモは詳細画面から直接更新可能**
  - 編集画面に行かなくても素早く更新できる
- **コードのシンプルさを重視**
  - Controller / Repository / HTML の役割を明確に分離
  - 読みやすく保守しやすい構成にした

---

## 🛠 使用技術

- Java 17  
- Spring Boot 3  
- Spring MVC  
- Spring Data JPA  
- Thymeleaf  
- H2 Database  
- Bootstrap 5  

---

## 📦 セットアップ方法

```bash
# リポジトリを clone
git clone <your-repo-url>

# プロジェクトを起動（Spring Boot）
./mvnw spring-boot:run
```

ブラウザで以下にアクセス：
http://localhost:8080


---

## 🔮 今後の改善案
ページネーション（件数が増えた時の対策）

並び替え機能（名前順・次回アクション日順）

顧客の担当者管理

ファイル添付機能

ログイン機能（Spring Security）

---

## 📘 ライセンス
このプロジェクトは自由に利用・改変できます。
