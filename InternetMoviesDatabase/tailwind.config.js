/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./app/Livewire/**/*.php",
  ],
  darkMode: 'class', // Active le support du mode sombre via la classe .dark
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', 'Instrument Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      },
      colors: {
        // Palette Star Wars personnalisée
        background: 'oklch(0.145 0 0)',
        foreground: 'oklch(0.985 0 0)',
        card: {
          DEFAULT: 'oklch(1 0 0)',
          foreground: 'oklch(0.145 0 0)',
        },
        primary: {
          DEFAULT: 'oklch(0.795 0.184 86.047)', // Jaune Star Wars
          foreground: 'oklch(0.145 0 0)',
        },
        secondary: {
          DEFAULT: 'oklch(0.97 0 0)',
          foreground: 'oklch(0.205 0 0)',
        },
        muted: {
          DEFAULT: 'oklch(0.97 0 0)',
          foreground: 'oklch(0.556 0 0)',
        },
        accent: {
          DEFAULT: 'oklch(0.97 0 0)',
          foreground: 'oklch(0.205 0 0)',
        },
        destructive: {
          DEFAULT: 'oklch(0.577 0.245 27.325)',
          foreground: 'oklch(0.577 0.245 27.325)',
        },
        border: 'oklch(0.922 0 0)',
        input: 'oklch(0.922 0 0)',
        ring: 'oklch(0.87 0 0)',
      },
      borderRadius: {
        lg: '0.625rem',
        md: 'calc(0.625rem - 2px)',
        sm: 'calc(0.625rem - 4px)',
      },
      // Configuration spécifique pour le Dashboard / Sidebar
      sidebar: {
        DEFAULT: 'oklch(0.985 0 0)',
        foreground: 'oklch(0.145 0 0)',
        primary: 'oklch(0.205 0 0)',
        border: 'oklch(0.922 0 0)',
        ring: 'oklch(0.87 0 0)',
      }
    },
  },
  plugins: [
    require('tailwindcss-animate'), // Pour tw-animate-css
  ],
}