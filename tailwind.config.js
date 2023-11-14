module.exports = {
  content: ["./**/*.php", "./src/**/*.js"],
  safelist: [
    'button',
    'leadin'
  ],
  plugins: [
    require('@tailwindcss/forms')
  ],
  darkMode: 'media'
}
