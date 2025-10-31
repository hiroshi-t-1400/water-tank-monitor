import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            // ビルドするフロントエンドのエントリーポイントを指定します
            input: ['resources/css/app.css', 'resources/js/app.js'],
            // 開発サーバー起動時のHMRを適切に動作させるための設定
            refresh: true,
        }),
        tailwindcss(),
    ],
    // Docker環境でHMRを有効にするための設定（重要）
    server: {
        // HRMプロキシ設定
        hmr: {
            // 外部からアクセスできるホスト名を設定
            host: "192.168.11.20",
            // 必要であればポートも指定、デフォルト値なので今回はコメントアウト
            // port: 5173
        },
        watch: {
            usePolling: true,
        },
        // viteにアクセスできなくなるので開発環境ではすべてのアクセスにtrueを返す
        host: true,
    }
});
