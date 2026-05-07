<?php

include 'db.php';

$name = $_POST['name'];
$cgpa = $_POST['cgpa'];
$skills = strtolower($_POST['skills']);
$interests = strtolower($_POST['interests']);
$projects = $_POST['projects'];
$resumeName = $_FILES['resume']['name'];

move_uploaded_file(
    $_FILES['resume']['tmp_name'],
    "uploads/".$resumeName
);

mysqli_query($conn,
"INSERT INTO students(name,cgpa,skills,interests,projects)
VALUES('$name','$cgpa','$skills','$interests','$projects')"
);

$career = "Software Developer";
$match = 70;
$salary = "5-8 LPA";

$missingSkills = [
    "DSA",
    "Communication",
    "System Design"
];

if(
    strpos($skills,'java') !== false ||
    strpos($skills,'spring') !== false
){
    $career = "Backend Developer";
    $match = 85;
    $salary = "8-15 LPA";

    $missingSkills = [
        "Microservices",
        "Docker",
        "AWS"
    ];
}

if(
    strpos($skills,'python') !== false ||
    strpos($skills,'ai') !== false
){
    $career = "AI Engineer";
    $match = 92;
    $salary = "12-20 LPA";

    $missingSkills = [
        "TensorFlow",
        "Deep Learning",
        "MLOps"
    ];
}

if(
    strpos($skills,'php') !== false ||
    strpos($skills,'mysql') !== false
){
    $career = "Full Stack Developer";
    $match = 88;
    $salary = "7-14 LPA";

    $missingSkills = [
        "React",
        "Node.js",
        "API Security"
    ];
}

$missing = implode(",", $missingSkills);

header("Location: dashboard.php?career=$career&match=$match&salary=$salary&missing=$missing&name=$name");

?>