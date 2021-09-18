<head>
    <!-- Google Tag Manager -->
    {{-- <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime()
                , event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0]
                , j = d.createElement(s)
                , dl = l != 'dataLayer' ? '&amp;l=' + l : '';
            j.async = true;
            j.src = "{{url('backend')}}/assets/www.googletagmanager.com/gtm5445.html?id=" + i + dl;
    f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');

    </script> --}}
    <!-- End Google Tag Manager -->
    <meta charset="utf-8" />
    <title> @yield('title') </title>
    <meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{url('backend')}}/assets/plugins/custom/fullcalendar/fullcalendar.bundle49d8.css?v=7.2.8" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{url('backend')}}/assets/plugins/global/plugins.bundle49d8.css?v=7.2.8" rel="stylesheet" type="text/css" />
    <link href="{{url('backend')}}/assets/plugins/custom/prismjs/prismjs.bundle49d8.css?v=7.2.8" rel="stylesheet" type="text/css" />
    <link href="{{url('backend')}}/assets/css/style.bundle49d8.css?v=7.2.8" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{url('backend')}}/assets/css/themes/layout/header/base/light49d8.css?v=7.2.8" rel="stylesheet" type="text/css" />
    <link href="{{url('backend')}}/assets/css/themes/layout/header/menu/light49d8.css?v=7.2.8" rel="stylesheet" type="text/css" />
    <link href="{{url('backend')}}/assets/css/themes/layout/brand/dark49d8.css?v=7.2.8" rel="stylesheet" type="text/css" />
    <link href="{{url('backend')}}/assets/css/themes/layout/aside/dark49d8.css?v=7.2.8" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/logos/favicon.ico" />
    <!-- Hotjar Tracking Code for keenthemes.com -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 1070954
                , hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');

    </script>
</head>