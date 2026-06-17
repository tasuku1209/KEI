# 非同期意思決定プラットフォーム

---

## アプリ概要
「会議は一同に介すもの」という概念を変え、会議メンバーがそれぞれのタイミングで会議に参画するため、非同期で意思決定を行えるプラットフォームです。
「会議はしたいがメンバーの都合が合わない」、「意見はあるが会議では活発な議論にならない」、そんな場合に活用いただきたいプラットフォームです。

---

## 機能一覧
- 組織（作成、更新、削除）
- 組織ユーザー（招待、参加、脱退）
- 組織ユーザーロール（設定、更新）
- プロジェクト（作成、更新、削除）
- プロジェクトユーザー（招待、参加、脱退）
- 議題（作成、公開、締切、クローズ）
- コメント（投稿、編集、削除、返信）
- 投票（作成、投票、集計）※投票は議題に紐づく任意機能である
- 通知（通知作成）
- 既読
- 監査ログ

---

## ER図
（保留）

---
## 環境構築手順
### 前提環境
- Docker Desktop
- Git
### リポジトリのクローン
```bash
git clone https://github.com/tasuku1209/KEI.git
```
### プロジェクトリポジトリへ移動
```bash
cd KEI
```
### .envファイル作成
```bash
cp .env.example .env
```
### Composer install
```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```
### env設定について
Laravel Sailを使用しているため、以下のように設定してください。
```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password
```
### Sail起動
```bash
./vendor/bin/sail up -d
```
### key生成
```bash
./vendor/bin/sail artisan key:generate
```
### migrate
```bash
./vendor/bin/sail artisan migrate:fresh --seed
```
### NPM依存パッケージのインストール
```bash
./vendor/bin/sail npm install
```
### Vite開発サーバーの起動
```bash
./vendor/bin/sail npm run dev
```
### アクセスURL
http://localhost

---

## 使用技術
- PHP 8.x
- Laravel 10.x
- MyAQL　8.0
- Nginx
- Docker
- Laravel Sail
- PHPUnit

---

## APIエンドポイント一覧
| メソッド | パス | 概要 |
|---|---|---|
（保留）

---

## 開発環境URL
http://localhost

---

## 作成者
- 高津　丞