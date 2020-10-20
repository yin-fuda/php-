<?php
// 职员类
class staff{
	public $name;
	protected $salary;//定义属性的权限为受保护的，该属性只能在本类及子类中访问，
	
	function __construct($name,$salary)
	{
		$this->name = $name;
		$this->salary = $salary;
	}
}
 
// 工程师类
class engineer extends staff{
	//获取工资
	public function getSalary()
	{
		return $this->salary;
	}
}

 // 实例化工程师类
$p1 = new engineer("张三",8000);
echo $p1->name.":";
echo $p1->getSalary()."<br>";
	
// 项目经理类
class manager extends staff{
	const PERF = 0.2;//定义类常量,设置提成比例为20%
	
	public function getSalary()
	{
		return $this->salary+$this->salary*self::PERF;//项目经理的工资，增加20%的提成
	}
}

// 实例化项目经理类
$p2 = new manager("李四",10000);
echo $p2->name.":";
echo $p2->getSalary();