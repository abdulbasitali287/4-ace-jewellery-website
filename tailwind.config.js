/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    extend: {
        backgroundImage: theme => ({
            'gradientButton': 'linear-gradient(90deg, #774020 0%, #F4935E 17%, #AA5627 34%, #F4935E 51%, #8C461C 81%, #A05126 100%);',
            // 'gradientButtonHover': 'linear-gradient(to right top, #774020, #965a37, #b67450, #d79069, #f8ad84)',
            // 'gradientButton': 'linear-gradient(to right top, #9d5933, #b2673d, #c87548, #de8453, #f4935e)',
            // 'gradientButtonHover': 'linear-gradient(to right top, #774020, #965a37, #b67450, #d79069, #f8ad84)',
          }),
    },
  },
  variants: {
    extend: {
      backgroundImage: ['hover'],
    },
  },
  plugins: [],
}

// .btn-gradient-orange {
//     color: #fff;
//     background-image: linear-gradient(90deg, #774020 0%, #F4935E 17%, #AA5627 34%, #F4935E 51%, #8C461C 81%, #A05126 100%);
//     border-color: #C86F3D;
// }
