<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body>
	<?php
		$this->load->view('header');
		$this->load->view($content); // variavel $content vai ser uma string que indica a vista que queremos apresentar
		$this->load->view('footer');
	?>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>