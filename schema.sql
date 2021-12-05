CREATE DATABASE bugme;
USe bugme;

-- User Table Stuff 
CREATE TABLE users(
    id INT unsigned NOT NULL auto_increment,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    date_joined DATETIME,
    PRIMARY KEY(id)
);

-- Insert Test User  *double check if the password thingy works***  
INSERT INTO users VALUES
('Johnny','Test',PASSWORD('password123'),'admin@project2.com',SYSDATE());

-- Issue Table Stuff  
CREATE TABLE issues(
    id INT unsigned NOT NULL auto_increment,
    title VARCHAR(50) NOT NULL,
    idescription TEXT NOT NULL,
    type VARCHAR(15) NOT NULL,
    priority VARCHAR(15) NOT NULL,
    status VARCHAR(15) NOT NULL,
    assigned_to INT NOT NULL,
    created_by INT NOT NULL,
    created DATETIME NOT NULL,
    updated DATETIME NOT NULL,
    PRIMARY KEY(id)
);

