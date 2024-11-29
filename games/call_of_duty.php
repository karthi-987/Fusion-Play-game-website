<?php include '../includes/header.php'; ?>
<div class="container">
    <h2>Call of Duty</h2>
    <img src="../images/call_of_duty.jpg" alt="Call of Duty" class="game-image">

    <!-- Carousel -->
    <div class="carousel">
        <img class="carousel-image" src="../images/call_of_duty_1.jpg" alt="Call of Duty Scene 1">
        <img class="carousel-image" src="../images/call_of_duty_2.jpg" alt="Call of Duty Scene 2">
        <img class="carousel-image" src="../images/call_of_duty_3.jpg" alt="Call of Duty Scene 3">
        <button class="carousel-button prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="carousel-button next" onclick="changeSlide(1)">&#10095;</button>
    </div>

    <!-- Game Description -->
    <p>Call of Duty: Modern Warfare is known for its immersive and realistic combat mechanics. It focuses on tactical gameplay, with high-quality visuals and sound design that make players feel like they're in the midst of real military operations. The game offers both single-player campaigns and multiplayer modes, providing a variety of action-packed experiences.</p>
    <p>The game features robust multiplayer modes, including fast-paced team-based gameplay and larger, more tactical battle scenarios. Players can engage in various game types such as Team Deathmatch, Domination, and Search and Destroy, all of which emphasize strategy and teamwork. The game introduces new weapons, maps, and killstreaks to keep gameplay fresh.</p>
    <p>The campaign of Modern Warfare delivers a gripping narrative centered around global conflicts, featuring soldiers and characters trying to prevent a major international crisis. The storyline tackles complex geopolitical issues and offers players a chance to make critical decisions that affect the outcome of the mission.</p>

    <!-- Download Button -->
    <a class="download-button" onclick="showModal()">Download Call of Duty</a>
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
