<script>
    function checkAdmin() {
        var namaAdmin = "admin";
        var inputAdminName = document.getElementById("adminName").value;

        if (inputAdminName === namaAdmin) {
            // Jika nama admin benar, tampilkan formulir login
            document.getElementById("adminModal").style.display = "none";
            document.querySelector('section').style.display = "block";
        } else {
            // Jika nama admin tidak valid, alihkan ke halaman lain setelah 10 detik
            setTimeout(function () {
                window.location.href = '/';
            }, 100); // 10000 milidetik = 10 detik
        }
    }

    // Tampilkan modal admin saat halaman dimuat
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById("adminModal").style.display = "block";
        document.querySelector('section').style.display = "none";
    });
</script>