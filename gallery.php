<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>معرض</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <h1>معرض</h1>
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
        <section id="gallery">
            <h2>معرض</h2>
            <p>مرحبًا بكم في معرضي. هنا أقدم لكم لمحة عن أنواع المشاريع التي يمكنني إنجازها. إذا كنتم تبحثون عن تصميم موقع ويب، تطبيقات ويب، أو أي نوع آخر من الحلول البرمجية، فأنا هنا لتلبية احتياجاتكم</p>
            <div class="photos">
                <div class="photo">
                    <img src="1.jpg" alt="">
                </div><div class="photo">
                    <img src="2.jpg" alt="">
                </div>
                <div class="photo">
                    <img src="3.jpg" alt="">
                </div>
                
            </div>
        </section>
    </main>
    <footer class="bg-primary text-white text-center py-3">
        <p>&copy; 2024 موقعي الشخصي</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
