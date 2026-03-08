/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                display: ['"Fraunces"', 'serif'],
                body: ['"Space Grotesk"', 'sans-serif'],
            },
            colors: {
                'deep-ocean': '#05161A',
                turquoise: '#00A896',
                azure: '#028090',
                'nike-volt': '#CEFF00',
                paper: '#F0F5F5',
            },
        },
    },
    plugins: [],
};
