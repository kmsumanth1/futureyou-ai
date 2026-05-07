<!DOCTYPE html>
<html>

<head>

<title>FutureYou AI Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<link rel="stylesheet" href="style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<style>

body{
    background:#020617;
}

.result-card{
    background:#0f172a;
    border-radius:20px;
    padding:30px;
    box-shadow:0 0 20px rgba(56,189,248,0.2);
}

.highlight{
    color:#38bdf8;
    font-weight:bold;
}

.skill-box{
    background:#1e293b;
    padding:15px;
    border-radius:12px;
    margin-bottom:10px;
}

</style>

</head>

<body>
    <button onclick="toggleMode()"
        class="btn btn-light position-fixed top-0 end-0 m-4">
    Toggle Mode
</button>

<div class="container py-5">
    <button onclick="downloadPDF()"
        class="btn btn-info mb-4">
    Download PDF Report
    </button>

    <h1 class="text-center mb-5">
        Welcome,
        <span class="highlight">
            <?php echo $_GET['name']; ?>
        </span>
    </h1>

    <div class="result-card">

        <h2>
            🚀 Best Career Path:
            <span class="highlight">
                <?php echo $_GET['career']; ?>
            </span>
        </h2>

        <h3 class="mt-4">
            🎯 Match Percentage:
            <span class="highlight">
                <?php echo $_GET['match']; ?>%
            </span>
        </h3>

        <h3 class="mt-4">
            💰 Salary Prediction:
            <span class="highlight">
                <?php echo $_GET['salary']; ?>
            </span>
        </h3>
        <h3 class="mt-4">
        🤖 AI Confidence:
         <span class="highlight">
        96%
         </span>
        </h3>

        <hr class="my-4">
        <h3 class="mb-4">
    🔥 Alternative Career Matches
</h3>

<div class="row">

    <div class="col-md-4">
        <div class="skill-box text-center">
            <h4>AI Engineer</h4>
            <h2>92%</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="skill-box text-center">
            <h4>Full Stack Developer</h4>
            <h2>88%</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="skill-box text-center">
            <h4>Cloud Engineer</h4>
            <h2>81%</h2>
        </div>
    </div>

</div>

<hr class="my-4">

        <h3 class="mb-3">
            Missing Skills
        </h3>

        <?php

        $skills = explode(",", $_GET['missing']);

        foreach($skills as $skill){

            echo "<div class='skill-box'>$skill</div>";

        }

        ?>

        <hr class="my-4">

        <h3>
            📈 Improvement Roadmap
        </h3>

        <div class="mt-4">

            <div class="skill-box">
                Month 1 → Learn Advanced Concepts
            </div>

            <div class="skill-box">
                Month 2 → Build Real Projects
            </div>

            <div class="skill-box">
                Month 3 → Practice Interviews
            </div>
        <div class="result-card mt-5">

```
<h3 class="mb-4">
    🏢 Recommended Companies
</h3>

<div class="row">

    <div class="col-md-4">
        <div class="skill-box text-center">
            <h4>TCS</h4>
            <p>Best for Full Stack Roles</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="skill-box text-center">
            <h4>Infosys</h4>
            <p>Great for Backend Engineers</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="skill-box text-center">
            <h4>Google</h4>
            <p>Ideal for AI & DSA Experts</p>
        </div>
    </div>

</div>
```

</div>

        </div>

    </div>
    <div class="result-card mt-5">

```
<h3 class="mb-4">
    🏆 Top Career Scores
</h3>

<table class="table table-dark">

    <tr>
        <th>Name</th>
        <th>Career</th>
        <th>Score</th>
    </tr>

    <tr>
        <td>Sumanth</td>
        <td>AI Engineer</td>
        <td>96%</td>
    </tr>

    <tr>
        <td>Rahul</td>
        <td>Full Stack Dev</td>
        <td>91%</td>
    </tr>

    <tr>
        <td>Anjali</td>
        <td>Cloud Engineer</td>
        <td>88%</td>
    </tr>

</table>
```

</div>

    <div class="result-card mt-5">

    <h3 class="mb-4">
        🤖 AI Suggestions
    </h3>

    <div class="skill-box">
        Build more real-world projects to increase hiring chances.
    </div>

    <div class="skill-box">
        Improve DSA skills for product-based companies.
    </div>

    <div class="skill-box">
        Learn cloud deployment and API integration.
    </div>

</div>
    <div class="result-card mt-5">

        <h3 class="mb-4">
            Skill Analysis Graph
        </h3>

        <div style="width:600px; margin:auto;">
    <canvas id="skillChart"></canvas>
</div>

    </div>

</div>

<script>

const ctx = document.getElementById('skillChart');

new Chart(ctx, {

    options: {
        responsive:true,
        maintainAspectRatio:true,
        scales:{
            r:{
                suggestedMin:0,
                suggestedMax:100
            }
        }
    },

    type: 'radar',

    data: {

        labels: [
            'Programming',
            'Problem Solving',
            'Communication',
            'Development',
            'AI Readiness'
        ],

        datasets: [{

            label: 'Skill Score',

            data: [90,80,65,85,75]

        }]
    }

});

</script>
<script>

function toggleMode(){

    document.body.classList.toggle("light-mode");

}

</script>
<script>

function downloadPDF(){

    const element = document.body;

    html2pdf().from(element).save("FutureYou_Report.pdf");

}

</script>
</body>
</html>