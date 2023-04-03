<link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&amp;display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <script nonce="cb178f7e-760b-4246-95a5-27025efc8f89">
      (function (w, d) {
        !(function (bv, bw, bx, by) {
          bv[bx] = bv[bx] || {};
          bv[bx].executed = [];
          bv.zaraz = { deferred: [], listeners: [] };
          bv.zaraz.q = [];
          bv.zaraz._f = function (bz) {
            return function () {
              var bA = Array.prototype.slice.call(arguments);
              bv.zaraz.q.push({ m: bz, a: bA });
            };
          };
          for (const bB of ["track", "set", "debug"])
            bv.zaraz[bB] = bv.zaraz._f(bB);
          bv.zaraz.init = () => {
            var bC = bw.getElementsByTagName(by)[0],
              bD = bw.createElement(by),
              bE = bw.getElementsByTagName("title")[0];
            bE && (bv[bx].t = bw.getElementsByTagName("title")[0].text);
            bv[bx].x = Math.random();
            bv[bx].w = bv.screen.width;
            bv[bx].h = bv.screen.height;
            bv[bx].j = bv.innerHeight;
            bv[bx].e = bv.innerWidth;
            bv[bx].l = bv.location.href;
            bv[bx].r = bw.referrer;
            bv[bx].k = bv.screen.colorDepth;
            bv[bx].n = bw.characterSet;
            bv[bx].o = new Date().getTimezoneOffset();
            if (bv.dataLayer)
              for (const bI of Object.entries(
                Object.entries(dataLayer).reduce((bJ, bK) => ({
                  ...bJ[1],
                  ...bK[1],
                }))
              ))
                zaraz.set(bI[0], bI[1], { scope: "page" });
            bv[bx].q = [];
            for (; bv.zaraz.q.length; ) {
              const bL = bv.zaraz.q.shift();
              bv[bx].q.push(bL);
            }
            bD.defer = !0;
            for (const bM of [localStorage, sessionStorage])
              Object.keys(bM || {})
                .filter((bO) => bO.startsWith("_zaraz_"))
                .forEach((bN) => {
                  try {
                    bv[bx]["z_" + bN.slice(7)] = JSON.parse(bM.getItem(bN));
                  } catch {
                    bv[bx]["z_" + bN.slice(7)] = bM.getItem(bN);
                  }
                });
            bD.referrerPolicy = "origin";
            bD.src =
              "../../cdn-cgi/zaraz/sd0d9.js?z=" +
              btoa(encodeURIComponent(JSON.stringify(bv[bx])));
            bC.parentNode.insertBefore(bD, bC);
          };
          ["complete", "interactive"].includes(bw.readyState)
            ? zaraz.init()
            : bv.addEventListener("DOMContentLoaded", zaraz.init);
        })(w, d, "zarazData", "script");
      })(window, document);
    </script>
  </head>
  <body>
    <div id="preloder">
      <div class="loader"></div>
    </div>
