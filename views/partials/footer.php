<footer>

    <script src="../assets/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Javascript Datatables -->
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                pagingType: 'simple_numbers',
            });
        });
    </script>

</footer>