CREATE DATABASE team_layout;

USE team_layout;

CREATE TABLE team_layouts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    team1 JSON NOT NULL,
    team2 JSON NOT NULL
);

CREATE TABLE players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    attack_type VARCHAR(255),
    image VARCHAR(255) NOT NULL,
    team ENUM('team1', 'team2') NOT NULL,
    description TEXT
);


