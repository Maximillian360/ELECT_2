<?php

    abstract class AbstractShapes{
        abstract function SF();
        abstract function Vol();


    }

    class Cube extends AbstractShapes{
        public $length;

        /**
         * @param $length
         */
        public function __construct($length)
        {
            $this->length = $length;
        }
        public function SF(){
            return pow($this->length, 2);
        }
        public function Vol()
        {
            return 6 * pow($this->length, 2);
        }

    }

class Sphere extends AbstractShapes{
    public $radius;

    /**
     * @param $radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function SF(){
        return 4 * M_PI * pow($this->radius, 2);
    }
    public function Vol()
    {
        return (4/3) * M_PI * pow($this->radius, 3);
    }

}


