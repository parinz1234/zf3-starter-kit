<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TestController extends AbstractActionController
{
    public function firstAction() 
    {
        $input = [3, 5, 9, 15];
        $question = implode(', ', $input).', X';
        $length = count($input);
        $result = $this->firstAssignment($input);
        return new ViewModel([
            'question' => $question,
            'result' => $result
        ]);
    }

    public function secondAction() 
    {
        $a = 24;
        $b = 10;
        $c = 2;
        $d = 99;
        $question = '(Y + '.$a.')+('.$b.' × '.$c.') = '.$d;
        $result = $this->secondAssignment($a, $b, $c, $d);
        return new ViewModel([
            'question' => $question,
            'result' => $result
        ]);
    }

    public function thirdAction() 
    {
        $question = 'If 1 = 5 , 2 = 25 , 3 = 325 , 4 = 4325 Then 5 = X';
        $result = $this->thirdAssignment(5);
        return new ViewModel([
            'question' => $question,
            'result' => $result
        ]);
    }

    private function firstAssignment ($input)
    {
        $length = count($input);
        $result = $input[$length - 1] + (2 * $length);
        return $result;
    }

    private function secondAssignment ($a, $b, $c, $d) {
        $y = $d - $a - ($b * $c);
        return $y;
    }

    private function thirdAssignment ($input) {
        $result = '';
        for ($i = $input; $i > 0 ; $i--) {
            $result = $result.$i;
        }
        $result = str_replace('1', '5', $result);
        return $result;
    }

}