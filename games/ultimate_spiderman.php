<?php include '../includes/header.php'; ?>
<div class="container">
    <h2>Ultimate Spider-Man</h2>
    <img src="../images/ultimate_spiderman.jpg" alt="Ultimate Spider-Man" class="game-image">

    <!-- Carousel -->
    <div class="carousel">
        <img class="carousel-image" src="../images/ultimate_spiderman_1.jpg" alt="Ultimate Spider-Man Scene 1">
        <img class="carousel-image" src="../images/ultimate_spiderman_2.jpg" alt="Ultimate Spider-Man Scene 2">
        <img class="carousel-image" src="../images/ultimate_spiderman_3.jpg" alt="Ultimate Spider-Man Scene 3">
        <button class="carousel-button prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="carousel-button next" onclick="changeSlide(1)">&#10095;</button>
    </div>

    <!-- Game Description -->
    <p>Ultimate Spider-Man brings the world of Marvel's iconic superhero to life with action-packed gameplay and stunning graphics.</p>
    <p>Join Peter Parker as he juggles his life as a student and a hero, fighting iconic villains like Venom, Dr. Octopus, and more.</p>
    <p>With fast-paced combat, web-swinging across the city, and an engaging story, Ultimate Spider-Man is a must-play for any Spider-Man fan.</p>

    <!-- Download Button -->
    <a class="download-button" onclick="showModal()">Download Ultimate Spider-Man</a>
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
