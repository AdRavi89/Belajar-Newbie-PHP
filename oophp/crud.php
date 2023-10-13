<?php
class User {
    private $id;
    private $name;
    private $email;
    public function __construct($id, $name, $email) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
}
class UserController {
    public function index() {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }
    public function create() {
        return view('users.create');
    }
    public function store() {
        $user = new User($_POST['id'], $_POST['name'], $_POST['email']);
        $user->save();
        return redirect('/users');
    }
    public function show($id) {
        $user = User::find($id);
        return view('users.show', ['user' => $user]);
    }
    public function edit($id) {
        $user = User::find($id);
        return view('users.edit', ['user' => $user]);
    }
    public function update($id) {
        $user = User::find($id);
        $user->setName($_POST['name']);
        $user->setEmail($_POST['email']);
        $user->save();
       return redirect('/users');
    }
    public function destroy($id) {
        $user = User::find($id);
        $user->delete();
        return redirect('/users');
    }
}