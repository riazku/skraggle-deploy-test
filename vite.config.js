import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'dist', // 👈 Add this line
        emptyOutDir: true,
        manifest: true,
        rollupOptions: {
            input: 'resources/js/app.js', // or your main entry point
        },
    },
});
