# docker-handson
\
### ディレクトリ構成
docker-handson # プロジェクトルート \
├─ infra/ \
│   ├─ nginx/ \
│   │   └─ default.conf \
│   └─ php/ \
│       ├─ Dockerfile \
│       └─ php.ini # 今回はナシ \
├─ src/ # Laravel本体 \
├─ .env \
├─ docker-compose.yml \
└─ README.md \
\

### Laravelのインストール
"""
バージョン指定なし、srcディレクトリにインストール \
$ docker compose exec src composer create-project --prefer-dist laravel/laravel ./ 
キーの生成
$ docker compose exec src php artisan key:generate
"""
\
##### アクセス権限（所有者）の設定

"""
Laravelをインストール後に以下をsrcコンテナで実行する、外部から実行しても良い
chown -R appuser:appgroup /var/www/src && \
chmod -R 775 /var/www/src/storage /var/www/src/bootstrap/cache
"""
