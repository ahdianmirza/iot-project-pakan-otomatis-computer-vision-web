/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}",
            "./src/*.php",
            "./script/*.js",
            "./api/*.php",
            "./function/*.php"],
  theme: {
    extend: {
      fontFamily: {
        poppins: ["Poppins"],
      },
      colors: {
        primary: "#04445F",
        lightGray: "#C2C0FF",
        bgColor: "#D4F2F4",
        textColor: "#353535",
      },
      screens: {
        '2xl': '1366px',
      }
    },
  },
  plugins: [],
};
