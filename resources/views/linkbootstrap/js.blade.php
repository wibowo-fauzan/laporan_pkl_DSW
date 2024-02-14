<script>
<script src ="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity = "sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin = "anonymous" ></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"> </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"> </script>
<script>

    function updateClock() {
        const now = new Date();
        const hours = now.getHours().toString().padStart(2, '0');
        const minutes = now.getMinutes().toString().padStart(2, '0');
        const seconds = now.getSeconds().toString().padStart(2, '0');
        const currentTime = `${hours}:${minutes}:${seconds}`;
        document.getElementById('realtime-clock').innerText = currentTime;
    }

    setInterval(updateClock, 1000);
    updateClock(); // Call initially to avoid delay

    
    // page tentangDSW / Visi & Misi
    function showContent(contentId) {
        // Hide all content
        var allContents = document.querySelectorAll('.content');
        allContents.forEach(function(content) {
            content.style.display = 'none';
        });

        // Show the selected content
        var selectedContent = document.getElementById(contentId + '-content');
        if (selectedContent) {
            selectedContent.style.display = 'block';
        }

        // Update active button
        var allButtons = document.querySelectorAll('.btn');
        allButtons.forEach(function(button) {
            button.classList.remove('active');
        });

        var activeButton = document.querySelector('.btn-primary.active');
        if (activeButton) {
            activeButton.classList.remove('active');
        }

        var clickedButton = document.querySelector('.btn-primary[onclick="showContent(\'' + contentId + '\')"]');
        if (clickedButton) {
            clickedButton.classList.add('active');
        }
    }

    // pln page
    function Pln() {
        location.replace("/Layanan/Pln-DSW")
    }
    
    // Pendidikan page
    function Pendidikan() {
        location.replace("/Layanan/Pendidikan-DSW")
    }
    
    // Perpustakaan page
    function Perpustakaan() {
        location.replace("/Layanan/Perpustakaan-DSW")
    }
    

    // PetaDepok page
    function PetaDepok() {
        location.replace("/Layanan/PetaDepok-DSW")
    }

    // Puspaga page
    function Puspaga() {
        location.replace("/Layanan/Puspaga-DSW")
    }

    // Transportasi page
    function Transportasi() {
        location.replace("/Layanan/Transportasi-DSW")
    }

    
    // PLNWEBSITE_page_pln-depok
    function PLNWEBSITE() {
        window.open("https://web.pln.co.id/")
    }

    // PLNDEPOKINSTAGRAM_page_pln-depok
    function PLNDEPOKINSTAGRAM() {
        window.open("https://www.instagram.com/pln_depok/")
    }

</script>
