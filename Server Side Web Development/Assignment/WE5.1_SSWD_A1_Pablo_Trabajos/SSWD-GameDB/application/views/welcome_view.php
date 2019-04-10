<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SSWD Assignment</title>
</head>
<body>

<div>
	<h1>SSWD Assignment</h1>

	<div>
		<p>The DB sets <code>user_id</code> as unique an auto incremented.</p>
    <p>There are two endpoints to the API:</p>
    <ul>
      <li><code>index.php/users/</code>: Serves the whole list of users</li>
      <li><code>index.php/users/$id</code>: Serves info of user with <code>user_id==$id</code></li>
    </ul>
		<p>The data structure is based on a workshop exercise and could be plugged together. The frontend side plays the game and saves the results.</p>
    <p>Use file <code>GameDB.sql</code> for a DB definition.</p>
	</div>

	<small>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></small>
</div>

</body>
</html>
