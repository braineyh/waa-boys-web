<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAA BOYS HIGH SCHOOL</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #333;
            text-align: center;
        }

        header {
            background-color: #007BFF;
            color: #FFF;
            padding: 15px;
            text-align: center;
            box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.2);
        }

        section {
            padding: 50px 20px;
        }

        .button {
            padding: 15px 20px;
            margin: 10px;
            background-color: #00FFD1;
            color: #FFF;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            display: inline-block;
        }

        .button:hover {
            background-color: #007BFF;
            transform: scale(1.1);
        }

        .university-image {
            width: 100%;
            height: auto;
            display: block;
            margin: 20px auto;
        }

        #blog-content {
            text-align: left;
            max-width: 800px;
            margin: 0 auto;
            display: none;
        }
        .university-image{
            width: 150px;
            height: 150px;
            padding-top: 30px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <header>
        <h1>WAA BOYS HIGH SCHOOL</h1>
        <img class="university-image" src="images/logo.001.jpeg" alt="Jemedari University Logo">
    </header>

    <section id="home">
        <h2>Welcome to WAA BOYS HIGH SCHOOL</h2>
        <p>Explore the opportunities for growth and education at Waa Boys High School.</p>
        <button class="button" onclick="showBlog()">Read more about WAA</button>
    </section>

    <section id="blog-content">
        <h3>Discover Waa Boys High School</h3>
        <p>Jemedari University is not just an institution; it's a vibrant community dedicated to shaping the future of our students. Our commitment to excellence, innovation, and inclusivity sets us apart, creating an environment where students can thrive.</p>
        <p>Let's delve deeper into what makes Jemedari a hub of knowledge and personal development.</p>
        <h4>Academic Excellence</h4>
        <p>At the core of Jemedari University is a dedication to academic excellence. Our faculty, comprised of distinguished scholars and industry experts, is committed to providing a challenging and intellectually stimulating environment. We believe in nurturing critical thinking, creativity, and a lifelong love for learning.</p>
        <p>Our rigorous academic programs cover a diverse range of disciplines, ensuring that students receive a well-rounded education. From foundational courses to specialized majors, Jemedari offers a comprehensive academic experience that prepares students for success in their chosen fields.</p>
        <h4>State-of-the-Art Facilities</h4>
        <p>Jemedari is equipped with state-of-the-art facilities that enrich the learning experience. Modern classrooms, well-equipped laboratories, and extensive libraries provide students with the resources they need to excel. We invest in technology to ensure that our students are prepared for the challenges of the modern world.</p>
        <p>Our commitment to innovation extends beyond the classroom. Research centers and collaborative spaces foster creativity and exploration. Whether you're conducting experiments in a lab or working on a project in a collaborative space, Jemedari provides an environment where ideas come to life.</p>
        <h4>Diverse Courses</h4>
        <p>Recognizing the diverse interests and aspirations of our students, Jemedari offers a wide array of courses. Whether you're passionate about the arts, sciences, business, or humanities, you'll find a program that aligns with your goals. Our flexible curriculum allows students to tailor their educational journey to their unique interests.</p>
        <p>Explore new horizons, challenge yourself, and discover the joy of learning at Jemedari University.</p>
        <h4>Student-Centric Approach</h4>
        <p>At Jemedari, students are not just participants; they are active contributors to their own education. Our student-centric approach places emphasis on personalized mentorship and support. Small class sizes foster meaningful connections between students and faculty, creating an environment where every voice is heard.</p>
        <p>Academic advisors guide students on their academic journey, helping them navigate their chosen paths and explore opportunities for growth. At Jemedari, we believe in empowering students to take charge of their education and future.</p>
        <h4>Extracurricular Opportunities</h4>
        <p>Education at Jemedari goes beyond textbooks and lectures. We recognize the importance of holistic development, and our campus is alive with a multitude of extracurricular activities. Whether you're interested in sports, arts, community service, or leadership, there's a place for you at Jemedari.</p>
        <p>Participate in clubs, engage in community outreach, or join one of our many student organizations. These experiences not only enhance your skills but also contribute to a vibrant campus culture where lifelong friendships are formed.</p>
        <h4>Campus Life and Community</h4>
        <p>Step onto our picturesque campus and feel the energy of a community dedicated to growth and collaboration. Campus life at Jemedari is a tapestry of cultural events, academic forums, and student-led initiatives. Engage in spirited debates, attend inspiring lectures, and witness the creativity of your peers.</p>
        <p>Our diverse and inclusive community values open-mindedness and mutual respect. Jemedari is more than a place of learning; it's a home where individuals from different backgrounds come together to create a rich tapestry of experiences.</p>
        <h4>Join Jemedari University</h4>
        <p>The journey to excellence begins at Jemedari University. Whether you're a prospective student, a parent, or an academic professional, we invite you to explore our programs, visit our campus, and experience the warmth and vibrancy that define Jemedari.</p>
        <p>Join us in shaping a future where education knows no bounds, and every individual has the opportunity to reach their fullest potential. Jemedari University – where knowledge meets inspiration, and the journey to excellence is shared by all.</p>
    </section>

    <footer>
        <p>&copy; 2024 Waa Boys High School. All rights reserved.</p>
    </footer>

    <script>
        function showBlog() {
            const blogContent = document.getElementById('blog-content');
            blogContent.style.display = 'block';
        }
    </script>
</body>

</html>
