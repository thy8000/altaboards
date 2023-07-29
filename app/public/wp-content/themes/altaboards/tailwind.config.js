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
  container: {
    center: true,
  },
  theme: {
    colors: {
      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      green: colors.green,
      jade: "#04B571",
      jaffa: "#F38D3B",
      midgray: "#5C5C63",
      apple: "#6C9C44",
    },
  },
  plugins: [],
}

