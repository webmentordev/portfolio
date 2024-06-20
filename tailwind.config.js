import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                "710px": {
                  "max": "710px"
                },
                "530px": {
                  "max": "530px"
                },
                "500px": {
                  "max": "500px"
                },
                "470px": {
                  "max": "470px"
                },
                "410px": {
                  "max": "410px"
                }
            }
        },
    },

    plugins: [forms],
};
