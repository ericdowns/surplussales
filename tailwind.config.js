/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/*.{html,js}"],
  theme: {
    extend: {



      fontSize: {
       xs:   '0.75rem',    // P.XS
         sm:   '0.9375rem',  // P.S
         base: '1.1875rem',  // P
         lg:   '1.125rem',   // P+
         xl:   '1.25rem',    // P++
        '2xl': '0.9375rem',  // H6 
        '3xl': '1.5rem',     // H5
        '4xl': '1.75rem',    // H4
        '5xl': '2.25rem',    // H3
        '6xl': '3rem',       // H2 
        '7xl': '5rem',       // H1
        '8xl': '6rem',       // H1+
        '9xl': '7rem',       // H1++
        '75xl': '4.6875rem',
        '72xl': '4.5rem',
      },

      
    },
  },




  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/container-queries'),
    ],


}
