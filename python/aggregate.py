import pandas as pd

# 入力ファイル
df = pd.read_csv("input.csv")

# 日付をdatetime型に変換
df["date"] = pd.to_datetime(df["date"])

# 月列を追加
df["month"] = df["date"].dt.to_period("M")

# 月別売上
monthly = df.groupby("month")["amount"].sum().reset_index()

# 担当者別売上
staff = df.groupby("staff")["amount"].sum().reset_index()

# 商品別売上
product = df.groupby("product")["amount"].sum().reset_index()

# 出力
monthly.to_csv("monthly_sales.csv", index=False)
staff.to_csv("staff_sales.csv", index=False)
product.to_csv("product_sales.csv", index=False)

print("集計が完了しました！")
