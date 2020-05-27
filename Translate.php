<?php
// credit to github.com/iqbalsafei
class Translate {
    private $servername = '';
    private $username = '';
    private $password = '';
    private $dbname = '';
    private $conn = '';
    public function set_db_config($sname, $username, $password, $dbname){
        $this->servername = $sname;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        return $this;
    }

    public function db_connect(){
        // Check connection
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $this;
    }

    public function get_vocabs_like($word){
        $result = mysqli_query($this->conn, "SELECT * FROM vocab WHERE sunda LIKE '%$word%'");
        $res = [];
        while($data = mysqli_fetch_assoc($result)){
            $res[] = $data;
        }
        return $res;
    }

    public function get_vocab_equal($word){
        $result = mysqli_query($this->conn, "SELECT * FROM vocab WHERE sunda='$word'");
        $data = mysqli_fetch_assoc($result);
        return $data;
    }

    public function count_vocabs(){
        return mysqli_fetch_assoc(mysqli_query($this->conn, 'SELECT COUNT(*) AS jml FROM vocab'));
    }

    public function get_vocabs($args = ''){
        $result = mysqli_query($this->conn, "SELECT * FROM vocab " . $args);
        $res = [];
        while($data = mysqli_fetch_assoc($result)){
            $res[] = $data;
        }
        return $res;
    }

    public function get_vocab_byId($id){
        return mysqli_fetch_assoc(mysqli_query($this->conn, 'SELECT * FROM vocab WHERE id_vocab='. $id));
    }

    public function update_vocab($sunda, $indo, $id){
        $result = mysqli_query($this->conn, "UPDATE vocab SET sunda='$sunda', indo='$indo' WHERE id_vocab=".$id);
        if(mysqli_affected_rows($this->conn) > 0){
            $this->alert_with_redirect('data berhasil di update', 'data.php');
        } else {
            $this->alert_with_redirect('data gagal di update', 'data.php');

        }
    }

    public function create_vocab($sunda, $indo){
        $result = mysqli_query($this->conn, "INSERT INTO vocab VALUES('','$sunda','$indo')");
        if(mysqli_affected_rows($this->conn) > 0){
            $this->alert('penambahan data berhasil');
        } else {
            $this->alert('penambahan data gagal');
        }
    }

    public function delete_vocab_byId($id){
        mysqli_query($this->conn, 'DELETE FROM vocab WHERE id_vocab='. $id);
        if(mysqli_affected_rows($this->conn) > 0){
            $this->alert_with_redirect('delete data berhasil', 'data.php');
        } else {
            $this->alert_with_redirect('delete data gagal', 'data.php');
        }
    }

    private function alert($message){
        echo "<script>alert('$message')</script>";
    }

    private function alert_with_redirect($message, $path){
        echo "<script>alert('$message')
        window.location.href = '$path'</script>";
    }
}