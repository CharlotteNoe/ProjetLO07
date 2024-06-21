<?php

function creerTable($headers, $data) {
        echo '<table class="mt-4 table table-warning table-striped table-bordered">';
        echo '<thead>';
        echo '<tr>';
        
        // Render headers
        foreach ($headers as $header) {
            echo "<th scope=\"col\">$header</th>";
        }
        
        echo '</tr>';
        echo '</thead>';
        echo '<tbody class="table-group-divider">';
        
        // Render data
        foreach ($data as $row) {
            echo '<tr>';
            foreach ($row as $cell) {
                echo "<td>$cell</td>";
            }
            echo '</tr>';
        }
        
        echo '</tbody>';
        echo '</table>';
    }

