const { primary } = require('laravel-mix/src/Mix');

/** @type {import('tailwindcss').Config} */
module.exports = {
 content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      padding: {
        default: '15px',
      },
    },
    screens: {
      sm: '640px',
      md: '768px',
      lg: '960px',
      xl: '1200px',
   
    },
    fontFamily: {
      primary: 'Poppins',
      secondary : 'Jost',
    },

   

    extend: {
      backgroundImage:{
        'head': "url('/img/hero.jpg')",
        'grid':"url('/img/grid.png')",
      },
      colors: {
        primary: {
          default: '#ffff',
          second:'#292f36',
          hover:'#de3b3b'
        },
        secondary: '#030303 ',
        accent: {
          default: '#cda274',
          secondary: '#f4f0ec',
          hover: '#123c5d',
          thirty:'#de3b3b'
        },
        
        
      },
    },
  },
  plugins: [],
}

