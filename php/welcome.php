<html>

<body>
    <?php
    class Student
    {
        var $name;
        public $age;
        function __construct()
        {
            $this->name = "ddd";
            $this->age = 0;
        }
        function getName()
        {
            return $this->name;
        }
    }

    $student = new Student();
    echo $student->getName().PHP_EOL;


    function add($student)
    {
        $student->age += 5;
        return $student;
    }
    echo add($student)->age.PHP_EOL;
    function opt($a, $b)
    {
        return $a + $b;
    }
    echo opt(3,4).PHP_EOL;

    file_put_contents("sites.txt","Runoob");
    
    ?>
</body>

</html>