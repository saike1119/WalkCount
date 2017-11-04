<?php

class WalkCount
{
    public $start = 10;
    public $goal = 100;
    public $move = 2;
    public $count = 0;
    public $name = 'さんの';

    /**
     * @param int $start
     * @param int $goal
     * @param int $move
     * @param int $count
     * @return array
     */
    static public function walk($start, $goal, $move, $count)
    {
        while ($start < $goal) {
            $start += $move;
            $count++;
        }
        $result = array(
            "合計" => $count,
            "歩数" => $start
        );
        return $result;

    }

    public function setName($name)
    {
        if (is_string($name)) {
            $result = printf($name . $this->name);
            return $result;
        } else {
            return "入ってないよ!";
        }
    }

}

$const = new WalkCount();
$ww = $const->walk($const->start, $const->goal, $const->move, $const->count);
echo $const->setName(1) . "歩いた合計は" . $ww{'合計'};var_dump('');
echo $const->setName('') . "歩いた合計は" . $ww{'合計'};
echo $const->setName('田中') . "歩いた歩数は" . $ww{'歩数'};
foreach ($ww as $value){
echo "valueは".$value;
};