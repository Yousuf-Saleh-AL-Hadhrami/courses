<?php 

class Math {

    public $numbers = [];
    public $sum;
    public $avg;
    public $max;
    public $min;

    public function setNumbers($nums){

        $this->numbers = $nums;

        return $this;
          
    }

    public function addNumbersToArray($nums){

        if(is_array($nums)) {

        $this->numbers = array_merge($this->numbers, $nums);

        } else {

        array_push($this->numbers , $nums);

        }

        return $this;

    }

    public function removeNumber($index){

        unset($this->numbers[$index]);

        return $this;
    }

    public function getSum() {

        foreach($this->numbers as $number) {

            $this->sum += $number;
        }

        return $this->sum;
    }

    public function getMax() {
 
        $this->max = $this->numbers[0];

        for($i = 0 ; $i < count($this->numbers); $i++ ) {

            if($this->numbers[$i] > $this->max ){

                $this->max = $this->numbers[$i];
            }

        }

        return $this->max;
    }

    public function getMin() {
 
        $this->min = $this->numbers[0];

        for($i = 0 ; $i < count($this->numbers); $i++ ) {

            if($this->numbers[$i] < $this->min ){

                $this->min = $this->numbers[$i];
            }

        }

        return $this->min;
    }
}

$operation1 = new Math();

echo $operation1->setNumbers([2,4,9,15,6,7,7])
                 ->addNumbersToArray([5,5,18,1.5])
                 ->getMin();