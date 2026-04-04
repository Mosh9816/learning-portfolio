# Python Automation Tools

## Excel/CSV 自動集計ツール

### 概要
売上データ（CSV）を読み込み、以下の集計を自動で行うツールです。

- 月別売上
- 担当者別売上
- 商品別売上

### 使用方法
1. `input.csv` を同じフォルダに置く
2. `aggregate.py` を実行する
3. 以下の3つのファイルが出力されます
   - `monthly_sales.csv`
   - `staff_sales.csv`
   - `product_sales.csv`

### 使用技術
- Python
- pandas

### ファイル構成
```
portfolio/
└── python/
├── input.csv
├── aggregate.py
└── README.md
```
