import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            // ビルドするフロントエンドのエントリーポイントを指定します。イミフ
            input: ['resources/css/app.css', 'resources/js/app.js'],
            // 開発サーバー起動時のHMRを適切に動作させるための設定
            refresh: true,
        }),
        tailwindcss(),
    ],
    // ★Docker環境でHMRを有効にするための設定（重要）
    server: {
        // HMRプロキシ設定
        hmr: {
            // host: 'localhost', // 外部からアクセスできるホスト名
            host: '192.168.11.20',
            // port: 5173, // 必要であればポートも指定
        },
        // Dockerホストへのバインド設定
        watch: {
            usePolling: true,
        },
        // Docker desktop for windows ,WSLの環境のためかwebsocket通信の段階でポート接続が上手く解決できないっぽい
        // ホストからのアクセスを全て許可として解決、本番サーバーではセキュリティ面で不可
        host: true,
    }
});
