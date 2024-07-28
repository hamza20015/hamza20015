<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// إعدادات قاعدة البيانات
$servername = "localhost";
$db_username = "root"; // اسم مستخدم MySQL
$db_password = ""; // كلمة مرور MySQL
$dbname = "contact_form_db";

// استلام البيانات من النموذج
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $note = $_POST['note'];

    // تحقق من صحة البيانات
    if (strlen($username) > 20 || strlen($note) > 100 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'بيانات غير صحيحة';
        exit;
    }

    // إنشاء اتصال بقاعدة البيانات
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // تحقق من الاتصال
    if ($conn->connect_error) {
        die("فشل الاتصال: " . $conn->connect_error);
    }

    // إعداد بيان SQL لإدراج البيانات
    $stmt = $conn->prepare("INSERT INTO contacts (username, email, note) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $note);

    // تنفيذ البيان
    if ($stmt->execute()) {
        echo "تم حفظ البيانات بنجاح";
    } else {
        echo "خطأ: " . $stmt->error;
    }

    // غلق الاتصال بقاعدة البيانات
    $stmt->close();
    $conn->close();

    // إعداد PHPMailer
    $mail = new PHPMailer(true);

    try {
        // إعدادات السيرفر
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // اسم مضيف SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'mohamdd.hamza.nassif@gmail.com'; // اسم المستخدم SMTP
        $mail->Password = 'ymij krna cbdg mfeh'; // كلمة مرور SMTP
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // المستلمين
        $mail->setFrom('mohamdd.hamza.nassif@gmail.com', 'Mailer');
        $mail->addAddress('mohamdd.hamza.nassif@gmail.com', 'Joe User'); // يمكن تغيير العنوان إلى بريدك الإلكتروني

        // المحتوى
        $mail->isHTML(true);
        $mail->Subject = 'نموذج الاتصال الجديد';
        $mail->Body    = "الاسم: $username<br>البريد الإلكتروني: $email<br>الملاحظات: $note";

        $mail->send();
        echo 'تم إرسال الرسالة';
    } catch (Exception $e) {
        echo "لم يتم إرسال الرسالة. خطأ في البريد: {$mail->ErrorInfo}";
    }
}
?>

