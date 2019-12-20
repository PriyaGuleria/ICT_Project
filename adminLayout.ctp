<?php
    echo $this->element('adheader');
    echo $this->element('adnav');
    echo $this->fetch('content');
    echo $this->element('adfooter');
?>