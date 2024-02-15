<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Subject Blog</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #107c58;
            text-align: center;
        }

        header {
            background-color: #ff0000;
            color: #ffffff;
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
            background-color: #00ff9d;
            transform: scale(1.1);
        }

        .subject-container {
            text-align: left;
            max-width: 800px;
            margin: 0 auto;
            display: none;
        }

        .subject-list {
            list-style-type: none;
            padding: 0;
        }

        .subject-list li {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #FFF;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Explore Subjects That Are Offered</h1>
    </header>

    <section id="home">
        <h2>Discover a World of Learning</h2>
        <p>Explore the diverse range of subjects offered in our school and shape your academic journey.</p>
        <button class="button" onclick="showsubjects()">View Subjects offered</button>
    </section>

    <section id="subject-container" class="subject-container">
        <h3> subjects offered in our school</h3>
        <ul class="subject-list">
            <li>
                <h4>languages derpatment</h4>
                <p>Explore the rich tapestry of human thought, history, and society through courses in literature, history, philosophy, psychology, and more.</p>
            </li>
            <li>
                <h4>Mathematics derpatment</h4>
                <p>Explore the rich tapestry of human thought, history, and society through courses in literature, history, philosophy, psychology, and more.</p>
            </li>
            <li>
                <h4>Science derpatment</h4>
                <p>Explore the rich tapestry of human thought, history, and society through courses in literature, history, philosophy, psychology, and more.</p>
            </li>
            <li>
                <h4>Technical derpatment</h4>
                <p>Explore the rich tapestry of human thought, history, and society through courses in literature, history, philosophy, psychology, and more.</p>
            </li>
            <li>
                <h4>Humanities derpatment</h4>
                <p>Explore the rich tapestry of human thought, history, and society through courses in literature, history, philosophy, psychology, and more.</p>
            </li>
        </ul>
    </section>

    <footer>
        <p>&copy; 2024 Subjects offered Blog. All rights reserved.</p>
    </footer>

    <script>
        function showsubjects() {
            const courseContainer = document.getElementById('subject-container');
            courseContainer.style.display = 'block';
        }
    </script>
</body>

</html>
