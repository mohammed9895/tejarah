/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    safelist: [
        'text-[#02739B]',
        'text-[#492A7D]',
        'text-[#4D008C]',
        ' bg-[#4D008C]'
    ],
    theme: {
        extend: {
            colors:{
                'primary': '#C54139',
                'secondary': '#E9CDC6',
                'light-gray': '#EBECE8',
                'mid-gray': '#B0ADA9',
                'dark-gray': '#5D5C59',
            }
        },
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '4rem',
                xl: '5rem',
                '2xl': '6rem',
            },
        },
    },
    plugins: [],
}

