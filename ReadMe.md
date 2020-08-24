# 概要

読んだ本の感想を共有することができるサービス。

## URL

https://www.awsstudyexample.com/  
 - ログインページよりテストユーザーとしてかんたんログインが可能です。

## 機能一覧

- 記事投稿、編集、削除機能  
- ユーザー登録、ログイン、ログアウト機能  
- ユーザー情報編集機能  
- パスワード変更、ユーザー削除機能  
- 画像アップロード機能(AWS の S3 に保存)  
- ページネーション機能  
- 記事に対するコメント機能  
- いいね機能(Vue.js)  
- ユーザーフォロー機能(Vue.js)  
- かんたん記事登録機能(Google Books API を使用)  
- テストユーザーログイン機能

## 使用技術

* PHP 7.2.31 Laravel 7.9.2  
* Vue.js 2.6.11  
* Bootstrap4  
* MySQL  
* AWS    
  - EC2 へデプロイ  
  - Route53 で DNS レコードを管理  
  - ACM で SSL 証明書を管理、ALB で使用  
* Docker
