<?php
    class Db {
        public static function connecter() { 
            try {
                return new PDO('mysql:dbname=oncf;host=localhost','root','');
            }catch(PDOException $e) {
                return null;
            }
        }
        public static function villesDepart($pdo){
            $query        = $pdo->query("SELECT DISTINCT(villeDepart) FROM Voyage");
            $villesDepart = $query->fetchAll(PDO::FETCH_ASSOC);
            return $villesDepart;
        }
        public static function villesArrivee($pdo){
            $query   = $pdo->query("SELECT DISTINCT(villeArrivee) FROM Voyage");
            $villesArrivee = $query->fetchAll(PDO::FETCH_ASSOC);
            return $villesArrivee;
        }
        public static function chercherVoyages($pdo,$villesDepart,$villesArrivee){
            $query   = 
            $pdo->query("SELECT * FROM Voyage WHERE villeDepart = '$villesDepart' AND villeArrivee = '$villesArrivee'");
            $voyages = $query->fetchAll(PDO::FETCH_ASSOC);
            return $voyages;
        }
        public static function chercherVoyage($pdo,$codeVoyage){
            $query   = 
            $pdo->query("SELECT * FROM Voyage WHERE codeVoyage = '$codeVoyage'");
            $voyage = $query->fetchAll(PDO::FETCH_ASSOC);
            return $voyage;
        }
    }
