const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'transparent': 'transparent',
                'current': 'currentColor',
                'black': colors.black,
                'white': colors.white,
                'gray': colors.coolGray,
                'gray-background': '#f7f8fc',
            },
            spacing: {
                70: '20.5rem',
                175: '70.75rem',
            },
            maxWidth: {
                custom: '77.5rem',
            },
            fontFamily: {
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
