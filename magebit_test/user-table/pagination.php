<?php
echo "<ul class='pagination'>";

//button for 1st page
if ($page>1) {
    echo "<li><a href='{$page_url}' title='Go to the 1st page'>";
        echo "First";
    echo "</a></li>";
}

//calculate total pages