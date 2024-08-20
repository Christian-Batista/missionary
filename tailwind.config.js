/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      screens: {
        'xs': '375px',    // Extra small devices (celulares pequeños)
        'sm': '640px',    // Small devices (celulares)
        'md': '768px',    // Medium devices (tablets)
        'lg': '1160px',   // Large devices (laptops)
        'xl': '1280px',   // Extra large devices (computadoras de escritorio)
        '2xl': '1536px',  // 2x Extra large (grandes pantallas)
      },
      colors: {
        'azul-boton': '#357CA1',
        'gris-obscuro': '#444444'
      }
    },
    boxShadow: {
      '3xl': '0 35px 60px -15px rgba(0, 0, 0, 0.3)',
    },
    fontSize: {
      xs: '0.2rem',
      sm: '0.8rem',
      base: '1rem',
      xl: '1.25rem',
      '2xl': '1.563rem',
      '3xl': '1.953rem',
      '4xl': '2.441rem',
      '5xl': '3.052rem',
    },
    fontWeight: {
      thin: '50',
      hairline: '100',
      extralight: '200',
      light: '300',
      normal: '400',
      medium: '500',
      semibold: '600',
      bold: '700',
      extrabold: '800',
      'extra-bold': '800',
      black: '900',
    }
  },
  plugins: [],
}

