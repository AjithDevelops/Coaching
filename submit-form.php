<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $exp = $_POST['exp'];
  $languages = implode(', ', $_POST['languages']);
  $message = $_POST['message'];

  $data = "Name: $name\nEmail: $email\nPhone: $phone\nExperience: $exp\nLanguages: $languages\nMessage: $message\n";

  // open the file for writing
  $file = fopen("data.txt", "w") or die("Unable to open file!");
  fwrite($file, $data);
  fclose($file);

  echo "Data updated successfully!";
}
?>
