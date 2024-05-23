// import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */

module.exports = {
    presets: [
        require("./vendor/wireui/wireui/tailwind.config.js")
    ],
    content: [
        "./resources/**/*.blade.php",

        "./vendor/vildanbina/livewire-wizard/resources/views/*.blade.php",
        "./vendor/wireui/wireui/resources/**/*.blade.php",
        "./vendor/wireui/wireui/ts/**/*.ts",
        "./vendor/wireui/wireui/src/View/**/*.php"
    ],
    theme: {
        extend: {
            colors: {
                primary: colors.blue,
            },
            fontFamily: {
                poppins: ["Poppins", "san-serif"],
            },
        },
    },
    plugins: [
        forms,
    ],
};
