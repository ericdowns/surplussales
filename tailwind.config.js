const includePreflight = process.env._TW_TARGET === 'editor' ? false : true;

const plugin = require('tailwindcss/plugin');

module.exports = {
  content: [
    "./src/**/*.{html,php,js}",
    ],
  theme: {
    extend: {
      fontSize: {
        // xs: '0.75rem',    // P.XS
        // sm: '0.9375rem',  // P.S
        // base: '1.1875rem',  // P
        // lg: '1.125rem',   // P+
        // xl: '1.25rem',    // P++
        // '2xl': '0.9375rem',  // H6 
        // '3xl': '1.5rem',     // H5
        // '4xl': '1.75rem',    // H4
        // '5xl': '2.25rem',    // H3
        // '6xl': '3rem',       // H2 
        // '7xl': '5rem',       // H1
        // '8xl': '6rem',       // H1+
        // '9xl': '7rem',       // H1++
      },
      fontFamily: {
        sans: ["articulat-cf", "sans-serif"],
        interstate: ["interstate-condensed", "sans-serif"],
      },
      
      colors: {
        
        yellow: '#F6BC28', // bg-amber-400
        charcoal: '#514E48',
        cream: '#F3EEEA', // bg-stone-100
        red: '#EE433E', // bg-red-500
        blue: '#04739E', // bg-sky-700
        black: '#222222', // bg-neutral-800
        gray80: '#494846', // bg-zinc-700
        gray60: '#6F6E69', // bg-stone-500
        gray40: '#A4A4A4', // bg-neutral-400
        

      },
      


      padding: {
        '5p': '5%',  // p-5p
      },
      
      margin: {
        '5p': '5%', // mx-5p
      },
      
      paddingRight: {
        '5p': '5%',  // pr-5p
      },
      
      paddingLeft: {
        '5p': '5%',  // pl-5p
      },
    },
  },




  corePlugins: {
    preflight: includePreflight,
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/container-queries'),
    
    plugin(function({ addUtilities }) {
      const newUtilities = {

        '.px-5p': {
          paddingRight: '5%',
          paddingLeft: '5%',
        },

        '.py-5p': {
          paddingTop: '5%',
          paddingBottom: '5%',
        },

        '.mx-5m': {
          marginRight: '5%',
          marginLeft: '5%',
        },


      };
      
      addUtilities(newUtilities);
    }),
    ],
}
