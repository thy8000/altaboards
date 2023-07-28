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
    slate: colors.slate,
    gray: colors.gray,
    graySecondary: "#f3f4f9",
    grayTertiary: "#949494",
    green: colors.green,
    purple: colors.purple,
    blue: colors.blue,
    blueSecondary: "#677294",
    yellow: colors.yellow,
    aureolin: "#FCE401",
    darkblue: "#2700b0",
    oldgold: "#b09e00",
    secondary: '#f0f1f3',
    amber: colors.amber,
  },
  container: {
    center: true,
  },
  theme: {
    extend: {},
  },
  plugins: [],
}

