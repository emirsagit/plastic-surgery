const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: [
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
        },

        borderColor: (theme) => ({
            ...theme("colors"),
            DEFAULT: theme("colors.gray.300", "currentColor"),

            primary: "#de9051",
        }),

        backgroundColor: (theme) => ({
            ...theme("colors"),
            primary: "#de9051",
        }),
    },

    variants: {
        extend: {
            opacity: ["disabled"],
        },
    },
};
