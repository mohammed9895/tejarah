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
        ' bg-[#4D008C]',

        'bg-[#02739B]',
        'bg-[#245fa4]',

        'group-hover:from-[#245fa4]',
        'group-hover:to-[#95cfc4]',
        'bg-[#245fa4]',
        'text-[#245fa4]',

        'group-hover:from-[#405ea9]',
        'group-hover:to-[#2a397f]',
        'bg-[#405ea9]',
        'text-[#405ea9]',

        'group-hover:from-[#005850]',
        'group-hover:to-[#7ac143]',
        'bg-[#005850]',
        'text-[#005850]',
    ],
    theme: {
        extend: {
            colors: {
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

