<?php 
    
    // Note :: Interface can't inclue body
    // Modifier must be public in interface, cu we need to override
    // A class must use the implement keyword
    interface post{
        public function setid($id);
        public function create();
        public function read($id);
        public function update($id,$title);
        public function delete();
    }

class myinterfacewithproperties implements post
{
    private $id,$title;
    public function setid($id){
        $this->id =  $id;
    }

    public function create(){
        echo "I am creat article. <br/>";
    }
    public function read($id){
        $this->id =  $id;
        echo "I am read article. ID is $this->id <br/>";
    }
    public function update($id,$title){
        $this->id = $id;
        $this->title = $title;

        echo "I am read article. ID is  $this->id .Title is $this->title <br/>";
    }

    public function delete(){
        echo "I am delete article. ID is $this->id <br/>";
    }


}

echo "This is Interface with properties <br/>";
$obj = new myinterfacewithproperties();

$obj->setid(50);
$obj->create();
$obj->read(50);
$obj->update(13,"I become a millionor.");
$obj->delete();


echo "<hr/>";

?>