<?php 
    
    // Note :: Interface can't inclue body
    // Modifier must be public in interface, cu we need to override
    // A class must use the implement keyword
    interface article{
        public function createarticle();
        public function readarticle($id);
        public function updatearticle($id,$title);
        public function deletearticle($id);
    }

class myinterface implements article
{

    public function setid(){
        echo "New id has been created";
    }

    public function createarticle(){
        echo "Article has be created <br/>";
    }
    public function readarticle($id){
        echo "Here are article. ID is $id<br/>";
    }
    public function updatearticle($id, $title){
        echo "Aticle has bean Updated. ID is $id .Title is $title<br/>";
    }
    public function deletearticle($id){
        echo "Article has bean Deleted. ID is $id .";
    }
}

echo "This is Interface <br/>";
$obj = new myinterface();


$obj->setid();
$obj->createarticle();
$obj->readarticle(2);
$obj->updatearticle(1,"Japan to Myanmar");
$obj->deletearticle(2);

echo "<hr/>";

?>