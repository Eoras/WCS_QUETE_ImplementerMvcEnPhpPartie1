<?php
/**
 * Created by PhpStorm.
 * User: eoras
 * Date: 29/10/17
 * Time: 12:01
 */

namespace MVC\Model;

use MVC\Model\Quest;

class QuestManager extends Pdo
{

    public function getAllQuest()
    {
        $quests = $this->_dao->query("SELECT * FROM quest")
            ->fetchAll(\PDO::FETCH_CLASS, Quest::class);

        return $quests;
    }

    public function hydrateAction(array $values)
    {
        return $quest = new Quest($values);
    }

    public function getOneQuest($id)
    {
        // TODO
    }

    public function addQuest(Quest $quest)
    {
        // TODO
    }

    public function updateQuest(Quest $quest)
    {
        // TODO
    }

    public function deleteQuest(Quest $quest)
    {
        // TODO
    }

}