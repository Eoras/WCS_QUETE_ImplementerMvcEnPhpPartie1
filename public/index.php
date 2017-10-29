<?php

use MVC\Model\QuestManager;
use MVC\Model\Quest;

require '../connect.php';
require '../vendor/autoload.php';


$questsManager = new QuestManager();
$quests = $questsManager->getAllQuest();
?>
    <h1>Implémenter MVC en PHP : première partie</h1>
    <hr/>
    <h2>Affichage de toute la liste</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Course</th>
            <th>Score</th>
        </tr>
        <?php foreach ($quests as $quest) : ?>
            <tr>
                <td><?= $quest->getId() ?></td>
                <td><?= $quest->getName() ?? "" ?></td>
                <td><?= $quest->getCourse() ?? "" ?></td>
                <td><?= $quest->getScore() ?? "" ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

<?php
echo "<hr/><h2>Nouvelle Quest hydatée via le Manager</h2>";
$value = [
    "name" => "Quest Manager",
    "score" => 1,
    "course" => 2,
];
$questsManager2 = new QuestManager();
$newQuest1 = $questsManager2->hydrateAction($value);
var_dump($newQuest1);

echo "<hr/><h2>Nouvelle Quest hydatée automatiquement lors de la création</h2>";
$newQuest2 = new Quest([
    "name" => "Automatique",
    "score" => 3,
    "course" => 4,
]);

var_dump($newQuest2);
