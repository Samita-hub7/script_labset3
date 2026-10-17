<?php
// Show error if any
ini_set('display_errors', 1);
error_reporting(E_ALL);

header("Content-Type: application/json");

echo '[
  {
    "id": 1,
    "title": "Inception",
    "poster": "https://image.tmdb.org/t/p/w500/9gk7adHYeDvHkCSEqAvQNLV5Uge.jpg",
    "year": 2010,
    "genre": "Action, Sci-Fi, Thriller",
    "rating": 8.8,
    "director": "Christopher Nolan",
    "country": "USA",
    "language": "English",
    "actors": "Leonardo DiCaprio, Tom Hardy"
  },
  {
    "id": 2,
    "title": "The Dark Knight",
    "poster": "https://image.tmdb.org/t/p/w500/qJ2tW6WMUDux911r6m7haRef0WH.jpg",
    "year": 2008,
    "genre": "Action, Crime, Drama",
    "rating": 9.0,
    "director": "Christopher Nolan",
    "country": "USA",
    "language": "English",
    "actors": "Christian Bale, Heath Ledger"
  },
  {
    "id": 3,
    "title": "Forrest Gump",
    "poster": "https://image.tmdb.org/t/p/w500/arw2vcBveWOVZpxd9XTd1TdQa.jpg",
    "year": 1994,
    "genre": "Drama, Romance",
    "rating": 8.8,
    "director": "Robert Zemeckis",
    "country": "USA",
    "language": "English",
    "actors": "Tom Hanks, Robin Wright"
  }
]';
?>