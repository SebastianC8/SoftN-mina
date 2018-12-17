<?php if(Session::has('sweetalert.json')): ?>
    <script>
        swal(<?php echo Session::pull('sweetalert.json'); ?>);
    </script>
<?php endif; ?>