module.exports = {
  purge: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.css",
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    container: {
      center: true,
      padding: "1rem",
    },
    extend: {
      fontFamily: {
        proxima: "'Proxima Nova', sans-serif",
      },
      colors: {
        primary: "#252427",
        secondary: "#B59049",
        tertiary: "#FFFFFF",
        quaternary: "#F2E0DF",
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
