# 📊Python Automation Tools  
Excel/CSV 自動集計ツール

## 📘概要
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

## 🧪使用技術
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
