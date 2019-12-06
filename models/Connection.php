<!-- Starting the connection with the data base...-->
<?php
class Connection {

    //I just declare some attributes that is gonna receive some database information.
    private $host = 'mysql:host=localhost;dbname=fakeinstagram;port=3306';
    private $user = 'root';
    private $pass = 'root';

    //Inside of the class I declare a protect function that is gonna return a new PDO with the database information:
    //Because I'm dealing with classes I need to use "$this" to reference the class when I call the arguments
    protected function createConnection(){
        return new PDO($this->host,$this->user,$this->pass);
    }

}
?>