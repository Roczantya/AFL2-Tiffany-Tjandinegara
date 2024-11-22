// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/css/style.css', 'resources/js/App.js'],
      refresh: true,
    }),
  ],
});