<?php include 'navbar.php'; ?>

<div class="container mt-5">
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    switch ($page) {
        case 'home':
            include 'home.php';
            break;
        case 'hello':
            include 'hello.php';
            break;
        case 'form':
            include 'form.php';
            break;
        case 'about':
            include 'about.php';
            break;
        case 'contact':
            include 'contact.php';
            break;
        case 'datatables':
            include 'datatables.php';
            break;
        default:
            include '404.php';
            break;
        case 'content':
            include 'content.php';
            break;
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

