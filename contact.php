<?php include 'partials/header.php'; ?>
<main>
    <br>
    <br>
    <div id="overlay">
        <form onsubmit="event.preventDefault(); validateForm()">
            <h1>Contact nous</h1>

            <label for="name">Name:</label>
            <input type="text" id="name" placeholder="Your name">
            <small class="error"></small>

            <label for="email">Email:</label>
            <input type="text" id="email" placeholder="Your email">
            <small class="error"></small>

            <label for="message">Message:</label>
            <textarea id="message" placeholder="Your message" rows="6"></textarea>
            <small class="error"></small>

            <div class="center">
                <input type="submit" value="Send Message">
                <p id="success"></p>
            </div>
        </form>
    </div>
</main>

<script src="assets/js/script.js"></script>

<?php include 'partials/footer.php'; ?>