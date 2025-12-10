<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $course = htmlspecialchars($_POST['course']);
    
    // Map course values to readable names
    $courses = [
        'web-dev' => 'Web Development',
        'data-science' => 'Data Science',
        'ui-ux' => 'UI/UX Design',
        'cloud' => 'Cloud Computing'
    ];
    $courseName = isset($courses[$course]) ? $courses[$course] : $course;
} else {
    // Redirect if accessed directly
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-card success-card">
            <div class="form-header">
                <h2>Success!</h2>
                <p>Your application has been received.</p>
            </div>
            
            <div class="success-details">
                <div class="detail-row">
                    <span class="detail-label">Full Name</span>
                    <span class="detail-value"><?php echo $fullname; ?></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Email</span>
                    <span class="detail-value"><?php echo $email; ?></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Phone</span>
                    <span class="detail-value"><?php echo $phone; ?></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Course</span>
                    <span class="detail-value"><?php echo $courseName; ?></span>
                </div>
            </div>

            <div style="margin-top: 30px;">
                <a href="index.html" style="text-decoration: none;">
                    <button>Register Another</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
