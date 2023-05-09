<?php
require('db.php');
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<html>

<head>
    <title>Dream Jobs</title>
    <link rel="stylesheet" href="CSS/dreamjobstyle.css">
</head>

<body class="banner">
    <div>
        <div class="navbar">
            <img src="https://proviso.ca/wp-content/uploads/2017/06/ProViso_og.jpg" class="logo">
            <ul>
                    <li><a href="/home">Home</a></li>
                    <li><a href="/degreeoverview">Degree Overview</a></li>
                    <li><a href="/futureclass">Future Classes</a></li>
                    <li><a href="/skillset">Skill Sets</a></li>
                    <li><a href="/scholorship">Scholarships</a></li>
                    <li><a href="/dreamjob">Dream Jobs</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/logout">Logout</a></li>
            </ul>
        </div>
        <form>
            <div class="card">
                <h1 class="card-header">Dream Job</h1>
                <div class="card-body">
                    <h3>Which company do you want to work for?</h3>
                    <select id="company" onchange="showResults()">
                        <option value="apple">Apple</option>
                        <option value="amazon">Amazon</option>
                        <option value="google">Google</option>
                        <option value="microsoft">Microsoft</option>
                        <option value="tbd">I have no idea!</option>
                    </select>
                    
                    <h3>Which job position do you prefer?</h3>
                    <select id="position" onchange="showResults2()">
                        <option value="se">Software Engineer</option>
                        <option value="wd">Web Developer</option>
                        <option value="da">Database Administrator</option>
                        <option value="mle">Machine Learning Engineer</option>
                        <option value="tbd">I have no idea!</option>
                    </select>
                    
                    <h3>Which skill-sets is your strength?</h3>
                    <select id="skill" onchange="showResults3()">
                        <option value="html">HTML/CSS</option>
                        <option value="java">Java/JavaScript</option>
                        <option value="python">Python</option>
                        <option value="C">C/C++/C#</option>
                        <option value="tbd">I have no idea!</option>
                    </select>
                    <div id="results"></div>
                    <div id="results2"></div>
                    <div id="results3"></div>
                </div>
            </div>
    </div>
    </form>
    <script>
        function showResults() {
            var selectElement = document.getElementById("company");
            var selectedValue = selectElement.value;
            var resultsElement = document.getElementById("results");

            if (selectedValue === "apple") {
                resultsElement.innerHTML = "If you want to work for Apple: Focus on creativity and design. Apple is known for its focus on product design and user experience, so if you want to work there, make sure you have a strong portfolio that showcases your creative and design skills. Be prepared to think outside the box and come up with innovative solutions to problems.";
            } else if (selectedValue === "amazon") {
                resultsElement.innerHTML = "If you want to work for Amazon: Be data-driven and customer-focused. Amazon is a data-driven company that places a high value on customer satisfaction. Make sure you have a solid understanding of data analysis and customer behavior, and be prepared to use that knowledge to drive decision-making.";
            } else if (selectedValue === "google") {
                resultsElement.innerHTML = "If you want to work for Google: Showcase your problem-solving skills. Google is a company that values innovation and problem-solving. If you want to work there, make sure you can demonstrate your ability to approach complex problems with a creative and analytical mindset. Be prepared to collaborate with others and think outside the box.";
            } else if (selectedValue === "microsoft") {
                resultsElement.innerHTML = "If you want to work for Microsoft: Demonstrate your technical expertise. Microsoft is a company that values technical skills and expertise. If you want to work there, make sure you have a strong understanding of computer science and programming languages. Be prepared to showcase your technical skills and demonstrate your ability to work with complex systems.";
            } else if (selectedValue === "tbd") {
                resultsElement.innerHTML = "If you're not sure which company to work for, my advice would be to research and compare the company cultures, values, and missions of the companies you're interested in. Look at the types of projects they work on, the opportunities for growth and development, and the benefits and perks they offer. It's also helpful to read employee reviews and talk to current or former employees to get a sense of what it's like to work there. Ultimately, choose a company that aligns with your values and interests, and where you can see yourself thriving both personally and professionally.";
            }
        }
        function showResults2() {
            var selectElement = document.getElementById("position");
            var selectedValue = selectElement.value;
            var resultsElement = document.getElementById("results2");

            if (selectedValue === "se") {
                resultsElement.innerHTML = "If you want to work as Software Development: Focus on building a strong foundation in computer science principles such as data structures, algorithms, and software design patterns. Continuously improve your programming skills by practicing coding challenges and contributing to open source projects.";
            } else if (selectedValue === "wd") {
                resultsElement.innerHTML = "If you want to work as Web Developer: Stay up-to-date with the latest web development technologies and frameworks such as HTML5, CSS3, JavaScript, and React. Learn how to design responsive and accessible user interfaces and ensure that your code follows best practices for security and performance.";
            } else if (selectedValue === "da") {
                resultsElement.innerHTML = "If you want to work as Database Administrator: Develop a deep understanding of database management systems such as MySQL, Oracle, and MongoDB. Learn how to design and optimize database schemas, perform backups and recovery, and ensure data integrity and security.";
            } else if (selectedValue === "mle") {
                resultsElement.innerHTML = "If you want to work as Machine Learning Engineer: Gain proficiency in programming languages such as Python and R, and learn how to work with machine learning libraries such as TensorFlow, PyTorch, and scikit-learn. Develop a solid understanding of statistical modeling and data analysis techniques, and practice implementing machine learning algorithms on real-world datasets.";
            } else if (selectedValue === "tbd") {
                resultsElement.innerHTML = "If you're not sure which job position to apply for, start by identifying your strengths, interests, and values. Take some time to reflect on your past experiences, education, and skills, and think about what kind of work you enjoy doing and what kind of work environment you prefer. Once you have a better sense of your career aspirations and preferences, start exploring different job roles that align with your strengths and interests. Look for job descriptions and requirements that match your skillset and experience, and consider reaching out to professionals in those fields to learn more about their day-to-day work. Finally, don't be afraid to apply for multiple job positions if you're still unsure which one is the best fit for you. Use the application process as an opportunity to learn more about the company, the job requirements, and the work culture, and take the time to ask questions and get feedback from the hiring managers. With persistence and a bit of self-reflection, you'll be able to find a job position that aligns with your career goals and personal values.";
            }
        }
        function showResults3() {
            var selectElement = document.getElementById("skill");
            var selectedValue = selectElement.value;
            var resultsElement = document.getElementById("results3");

            if (selectedValue === "html") {
                resultsElement.innerHTML = "As someone with HTML skills, it's important to expand your knowledge in related front-end web technologies such as CSS and JavaScript. Consider learning popular front-end frameworks like React or Angular to increase your marketability in the web development industry. Additionally, consider branching out into related fields like UX/UI design or web accessibility to make yourself a more well-rounded candidate.";
            } else if (selectedValue === "java") {
                resultsElement.innerHTML = "As someone with Java/Javascript skills, consider specializing in a particular domain or industry that uses these languages heavily, such as financial technology or e-commerce. Keep up to date with the latest libraries, frameworks, and trends in these industries to remain relevant. Additionally, consider learning back-end technologies like Node.js or Spring Boot to broaden your skill set and increase your versatility.";
            } else if (selectedValue === "python") {
                resultsElement.innerHTML = "As someone with Python skills, consider specializing in data science, machine learning, or artificial intelligence. These fields are growing rapidly and demand for professionals with Python expertise is increasing. Keep up to date with the latest tools and frameworks in these fields, such as TensorFlow or PyTorch. Additionally, consider learning related technologies like SQL or Hadoop to broaden your knowledge base and make yourself a more versatile candidate.";
            } else if (selectedValue === "C") {
                resultsElement.innerHTML = "As someone with C/C++/C# skills, consider specializing in fields that use these languages heavily, such as embedded systems or game development. Keep up to date with the latest standards and best practices for these languages to remain relevant. Additionally, consider learning related technologies like Unity or Unreal Engine to broaden your skill set and make yourself a more versatile candidate.";
            } else if (selectedValue === "tbd") {
                resultsElement.innerHTML = "If you're unsure if you have any skills, my advice is to start exploring your interests and trying new things. Take courses, attend workshops or seminars, or volunteer in areas that interest you. This will help you identify areas where you may have natural abilities or enjoy developing new skills. You can also seek feedback from others, such as friends, family, or coworkers, to gain insight into what they think you excel at or enjoy doing. Additionally, consider taking personality or career assessment tests to help guide you towards career paths that align with your strengths and interests. Remember, everyone has unique talents and abilities, and it's never too late to develop new skills and pursue a fulfilling career.";
            }
        }

    </script>
</body>

</html>