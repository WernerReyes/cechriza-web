/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.php",
    "./node_modules/flowbite/**/*.js"
  ],
  safelist: [
    'text-red-500',
    'text-blue-500',
    'text-green-500',
    'text-white',
    'bg-gray-900',
    'text-2xl',
    'font-bold',
    'grid',
    'grid-cols-1',
    'md:grid-cols-3'
  ],
  theme: {
   
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
