<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اتصال</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <h1>اتصال</h1>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">موقعي</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">حول</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">معرض</a>
                    </li>
                 
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">اتصال</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container mt-4">
        <section id="contact">
            <h2>اتصال</h2>
            <form action="send_email.php" method="POST">
                <div class="form-group">
                    <label for="username">الاسم</label>
                    <input type="text" class="form-control" id="username" name="username" maxlength="20" required>
                </div>
                <div class="form-group">
                    <label for="email">البريد الإلكتروني</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="note">الملاحظات</label>
                    <textarea class="form-control" id="note" name="note" rows="4" maxlength="100" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">إرسال</button>
            </form>
        </section>
    </main>
    <footer class="bg-primary text-white text-center py-3">
        <p>&copy; 2024 موقعي الشخصي</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
