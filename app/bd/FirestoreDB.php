<?php
require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)->withServiceAccount(__DIR__.'/path/to/your/firebase-credentials.json');

$firebase = $factory->create();

$firestore = $firebase->getFirestore();
class FirestoreDB {
    private $db;

    public function __construct() {
        try {
            $config = [
                'projectId' => $_ENV['PROYECTID'],
                'keyFilePath' => $_ENV['KEYFILEPATH'],
            ];
            $this->db = new FirestoreClient($config);
        } catch (\Exception $e) {
            echo 'Error al inicializar Firestore Client: ' . $e->getMessage();
        }
    }

    public function addUser($data) {
        try {
            $collection = $this->db->collection('users');
            $documentReference = $collection->add($data);
            $documentId = $documentReference->id();
            echo "Documento agregado con ID: $documentId";
            return true;
        } catch (\Google\Cloud\Core\Exception\GoogleException $e) {
            // Capturar la excepción y manejar el error
            echo 'Error al agregar el documento: ' . $e->getMessage();
            return false;
        }
    }

    public function getUserLogin($username, $password) {
        $collection = $this->db->collection('users');

        $query = $collection->where('username', '=', $username)
                            ->where('password', '=', $password);
        $documents = $query->documents();

        foreach ($documents as $document) {
            $userData = $document->data();
            return $userData;
        }
        return null;
    }

    public function getUser($username) {
        $collection = $this->db->collection('users');

        $query = $collection->where('username', '=', $username);
        $documents = $query->documents();

        foreach ($documents as $document) {
            $userData = $document->data();
            return $userData;
        }
        return null;
    }

    public function getUsers() {
        $users = [];
        $collection = $this->db->collection('users');
        $documents = $collection->documents();
        foreach ($documents as $document) {
            $users[] = [
                'id' => $document->id(),
                'data' => $document->data()
            ];
        }

        return $users;
    }
}