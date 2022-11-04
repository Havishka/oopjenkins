e  , <?php 

class Employee{
    private $basicSalary = 50000;

//getter function
    public function get_basic_salary(){
        return 'Basic salary is' . $this->basicSalary . '<br>';
    }
//setter function
   public function set_salary($new_salary){
        $this->basicSalary = $new_salary;
    }
}

class FulltimeEmpoyee extends Employee{

}


$emplyee_1 = new FulltimeEmpoyee;

$emplyee_1->basicSalary = 10000;

echo $emplyee_1->basicSalary;

echo '<br>';

echo $emplyee_1->get_basic_salary();// Getter method

echo '<br>';

$emplyee_1->set_salary(150000);//setter method
echo $emplyee_1->get_basic_salary();
?>