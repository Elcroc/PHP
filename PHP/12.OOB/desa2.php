<?php
class Task
{
    public $title;
    public $description;
    public $completed;
    public function markAsCompleted()
    {
        $this->completed = 1;
    }
    public function markAsIncomplete()
    {
        $this->completed = 0;
    }
    public function getTitle()
    {
      
    }
    public function getDescription()
    {
         $x =  $this->description;
        return $x ;
    }
    public function isCompleted()
    {
        if ($this->completed == 1) {

            return true;
        } else {

            return false;

        }
    }
}
$tar = new Task;
$tar->title = "Comer";
$tar->description = "Lasanha almoço";
$tar->markAsIncomplete();
echo $tar->getTitle();
echo $tar->getDescription();
echo $tar->isCompleted();