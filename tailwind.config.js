/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./components/**/*.{js,vue,ts}",
    "./layouts/**/*.vue",
    "./pages/**/*.vue",
    "./plugins/**/*.{js,ts}",
    "./nuxt.config.{js,ts}",
  ],
  theme: {
    extend: {
      screens: {
        "710px": {
          "max": "710px"
        },
        "530px": {
          "max": "530px"
        },
        "500px": {
          "max": "500px"
        },
        "470px": {
          "max": "470px"
        },
        "410px": {
          "max": "410px"
        }
      }
    },
  },
  plugins: [],
}