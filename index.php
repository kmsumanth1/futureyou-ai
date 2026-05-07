<!DOCTYPE html>
<html>

<head>

    <title>FutureYou AI</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
</head>

<body>
<div id="particles-js"></div>
<div class="hero">

    <div class="container text-center">

        <h1 class="title typing">
            FutureYou AI
        </h1>

        <p class="subtitle">
            Predict Your Future Career Path Using AI
        </p>
        <p style="color:#22c55e;">
        ● AI Engine Online
        </p>

        <a href="#form-section" class="btn btn-primary btn-lg">
            Get Started
        </a>

    </div>

</div>

<div class="container mb-5" id="form-section">

    <div class="card p-4 shadow-lg">

        <h2 class="mb-4">
            Career Analysis Form
        </h2>

        <form id="careerForm"
      action="analyze.php"
      method="POST"
      enctype="multipart/form-data">

            <input type="text"
                   name="name"
                   class="form-control mb-3"
                   placeholder="Your Name"
                   required>

            <input type="number"
                   step="0.1"
                   name="cgpa"
                   class="form-control mb-3"
                   placeholder="CGPA"
                   required>

            <textarea name="skills"
                      class="form-control mb-3"
                      placeholder="Skills (Java, PHP, MySQL)"
                      required></textarea>

            <textarea name="interests"
                      class="form-control mb-3"
                      placeholder="Interests"
                      required></textarea>

            <textarea name="projects"
                      class="form-control mb-3"
                      placeholder="Projects"
                      required></textarea>
            <input type="file"
                      name="resume"
                      class="form-control mb-3">
            <button class="btn btn-success w-100">
                Analyze Career
            </button>


        </form>
        <div id="loadingScreen" style="display:none;" class="text-center mt-4">

    <div class="spinner-border text-info"></div>

    <h3 class="mt-3">
        AI is analyzing your future...
    </h3>

</div>
    </div>

</div>
<script>

particlesJS("particles-js", {

  "particles": {

    "number": {
      "value": 80
    },

    "color": {
      "value": "#38bdf8"
    },

    "shape": {
      "type": "circle"
    },

    "opacity": {
      "value": 0.5
    },

    "size": {
      "value": 3
    },

    "move": {
      "enable": true,
      "speed": 2
    }

  }

});

</script>
<script>

document
.getElementById("careerForm")
.addEventListener("submit", function(e){

    e.preventDefault();

    document
    .getElementById("loadingScreen")
    .style.display = "block";

    setTimeout(()=>{

        this.submit();

    },2500);

});

</script>
</body>

</html>