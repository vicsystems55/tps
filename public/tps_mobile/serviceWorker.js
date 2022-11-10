var static = "FiMobile-v2";
var cacheassets = [
  "/tps_mobile/splash.html",
  "/tps_mobile/landing.html",
  "/tps_mobile/signin.html",
  "/tps_mobile/signup.html",
  "/tps_mobile/verify.html",
  "/tps_mobile/thankyou.html",
  "/tps_mobile/state.html",
  "/tps_mobile/style.html",
  "/tps_mobile/profile.html",
  "/tps_mobile/assets/css/style.css",
  "/tps_mobile/assets/js/app.js",
  "/tps_mobile/assets/js/color-scheme.js",
  "/tps_mobile/assets/js/jquery-3.33.111.min.js",
  "/tps_mobile/assets/js/jquery.cookie.js",
  "/tps_mobile/assets/js/main.js",
  "/tps_mobile/assets/js/popper.min.js",
  "/tps_mobile/assets/js/pwa-services.js",
];

self.addEventListener("install", function (event) {    
    event.waitUntil(
        caches.open(static).then(function (cache) {
            cache.addAll(cacheassets);
        }).then(function () {
            return self.skipWaiting();
        })
    );
});
self.addEventListener("activate", function (event) {    
});

self.addEventListener("fetch", function (event) {
    event.respondWith(
        caches.match(event.request).then(function (response) {
            return response || fetch(event.request)
        })
    );
});
