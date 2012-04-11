<?php
interface Image {
    function displayImage();
}
  
class RealImage implements Image {
    private $filename;
 
    public function __construct($_filename) { 
        $this->filename = $_filename;
        $this->loadImageFromDisk();
    }
 
    private function loadImageFromDisk() {
        echo"Loading   ".$this->filename;
    }
 
    public function displayImage() { 
        echo "Displaying ".$this->filename; 
    }
 
}
 
class ProxyImage implements Image {
    private $filename;
    private $realImage;
 
    public function __construct($_filename) { 
        $this->filename = $_filename; 
    }
 
    public function displayImage() {
        if ($this->realImage == null) {
           $this->realImage = new RealImage($this->filename);
        } 
        $this->realImage->displayImage();
    }
}
 ?>