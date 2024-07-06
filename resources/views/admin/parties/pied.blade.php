</div><!-- /.app -->
<!-- BEGIN BASE JS -->
<script src="{{ asset('assets/admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/popper.js/umd/popper.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script> <!-- END BASE JS -->
<!-- BEGIN PLUGINS JS -->
<script src="{{ asset('assets/admin/vendor/pace-progress/pace.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/stacked-menu/js/stacked-menu.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/chart.js/Chart.min.js') }}"></script> <!-- END PLUGINS JS -->
<!-- BEGIN THEME JS -->
{{-- <script src="{{ asset('assets/admin/javascript/theme.min.js') }}"></script> <!-- END THEME JS --> --}}
<script  src="{{ asset('assets/admin/custom/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/summernote/summernote-bs4.min.js') }} "></script>
<script src="{{ asset('assets/admin/vendor/highlightjs/highlight.pack.min.js') }}"></script>
<script src="{{ asset('assets/admin/javascript/pages/summernote-demo.js') }} "></script>
{{-- <script src="{{ asset('assets/admin/javascript/pages/ace-demo.js') }} "></script> --}}
<!-- BEGIN PAGE LEVEL JS -->
{{-- <script src="{{ asset('assets/admin/javascript/pages/dashboard-demo.js') }}"></script> <!-- END PAGE LEVEL JS --> --}}
<script>
    var skin = localStorage.getItem('skin') || 'default';
    var isCompact = JSON.parse(localStorage.getItem('hasCompactMenu'));
    var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
    // Disable unused skin immediately
    disabledSkinStylesheet.setAttribute('rel', '');
    disabledSkinStylesheet.setAttribute('disabled', true);
    // add flag class to html immediately
    if (isCompact == true) document.querySelector('html').classList.add('preparing-compact-menu');
  </script>
@stack("script")
</body>
</html>
