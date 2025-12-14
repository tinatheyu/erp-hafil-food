const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "class",
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./app/**/*.php",
  ],
  theme: {
    extend: {
      keyframes: {
        fillLine: {
          "0%": { width: "0%" },
          "100%": { width: "58%" },
        },
      },
      animation: {
        "fill-line": "fillLine 0.4s ease-in-out forwards",
      },
      colors: {
        primary: colors.blue,
      },
      fontFamily: {
        sans: [
          "Public Sans",
          "ui-sans-serif",
          "system-ui",
          "sans-serif",
          "Apple Color Emoji",
          "Segoe UI Emoji",
          "Segoe UI Symbol",
          "Noto Color Emoji",
        ],
      },
    },
  },
  plugins: [],
};
