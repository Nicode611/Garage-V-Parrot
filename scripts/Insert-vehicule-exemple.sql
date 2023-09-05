
-- Insert new vehicule
INSERT INTO `vehicules` (`id`, `modele`, `année`, `kilométrage`, `prix`, `description`, `image`) VALUES (NULL, 'Skoda Fabia', '2015', '150000', '6700', 'Skoda Fabia de 2015 en tres bon état', 'https://zebi/zebi.com');


-- Insert new user
INSERT INTO `users` (`id`, `prénom`, `nom`, `email`, `mdp`, `telephone`, `code_employé`) VALUES (NULL, 'Nicolas', 'Guigay', 'nicolas.guigay@gmail.com', 'Nicolas6789?', '0658741255', '78451');

-- Insert new service
INSERT INTO `services` (`id`, `image`, `nom`, `description`) VALUES (NULL, 'https://servzebi/zebi.com', 'Réparation de pare brise', 'On répare les pare brises ');

-- Insert new avis
INSERT INTO `avis` (`id`, `avis`, `nom`) VALUES (NULL, 'Trop sympa a l\'accueil ', 'Mathieu nougaré');