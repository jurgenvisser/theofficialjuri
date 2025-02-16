import defaultTheme from 'tailwindcss/defaultTheme';
import { generateSafelist } from './resources/js/utils/selectors.js'; // Ensure the path is correct

const plugin = require('tailwindcss/plugin');

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    safelist: [// Add the class you want to safelist here
        ...generateSafelist(),
    ],
    theme: {
        extend: {
            fontFamily: {
                lexend: ['Lexend', 'sans-serif'],
                montserrat: ['Montserrat', 'sans-serif'],
                publicSans: ['Public Sans', 'sans-serif'],
                quicksand: ['Quicksand', 'sans-serif'],
            },
            colors: {
                colorPrimary: '#74A7D5', // Add colorPrimary as a custom color
                colorSecondary: '#D767A7', // Add colorSecondary as a custom color
            },
            backgroundImage: {
                'h-backdrop-1': "url('/public/images/backdrop/horizontal/h_backdrop_1.jpeg')",
                'h-backdrop-2': "url('/public/images/backdrop/horizontal/h_backdrop_2.jpeg')",

                'v-backdrop-1': "url('/public/images/backdrop/vertical/v_backdrop_1.jpeg')",
                'v-backdrop-2': "url('/public/images/backdrop/vertical/v_backdrop_2.jpeg')",

                'apple-music-color': "url('/public/images/icons/Apple_Music_Icon.svg')",
                'apple-music-black': "url('/public/images/icons/Apple_Music_Icon_blk.svg')",
                'apple-music-white': "url('/public/images/icons/Apple_Music_Icon_wht.svg')",
                'spotify-color': "url('/public/images/icons/Spotify_Logo_Green.png')",
                'spotify-black': "url('/public/images/icons/Spotify_Logo_Black.png')",
                'spotify-white': "url('/public/images/icons/Spotify_Logo_White.png')",
                'youtube-color': "url('/public/images/icons/youtube_red.svg')",
                'youtube-black': "url('/public/images/icons/youtube_black.svg')",
                'youtube-white': "url('/public/images/icons/youtube_white.svg')",
                'youtube-music-color': "url('/public/images/icons/ytmusic_icon.svg')",
                'youtube-music-black': "url('/public/images/icons/ytmusic_icon_black.svg')",
                'youtube-music-white': "url('/public/images/icons/ytmusic_icon_white.svg')",

                'instagram-color': "url('/public/images/icons/Instagram_Glyph_Gradient.svg')",
                'instagram-black': "url('/public/images/icons/Instagram_Glyph_Black.svg')",
                'instagram-white': "url('/public/images/icons/Instagram_Glyph_White.svg')",
                'threads-black': "url('/public/images/icons/threads-logo-black-square.svg')",
                'threads-white': "url('/public/images/icons/threads-logo-white-square.svg')",
                'x-black': "url('/public/images/icons/x_logo_black.svg')",
                'x-white': "url('/public/images/icons/x_logo_white.svg')",
                'facebook-color': "url('/public/images/icons/Facebook_Logo_Primary.png')",
                'facebook-white': "url('/public/images/icons/Facebook_Logo_Secondary.png')",
            },
        },
    },
    plugins: [
        plugin(function ({ addUtilities, theme }) {
            addUtilities(
                {
                    '.glowing-star::before': {
                        content: '""',
                        display: 'inline-block',
                        width: '1em',
                        height: '1em',
                        backgroundImage: "url('/public/images/emojis/glowing-star.png')",
                        backgroundSize: 'contain',
                        backgroundRepeat: 'no-repeat',
                        verticalAlign: 'middle',
                    },
                    '.musical-notes::before': {
                        content: '""',
                        display: 'inline-block',
                        width: '1em',
                        height: '1em',
                        backgroundImage: "url('/public/images/emojis/musical-notes.png')",
                        backgroundSize: 'contain',
                        backgroundRepeat: 'no-repeat',
                        verticalAlign: 'middle',
                    },
                    '.envelope-with-arrow::before': {
                        content: '""',
                        display: 'inline-block',
                        width: '1em',
                        height: '1em',
                        backgroundImage: "url('/public/images/emojis/envelope-with-arrow.png')",
                        backgroundSize: 'contain',
                        backgroundRepeat: 'no-repeat',
                        verticalAlign: 'middle',
                    },
                    '.responsive-width': {
                        width: '85vw',
                    },
                    '@screen lg': {
                        '.responsive-width': {
                        width: '80vw',
                        },
                    },
                    /* New utilities */
                    '.animate-text-color': {
                        color: 'white',
                        transition: 'color 0.3s ease',
                    },
                    '.theme-primary.animate-text-color:hover': {
                        color: theme('colors.colorPrimary'),
                    },
                    '.theme-secondary.animate-text-color:hover': {
                        color: theme('colors.colorSecondary'),
                    },
                    '.animate-underline::after': {
                        content: '""',
                        position: 'absolute',
                        bottom: '0',
                        left: '50%',
                        width: '0%',
                        height: '2px',
                        backgroundColor: 'transparent',
                        transformOrigin: 'center center',
                        transform: 'translateX(-50%)',
                        transition: 'width 0.3s ease, background-color 0.3s ease',
                    },
                    '.theme-primary.animate-underline::after': {
                        backgroundColor: theme('colors.colorPrimary'),
                    },
                    '.theme-primary.animate-underline:hover::after': {
                        width: '100%',
                    },
                    '.theme-secondary.animate-underline::after': {
                        backgroundColor: theme('colors.colorSecondary'),
                    },
                    '.theme-secondary.animate-underline:hover::after': {
                        width: '100%',
                    },
                    '.theme-primary, .theme-secondary': {
                        color: 'white', /* Keep links white by default */
                        textDecoration: 'none', /* No underline by default */
                        position: 'relative', /* So we can position the underline */
                        overflow: 'hidden', /* Hide the underline by default */
                        transition: 'color 0.3s ease', /* Smooth transition for text color */
                    },
                },
                ['responsive', 'hover']
            );
        }),
    ],
};

// !! This is for serious warnings or depricated methods
// ! This is for alerts
// todo This is for ToDo's
// & This is for notes
// * This is for suggestions
// ? This is for questions
// . This is for informative comments
// # This is for important information
// This is a normal comment
// // This is a commented out comment and will be deleted in furute versions


// # Create .env file by copying .env.example
// cp .env.example .env

// # Install all composer dependencies
// composer install

// # Install all NPM dependencies
// npm install
// npm install crypto-js

// # Generate the application key
// php artisan key:generate

// # Run database migrations
// php artisan migrate

// # Run database seeders (optional, if you need seed data)
// php artisan db:seed

// # Set the correct file permissions for storage and cache directories
// chmod -R 775 storage
// chmod -R 775 bootstrap/cache