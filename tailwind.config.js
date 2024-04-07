/** @type {import('tailwindcss').Config} */

export default {
  purge:[
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  content: [],
  theme: {
    extend: {},
  },
  plugins: [],
}

