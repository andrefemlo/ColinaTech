/** @type {import('tailwindcss').Config} */

module.exports = {
  content: ["./**/*.php"],
  theme: {
    backgroundPosition: {
      'bottom-4': 'center bottom 1rem',
      'top-4': 'right 1rem top 3rem',
      'right-top-4': 'right top 3rem'
    },
    fontFamily: {
      "sans": ["Plein-Variable"]
    },
    extend: {
      colors: {
        "colina-400": "#1ACDB8",
        "colina-500": "#14A797",
        "colina-700": "#1d1e22",
        "colina-900": "#0a0b0b"
      },
      height: {
        "80h": "80dvh",
        "90h": "90dvh",
        "100h": "100dvh"
      },
      width: {
        "80w": "80dvw",
        "90w": "90dvw",
        "100w": "100dvw"
      },
      backgroundImage: {
        'bg-hero': "url('./src/images/bg-hero.png')",
        'wrect': "url('./src/images/white-rect.png')",
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}

