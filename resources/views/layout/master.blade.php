<html lang="en-US" style="scroll-behavior: smooth" data-rh="lang" class="dark">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta
      name="description"
      content="Web site created using create-react-app"
    />
    <link rel="apple-touch-icon" href="/logo.png" />
    <link rel="manifest" href="/manifest.json" />
    <title>Home Page - raihan-firm.com</title>
    <script defer="defer" src="/static/js/main.37b91ece.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <meta
      name="description"
      content="A Boilerplate application homepage"
      data-rh="true"
    />
  </head>
  <body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
    @include('layout.nav')
    @yield('container')
    @include('layout.footer')
    </div>
    <div class="ReactModalPortal"></div>
  </body>
</html>
