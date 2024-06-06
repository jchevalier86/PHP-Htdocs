<?php
    @startuml

class Cartomancienne {
    - nom: string
    - specialisation: string
    + presenter(): string
}

class Page {
    - titre: string
    - contenu: string
}

class Consultation {
    - client: Utilisateur
    - commentaire: string
    - evaluation: int
}

class Utilisateur {
    - nom: string
    - email: string
}

class RendezVous {
    - date: string
    - motif: string
    - utilisateur: Utilisateur
}

class Tarif {
    - service: string
    - prix: float
}

class ArticleBlog {
    - titre: string
    - contenu: string
    - auteur: string
    - signe_astrologique: string
}

class Horoscope {
    - signe_astrologique: string
    - predictions: string
}

Cartomancienne "1" --> "*" Consultation
Utilisateur "1" --> "*" Consultation
Utilisateur "1" --> "*" RendezVous
Utilisateur "1" --> "*" ArticleBlog
Cartomancienne "1" --> "*" Tarif
ArticleBlog "1" --> "*" Horoscope
Page "1" --> "*" ArticleBlog

@enduml
?>