/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/**/*.php", // Adjust this to match where your views are located
    "./public/**/*.html",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
