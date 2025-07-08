-- Create database
CREATE DATABASE IF NOT EXISTS assignment1;
USE assignment1;

-- Create table
CREATE TABLE IF NOT EXISTS vibe_coding (
  id INT AUTO_INCREMENT PRIMARY KEY,
  full_name VARCHAR(100) NOT NULL,
  program VARCHAR(100) NOT NULL,
  github_username VARCHAR(100) NOT NULL,
  photo_url VARCHAR(255),
  registered_at DATE NOT NULL
);

-- Insert sample participant data
INSERT INTO vibe_coding (full_name, program, github_username, photo_url, registered_at) VALUES
('Mahak Patel', 'Web Development', 'oyemahak', 'mahak.jpg', '2024-09-01'),
('Jeet Mehta', 'Computer Programming', 'jeetdev', 'jeet.jpg', '2024-09-02'),
('Jaymin Shah', 'Cyber Security', 'jayshah', 'jaymin.jpg', '2024-09-03'),
('Rutul Patel', 'Data Analytics', 'rutulcoder', 'rutul.jpg', '2024-09-04'),
('Sara Patel', 'Software Engineering', 'saracodes', 'sara.jpg', '2024-09-05'),
('Anika Roy', 'UX Design', 'anikaroy', NULL, '2024-09-06'),
('Kunal Desai', 'Game Development', 'kunalgames', NULL, '2024-09-07');