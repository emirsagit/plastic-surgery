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
        
/* purgecss start ignore */
        borderColor: (theme) => ({
            ...theme("colors"),
            DEFAULT: theme("colors.gray.300", "currentColor"),
            primary: "#de9051",
        }),

        gradientColorStops: (theme) => ({
            ...theme("colors"),
            navbar: '#2a1653'
        }),

        backgroundColor: (theme) => ({
            ...theme("colors"),
            navbar: '#2a1653'
        }),
    },
/* purgecss end ignore */

    plugins: [
        require('@tailwindcss/aspect-ratio'),
        // ...
      ],

    variants: {
        extend: {
            opacity: ["disabled"],
        },
    },
};
