/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],

  plugins: [],

  theme: {
    container: {
      center : true,
    },

    colors: {
      'blue': '#3b82f6',
      'sky' : '#7dd3fc',
      'purple': '#d8b4fe',
      'pink': '#fbcfe8',
      'orange': '#ff7849',
      'green': '#4ade80',
      'yellow': '#ffc82c',
      'gray-dark': '#273444',
      'gray': '#8492a6',
      'gray-light': '#d3dce6',
      'red' : '#b91c1c',
      'white': '#fafafa'
    },
    fontFamily: {
      sans: ['Graphik', 'sans-serif'],
      serif: ['Merriweather', 'serif'],
    },
    extend: {
      spacing: {
        '8xl': '96rem',
        '9xl': '128rem',
      },
      borderRadius: {
        '4xl': '2rem',
      }
    }
  }
  
}

