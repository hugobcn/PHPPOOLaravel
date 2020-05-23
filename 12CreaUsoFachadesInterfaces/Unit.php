class Unit
{
    protected $hp = 40;
    protected $name;
    protected $weapon;
    protected $armor;
    protected $logger;
    
    //public function __construct($name, Weapon $weapon,$logger)
    public function __construct($name, Weapon $weapon)
    {
        $this->name = $name;
        $this->weapon = $weapon;
        $this->armor = new Armors\MissingArmor();
        //$this->logger = $logger;
    }





public function move($direction)
    {
        Log::info("{$this->name} camina hacia $direction");
        
    }
    
    public function takeDamage(Attack $attack)
    {
        $this->hp = $this->hp - $this->armor->absorbDamage($attack);

        Log::info("{$this->name} ahora tiene {$this->hp} puntos de vida");

        if ($this->hp <= 0) {
            $this->die();
        }
    }

    }

/*

public static function createSoldier($logger)
    {
        $soldier = new Unit('Ramm', new Weapons\BasicSword);
        $soldier->setArmor(new Armors\BronzeArmor());

        return $soldier;
    }



*/