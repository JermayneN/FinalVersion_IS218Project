<?php
class todolist {

    private $id;
    private $title;
    private $isCompleted;
    private $userId;
    private $userEmail;
    private $dueDate;
    private $MadeDate;
 
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function isCompleted() {
        return $this->isCompleted;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getEmail() {
        return $this->userEmail;
    }

    public function getMadeDate() {
        return $this->MadeDate;
    }

    public function getDue() {
        return $this->due;
    }

    //Setters
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function setCompleted($isCompleted) {
        $this->isCompleted = $isCompleted;
        return $this;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
        return $this;
    }

    public function setUserEmail($userEmail) {
        $this->userEmail = $userEmail;
        return $this;
    }

    public function setMadeDate($MadeDate) {
        $this->MadeDate = $MadeDate;
        return $this;
    }

    public function setDate($due) {
        $this->due = $due;
        return $this;
    }

    public function create() {
        $db = new Database();
        $query = "INSERT INTO todos (owneremail, ownerid, createddate, due, message, isdone) VALUES ('$this->userEmail', $this->userId, NOW(), '$this->due', '$this->title', $this->isCompleted)";
        $result = $db->query($query);
        return ['success' => true, 'msg' => 'Your task is saved.'];
    }

    public static function edit($id, $title, $due) {
        $db = new Database();
        $query = "UPDATE todos SET message = '$title', duedate = '$due_date' WHERE id = $id";
        $db->query($query);
        return ['success' => true, 'msg' => 'Your task has been edited.'];
    }

    public static function getTaskByUserId($id) {
        $db = new Database();
        $query = "SELECT * FROM todos WHERE ownerid = '$id' ORDER BY duedate";
        $todos = $db->query($query);
        return $todos;
    }

    public static function deleteTaskById($id) {
        $db = new Database();
        $query = "DELETE FROM todos WHERE id = $id";
        $db->query($query);
        return ['success' => true, 'msg' => 'You task has been deleted.'];
    }
}
?>