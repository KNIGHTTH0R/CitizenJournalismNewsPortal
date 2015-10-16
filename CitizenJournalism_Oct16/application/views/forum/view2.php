<?php
echo "<div>Category :".$category."</div>";
echo "<h1>".$forum_item['fpost']."</h1>";
echo "By --" .$this->session->userdata('fname')." ".$this->session->userdata('mname')." ".$this->session->userdata('lname');
echo "<div> ".$forum_item['time']."  ".$forum_item['date']."</div>";
echo "<br/> <br/>"
?>
