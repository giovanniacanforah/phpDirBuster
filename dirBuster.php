class dirBuster {
    public function Buster($dir = __DIR__.'/') {
        foreach (scandir($dir) as $element) {
            $finaldir = $dir.$element;
            if(!in_array($element, ['.', '..'])){
                if (is_dir($finaldir)) {
                    echo $finaldir.PHP_EOL;
                    $this->Buster($finaldir.'/');
                }else{
                    echo $finaldir.PHP_EOL;
                }
            }
        }
    }
}
