/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}","*.php",'./template/*.php'],
  theme: {
    extend: {},
  },
  plugins: [require('daisyui'),],
  daisyui: {
    themes: [ "light",]
  }
}