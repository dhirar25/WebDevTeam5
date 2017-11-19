<?php

  require_once('./initialize.php');

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // this is a POST request and thus a form submission: process the form data

    /* to be completed:
       1) retrieve the question based on the form data
       2) disconnect from the database
    */
  
    $q = retrieve_question(idquestion);
    $check = NULL;
    for each($q as $question) {
   $q['ID'] = $question['ID'];
   $q['description'] = $question['description'];
   $q['points'] = $question['points'];
   $check = $question['ID'];

    }
    if( $check ===NULL){
      $q['ID'] = NULL;
      $q['description'] =NULL;
      $q['points'] = NULL;
    }
    global$db;
    if(isset($db)){

    $db = null;
    }
    

  } else {
    // this is a GET request: no form data to process

    /* to be completed:
       null out the question to be used below
    */
    $_POST['ID'] =NULL;
    $q['ID'] =NULL;
    $q['description'] =NULL;
    $q['points'] =NULL;
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Lab 8 Question Display</title>
</head>
<body>

  <div id="content">
    <h1>Details for question Q<?php echo $_POST['ID'] ?></h1>

    ID: <input type="text" name="ID" value="<?php echo $q['ID'] ?>"
         readonly="readonly" /><br />

    Description:
    <input type="text" name="desc" size="60"
          value="<?php echo $q['description'] ?>"
          readonly="readonly"/><br />

    Points: <input type="text" name="points" size="3"
    value="<?php echo $q['points'] ?>"
    readonly="readonly"/><br />

  </div>

</body>
</html>
