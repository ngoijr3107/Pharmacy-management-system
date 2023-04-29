const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
        },

        pagination: theme => ({
            // Customize the color only. (optional)
            color: theme('colors.teal.600'),

            // Customize styling using @apply. (optional)
            wrapper: 'flex justify-center list-reset',

            // Customize styling using CSS-in-JS. (optional)
            wrapper: {
                'display': 'flex',
                'justify-items': 'center',
                '@apply list-reset': {},
            },
        })
    },

    variants: {
        extend: {
            opacity: ["disabled"],
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("tailwindcss-plugins/pagination"),
    ],
};
