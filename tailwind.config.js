const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            'bred': '#f0002f',
            'bred-2': '#f0002f',
            'bgray-bg': '#121317',
            'bgray-secondary': '#1A1C23',
            'bgray-overlay': '#272a35',
            'bgray-forward':'#393D4C',
            'bgray-dropdown':'#191a20',
        },
        fontFamily: {
            sans: ['Nunito', ...defaultTheme.fontFamily.sans],
        },
    },
},
      plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
}
