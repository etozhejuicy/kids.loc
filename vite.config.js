import autoprefixer from 'autoprefixer';
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/scss/pages/index.scss',
                'resources/scss/pages/posts/index.scss',
                'resources/scss/pages/posts/show.scss',

                'resources/js/app.js',
                'resources/js/pages/index.js',
                'resources/scss/pages/posts/index.js',
                'resources/scss/pages/posts/show.js',
            ],
            postcss: {
                plugins: [
                    autoprefixer(),
                ]
            },
            publicDirectory: 'public_html',
            refresh: true,
        }),
    ],
});
