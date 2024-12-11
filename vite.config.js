import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { globSync } from 'glob';

const $assets = globSync('{diepxuan,node_modules}/**/resources/{js,css}/app.{js,css}')
    .concat(globSync('resources/{js,css}/app.{js,css}'));

export default defineConfig({
    plugins: [
        laravel({
            input: $assets,
            refresh: true,
        }),
    ],
});
