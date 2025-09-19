<!DOCTYPE html>
<html>
<!--  This source code is exported from pxCode, you can get more document from https://www.pxcode.io  -->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
  <style>
    /* fonts.css */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    @font-face {
      font-family: "FontAwesome";
      font-weight: normal;
      font-style: normal;
      src: url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.eot?v=4.3.0");
      src: url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.eot?#iefix&v=4.3.0") format("embedded-opentype"),
        url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.woff2?v=4.3.0") format("woff2"),
        url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.woff?v=4.3.0") format("woff"),
        url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.ttf?v=4.3.0") format("truetype"),
        url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.svg?v=4.3.0#fontawesomeregular") format("svg");
    }

    *,
    *::before,
    *::after {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    hr,
    p,
    figure {
      display: block;
      font-size: 1em;
      font-weight: normal;
      margin: 0;
      border-width: 0;
    }

    ul,
    ul {
      display: block;
      margin: 0;
      padding: 0;
    }

    li {
      display: block;
    }

    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen",
        "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue",
        sans-serif;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    code {
      font-family: source-code-pro, Menlo, Monaco, Consolas, "Courier New",
        monospace;
    }

    /* This source code is exported from pxCode, you can get more document from https://www.pxcode.io */
    .main-site {
      display: flex;
      flex-direction: column;
      background-color: lightblue;
    }

    .main-site-posize {
      position: relative;
      overflow: hidden;
      min-height: 1024px;
      flex-grow: 1;
      margin: 0px;
    }

    .main-site-item {
      display: flex;
      flex: 0 0 auto;
    }

    .main-section1-container {
      display: flex;
    }

    .main-section1-container-posize {
      position: relative;
      overflow: visible;
      height: 185px;
      flex-grow: 1;
      margin: 0px;
    }

    .main-section1-hero-title {
      font: 700 35px/1.2 "Segoe UI", Helvetica, Arial, serif;
      color: #093187;
      letter-spacing: 0;
      opacity: 0.7799999714;
    }

    .main-section1-hero-title-posize {
      position: absolute;
      top: 38px;
      bottom: 95px;
      left: 36px;
      width: fit-content;
    }

    .main-section1-foreground {
      background: var(--src) center center / contain no-repeat;
    }

    .main-section1-foreground-posize {
      position: absolute;
      height: 804px;
      bottom: -693.8770361799px;
      left: 639.9998278942px;
      width: 801px;
    }

    .main-section2-container {
      display: flex;
      flex-direction: column;
      flex: 0 0 auto;
    }

    .main-section2-container-posize {
      position: relative;
      overflow: visible;
      margin: 0px 0px 191px;
    }

    .main-section2-container-space {
      display: flex;
      flex: 0 0 auto;
      min-height: 63px;
    }

    .main-section2-hero-title {
      font: 700 58px/1.2 "Poppins", Helvetica, Arial, serif;
      color: #0a3187;
      letter-spacing: 0;
      margin: 0px;
      flex: 0 0 auto;
    }

    .main-section2-hero-title-posize {
      position: relative;
      margin: 0px 732px 0px 36px;
    }

    .main-section2-container-space1 {
      display: flex;
      flex: 0 0 auto;
      min-height: 36px;
    }

    .main-section2-medium-title {
      font: 500 28px/1.2 "Poppins", Helvetica, Arial, serif;
      color: #2033e3;
      letter-spacing: 0;
      margin: 0px;
      opacity: 0.8199999928;
      flex: 0 0 auto;
    }

    .main-section2-medium-title-posize {
      position: relative;
      margin: 0px 785px 0px 36px;
    }

    .main-section2-container-space2 {
      display: flex;
      flex: 0 0 auto;
      min-height: 55px;
    }

    .main-section2-container-item {
      display: flex;
      flex: 0 0 auto;
    }

    .main-section2-coverGroup {
      display: flex;
      background-color: #0a3187;
      border-radius: 31.29px 31.29px 31.29px 31.29px;
    }

    .main-section2-coverGroup-posize {
      position: relative;
      overflow: visible;
      min-height: 62.58px;
      flex-grow: 1;
      margin: 0px 1146px 165px 36px;
    }

    .main-section2-subtitle {
      font: 700 24px/1.2 "Poppins", Helvetica, Arial, serif;
      color: white;
      letter-spacing: 0;
    }

    .main-section2-subtitle-posize {
      position: relative;
      display: block;
      width: fit-content;
      margin: 16px auto 17px;
      margin-right: 58px;
    }
  </style>

</head>

<body>
  <div class="main-site main-site-posize">
    <div class="main-site-item">
      <!-- section1 start -->
      <section class="main-section1-container main-section1-container-posize">
        <h1 class="main-section1-hero-title main-section1-hero-title-posize">SMART MEDI STORE</h1>
        <div style="--src:url(welcome/assets/5668fce86af1a5b288386f19155f5ced.png)"
          class="main-section1-foreground main-section1-foreground-posize"></div>
      </section>
      <!-- section1 end -->
    </div>
    <!-- section2 start -->
    <section class="main-section2-container main-section2-container-posize">
      <div class="main-section2-container-space"></div><center>
      <h1 class="main-section2-hero-title main-section2-hero-title-posize">Welcome To SMART MEDI STORE</h1>
      <div class="main-section2-container-space1"></div>
      <h2 class="main-section2-medium-title main-section2-medium-title-posize">
      Click on LOGIN/ OFFSTORE to get started on your <br>shopping experience!
      </h2>
      
      <div class="main-section2-container-space2"></div>
     <div class="main-section2-container-item">
        <div class="main-section2-coverGroup main-section2-coverGroup-posize">

        &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp<a href="indes.php">
      <!-- <h3 class="main-section2-subtitle main-section2-subtitle-posize">LOGIN</h3></a> -->
      <h3 class="main-section2-subtitle main-section2-subtitle-posize">LOGIN</h3></a>

        </div>
        
      </div>
      <div class="main-section2-container-item" style="margin-top: -130px;">
      &nbsp&nbsp &nbsp &nbsp <div class="main-section2-coverGroup">

         <a href="offlinesearch.php">
      <h3 class="main-section2-subtitle main-section2-subtitle-posize">&nbsp  &nbsp OFFLINE-STORE &nbsp &nbsp &nbsp</h3></a>

        </div>
        
      </div>
    </section>
    <!-- section2 end -->
  </div>
</body>

</html>