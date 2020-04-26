<?php


class UserManager
{
    protected $listUser = [];
    protected $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function add($user)
    {
        $users = $this->getDataJson();

        $data = [
            "name" => $user->getName(),
            "email" => $user->getEmail(),
            "phone" => $user->getPhone(),
            "password" => $user->getPassword()
        ];

        array_push($users, $data);
        $this->saveDataToFile($users);
    }

    public function getDataJson()
    {
        $dataJson = file_get_contents($this->filePath);
        return json_decode($dataJson);
    }

    public function saveDataToFile($data)
    {
        $dataJson = json_encode($data);
        file_put_contents($this->filePath, $dataJson);
    }

    public function getListUser()
    {
        $data = $this->getDataJson();
        foreach ($data as $obj) {
            $user = new User($obj->name, $obj->email, $obj->phone, $obj->password);
            array_push($this->listUser, $user);
        }
        return $this->listUser;
    }

    public function getStudentByIndex($index)
    {
        $data = $this->getDataJson();
        return new User($data[$index]->name, $data[$index]->email, $data[$index]->phone,
        $data[$index]->password);
    }

    public function updateInfoUser($index, $newInfo)
    {
        $data = $this->getDataJson();
        $user = [
            "name" => $newInfo->getName(),
            "email" => $newInfo->getEmail(),
            "phone" => $newInfo->getPhone(),
            "password" => $newInfo->getPassword()
        ];
        $data[$index]= $user;
        $this->saveDataToFile($data);
    }

    public function deleteUser(int $index)
    {
        $data = $this->getDataJson();
        array_splice($data,$index,1,null);
        $this->saveDataToFile($data);
    }
}