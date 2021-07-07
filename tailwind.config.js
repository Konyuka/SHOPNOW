module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      animation: {
        wiggle: 'wiggle 1s infinite'
      },
      keyframes: {
        wiggle: {
          '0%, 100%': {
            transform: 'scale(1.2) rotate(10deg)'
          },
          '50%': {
            transform: 'scale(0.8) rotate(-7deg)'
          },
        }
      }
    },
  },
  variants: {
    translate: ({ after }) => after(['group-hover']),
    extend: {
      display: ["responsive", "group-hover", "group-focus"],
      translate: ['responsive', 'hover', 'focus'],
      backgroundBlendMode: ['hover', 'focus'],
    },
  },
  plugins: [],
}
