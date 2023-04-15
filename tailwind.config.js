module.exports = {
    darkMode: "class",
    content: ["./resources/**/*.blade.php", "./resources/**/*.js", "./resources/**/*.vue"],
    theme: {
        fontFamily: {
            sans: ["Inter"],
        },
        extend: {
            colors: {
                "app-black": "#1e1e24",
                "app-white": "#f8f9fa",
                "app-red": "#e54b4b",
                "app-pink": "#ffa987",
            },
        },
    },
    plugins: [
        require("@tailwindcss/forms")({
            strategy: "class", // only generate classes
        }),
    ],
};
