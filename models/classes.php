<?php
    class Movie {
        public string $og_title;
        public string $director;
        public string $og_language;
        public int $release_year;
        public array $genre;
        public int $runtime_min;
        public array $actors;
        public string $plot;
        public string $poster;
        public float $rating;
        public static string $aspect_ratio = "16:9";
    
        function __construct
        (
            string $og_title,
            string $director,
            string $og_language,
            int $release_year,
            array $genre,
            int $runtime_min,
            array $actors,
            string $plot,
            string $poster,
            float $rating
        )
        {
            $this->og_title = $og_title;
            $this->director = $director;
            $this->og_language = $og_language;
            $this->release_year = $release_year;
            $this->genre = $genre;
            $this->runtime_min = $runtime_min;
            $this->actors = $actors;
            $this->plot = $plot;
            $this->poster = $poster;
            $this->rating = $rating;

        }
    
        public function getMovieLength() {
            if ($this->runtime_min >= 120) {
                return "Long runtime";
            } elseif ($this->runtime_min > 90 && $this->runtime_min < 120) {
                return "Medium runtime";
            } else {
                return "Short runtime";
            }
        }
    }
?>