/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        fontFamily: {
            'inter': ['Inter', ...defaultTheme.fontFamily.sans],
            'ubuntu': ['Ubuntu', ...defaultTheme.fontFamily.sans],
        },
        colors: {
            'ourblack': '#404040',
            'swhite': '#F2F2F2',
            'blueblack': '#151320',
            'babyblue': '#596DB6',
            'deepblue': '#161E42',
            'gray-10': '#808A93',
            'gray-5': '#EAEAEA',
            'card': '#15131F',
        }
    },
  },
  plugins: [],
}



