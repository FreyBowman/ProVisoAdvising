<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ProViso";

// Create Connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    trigger_error("Connection failed: " . mysqli_connect_error());
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-5.0.2-dist\css\bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>

    <style>
        .container {
            margin: auto;
        }

        .row {
            display: flex;
            /* equal height of the children */
        }

        .col {
            padding: 1em;
            border: solid;
        }

        .bg {
            /* The image used */
            background-image: url(img/DashboardBackground.jpg);

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .range-wrap {
            position: relative;
            margin: 0 auto 3rem;
        }

        .range {
            width: 100%;
        }

        .bubble {
            background: blue;
            color: white;
            padding: 4px 12px;
            position: absolute;
            border-radius: 4px;
            left: 50%;
            transform: translateX(-50%);
        }

        .bubble::after {
            content: "";
            position: absolute;
            width: 2px;
            height: 2px;
            background: red;
            top: -1px;
            left: 50%;
        }
    </style>
</head>

<body class="bg">
    <header>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" style="color: gold" href="index.html">
                    ProViso
                </a>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.html">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ptft.php">
                            Part-time or Full-time
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.html">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">
                            Contact Us
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav d-flex flex-row">
                    <!-- Icons -->
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="https://www.facebook.com/" target="_blank">
                            <i class="bi bi-facebook">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg>
                            </i>
                        </a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="https://twitter.com/" target="_blank">
                            <i class="bi bi-twitter">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                </svg>
                            </i>
                        </a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="https://instagram.com/" target="_blank">
                            <i class="bi bi-twitter">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg>
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Navigation Bar -->
    </header>
    <main>
        <!-- Tool Bar -->
        <form action="#" method="POST" id="query_form">
            <div class="row">
                <div class="col-md-11 bg-dark" style="margin: auto">
                    <div class="container" style="margin-top: 20px;">
                        <label class="form-label" for="Cars" style="color: white">
                            Preferred Career
                        </label>
                        <select class="form-select" name="Major-Selector" id="Cars" required>
                            <option value="">
                                Select
                            </option>
                            <option value="Computer_Science">
                                Computer Science
                            </option>
                            <option value="Not_Computer_Science">
                                Other Career
                            </option>
                        </select>
                    </div>

                    <div class="container" style="margin-top: 20px;">
                        <label class="form-label" for="LocS" style="color: white">
                            Preferred Location
                        </label>
                        <select class="form-select" id="LocS" name="locselector">
                            <option value="">
                                Select
                            </option>
                            <?php
                            //Run Query
                            $stmt = "SELECT DISTINCT `location` FROM `classes` WHERE 1";
                            $result = mysqli_query($con, $stmt) or die(mysqli_error($con));
                            while (list($category) = mysqli_fetch_row($result)) {
                                echo '<option value="' . $category . '">' . $category . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="container" style="margin-top: 20px;">
                        <label class="form-label" for="BugSlide" style="color: white">
                            Choose Budget
                        </label>
                        <div class="range-wrap">
                            <input id="BugSlide" type="range" class="range" min="0" max="20000" step="100">
                            <div>
                                <ouput class="bubble"></ouput>
                            </div>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom: 5px">
                        <input type="submit" value="Search" class="btn btn-primary w-10" id="search_btn">
                    </div>
                </div>
                <script>
                    const allRanges = document.querySelectorAll(".range-wrap");
                    allRanges.forEach(wrap => {
                        const range = wrap.querySelector(".range");
                        const bubble = wrap.querySelector(".bubble");

                        range.addEventListener("input", () => {
                            setBubble(range, bubble);
                        });
                        setBubble(range, bubble);
                    });

                    function setBubble(range, bubble) {
                        const val = range.value;
                        const min = range.min ? range.min : 0;
                        const max = range.max ? range.max : 100;
                        const newVal = Number(((val - min) * 100) / (max - min));
                        bubble.innerHTML = val;

                        // Sorta magic numbers based on size of the native UI thumb
                        bubble.style.left = `calc(${newVal}% + (${8 - newVal * 0.15}px))`;
                    }
                </script>
            </div>
        </form>
        <!-- Tool Bar -->
        <!-- Advising Container -->
        <div class="col-md-12">
            <div class="container bg-dark" style="height: 600px; width: 80%; margin: auto; margin-top: 20px;">
                <!-- Tabs navs -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="class-tab" data-bs-toggle="tab" data-bs-target="#classes"
                            type="button" role="tab" aria-controls="classes" aria-selected="true">
                            Classes
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="graph-tab" data-bs-toggle="tab" data-bs-target="#graphs"
                            type="button" role="tab" aria-controls="graphs" aria-selected="false">
                            Graphs
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="classes" role="tabpanel" aria-labelledby="class-tab">
                        <p style="color: white">
                            Class Content
                        </p>
                    </div>
                    <div class="tab-pane fade" id="graphs" role="tabpanel" aria-labelledby="graph-tab">
                        <p style="color: white">
                            Graph Content
                        </p>
                    </div>
                </div>
            </div>
            <!-- Tabs navs -->
        </div>
        </div>
    </main>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script>
        $(document).ready(function () {
            $(".add_item_btn").click(function (e) {
                e.preventDefault();
                $("#show_class").prepend(`
                    <div class="row">
                        <div class="col-md-10 mb-3">
                            <select class="form-select" name="Class-Selector" id="claS1" required>
                                <option value="">
                                    Select
                                </option>
                                <?php
                                //Run Query
                                $stmt = "SELECT DISTINCT `name` FROM `classes` WHERE 1";
                                $result = mysqli_query($con, $stmt) or die(mysqli_error($con));
                                while (list($category) = mysqli_fetch_row($result)) {
                                    echo '<option value="' . $category . '">' . $category . '</option>';
                                }

                                mysqli_close($con);
                                ?>
                            </select>
                        </div>
                        <div class="col-md-2 mb-3">
                            <button class="btn btn-danger remove_item_btn"  style="margin: auto; width: 70%;">
                                Remove Class
                            </button>
                        </div>
                    </div>
                `);
            });

            $(document).on('click', '.remove_item_btn', function (e) {
                let row_item = $(this).parent().parent();
                $(row_item).remove();
            });

            // ajax request to query all form data
            $("#query_form").submit(function (e) {
                $("search_btn").val('Searching...');
                $.ajax({
                    //Query request
                });
            });
        });
    </script>
</body>

</html>

<?php
mysqli_close($con);
?>