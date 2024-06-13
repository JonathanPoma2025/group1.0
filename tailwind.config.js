/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'white': '#ffffff',
        'ourblack': '#404040',
        '': '#F2F2F2',
        'blueblack': '#151320',
        'babyblue': '#596DB6',
        'deepblue': '#161E42',
        'gray-10': '#808A93',
        'gray-5': '#EAEAEA',
      },

    extend: {},
  },
  plugins: [],
}
