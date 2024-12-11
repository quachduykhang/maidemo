import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            colors: {
                "weather-prmary":"#a16207",
                "weather-secondary":"#a16207",
                brown: {
                    500: '#8B4513',
                    800: '#402010',
                  },
            },
           
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                mono: ['ui-monospace', 'SFMono-Regular', ...defaultTheme.fontFamily.mono],
               
            },
            container:{
                padding:"2rem",
                center:true,
            },
            screens: {
                sm:"640px",
                md:"768",
            },
        },
    },
  

    plugins: [forms],
};

