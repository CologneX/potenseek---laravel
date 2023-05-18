const daisyui = require("daisyui");
const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#47D3FF",

                    secondary: "#3F3D55",

                    accent: "#2F2637",

                    neutral: "#ffffff",

                    "base-100": "#47D3FF",

                    info: "#21B2DE",

                    success: "#23AF93",

                    warning: "#CC8D0F",

                    error: "#F46773",
                },
            },
        ],
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("daisyui"),
    ],
};
