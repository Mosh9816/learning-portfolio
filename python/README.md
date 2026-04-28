# 📊Excel/CSV 自動集計ツール  
売上データ（CSV）を読み込み、以下の集計を自動で行う Python ツールです。
- 月別売上
- 担当者別売上
- 商品別売上

`input.csv` を置いてスクリプトを実行するだけで、3種類の集計結果が自動生成されます。

---

## 🛠️使用方法（VS Code）

1. このフォルダを VS Code で開く  
2. 仮想環境を有効化  
.venv\Scripts\activate

3. 必要なライブラリをインストール  
uv pip install pandas

4. スクリプトを実行  
python aggregate.py

---

## 📤出力されるファイル

- `monthly_sales.csv`（月別売上）
- `staff_sales.csv`（担当者別売上）
- `product_sales.csv`（商品別売上）

---

## 🖼 画面キャプチャ
- `input.csv`
  <img width="1920" height="1020" alt="image" src="https://github.com/user-attachments/assets/4768787e-830c-4548-8289-a75109138031" />
  
- `monthly_sales.csv`（月別売上）
  <img width="1920" height="1020" alt="image" src="https://github.com/user-attachments/assets/863b80a0-bfb6-4635-b132-3cd099797bd0" />

- `staff_sales.csv`（担当者別売上）
  <img width="1920" height="1020" alt="image" src="https://github.com/user-attachments/assets/063f1f4c-27a3-4110-b84c-e78dc712d4ac" />

- `product_sales.csv`（商品別売上）
  <img width="1920" height="1020" alt="image" src="https://github.com/user-attachments/assets/bf4370b6-a11f-4ec0-9235-bc294f1f3068" />

---

## 🛠使用技術
- Python
- pandas

---

## 📁ファイル構成
```
portfolio/
└── python/
├── aggregate.py
├── input.csv
├── monthly_sales.csv
├── staff_sales.csv
├── product_sales.csv
└── README.md
```
