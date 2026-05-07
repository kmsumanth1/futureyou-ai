

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    cgpa FLOAT,
    skills TEXT,
    interests TEXT,
    projects TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);