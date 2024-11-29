<?php include '../includes/header.php'; ?>
<div class="container">
    <h2>God of War</h2>
    <img src="../images/god_of_war.jpg" alt="God of War" class="game-image">

    <!-- Carousel -->
    <div class="carousel">
        <img class="carousel-image" src="../images/god_of_war_1.jpg" alt="God of War Scene 1">
        <img class="carousel-image" src="../images/god_of_war_2.jpg" alt="God of War Scene 2">
        <img class="carousel-image" src="../images/god_of_war_3.jpg" alt="God of War Scene 3">
        <button class="carousel-button prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="carousel-button next" onclick="changeSlide(1)">&#10095;</button>
    </div>

    <!-- Game Description -->
    <p>Embark on a thrilling journey with Kratos as he battles gods and monsters in this action-packed saga.</p>
    <p>In *God of War*, you will explore breathtaking realms, face fearsome creatures, and uncover a heartfelt story of fatherhood and redemption.</p>
    <p>With stunning graphics, immersive gameplay, and a gripping narrative, this game is a masterpiece of modern gaming.</p>

    <!-- Download Button -->
    <a class="download-button" onclick="showModal()">Download God of War</a>
</div>

<!-- Modal -->
<div id="downloadModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <p>Download has started! Enjoy your game!</p>
    </div>
</div>

<script>
    function showModal() {
        document.getElementById('downloadModal').style.display = "block";
    }

    function closeModal() {
        document.getElementById('downloadModal').style.display = "none";
    }

    // Close modal if user clicks anywhere outside of the modal
    window.onclick = function(event) {
        if (event.target == document.getElementById('downloadModal')) {
            closeModal();
        }
    }

    let currentSlide = 0;
    const slides = document.querySelectorAll('.carousel-image');

    function changeSlide(direction) {
        slides[currentSlide].style.display = 'none';
        currentSlide = (currentSlide + direction + slides.length) % slides.length;
        slides[currentSlide].style.display = 'block';
    }
</script>

<?php include '../includes/footer.php'; ?>
