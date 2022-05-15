<?php

// PRIME CATEGORY
function getPrimeCategory()
{
  global $dbc;
  $sql = "SELECT * FROM prime_category ORDER BY prime_id DESC";
  $result = mysqli_query($dbc, $sql);
  return $result;
}

function getPrimeCategory_by_id($id)
{
  global $dbc;
  $query = "SELECT * FROM prime_category WHERE prime_id='" . $id . "'";
  $result = mysqli_query($dbc, $query);
  confirm_result_set($result);
  $prime_item = mysqli_fetch_assoc($result);
  mysqli_free_result($result);
  return $prime_item;
}

function insertPrimeCategory($prime_name)
{
  global $dbc;

  $query = "INSERT INTO prime_category (prime_name) VALUES('$prime_name')";
  $result = mysqli_query($dbc, $query);

  if ($result) {
    return true;
  } else {
    // INSERT failed
    echo mysqli_error($dbc);
    db_disconnect($dbc);
    exit;
  }
}

function updatePrimeCategory($prime_item)
{

  global $dbc;
  $query = "UPDATE prime_category SET ";
  $query .= "prime_name='" . $prime_item['prime_name'] . "' ";
  $query .= "WHERE prime_id='" . $prime_item['prime_id'] . "'";
  $query .= "LIMIT 1";

  $result = mysqli_query($dbc, $query);
  // For UPDATE statements, $result is true/false
  if ($result) {
    return true;
  } else {
    // UPDATE failed
    echo mysqli_error($dbc);
    db_disconnect($dbc);
    exit;
  }
}

function deletePrimeCategory($id)
{

  global $dbc;
  $query = "DELETE FROM prime_category WHERE prime_id = $id LIMIT 1";
  $result = mysqli_query($dbc, $query);
  if (!$result) {
    echo mysqli_error($dbc);
    db_disconnect($dbc);
  }
}

// MAIN CATEGORY
function getMainCategory()
{
  global $dbc;
  $sql = "SELECT * FROM main_category ORDER BY main_cat_id DESC";
  $result = mysqli_query($dbc, $sql);
  return $result;
}

function getMainCategory_by_id($id)
{
  global $dbc;
  $query = "SELECT * FROM main_category WHERE main_cat_id='" . $id . "'";
  $result = mysqli_query($dbc, $query);
  confirm_result_set($result);
  $main_item = mysqli_fetch_assoc($result);
  mysqli_free_result($result);
  return $main_item;
}

function insertMainCategory($main_cat_name, $prime_id)
{
  global $dbc;

  $query = "INSERT INTO main_category (main_cat_name, prime_cat_id) VALUES('$main_cat_name', '$prime_id')";
  $result = mysqli_query($dbc, $query);
  if ($result) {
    return true;
  } else {
    // INSERT failed
    echo mysqli_error($dbc);
    db_disconnect($dbc);
    exit;
  }
}

function deleteMainCategory($id)
{

  global $dbc;
  $query = "DELETE FROM main_category WHERE main_cat_id = $id LIMIT 1";
  $result = mysqli_query($dbc, $query);
  if (!$result) {
    echo mysqli_error($dbc);
    db_disconnect($dbc);
  }
}

// SUB CATEGORY
function getSubCategory()
{
  global $dbc;
  $query = "SELECT * FROM sub_category ORDER BY sub_cat_id DESC";
  $result = mysqli_query($dbc, $query);
  return $result;
}

function getSubCategory_by_id($id)
{
  global $dbc;
  $query = "SELECT * FROM main_category WHERE sub_cat_id='" . $id . "'";
  $result = mysqli_query($dbc, $query);
  confirm_result_set($result);
  $main_item = mysqli_fetch_assoc($result);
  mysqli_free_result($result);
  return $main_item;
}

function insertSubCategory($sub_cat_name, $main_cat_id)
{
  global $dbc;

  $query = "INSERT INTO sub_category (sub_cat_name, main_cat_id) VALUES('$sub_cat_name', '$main_cat_id')";
  $result = mysqli_query($dbc, $query);
  if ($result) {
    return true;
  } else {
    // INSERT failed
    echo mysqli_error($dbc);
    db_disconnect($dbc);
    exit;
  }
}