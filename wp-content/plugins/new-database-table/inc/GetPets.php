<?php 

class GetPets {
  function __construct() {
    global $wpdb;
    $tablename = $wpdb->prefix . 'pets';

    $this->args = $this->getArgs();
    $this->placeholders = $this->createPlaceholders();

    $query = "SELECT * FROM $tablename ";
    $countQuery = "SELECT COUNT(*) FROM $tablename ";
    $query .= $this->createWhereText();
    $countQuery .= $this->createWhereText();
    $query .= " LIMIT 100";

    $this->count = $wpdb->get_var($wpdb->prepare($countQuery, $this->placeholders));
    $this->pets = $wpdb->get_results($wpdb->prepare($query, $this->placeholders));
  }

  function getArgs() {
    $temp = [];

    if (isset($_GET['favcolor'])) $temp['favcolor'] = sanitize_text_field($_GET['favcolor']);
    if (isset($_GET['species'])) $temp['species'] = sanitize_text_field($_GET['species']);
    if (isset($_GET['minyear'])) $temp['minyear'] = sanitize_text_field($_GET['minyear']);
    if (isset($_GET['maxyear'])) $temp['maxyear'] = sanitize_text_field($_GET['maxyear']);
    if (isset($_GET['minweight'])) $temp['minweight'] = sanitize_text_field($_GET['minweight']);
    if (isset($_GET['maxweight'])) $temp['maxweight'] = sanitize_text_field($_GET['maxweight']);
    if (isset($_GET['favhobby'])) $temp['favhobby'] = sanitize_text_field($_GET['favhobby']);
    if (isset($_GET['favfood'])) $temp['favfood'] = sanitize_text_field($_GET['favfood']);

    return $temp;

  }

  function createPlaceholders() {
    return array_map(function($x) {
      return $x;
    }, $this->args);
  }

  function createWhereText() {
    $whereQuery = "";

    if (count($this->args)) {
      $whereQuery = "WHERE ";
    }

    $currentPosition = 0;
    foreach($this->args as $index => $item) {
      $whereQuery .= $this->specificQuery($index);
      if ($currentPosition != count($this->args) - 1) {
        $whereQuery .= " AND ";
      }
      $currentPosition++;
    }

    return $whereQuery;
  }

  function specificQuery($index) {
    switch ($index) {
      case "minweight":
        return "petweight >= %d";
      case "maxweight":
        return "petweight <= %d";
      case "minyear":
        return "birthyear >= %d";
      case "maxyear":
        return "birthyear <= %d";
      default:
        return $index . " = %s";
    }
  }

}