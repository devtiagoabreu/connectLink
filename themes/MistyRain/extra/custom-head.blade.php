<style> 
/* cyrillic */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-cyrillic-400-normal.woff2')}}'), url('{{themeAsset('roboto-cyrillic-400-normal.woff')}}'); 
  unicode-range: U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;
}
/* cyrillic-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-cyrillic-ext-400-normal.woff2')}}'), url('{{themeAsset('roboto-cyrillic-ext-400-normal.woff')}}'); 
  unicode-range: U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;
}
/* greek */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-greek-400-normal.woff2')}}'), url('{{themeAsset('roboto-greek-400-normal.woff')}}'); 
  unicode-range: U+0370-03FF;
}
/* greek-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-greek-ext-400-normal.woff2')}}'), url('{{themeAsset('roboto-greek-ext-400-normal.woff')}}'); 
  unicode-range: U+1F00-1FFF;
}
/* latin */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-latin-400-normal.woff2')}}'), url('{{themeAsset('roboto-latin-400-normal.woff')}}'); 
  unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;
}
/* latin-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-latin-ext-400-normal.woff2')}}'), url('{{themeAsset('roboto-latin-ext-400-normal.woff')}}'); 
  unicode-range: U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;
}
/* vietnamese */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-vietnamese-400-normal.woff2')}}'), url('{{themeAsset('roboto-vietnamese-400-normal.woff')}}'); 
  unicode-range: U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB;
}
/* cyrillic */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-cyrillic-700-normal.woff2')}}'), url('{{themeAsset('roboto-cyrillic-700-normal.woff')}}'); 
  unicode-range: U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;
}
/* cyrillic-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap;
  src: url('{{themeAsset('roboto-cyrillic-ext-700-normal.woff2')}}'), url('{{themeAsset('roboto-cyrillic-ext-700-normal.woff')}}'); 
  unicode-range: U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;
}
/* greek */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-greek-700-normal.woff2')}}'), url('{{themeAsset('roboto-greek-700-normal.woff')}}'); 
  unicode-range: U+0370-03FF;
}
/* greek-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-greek-ext-700-normal.woff2')}}'), url('{{themeAsset('roboto-greek-ext-700-normal.woff')}}'); 
  unicode-range: U+1F00-1FFF;
}
/* latin */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-latin-700-normal.woff2')}}'), url('{{themeAsset('roboto-latin-700-normal.woff')}}'); 
  unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;
}
/* latin-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-latin-ext-700-normal.woff2')}}'), url('{{themeAsset('roboto-latin-ext-700-normal.woff')}}'); 
  unicode-range: U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;
}
/* vietnamese */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-vietnamese-700-normal.woff2')}}'), url('{{themeAsset('roboto-vietnamese-700-normal.woff')}}'); 
  unicode-range: U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB;
}

html {
    font-size: 100%; }

/* From the :root element you can easily change the colors of the design, its size and so on. */
:root {

  /* You can change the font family in the whole design here. (You need to add the font family to the codes.) */
  --font-family: 'Inter', sans-serif;

  /* You can change the font size here, is proportional to all texts. */
  --font-size: 16px;

  /* You can change the background color by typing the color code. (If you do not enter a background-image image, the background-color will be active.) */
  --background-color: #000;
  --background-image: url({{themeAsset('../../wallpaper.png')}});

  /* You can change the frame thickness and color of the picture by typing the number of pixels and the color code. */
  --image-border-color: #1f232e;
  --image-border-px: 3px;

  /* You can change the width and size of the picture by typing the number of pixels. */
  --image-width: 140px;
  --image-height: 140px;

  /* You can change the colors of the title and description section by typing the color codes. */
  --title-color: #fff;
  --description-color: #fff;

  /* You can change the colors of social media icons by changing the color code. */
  --svg-color: #fff;

  /* You can change the background, text color and active color of the menu by changing the color codes. */
  --menu-background-color: #1f232e;
  --menu-text-color: #fff;
  --menu-active-text-color: #8ecae6;

  /* You can change the button's background, text color and active color by changing the color codes. */
  --button-background-color: #1f232e;
  --button-text-color: #fff;
  --button-text-hover-color: #8ecae6;

  /* You can change the background, text color and active color of the text field by changing the color codes. */
  --textarea-background-color: #1f232e;
  --textarea-text-color: #fff;
  --textarea-link-text-color: #8ecae6;

  /* You can change the background, text color and active color of the footer area by changing the color codes. */
  --footer-background-color: #1f232e;
  --footer-text-color: #fff;
  --footer-link-text-color: #8ecae6;
}
</style>

<style>
  *, *::before, *::after {
  padding: 0;
  margin: 0 auto;
  box-sizing: border-box;
}

body {
  background-color: #181b24;
  color: #fff;
  min-height: 100vh;
  display: grid;
  place-items: center;
  perspective: 1200px;
}
body *:not(:empty) {
  transform-style: preserve-3d;
}

.scene {
  position: absolute;
  height: 100vh;
  margin-bottom: 100vh;
}

.drop {
  position: absolute;
  left: 0;
  bottom: -25vh;
  width: 1px;
  height: 100vh;
  transform: translate3d(var(--tx, 0), 0, var(--tz, 0));
  transform-style: preserve-3d;
  background-image: linear-gradient(transparent 95vh, #def3);
  -webkit-animation: drop 12s var(--delay, 0s) ease-in infinite;
          animation: drop 12s var(--delay, 0s) ease-in infinite;
}
@-webkit-keyframes drop {
  0%, 75% {
    background-position-y: 5vh;
  }
  100% {
    background-position-y: 105vh;
  }
}
@keyframes drop {
  0%, 75% {
    background-position-y: 5vh;
  }
  100% {
    background-position-y: 105vh;
  }
}
.drop:nth-child(1) {
  --delay: 0s;
  --tx: 3.5vmin;
  --tz: 7vmin;
}
.drop:nth-child(2) {
  --delay: -0.25s;
  --tx: 22.75vmin;
  --tz: -17vmin;
}
.drop:nth-child(3) {
  --delay: -0.5s;
  --tx: -16.5vmin;
  --tz: -4vmin;
}
.drop:nth-child(4) {
  --delay: -0.75s;
  --tx: 4vmin;
  --tz: 23.25vmin;
}
.drop:nth-child(5) {
  --delay: -1s;
  --tx: 5vmin;
  --tz: 6.75vmin;
}
.drop:nth-child(6) {
  --delay: -1.25s;
  --tx: -9.25vmin;
  --tz: -12.25vmin;
}
.drop:nth-child(7) {
  --delay: -1.5s;
  --tx: 24.25vmin;
  --tz: -16.25vmin;
}
.drop:nth-child(8) {
  --delay: -1.75s;
  --tx: 7.5vmin;
  --tz: 7vmin;
}
.drop:nth-child(9) {
  --delay: -2s;
  --tx: -12vmin;
  --tz: -4.75vmin;
}
.drop:nth-child(10) {
  --delay: -2.25s;
  --tx: 17.25vmin;
  --tz: 24.25vmin;
}
.drop:nth-child(11) {
  --delay: -2.5s;
  --tx: 15vmin;
  --tz: -9vmin;
}
.drop:nth-child(12) {
  --delay: -2.75s;
  --tx: 10vmin;
  --tz: -3.5vmin;
}
.drop:nth-child(13) {
  --delay: -3s;
  --tx: -14vmin;
  --tz: -12.25vmin;
}
.drop:nth-child(14) {
  --delay: -3.25s;
  --tx: -14.5vmin;
  --tz: 0.25vmin;
}
.drop:nth-child(15) {
  --delay: -3.5s;
  --tx: -10.5vmin;
  --tz: -22vmin;
}
.drop:nth-child(16) {
  --delay: -3.75s;
  --tx: 20vmin;
  --tz: 19.5vmin;
}
.drop:nth-child(17) {
  --delay: -4s;
  --tx: -1.75vmin;
  --tz: 20vmin;
}
.drop:nth-child(18) {
  --delay: -4.25s;
  --tx: -16.75vmin;
  --tz: -7vmin;
}
.drop:nth-child(19) {
  --delay: -4.5s;
  --tx: -2.5vmin;
  --tz: -22.5vmin;
}
.drop:nth-child(20) {
  --delay: -4.75s;
  --tx: 7vmin;
  --tz: 7vmin;
}
.drop:nth-child(21) {
  --delay: -5s;
  --tx: 24vmin;
  --tz: 9.25vmin;
}
.drop:nth-child(22) {
  --delay: -5.25s;
  --tx: 17vmin;
  --tz: 18.5vmin;
}
.drop:nth-child(23) {
  --delay: -5.5s;
  --tx: -1.25vmin;
  --tz: 19.25vmin;
}
.drop:nth-child(24) {
  --delay: -5.75s;
  --tx: -7.25vmin;
  --tz: -15vmin;
}
.drop:nth-child(25) {
  --delay: -6s;
  --tx: -24vmin;
  --tz: -10.25vmin;
}
.drop:nth-child(26) {
  --delay: -6.25s;
  --tx: -11.25vmin;
  --tz: -8.25vmin;
}
.drop:nth-child(27) {
  --delay: -6.5s;
  --tx: 4vmin;
  --tz: 2.5vmin;
}
.drop:nth-child(28) {
  --delay: -6.75s;
  --tx: 23vmin;
  --tz: 13vmin;
}
.drop:nth-child(29) {
  --delay: -7s;
  --tx: -10vmin;
  --tz: 10vmin;
}
.drop:nth-child(30) {
  --delay: -7.25s;
  --tx: -22.5vmin;
  --tz: 7vmin;
}
.drop:nth-child(31) {
  --delay: -7.5s;
  --tx: -23vmin;
  --tz: 12.75vmin;
}
.drop:nth-child(32) {
  --delay: -7.75s;
  --tx: 18.25vmin;
  --tz: -11.25vmin;
}
.drop:nth-child(33) {
  --delay: -8s;
  --tx: -24.25vmin;
  --tz: 14.75vmin;
}
.drop:nth-child(34) {
  --delay: -8.25s;
  --tx: 8.25vmin;
  --tz: 12.5vmin;
}
.drop:nth-child(35) {
  --delay: -8.5s;
  --tx: -11.75vmin;
  --tz: -0.75vmin;
}
.drop:nth-child(36) {
  --delay: -8.75s;
  --tx: -15vmin;
  --tz: -17vmin;
}
.drop:nth-child(37) {
  --delay: -9s;
  --tx: 16.75vmin;
  --tz: -13.25vmin;
}
.drop:nth-child(38) {
  --delay: -9.25s;
  --tx: 17vmin;
  --tz: 8.75vmin;
}
.drop:nth-child(39) {
  --delay: -9.5s;
  --tx: -9.75vmin;
  --tz: 5.75vmin;
}
.drop:nth-child(40) {
  --delay: -9.75s;
  --tx: 13.5vmin;
  --tz: 5.25vmin;
}
.drop:nth-child(41) {
  --delay: -10s;
  --tx: -6.75vmin;
  --tz: 7.5vmin;
}
.drop:nth-child(42) {
  --delay: -10.25s;
  --tx: 16.75vmin;
  --tz: -19.75vmin;
}
.drop:nth-child(43) {
  --delay: -10.5s;
  --tx: -2.75vmin;
  --tz: 24.75vmin;
}
.drop:nth-child(44) {
  --delay: -10.75s;
  --tx: -5vmin;
  --tz: 7.5vmin;
}
.drop:nth-child(45) {
  --delay: -11s;
  --tx: 1.5vmin;
  --tz: 12.25vmin;
}
.drop:nth-child(46) {
  --delay: -11.25s;
  --tx: 18vmin;
  --tz: -10.75vmin;
}
.drop:nth-child(47) {
  --delay: -11.5s;
  --tx: -11.5vmin;
  --tz: -5.25vmin;
}
.drop:nth-child(48) {
  --delay: -11.75s;
  --tx: -5.25vmin;
  --tz: 14vmin;
}
.drop::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 60vmin;
  height: 60vmin;
  background-image: radial-gradient(closest-side, transparent, #def, transparent, #eff, transparent, #def, transparent);
  -webkit-animation: waves 12s calc(var(--delay, 0s) - 0.36s) linear infinite;
          animation: waves 12s calc(var(--delay, 0s) - 0.36s) linear infinite;
}
@-webkit-keyframes waves {
  0% {
    transform: translate(-50%, 50%) rotateX(-90deg) scale(0);
    opacity: 0.05;
  }
  100% {
    transform: translate(-50%, 50%) rotateX(-90deg) scale(2);
    opacity: 0;
  }
}
@keyframes waves {
  0% {
    transform: translate(-50%, 50%) rotateX(-90deg) scale(0);
    opacity: 0.05;
  }
  100% {
    transform: translate(-50%, 50%) rotateX(-90deg) scale(2);
    opacity: 0;
  }
}
</style>