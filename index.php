<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Basic validation (expand as needed)
    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $email, $subject, $message]);
        echo "Message saved successfully!";
    } else {
        echo "Please fill all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxvA5OBs9v4Yn9BsQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="70">

    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home">Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#notes">Notes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home" class="d-flex align-items-center justify-content-center text-center text-white" style="background: url('img/bg.png') no-repeat center center/cover; height: 100vh;">
        <div>
            <h1 class="display-3 fw-bold">My Portfolio</h1>
            <p class="lead">Welcome to my Portfolio – The Life of a Programmer</p>
            <img src="img/MyID.jpg" alt="My Photo" class="home-photo img-fluid rounded-circle">
            <a href="#contact" class="btn btn-contact mt-4">Contact Me</a>
        </div>
    </section>

    <section id="skills" class="container py-5">
        <h2 class="text-center mb-5">My Skills</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 text-center border-0 shadow-sm">
                    <img src="img/PHP.jpg" class="card-img-top mx-auto" alt="PHP" style="width: 150px; height: 150px; object-fit: contain;">
                    <div class="card-body">
                        <h5 class="card-title">PHP</h5>
                        <div class="progress mt-3">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center border-0 shadow-sm">
                    <img src="img/JS.jpg" class="card-img-top mx-auto" alt="JavaScript" style="width: 150px; height: 150px; object-fit: contain;">
                    <div class="card-body">
                        <h5 class="card-title">JavaScript</h5>
                        <div class="progress mt-3">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center border-0 shadow-sm">
                    <img src="img/HTMLCSS.jpg" class="card-img-top mx-auto" alt="HTML/CSS" style="width: 150px; height: 150px; object-fit: contain;">
                    <div class="card-body">
                        <h5 class="card-title">HTML/CSS</h5>
                        <div class="progress mt-3">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center border-0 shadow-sm">
                    <img src="img/PYTHON.jpg" class="card-img-top mx-auto" alt="Python" style="width: 150px; height: 150px; object-fit: contain;">
                    <div class="card-body">
                        <h5 class="card-title">Python</h5>
                        <div class="progress mt-3">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center border-0 shadow-sm">
                    <img src="img/JAVA.jpg" class="card-img-top mx-auto" alt="Java" style="width: 150px; height: 150px; object-fit: contain;">
                    <div class="card-body">
                        <h5 class="card-title">Java</h5>
                        <div class="progress mt-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center border-0 shadow-sm">
                    <img src="img/MYSQL.jpg" class="card-img-top mx-auto" alt="MySQL" style="width: 150px; height: 150px; object-fit: contain;">
                    <div class="card-body">
                        <h5 class="card-title">MySQL</h5>
                        <div class="progress mt-3">
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="container py-5 bg-light">
        <h2 class="text-center mb-5">My Projects</h2>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card h-100 border-0 shadow">
                    <img src="img/project1.jpg" class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title">E-Commerce Website</h5>
                        <p class="card-text">A full-stack e-commerce platform built with PHP, MySQL, and JavaScript. Features include user authentication, product catalog, and payment integration.</p>
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0 shadow">
                    <img src="img/project2.jpg" class="card-img-top" alt="Project 2">
                    <div class="card-body">
                        <h5 class="card-title">Portfolio App</h5>
                        <p class="card-text">A responsive web app showcasing personal projects, built with HTML, CSS, Bootstrap, and JavaScript for dynamic interactions.</p>
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
            </div>
            <!-- Add more projects as needed -->
        </div>
    </section>

    <section id="about" class="container py-5">
        <h2 class="text-center mb-5">About Me</h2>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <p class="lead text-center multi-column">I'm a passionate web developer skilled in PHP, JavaScript, HTML, CSS, and MySQL. I enjoy building responsive and user-friendly websites.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card border-primary shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4>PHP Programmer</h4>
                    </div>
                    <div class="card-body text-center">
                        <img src="img/MyImage1.png" class="img-fluid rounded-circle mb-3" alt="PHP Image" style="width: 150px; height: 150px;">
                        <p class="lead">I specialize in PHP programming for back-end development.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-primary shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4>Java Programmer</h4>
                    </div>
                    <div class="card-body text-center">
                        <img src="img/MyImage2.png" class="img-fluid rounded-circle mb-3" alt="Java Image" style="width: 150px; height: 150px;">
                        <p class="lead">I excel in OOP programming with Java.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="notes" class="container py-5 bg-light">
        <h2 class="text-center mb-5 fade-in">Notes</h2>
        <div class="row justify-content-center fade-in">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-sm border-0 mb-4 fade-in">
                    <div class="card-header bg-primary text-white rounded-top">
                        <h5 class="mb-0">AIS 1 Learnings</h5>
                    </div>
                    <div class="card-body bg-light">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fa fa-book me-2 text-primary"></i><a href="Midterm_Class_Notes/AIS_1_Learnings/1.Class Orientation.md" target="_blank" class="text-decoration-none">Class Orientation</a></li>
                            <li class="list-group-item"><i class="fa fa-shield-halved me-2 text-success"></i><a href="Midterm_Class_Notes/AIS_1_Learnings/2.Importance of IT security.md" target="_blank" class="text-decoration-none">Importance of IT Security</a></li>
                            <li class="list-group-item"><i class="fa fa-briefcase me-2 text-info"></i><a href="Midterm_Class_Notes/AIS_1_Learnings/3.Career opportunities in IT Security.md" target="_blank" class="text-decoration-none">Career Opportunities in IT Security</a></li>
                            <li class="list-group-item"><i class="fa fa-cloud me-2 text-secondary"></i><a href="Midterm_Class_Notes/AIS_1_Learnings/4.Cloud & Virtualization Fundamentals.md" target="_blank" class="text-decoration-none">Cloud & Virtualization Fundamentals</a></li>
                            <li class="list-group-item"><i class="fa fa-globe me-2 text-warning"></i><a href="Midterm_Class_Notes/AIS_1_Learnings/5.Introduction to Web Application Security.md" target="_blank" class="text-decoration-none">Introduction to Web Application Security</a></li>
                            <li class="list-group-item"><i class="fa fa-terminal me-2 text-danger"></i><a href="Midterm_Class_Notes/AIS_1_Learnings/6.OS Command Injection.md" target="_blank" class="text-decoration-none">OS Command Injection</a></li>
                            <li class="list-group-item"><i class="fa fa-bug me-2 text-dark"></i><a href="Midterm_Class_Notes/AIS_1_Learnings/7.Cross-Site Scripting (XSS).md" target="_blank" class="text-decoration-none">Cross-Site Scripting (XSS)</a></li>
                            <li class="list-group-item"><i class="fa fa-toolbox me-2 text-primary"></i><a href="Midterm_Class_Notes/AIS_1_Learnings/8. Burp Suite.md" target="_blank" class="text-decoration-none">Burp Suite</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5 text-white" style="background: #000;">
        <div class="container">
            <h2 class="text-center mb-5">Contact Me</h2>
            <form class="row g-3 justify-content-center" action="send_email.php" method="POST">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>
                <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="5" placeholder="Your Message" required></textarea>
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-success">Send Message</button>
                </div>
            </form>
            <div class="text-center mt-4">
                <a href="https://twitter.com/yourprofile" class="text-white me-3"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="https://linkedin.com/in/yourprofile" class="text-white me-3"><i class="fab fa-linkedin fa-2x"></i></a>
                <a href="https://github.com/yourprofile" class="text-white"><i class="fab fa-github fa-2x"></i></a>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Michelle P. Llander. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // Smooth scrolling for nav links
        document.querySelectorAll('a.nav-link[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>