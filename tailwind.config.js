const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                skcolor: {
                    DEFAULT: '#6087B1',
                    dark: '#517dad'
                }
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            display: ['group-hover'],
            borderWidth: ['group-hover'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
