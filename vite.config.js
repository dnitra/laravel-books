import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import react from "@vitejs/plugin-react";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.scss",
                "resources/js/app.js",
                "resources/js/partners.jsx",
                "js/latest-books.jsx'",
            ],
            refresh: true,
        }),
        react(),
    ],
});
