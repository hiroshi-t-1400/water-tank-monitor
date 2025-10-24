# PHP 8.4の公式イメージをベースに使用（PHP-FPM版）。Alpineは軽量なディストリビューションです。
FROM php:8.4-fpm-alpine

# システムパッケージの更新と、必要な依存関係のインストール
RUN apk update && apk add --no-cache \
    git \
    curl \
    # Laravelに必要な拡張機能をビルドするための依存パッケージ
    libxml2-dev \
    libzip-dev \
    libpng-dev \
    oniguruma-dev \
    $PHPIZE_DEPS \
    # データベース関連
    mysql-client \
    # よく使われるユーティリティ
    bash

# Laravelに必要なPHP拡張機能の有効化
# pdo_mysql: データベース接続
# opcache: パフォーマンス向上
# bcmath, exif, pcntl, mbstring, gd: Laravelや画像処理などで一般的に必要
RUN docker-php-ext-install -j$(nproc) \
    pdo_mysql \
    opcache \
    bcmath \
    exif \
    pcntl \
    mbstring \
    gd \
    zip

# Composerのインストール
# 最新のComposerイメージから実行ファイルをコピー
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# アプリケーションの作業ディレクトリを設定
WORKDIR /var/www/html/src

# rootでインストール許可
ENV COMPOSER_ALLON_SUPERUSER 1

# FPMの設定はデフォルトで十分ですが、必要に応じてホストからphp.iniをコピーする場所です。
# 例: COPY ./docker/php/custom.ini /usr/local/etc/php/conf.d/
