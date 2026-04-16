<?php 
include 'config.php'; // ربط الملف الذي أنشأته قبل قليل
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #1a1a1a; color: white; text-align: center; margin: 0; padding: 0; }
        header { background-color: #333; padding: 20px; border-bottom: 3px solid #f39c12; }
        .logo { font-size: 24px; font-weight: bold; color: #f39c12; }
        .founder { font-size: 14px; color: #bbb; }
        .container { padding: 50px 20px; }
        .stat-box { background: #222; padding: 20px; border-radius: 10px; display: inline-block; margin: 10px; border: 1px solid #444; }
        .btn { background-color: #f39c12; color: black; padding: 15px 30px; text-decoration: none; border-radius: 5px; font-weight: bold; display: inline-block; margin-top: 20px; }
        footer { margin-top: 50px; padding: 20px; font-size: 12px; color: #777; }
    </style>
</head>
<body>

<header>
    <div class="logo"><?php echo SITE_NAME; ?></div>
    <div class="founder">تطوير وإشراف: <?php echo FOUNDER_NAME; ?></div>
</header>

<div class="container">
    <h1><?php echo $welcome_note; ?></h1>
    <p>المنصة الأولى عالمياً لتبادل الزيارات والأرباح الحقيقية</p>

    <div class="stat-box">
        <h3>المستخدمين النشطين</h3>
        <p id="user-count">1,240</p>
    </div>

    <div class="stat-box">
        <h3>إجمالي المدفوعات</h3>
        <p>$<?php echo number_format(rand(500, 1500), 2); ?></p>
    </div>

    <br>
    <a href="#" class="btn">ابدأ الربح الآن</a>
</div>

<footer>
    &copy; <?php echo date("Y"); ?> جميع الحقوق محفوظة لـ <?php echo FOUNDER_NAME; ?>
</footer>

<script>
    // عداد وهمي بسيط لزيادة الحماس كما اتفقنا
    setInterval(() => {
        let count = document.getElementById('user-count');
        count.innerText = parseInt(count.innerText) + Math.floor(Math.random() * 3);
    }, 5000);
</script>

</body>
</html>

