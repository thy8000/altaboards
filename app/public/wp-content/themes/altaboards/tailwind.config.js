/** @type {import('tailwindcss').Config} */

const colors = require("tailwindcss/colors");

module.exports = {
  content: [
    "./assets/**/*.{js,jsx,ts,tsx}",
    "./pages/*.php",
    "./pages/**/*.php",
    "./includes/components/*.php",
    "./includes/components/**/*.php",
  ],
  colors: {
    black: colors.black,
    white: colors.white,
    gray: colors.gray,
  },
  container: {
    center: true,
  },
  theme: {
    extend: {},
  },
  plugins: [],
}

