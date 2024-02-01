/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/views/user/template.blade.php",
        "./resources/views/user/login.blade.php",
        "./resources/views/user/regist.blade.php",
        "./resources/views/user/partials/navbar.blade.php",
    ],
    theme: {
        extend: {
            color: {
                "main-red": "#DA0037",
            },
        },
    },
    plugins: [],
};
