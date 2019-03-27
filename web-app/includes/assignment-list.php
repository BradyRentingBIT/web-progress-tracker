<?php

include_once 'php/database.php';
include_once 'php/function-listener.php';
include_once 'php/query-listener.php';

/*
 * We define the query inside of the component because most are unique anyway
 * */

$statement = $pdo->prepare(getAssignmentData());
$statement->execute();

while ($row = $statement->fetch())
{
    /*
     * We assign the values for the task properties
     * */
    $levelId = $row['ID'];
    $level = $row['level'];
    $assignmentName = $row['assignment_name'];

    /*
     * We echo the HTML directly when required/included as a component
     * TODO: Find a better way to do this and keep logic and presentation separated
     * */
    echo '
        <tr>
            <th scope="row">
                ' . $level . '
            </th>
            <td>
                Goedgekeurd
            </td>
            <td>
                ' . $assignmentName . '
            </td>
            <td>

            </td>
        </tr>
        ';

}