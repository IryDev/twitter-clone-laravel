/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                sm: "480px",
                md: "768px",
                lg: "1000px",
                xl: "1260px",
            },
            colors: {
                black: "#000",
                brandBackground: "#1d9bf020",
                brandColor: "d9d9d9",
                itemBackground: "#d9d9d920",
                primary: "#fff",
                secondary: "#6e767d",
                white: "#fff",
                tweetBackground: "#1d9bf0",
            },
        },
    },
    plugins: [],
};
